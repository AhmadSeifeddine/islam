<form id="create-book_Explanation-form" form-id="createForm" http-request
    route="{{ route('dashboard.books.explanations.store') }}" identifier="single-form-post-handler" feedback close-modal
    success-toast on-success="RDT">

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="book_id" class="form-label">Book</label>
            <select feedback-id="book_id-feedback" class="form-select" name="book_id" id="book_select"
                data-control="select2" data-placeholder="Select a book">
                <option value="">Select Book</option>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                @endforeach
            </select>
            <div id="book_id-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="youtube_id" class="form-label">Youtube</label>
            <select feedback-id="youtube_id-feedback" class="form-select" name="youtube_id" id="youtube_select"
                data-control="select2" data-placeholder="Select a youtube">
                <option value="">Select Youtube</option>
                @foreach ($youtubes as $youtube)
                    <option value="{{ $youtube->id }}">{{ $youtube->title }}</option>
                @endforeach
            </select>
            <div id="youtube_id-feedback" class="invalid-feedback"></div>
        </div>
    </div>
</form>
