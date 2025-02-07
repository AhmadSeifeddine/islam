/*=============================================================================
 * Book Management Module
 *
 * This module handles all book-related operations in the dashboard including:
 * - CRUD operations through DataTable
 * - Modal interactions
 * - Event handling
 * - API communications
 *============================================================================*/

import { HttpRequest } from '../../core/global/services/httpRequest.js';
import { DASHBOARD_URL } from '../../core/global/config/app-config.js';
import { SweetAlert } from '../../core/global/notifications/sweetAlert.js';
import { $DatatableController } from '../../core/global/advanced/advanced.js';
import { ModalLoader } from '../../core/global/advanced/advanced.js';
import { initSelect2 } from '../../core/global/utils/functions.js';

/*---------------------------------------------------------------------------
 * Utility Functions
 * @function defaultErrorHandler - Global error handler for consistency
 * @function reloadDataTable - Refreshes the DataTable after operations
 * @function buildApiUrl - Constructs API endpoints for book operations
 *--------------------------------------------------------------------------*/
const defaultErrorHandler = (err) => console.error('Error:', err);
const reloadDataTable = () => bookTable.reload();
const buildApiUrl = (path) => `${DASHBOARD_URL}/books/${path}`;

/*---------------------------------------------------------------------------
 * Modal Configuration Factory
 * Creates consistent modal configurations with error handling
 * @param {Object} config - Modal configuration options
 * @returns {ModalLoader} Configured modal instance
 *--------------------------------------------------------------------------*/
const createModalLoader = (config) => new ModalLoader({
    modalBodySelector: config.modalBodySelector || '.modal-body',
    endpoint: config.endpoint,
    triggerSelector: config.triggerSelector,
    onSuccess: config.onSuccess,
    onError: config.onError || defaultErrorHandler
});

const downloadPdf = (row) => {
    const pdfFile = row.media.find(file => file.mime_type === 'application/pdf');

    if (pdfFile && pdfFile.original_url) {
        const link = document.createElement('a');
        link.href = pdfFile.original_url;
        link.target = '_blank';
        link.download = `${row.name}.pdf`;

        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    } else {
        SweetAlert.error('No PDF file available for download');
    }
}



/*=============================================================================
 * API Operation Handlers
 * Manages all HTTP requests with consistent error handling and response processing
 * Each method follows a similar pattern:
 * 1. Executes the request
 * 2. Handles success callback
 * 3. Manages errors through defaultErrorHandler
 *============================================================================*/
const apiOperations = {
    _DELETE_: async (endpoint, onSuccess) => {
        try {
            const confirmDelete = await SweetAlert.deleteAction();
            if (confirmDelete) {
                const response = await HttpRequest.del(endpoint);
                onSuccess(response);
            }
        } catch (error) {
            defaultErrorHandler(error);
        }
    },

    _SHOW_: async (id, endpoint) => {
        createModalLoader({
            modalBodySelector: '#show-modal .modal-body',
            endpoint,
            onError: defaultErrorHandler
        });
    },

    _EDIT_: async (id, endpoint, onSuccess) => {
        createModalLoader({
            modalBodySelector: '#edit-modal .modal-body',
            endpoint,
            onSuccess,
            onError: defaultErrorHandler
        });
    },

    _POST_: async (endpoint, onSuccess) => {
        try {
            const response = await HttpRequest.post(endpoint);
            onSuccess(response);
        } catch (error) {
            defaultErrorHandler(error);
        }
    },

    _PATCH_: async (endpoint, onSuccess) => {
        try {
            const response = await HttpRequest.patch(endpoint);
            onSuccess(response);
        } catch (error) {
            defaultErrorHandler(error);
        }
    },

    _GET_: async (endpoint, onSuccess) => {
        try {
            const response = await HttpRequest.get(endpoint);
            onSuccess(response);
        } catch (error) {
            defaultErrorHandler(error);
        }
    },

    _PUT_: async (endpoint, onSuccess) => {
        try {
            const response = await HttpRequest.put(endpoint);
            onSuccess(response);
        } catch (error) {
            defaultErrorHandler(error);
        }
    },
};

/*=============================================================================
 * User Interface Event Handlers
 * Manages user interactions and connects them to appropriate API operations
 * Each handler:
 * 1. Receives user input
 * 2. Calls appropriate API operation
 * 3. Handles the response (success/error)
 *============================================================================*/
const userActionHandlers = {
    delete: function (id) {
        this.callCustomFunction('_DELETE_', buildApiUrl(id), (response) => {
            response.risk ? SweetAlert.error() : (SweetAlert.deleteSuccess(), reloadDataTable());
        });
    },

    show: function (id) {
        this.callCustomFunction('_SHOW_', id, buildApiUrl(`${id}/show`));
    },

    edit: function (id) {
        this.callCustomFunction('_EDIT_', id, buildApiUrl(`${id}/edit`), (response) => {
            initSelect2("#scholar_select", "#edit-modal");
            initSelect2("#category_select", "#edit-modal");
            initSelect2("#language_select", "#edit-modal");
            initSelect2("#genre_select", "#edit-modal");
        });
    },

    status: function (id) {
        this.callCustomFunction('_PATCH_', buildApiUrl(`${id}/status`), (response) => {
            console.log(response);
        });
    },

    homePage: function (id) {
        this.callCustomFunction('_PATCH_', buildApiUrl(`${id}/home-page`), (response) => {
            console.log(response);
        }, (error) => {
            if (error.response.status == "400") {
                SweetAlert.error("", "You can only select 1 book for the home page");
                const checkbox = document.getElementById(`home_page_${id}`);
                checkbox.checked = false;
            }
        });
    }
};

