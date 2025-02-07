<form id="create-scholar-form" form-id="createForm" http-request route="{{ route('dashboard.scholars.store') }}"
    identifier="single-form-post-handler" feedback close-modal success-toast on-success="RDT">

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" feedback-id="name-feedback" class="form-control" name="name" id="name" required
                placeholder="Enter scholar's name">
            <div id="name-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="nickname" class="form-label">Nickname</label>
            <input type="text" feedback-id="nickname-feedback" class="form-control" name="nickname" id="nickname"
                placeholder="Enter scholar's nickname">
            <div id="nickname-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" feedback-id="nationality-feedback" class="form-control" name="nationality"
                id="nationality" placeholder="Enter scholar's nationality">
            <div id="nationality-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" feedback-id="birth_date-feedback" class="form-control" name="birth_date"
                id="birth_date" placeholder="Select birth date">
            <div id="birth_date-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="death_date" class="form-label">Death Date</label>
            <input type="date" feedback-id="death_date-feedback" class="form-control" name="death_date"
                id="death_date" placeholder="Select death date">
            <div id="death_date-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="website_url" class="form-label">Website URL</label>
            <input type="url" feedback-id="website_url-feedback" class="form-control" name="website_url"
                id="website_url" placeholder="Enter website URL">
            <div id="website_url-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="mb-3">
        <label for="biography" class="form-label">Biography</label>
        <textarea feedback-id="biography-feedback" class="form-control" name="biography" id="biography"
            placeholder="Enter biography"></textarea>
        <div id="biography-feedback" class="invalid-feedback"></div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="facebook_url" class="form-label">Facebook URL</label>
            <input type="url" feedback-id="facebook_url-feedback" class="form-control" name="facebook_url"
                id="facebook_url" placeholder="Enter Facebook profile URL">
            <div id="facebook_url-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="instagram_url" class="form-label">Instagram URL</label>
            <input type="url" feedback-id="instagram_url-feedback" class="form-control" name="instagram_url"
                id="instagram_url" placeholder="Enter Instagram profile URL">
            <div id="instagram_url-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="youtube_url" class="form-label">YouTube URL</label>
            <input type="url" feedback-id="youtube_url-feedback" class="form-control" name="youtube_url"
                id="youtube_url" placeholder="Enter YouTube channel URL">
            <div id="youtube_url-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="tiktok_url" class="form-label">TikTok URL</label>
            <input type="url" feedback-id="tiktok_url-feedback" class="form-control" name="tiktok_url"
                id="tiktok_url" placeholder="Enter TikTok profile URL">
            <div id="tiktok_url-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="telegram_url" class="form-label">Telegram URL</label>
            <input type="url" feedback-id="telegram_url-feedback" class="form-control" name="telegram_url"
                id="telegram_url" placeholder="Enter Telegram profile URL">
            <div id="telegram_url-feedback" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <label for="x_url" class="form-label">X (Twitter) URL</label>
            <input type="url" feedback-id="x_url-feedback" class="form-control" name="x_url" id="x_url"
                placeholder="Enter X (Twitter) profile URL">
            <div id="x_url-feedback" class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12">
            <label for="recommended_score" class="form-label">Recommended Score</label>
            <select feedback-id="recommended_score-feedback" class="form-select" name="recommended_score"
                id="recommended_score" data-control="select2" data-placeholder="Select recommended score">
                @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
    </div>

    <div>
        <label for="image" class="form-label">Image</label>
        <input type="file" feedback-id="image-feedback" class="form-control" name="image" id="image"
            placeholder="Select image">
        <div id="image-feedback" class="invalid-feedback"></div>
    </div>
</form>
