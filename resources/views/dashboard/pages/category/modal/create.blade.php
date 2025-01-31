<form id="create-category-form" form-id="createForm" http-request route="{{ route('dashboard.categories.store') }}"
    identifier="single-form-post-handler" feedback close-modal success-toast on-success="RDT">

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" feedback-id="name-feedback" class="form-control" name="name" id="name">
        <div id="name-feedback" class="invalid-feedback"></div>
    </div>

    <div class="mb-3">
        <label for="parent_id" class="form-label">Parent Category</label>
        <select class="form-select" feedback-id="parent_id-feedback" name="parent_id" id="parent_id"
            data-control="select2" data-placeholder="Select a parent category">
            <option value="">Select Parent Category</option>
            @foreach ($hierarchicalCategories as $category)
                <option value="{{ $category['id'] }}">{{ $category['text'] }}</option>
            @endforeach
        </select>
        <div id="parent_id-feedback" class="invalid-feedback"></div>
    </div>

</form>
