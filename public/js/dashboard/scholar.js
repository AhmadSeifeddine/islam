/*=============================================================================
 * Scholar Management Module
 *
 * This module handles all scholar-related operations in the dashboard including:
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

/*---------------------------------------------------------------------------
 * Utility Functions
 * @function defaultErrorHandler - Global error handler for consistency
 * @function reloadDataTable - Refreshes the DataTable after operations
 * @function buildApiUrl - Constructs API endpoints for scholar operations
 *--------------------------------------------------------------------------*/
const defaultErrorHandler = (err, callback = null) => {
    if (err.response.status === 403) {
        // Close any open modals
        $('.modal').modal('hide');
        SweetAlert.error('Access Denied', "Unfortunately, you don't have permission to perform this action. Please contact your administrator if you believe this is a mistake.");
        if (callback) {
            callback();
        }
    }
};

const reloadDataTable = () => scholarTable.reload();
const buildApiUrl = (path) => `${DASHBOARD_URL}/scholars/${path}`;

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

    _PATCH_: async (endpoint, onSuccess, onError = defaultErrorHandler) => {
        try {
            const response = await HttpRequest.patch(endpoint);
            onSuccess(response);
        } catch (error) {
            onError(error);
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
        // console.log(id)
        this.callCustomFunction('_SHOW_', id, buildApiUrl(`${id}/show`));
    },

    edit: function (id) {
        this.callCustomFunction('_EDIT_', id, buildApiUrl(`${id}/edit`), (response) => {
            // Handler for successful edit operation
        });
    },

    homepage: function (id) {
        this.callCustomFunction('_PATCH_', buildApiUrl(`${id}/homepage`), (response) => {
            //
        }, (error) => {
            if (error.response.status == "400") {
                SweetAlert.error("", "You can only select 1 scholar for the home page");
                const checkbox = document.querySelector(`.is_in_homepage_${id}`);
                checkbox.checked = false;
            }
            defaultErrorHandler(error, () => {
                const checkbox = document.getElementById(`is_in_homepage_${id}`);
                checkbox.checked ? checkbox.checked = false : checkbox.checked = true;
            });
        });
    },

    status: function (id) {
        this.callCustomFunction('_PATCH_', buildApiUrl(`${id}/status`), (response) => {
            console.log(response);
        }, (error) => {
            defaultErrorHandler(error, () => {
                const checkbox = document.getElementById(`status_${id}`);
                checkbox.checked ? checkbox.checked = false : checkbox.checked = true;
            });
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
    { event: 'change', selector: '.status-toggle', handler: userActionHandlers.status },
    { event: 'change', selector: '.homepage-toggle', handler: userActionHandlers.homepage },
];

/*---------------------------------------------------------------------------
 * DataTable Configuration
 * Defines the structure and behavior of the Scholar management table
 *--------------------------------------------------------------------------*/
const tableColumns = [
    {
        "data": "id",
    },
    {
        "data": "avatar",
        "title": "Image",
    },
    {
        "data": "name",
        "title": "Name"
    },
    {
        "data": "nationality",
        "title": "Nationality"
    },
    {
        "data": "visit_count",
        "title": "Views"
    },
    {
        "data": "status",
        "title": "Status"
    },
    {
        "data": "is_in_homepage",
        "title": "Homepage"
    },
    {
        "data": null,
        "title": "Action",
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
        targets: [4],
        htmlType: 'badge',
        badgeClass: 'badge-primary'
    },
    {
        targets: [5],
        htmlType: 'toggle',
        dataClassName: 'status-toggle',
    },

    {
        targets: [6],
        htmlType: 'toggle',
        dataClassName: 'homepage-toggle',
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
                // showIf: (row) => {
                //     const isShow = row.status == "Active";
                //     return isShow;
                // }
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
 * Processes operations on multiple selected scholars
 * @param {Array} selectedIds - Array of selected scholar IDs
 *--------------------------------------------------------------------------*/
const handleBulkActions = (selectedIds) => {
    // console.log(selectedIds)
    // Implementation for bulk actions
    // Example: Delete multiple scholars, change status, etc.
};

/*=============================================================================
 * DataTable Initialization
 * Creates and configures the main scholar management interface
 *============================================================================*/
export const scholarTable = new $DatatableController('scholarTable', {
    lengthMenu: [[15, 50, 100, 200, -1], [15, 50, 100, 200, 'All']],
    selectedAction: handleBulkActions,
    ajax: {
        url: buildApiUrl('datatable'),
        data: (d) => ({
            ...d,
            status: $('select[name="status"]').val(),
            is_in_homepage: $('input[name="is_in_homepage"]').is(':checked') ? '1' : null,
            // Add your custom filters here
        })
    },
    columns: tableColumns,
    columnDefs: $DatatableController.generateColumnDefs(tableColumnDefinitions),
    customFunctions: apiOperations,
    eventListeners: uiEventListeners
});

// Initialize create scholar modal
createModalLoader({
    triggerSelector: '.create',
    endpoint: buildApiUrl('create')
});

// Global access for table reload
window.RDT = reloadDataTable;
