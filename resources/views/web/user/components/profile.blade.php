<div class="container py-10">
    <div class="premium-container rounded-4">
        <div class="p-5">
            <!-- Profile Section -->
            <div class="row align-items-center mb-5">
                <div class="col-auto">
                    <div class="profile-image-container">
                        <img src="{{ asset('vendor/img/logo/3.jpg') }}" class="profile-image" alt="Profile">
                        <div class="status-indicator"></div>
                    </div>
                </div>

                <div class="col ps-5">
                    <div class="mb-4">
                        <h1 class="gradient-text display-3 fw-bold mb-3">محمد عبد الله</h1>
                    </div>
                    <div class="info-container">
                        <div class="info-pill">
                            <div class="icon-circle">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <span>example@email.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs Section -->
            <ul class="nav nav-tabs custom-tabs" id="contentTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="favorites-tab" data-bs-toggle="tab" data-bs-target="#favorites" type="button" role="tab">المفضلة</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="readlater-tab" data-bs-toggle="tab" data-bs-target="#readlater" type="button" role="tab">قراءة لاحقاً</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="collections-tab" data-bs-toggle="tab" data-bs-target="#collections" type="button" role="tab">مجموعاتي</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content p-4" id="contentTabsContent">
                <!-- Favorites Tab -->
                <div class="tab-pane fade show active" id="favorites" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('favorites', 'books')">
                                <i class="bi bi-book-fill"></i>
                                <h4>كتب</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('favorites', 'people')">
                                <i class="bi bi-people-fill"></i>
                                <h4>شخصيات</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('favorites', 'videos')">
                                <i class="bi bi-play-circle-fill"></i>
                                <h4>فيديوهات</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('favorites', 'articles')">
                                <i class="bi bi-file-text-fill"></i>
                                <h4>مقالات</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="category-content mt-4" id="favorites-content-books"></div>
                    <div class="category-content mt-4" id="favorites-content-people"></div>
                    <div class="category-content mt-4" id="favorites-content-videos"></div>
                    <div class="category-content mt-4" id="favorites-content-articles"></div>
                </div>

                <!-- Read Later Tab -->
                <div class="tab-pane fade" id="readlater" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('readlater', 'books')">
                                <i class="bi bi-book-fill"></i>
                                <h4>كتب</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('readlater', 'people')">
                                <i class="bi bi-people-fill"></i>
                                <h4>شخصيات</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('readlater', 'videos')">
                                <i class="bi bi-play-circle-fill"></i>
                                <h4>فيديوهات</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('readlater', 'articles')">
                                <i class="bi bi-file-text-fill"></i>
                                <h4>مقالات</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="category-content mt-4" id="readlater-content-books"></div>
                    <div class="category-content mt-4" id="readlater-content-people"></div>
                    <div class="category-content mt-4" id="readlater-content-videos"></div>
                    <div class="category-content mt-4" id="readlater-content-articles"></div>
                </div>

                <!-- Collections Tab -->
                <div class="tab-pane fade" id="collections" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('collections', 'books')">
                                <i class="bi bi-book-fill"></i>
                                <h4>كتب</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('collections', 'people')">
                                <i class="bi bi-people-fill"></i>
                                <h4>شخصيات</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('collections', 'videos')">
                                <i class="bi bi-play-circle-fill"></i>
                                <h4>فيديوهات</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="category-card" onclick="showContent('collections', 'articles')">
                                <i class="bi bi-file-text-fill"></i>
                                <h4>مقالات</h4>
                                <span class="count">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="category-content mt-4" id="collections-content-books"></div>
                    <div class="category-content mt-4" id="collections-content-people"></div>
                    <div class="category-content mt-4" id="collections-content-videos"></div>
                    <div class="category-content mt-4" id="collections-content-articles"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
:root {
    --gold: #FFD700;
    --dark: #0a0a0a;
    --text-primary: #fff;
    --text-secondary: rgba(255, 255, 255, 0.7);
    --border-color: rgba(255, 255, 255, 0.12);
    --hover-bg: rgba(255, 255, 255, 0.08);
}

