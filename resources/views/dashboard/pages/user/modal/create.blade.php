<form id="create-user-form" form-id="createForm" http-request route="{{ route('dashboard.users.store') }}"
    identifier="single-form-post-handler" feedback close-modal success-toast on-success="RDT">

    <div class="mb-3">
        <label for="name" class="form-label">{{ __('common.dashboard.name') }}</label>
        <input type="text" feedback-id="name-feedback" class="form-control" name="name" id="name">
        <div id="name-feedback" class="invalid-feedback"></div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">{{ __('common.dashboard.email') }}</label>
        <input type="text" feedback-id="email-feedback" class="form-control" name="email" id="email">
        <div id="email-feedback" class="invalid-feedback"></div>
    </div>
</form>