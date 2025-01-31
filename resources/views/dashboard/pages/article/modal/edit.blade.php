<form id="edit-article-form" form-id="editForm" http-request route="{{ route('dashboard.writing.update') }}"
    identifier="single-form-post-handler" feedback close-modal success-toast on-success="RDT">
    <input type="hidden" name="id" id="id" value="{{ $article->id }}">

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" feedback-id="title-feedback" class="form-control" name="title" id="title"
            value="{{ $article->title }}">
        <div id="title-feedback" class="invalid-feedback"></div>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <div id="content" class="form-control" id="content">{!! $article->content !!}</div>
        <textarea name="content" id="content-textarea-edit" class="d-none"></textarea>
        <div id="content-feedback" class="invalid-feedback"></div>
    </div>

    <div class="mb-3">
        <label for="category-select" class="form-label">Category</label>
        <select feedback-id="category-select-feedback" class="form-select" data-control="select2"
            data-placeholder="Select an option" name="category_id" data-allow-clear="true" id="category-select">
            <option></option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $article->category_id ? 'selected' : '' }}>
                    {{ $category->name }}</option>
            @endforeach
        </select>
        <div id="category-select-feedback" class="invalid-feedback"></div>
    </div>

    <div class="mb-3">
        <label for="scholar-select" class="form-label">Scholar</label>
        <select feedback-id="scholar-select-feedback" class="form-select" data-control="select2"
            data-placeholder="Select an option" data-allow-clear="true" name="scholar_id" id="scholar-select">
            <option></option>
            @foreach ($scholars as $scholar)
                <option value="{{ $scholar->id }}" {{ $scholar->id == $article->scholar_id ? 'selected' : '' }}>
                    {{ $scholar->name }}</option>
            @endforeach
        </select>
        <div id="scholar-select-feedback" class="invalid-feedback"></div>
    </div>


    <div class="mb-3">
        <label for="writing_type" class="form-label">Writing Type</label>
        <select name="writing_type" feedback-id="writing_type-feedback" id="writing_type" class="form-control">
            <option value="">Select Writing Type</option>
            <option value="article" {{ $article->writing_type == 'article' ? 'selected' : '' }}>Article</option>
            <option value="akida" {{ $article->writing_type == 'akida' ? 'selected' : '' }}>Akida</option>
            <option value="fiqh" {{ $article->writing_type == 'fiqh' ? 'selected' : '' }}>Fiqh</option>
        </select>
        <div id="writing_type-feedback" class="invalid-feedback"></div>
    </div>
</form>