.premium-container {
    background: rgba(10, 10, 10, 0.95);
    backdrop-filter: blur(10px);
    border: 1px solid var(--border-color);
    position: relative;
    overflow: hidden;
}

.premium-container::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background:
        radial-gradient(circle at 0% 0%, rgba(255,215,0,0.1) 20%, transparent 70%),
        radial-gradient(circle at 100% 100%, rgba(255,165,0,0.1) 20%, transparent 70%),
        repeating-linear-gradient(45deg,
            rgba(255,215,0,0.03) 0px,
            rgba(255,215,0,0.03) 1px,
            transparent 1px,
            transparent 10px
        );
    opacity: 0.5;
    pointer-events: none;
}

.profile-image-container {
    position: relative;
    width: 280px;
    height: 280px;
}

.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
}

.status-indicator {
    position: absolute;
    bottom: 12px;
    right: 12px;
    width: 16px;
    height: 16px;
    background: #00F5A0;
    border-radius: 50%;
    border: 2px solid var(--dark);
    box-shadow: 0 0 15px rgba(0,245,160,0.3);
}

.gradient-text {
    background: linear-gradient(to right, var(--gold), #FFA500);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    position: relative;
    display: inline-block;
}

.info-container {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 24px;
}

.info-pill {
    background: rgba(255, 255, 255, 0.03);
    padding: 12px 24px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.3s ease;
    border: 1px solid var(--border-color);
    backdrop-filter: blur(5px);
}

.icon-circle {
    width: 32px;
    height: 32px;
    background: rgba(255, 215, 0, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gold);
}

.custom-tabs {
    border-bottom: 1px solid var(--border-color);
    gap: 1rem;
}

.custom-tabs .nav-link {
    color: var(--text-secondary);
    border: none;
    padding: 1rem 2rem;
    border-radius: 8px 8px 0 0;
    transition: all 0.3s ease;
}

.custom-tabs .nav-link:hover {
    color: var(--gold);
    background: rgba(255, 215, 0, 0.05);
}

.custom-tabs .nav-link.active {
    color: var(--gold);
    background: rgba(255, 215, 0, 0.1);
    border-bottom: 2px solid var(--gold);
}

.category-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    transition: all 0.3s ease;
    cursor: pointer;
}

.category-card:hover {
    border-color: var(--gold);
    transform: translateY(-3px);
    background: rgba(255, 215, 0, 0.05);
}

.category-card i {
    font-size: 2.5rem;
    color: var(--gold);
    margin-bottom: 1rem;
    display: block;
}

.category-card h4 {
    color: var(--text-primary);
    margin-bottom: 0.5rem;
}

.category-card .count {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

.category-content {
    display: none;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    min-height: 200px;
    padding: 2rem;
}

.category-content.active {
    display: block;
}
</style>

<script>
function showContent(tab, category) {
    // Hide all content sections
    const allContents = document.querySelectorAll('.category-content');
    allContents.forEach(content => content.style.display = 'none');

    // Show selected content section
    const selectedContent = document.getElementById(`${tab}-content-${category}`);
    if (selectedContent) {
        selectedContent.style.display = 'block';
        // Here you can load the actual content for this section
        selectedContent.innerHTML = getContentFor(tab, category);
    }

    // Update active state of cards
    const cards = document.querySelectorAll('.category-card');
    cards.forEach(card => card.classList.remove('active'));
    event.currentTarget.classList.add('active');
}

function getContentFor(tab, category) {
    // Replace this with your actual content loading logic
    return `<h3>${getCategoryName(category)} - ${getTabName(tab)}</h3>
            <div class="content-placeholder">محتوى ${getCategoryName(category)} ${getTabName(tab)}</div>`;
}

function getCategoryName(category) {
    const names = {
        'books': 'الكتب',
        'people': 'الشخصيات',
        'videos': 'الفيديوهات',
        'articles': 'المقالات'
    };
    return names[category];
}

function getTabName(tab) {
    const names = {
        'favorites': 'المفضلة',
        'readlater': 'قراءة لاحقاً',
        'collections': 'مجموعاتي'
    };
    return names[tab];
}
</script>
