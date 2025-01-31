<form id="create-book-form" form-id="createForm" http-request route="{{ route('dashboard.books.store') }}"
    identifier="single-form-post-handler" feedback close-modal success-toast on-success="RDT">

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Book Name</label>
            <input type="text" feedback-id="name-feedback" class="form-control" name="name" id="name" required
                placeholder="Enter book name">
            <div id="name-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="scholar_id" class="form-label">Scholar</label>
            <select feedback-id="scholar_id-feedback" class="form-select" name="scholar_id" id="scholar_select"
                    data-control="select2" data-placeholder="Select a scholar">
                <option value="">Select Scholar</option>
                @foreach($scholars as $scholar)
                    <option value="{{ $scholar->id }}">{{ $scholar->name }}</option>
                @endforeach
            </select>
            <div id="scholar_id-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="publication_date" class="form-label">Publication Date</label>
            <input type="date" feedback-id="publication_date-feedback" class="form-control"
                   name="publication_date" id="publication_date">
            <div id="publication_date-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="language" class="form-label">Language</label>
            <select feedback-id="language-feedback" class="form-select" name="language" id="language_select"
                    data-control="select2" data-placeholder="Select language">
                <option value="">Select Language</option>
                <option value="arabic">Arabic</option>
                <option value="english">English</option>
                <option value="french">French</option>
                <!-- Add more languages as needed -->
            </select>
            <div id="language-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="genre" class="form-label">Genre</label>
            <select feedback-id="genre-feedback" class="form-select" name="genre" id="genre_select"
                    data-control="select2" data-placeholder="Select genre">
                <option value="">Select Genre</option>
                <option value="fiction">Fiction</option>
                <option value="non-fiction">Non-Fiction</option>
                <option value="biography">Biography</option>
                <option value="history">History</option>
                <option value="religious">Religious</option>
                <option value="educational">Educational</option>
                <!-- Add more genres as needed -->
            </select>
            <div id="genre-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="status" class="form-label">Category</label>
            <select feedback-id="status-feedback" class="form-select" name="category_id" id="category_select"
                    data-control="select2" data-placeholder="Select category">
                <option value=""></option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <div id="status-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea feedback-id="description-feedback" class="form-control" name="description"
                  id="description" rows="4" placeholder="Enter book description"></textarea>
        <div id="description-feedback" class="invalid-feedback"></div>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" feedback-id="image-feedback" class="form-control" name="image" id="image">
        <div id="image-feedback" class="invalid-feedback"></div>
    </div>

</form>
