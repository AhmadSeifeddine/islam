<!---------------------------
    Layout
---------------------------->
@extends('dashboard.layout.index')

<!---------------------------
    Title
---------------------------->
@section('title', 'Scholar')

<!---------------------------
    Toolbar
---------------------------->
@section('toolbar')
    @include('dashboard.components.toolbar', [
        'title' => 'Scholar',
        'currentPage' => 'Scholar Management',
    ])
@endsection

<!---------------------------
    Columns
---------------------------->

@php
    $columns = ['nickname', 'nationality', 'death_date', 'status', 'actions'];
@endphp

<!---------------------------
    Main Content
---------------------------->
@section('content')
    <x-lebify-table id="scholarTable" :columns="$columns" {{-- create="true"                         // BY DEFAULT TRUE
    selected="true"                            // BY DEFAULT TRUE
    filter="true"                              // BY DEFAULT TRUE
    showCheckbox="true"                        // BY DEFAULT TRUE
    showSearch="true"                          // BY DEFAULT TRUE
    showColumnVisibility="true"                // BY DEFAULT TRUE
    columnVisibilityPlacement="bottom-end"     // BY DEFAULT BOTTOM-END
    columnSettingsTitle="Column Settingss"     // BY DEFAULT COLUMN SETTINGS
    columnToggles=""                           // BY DEFAULT EMPTY
    tableClass="table-class"                   // BY DEFAULT EMPTY
    searchPlaceholder="Search..."              // BY DEFAULT SEARCH...
    selectedText="Selected"                    // BY DEFAULT SELECTED
    selectedActionButtonClass="btn-success"    // BY DEFAULT btn-danger
    selectedActionButtonText="Delete Selected" // BY DEFAULT DELETE SELECTED
    selectedAction=""                          // BY DEFAULT EMPTY
    --}}>


        {{-- start Filter Options --}}

    @section('filter-options')


        {{--  Filters... --}}

        {{-- example form field --}}
        <label class="form-check form-check-sm form-check-custom form-check-solid">
            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Status"
                name="status">
                <option></option>
                <option value="1">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </label>

        <label class="form-check mt-3 form-check-sm form-check-custom form-check-solid">
            <input type="checkbox" class="homepage-toggle form-check-input" name="is_in_homepage" value="1">
            <span class="form-check-sign">
                <span class="check"></span>
            </span>
            <span class="form-check-label">Home page</span>
        </label>
    @endsection
    {{-- End Filter Options --}}

</x-lebify-table>
@endsection


<!---------------------------
Filter Options
---------------------------->


<!---------------------------
Modals
---------------------------->
<x-lebify-modal modal-id="create-modal" size="lg" submit-form-id="createForm" title="Create"></x-lebify-modal>
<x-lebify-modal modal-id="edit-modal" size="lg" submit-form-id="editForm" title="Edit"></x-lebify-modal>
<x-lebify-modal modal-id="show-modal" size="lg" :show-submit-button="false" title="Show"></x-lebify-modal>

<!---------------------------
Scripts
---------------------------->
@push('scripts')
<script src="{{ asset('js/dashboard/scholar.js') }}" type="module" defer></script>
@endpush