/*---------------------------------------------------------------------------
 * Event Listener Configurations
 * Maps DOM events to their respective handlers
 * Structure:
 * - event: The DOM event to listen for
 * - selector: The DOM element selector to attach the listener to
 * - handler: The function to execute when the event occurs
 *--------------------------------------------------------------------------*/
const uiEventListeners = [
    { event: 'click', selector: '.delete-btn', handler: userActionHandlers.delete },
    { event: 'click', selector: '.btn-show', handler: userActionHandlers.show },
    { event: 'click', selector: '.btn-edit', handler: userActionHandlers.edit },
    { event: 'click', selector: '.status-toggle', handler: userActionHandlers.status },
    { event: 'click', selector: '.home-page-toggle', handler: userActionHandlers.homePage },
];

/*---------------------------------------------------------------------------
 * DataTable Configuration
 * Defines the structure and behavior of the Book management table
 *--------------------------------------------------------------------------*/
const tableColumns = [
    {
        "data": "id"
    },
    {
        "data": "avatar",
        "title": "Cover"
    },
    {
        "data": "name",
        "title": "Title"
    },
    {
        "data": "scholar",
        "title": "Author"
    },
    {
        "data": "category",
        "title": "Type"
    },
    {
        "data": "visit_count",
        "title": "Views"
    },
    {
        "data": "download_count",
        "title": "Downloads"
    },
    {
        "data": "home_page",
        "title": "Link"
    },
    {
        "data": "status",
        "title": "State",
    },
    {
        "data": null,
        "title": "Actions",
        "className": "text-end"
    }

];

const tableColumnDefinitions = [
    { targets: [0], orderable: false, htmlType: 'selectCheckbox' },
    {
        targets: [1],
        htmlType: 'image'
    },
    {
        targets: [3],
        htmlType: 'text',
        dataClassName: 'fw-bold'
    },
    {
        targets: [4],
        htmlType: 'badge',
        badgeClass: 'badge-light'
    },
    {
        targets: [5],
        htmlType: 'badge',
        badgeClass: 'badge-primary'
    },
    {
        targets: [6],
        htmlType: 'badge',
        badgeClass: 'badge-warning'
    },
    {
        targets: [7],
        htmlType: 'toggle',
        dataClassName: 'home-page-toggle',
    },
    {
        targets: [8],
        htmlType: 'toggle',
        dataClassName: 'status-toggle',
    },
    {
        targets: [-1],
        htmlType: 'dropdownActions',
        orderable: false,
        actionButtons: {
            edit: {
                icon: 'bi bi-pencil',
                text: 'Edit',
                type: 'modal',
                class: 'btn-edit',
                modalTarget: '#edit-modal',
                color: 'primary'
            },
            view: {
                icon: 'bi bi-eye',
                text: 'View Details',
                class: 'btn-show',
                type: 'modal',
                modalTarget: '#show-modal',
                color: 'info',
            },
            divider1: { divider: true },
            download: {
                icon: 'bi bi-download',
                text: 'Download',
                class: 'btn-download',
                color: 'success',
                type: 'callback',
                callback: (row) => {
                    downloadPdf(row);
                }
            },

            divider2: { divider: true },
            delete: {
                icon: 'bi bi-trash',
                text: 'Delete',
                class: 'delete-btn',
                color: 'danger'
            }
        }
    },
];

/*---------------------------------------------------------------------------
 * Bulk Action Handler
 * Processes operations on multiple selected books
 * @param {Array} selectedIds - Array of selected book IDs
 *--------------------------------------------------------------------------*/
const handleBulkActions = (selectedIds) => {
    // Implementation for bulk actions
    // Example: Delete multiple books, change status, etc.
};

/*=============================================================================
 * DataTable Initialization
 * Creates and configures the main book management interface
 *============================================================================*/
export const bookTable = new $DatatableController('bookTable', {
    lengthMenu: [[15, 50, 100, 200, -1], [15, 50, 100, 200, 'All']],
    selectedAction: handleBulkActions,
    ajax: {
        url: buildApiUrl('datatable'),
        data: (d) => ({
            ...d,
            // Add your custom filters here
        })
    },
    columns: tableColumns,
    columnDefs: $DatatableController.generateColumnDefs(tableColumnDefinitions),
    customFunctions: apiOperations,
    eventListeners: uiEventListeners
});

// Initialize create book modal
createModalLoader({
    triggerSelector: '.create',
    endpoint: buildApiUrl('create'),
    onSuccess: (response) => {
        initSelect2("#scholar_select", "#create-modal");
        initSelect2("#category_select", "#create-modal");
        initSelect2("#language_select", "#create-modal");
        initSelect2("#genre_select", "#create-modal");
    }
});

// Global access for table reload
window.RDT = reloadDataTable;
