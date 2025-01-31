<div class="d-flex flex-column">

    {{-- form fields ... --}}

    {{-- Created At field --}}
    <div class="mb-3">
        <label class="form-label fw-bold">Created At</label>
        <p class="text-gray-800">{{ $article->created_at }}</p>
    </div>

    {{-- Title field --}}
    <div class="mb-3">
        <label class="form-label fw-bold">Title</label>
        <p class="text-gray-800">{{ $article->title }}</p>
    </div>

    {{-- Content field --}}
    <div class="mb-3">
        <label class="form-label fw-bold">Content</label>
        <p class="text-gray-800">{!! $article->content !!}</p>
    </div>

    {{-- Category field --}}
    <div class="mb-3">
        <label class="form-label fw-bold">Category</label>
        <p class="text-gray-800">{{ $article->category->name }}</p>
    </div>

    {{-- Scholar field --}}
    <div class="mb-3">
        <label class="form-label fw-bold">Scholar</label>
        <p class="text-gray-800">{{ $article->scholar->name }}</p>
    </div>

    {{-- Status field --}}
    <div class="mb-3">
        <label class="form-label fw-bold">Status</label>
        <p class="text-gray-800">{{ $article->status }}</p>
    </div>

</div>
