<form id="create-youtube-form" form-id="createForm" http-request route="{{ route('dashboard.youtubes.store') }}"
    identifier="single-form-post-handler" feedback close-modal success-toast on-success="RDT">

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="title" class="form-label">Title</label>
            <input type="text" feedback-id="title-feedback" class="form-control" name="title" id="title" required
                placeholder="Enter youtube title">
            <div id="title-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="scholar_id" class="form-label">Scholar</label>
            <select feedback-id="scholar_id-feedback" class="form-select" name="scholar_id" id="scholar_select"
                data-control="select2" data-placeholder="Select a scholar">
                <option value="">Select Scholar</option>
                @foreach ($scholars as $scholar)
                    <option value="{{ $scholar->id }}">{{ $scholar->name }}</option>
                @endforeach
            </select>
            <div id="scholar_id-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="category_id" class="form-label">Category</label>
            <select feedback-id="category_id-feedback" class="form-select" name="category_id" id="category_select"
                data-control="select2" data-placeholder="Select a category">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <div id="category_id-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="duration" class="form-label">Duration</label>
            <input type="number" feedback-id="duration-feedback" class="form-control" name="duration" id="duration"
                required placeholder="Enter duration">
            <div id="duration-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12">
            <label for="type" class="form-label">Type</label>
            <select feedback-id="type-feedback" class="form-select" name="type" id="type_select"
                data-control="select2" data-placeholder="Select a type">
                <option value="">Select Type</option>
                <option value="video">Video</option>
                <option value="audio">Audio</option>
            </select>
            <div id="type-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="mb-3">
        <label for="url" class="form-label">Url</label>
        <input type="text" feedback-id="url-feedback" class="form-control" name="url" id="url"
            placeholder="Enter url">
        <div id="url-feedback" class="invalid-feedback"></div>
    </div>
</form>
