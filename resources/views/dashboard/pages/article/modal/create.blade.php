<form id="create-article-form" form-id="createForm" http-request route="{{ route('dashboard.writing.store') }}"
    identifier="single-form-post-handler" feedback close-modal success-toast on-success="RDT">


    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" feedback-id="title-feedback" class="form-control" name="title" id="title">
        <div id="title-feedback" class="invalid-feedback"></div>
    </div>

    <div id="content" class="mb-3"></div>
    <textarea name="content" feedback-id="content-feedback" id="content-textarea" class="form-control d-none"></textarea>
    <div id="content-feedback" class="invalid-feedback"></div>


    <div class="mb-3">
        <label for="category-select" class="form-label">Category</label>
        <select feedback-id="category-select-feedback" class="form-select" data-control="select2"
            data-placeholder="Select an option" name="category_id" data-allow-clear="true" id="category_select">
            <option></option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <div id="category-select-feedback" class="invalid-feedback"></div>
    </div>


    <div class="mb-3">
        <label for="scholar-select" class="form-label">Scholar</label>
        <select feedback-id="scholar-select-feedback" class="form-select" data-control="select2"
            data-placeholder="Select an option" data-allow-clear="true" name="scholar_id" id="scholar_select">
            <option></option>
            @foreach ($scolars as $scholar)
                <option value="{{ $scholar->id }}">{{ $scholar->name }}</option>
            @endforeach
        </select>
        <div id="scholar-select-feedback" class="invalid-feedback"></div>
    </div>

    <div class="mb-3">
        <label for="writing" class="form-label">Writing Type</label>
        <select name="writing_type" feedback-id="writing-type-feedback" id="writing-type" class="form-control">
            <option value="">Select Writing Type</option>
            <option value="article">Article</option>
            <option value="akida">Akida</option>
            <option value="fiqh">Fiqh</option>
        </select>
        <div id="writing-type-feedback" class="invalid-feedback"></div>
    </div>
</form>

<style>
    .ql-editor {
        min-height: 300px !important;
    }
</style>
