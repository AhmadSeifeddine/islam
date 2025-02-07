<form id="edit-book-form" form-id="editForm" http-request route="{{ route('dashboard.books.update') }}"
    identifier="single-form-post-handler" feedback close-modal success-toast on-success="RDT">
    <input type="hidden" name="id" id="id" value="{{ $book->id }}">


    <div class="row mb-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Book Name</label>
            <input type="text" feedback-id="name-feedback" class="form-control" name="name" id="name"
                required placeholder="Enter book name" value="{{ $book->name }}">
            <div id="name-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="scholar_id" class="form-label">Scholar</label>
            <select feedback-id="scholar_id-feedback" class="form-select" name="scholar_id" id="scholar_select"
                data-control="select2" data-placeholder="Select a scholar">
                <option value="">Select Scholar</option>
                @foreach ($scholars as $scholar)
                    <option value="{{ $scholar->id }}" {{ $book->scholar_id == $scholar->id ? 'selected' : '' }}>
                        {{ $scholar->name }}</option>
                @endforeach
            </select>
            <div id="scholar_id-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="page_number" class="form-label">Page Number</label>
            <input type="number" feedback-id="page_number-feedback" class="form-control" name="page_number"
                id="page_number" value="{{ $book->page_number }}">
            <div id="page_number-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="language" class="form-label">Language</label>
            <select feedback-id="language-feedback" class="form-select" name="language" id="language_select"
                data-control="select2" data-placeholder="Select language">
                <option value="">Select Language</option>
                <option value="arabic" {{ $book->language == 'arabic' ? 'selected' : '' }}>Arabic</option>
                <option value="english" {{ $book->language == 'english' ? 'selected' : '' }}>English</option>
                <option value="french" {{ $book->language == 'french' ? 'selected' : '' }}>French</option>
                <!-- Add more languages as needed -->
            </select>
            <div id="language-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="pdf" class="form-label">PDF</label>
            <input type="file" feedback-id="pdf-feedback" class="form-control" name="pdf" id="pdf">
            <div id="pdf-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="status" class="form-label">Category</label>
            <select feedback-id="status-feedback" class="form-select" name="category_id" id="category_select"
                data-control="select2" data-placeholder="Select category">
                <option value=""></option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
            <div id="status-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea feedback-id="description-feedback" class="form-control" name="description" id="description" rows="4"
            placeholder="Enter book description">{{ $book->description }}</textarea>
        <div id="description-feedback" class="invalid-feedback"></div>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" feedback-id="image-feedback" class="form-control" name="image" id="image">
        <div id="image-feedback" class="invalid-feedback"></div>
    </div>
</form>
