<div class="categories-section d-flex flex-column flex-column-fluid justify-content-center align-items-center"
    style="background-color: var(--background);">
    <div class="container">
        <!-- Refined Header -->
        <div class="text-center mb-5 header-content">
            <h1 class="main-title">
                تصنيف الشخصيات
                <div class="elegant-underline"></div>
            </h1>
            <p class="elegant-subtitle">اختر التصنيف المناسب للشخصيات التي تبحث عنها</p>
        </div>

        <!-- Categories Grid -->
        <div class="categories-grid">
            <!-- Religious Category -->
            <div class="category-container fade-in">
                <div class="category-wrapper">
                    <div class="premium-glow"></div>
                    <div class="main-category text-center mb-5">
                        <div class="main-icon-wrapper">
                            <i class="bi bi-book-fill"></i>
                            <div class="icon-ring"></div>
                        </div>
                        <h2 class="text-warning display-6 mb-3">الشخصيات الدينية</h2>
                        <p class="text-white-50 fs-5">علماء وفقهاء ودعاة الإسلام عبر العصور</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="premium-card recommended">
                                <div class="card-shine"></div>

                                <h3 class="text-success h3 mb-3">شخصيات موصى بها</h3>
                                <button class="premium-btn success">
                                    استعرض القائمة
                                </button>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="premium-card not-recommended">
                                <div class="card-shine"></div>

                                <h3 class="text-danger h3 mb-3">شخصيات غير موصى بها</h3>
                                <button class="premium-btn danger">
                                    استعرض القائمة
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Premium Separator -->
            <div class="premium-separator">
                <div class="separator-line"></div>
                <div class="separator-circle">
                    <i class="bi bi-arrow-left-right text-warning"></i>
                </div>
            </div>

            <!-- Non-Religious Category -->
            <div class="category-container fade-in">
                <div class="category-wrapper">
                    <div class="premium-glow"></div>
                    <div class="main-category text-center mb-5">
                        <div class="main-icon-wrapper">
                            <i class="bi bi-lightbulb-fill"></i>
                            <div class="icon-ring"></div>
                        </div>
                        <h2 class="text-warning display-6 mb-3">الشخصيات غير الدينية</h2>
                        <p class="text-white-50 fs-5">مفكرون وعلماء في مختلف المجالات</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="premium-card">
                                <div class="card-shine"></div>

                                <h3 class="text-info h3 mb-3">علماء العلوم</h3>
                                <button class="premium-btn info">
                                    استعرض القائمة
                                </button>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="premium-card">
                                <div class="card-shine"></div>

                                <h3 class="text-primary h3 mb-3">الأدباء والمفكرون</h3>
                                <button class="premium-btn primary">
                                    استعرض القائمة
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Refined Base Styles */
    .categories-section {
        background: #000000;
        min-height: 100vh;
        position: relative;
        overflow: hidden;
    }

    /* Enhanced Header */
    .main-title {
        font-size: 4.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ffd700 0%, #ffa500 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        position: relative;
        margin-bottom: 2rem;
        text-shadow: 0 0 30px rgba(255, 215, 0, 0.3);
    }

    .elegant-underline {
        height: 3px;
        width: 0;
        background: linear-gradient(90deg, transparent, #ffd700, transparent);
        position: absolute;
        bottom: -10px;
        left: 0;
        animation: expandLine 1.5s ease forwards;
    }

    .elegant-subtitle {
        font-size: 1.8rem;
        color: rgba(255, 255, 255, 0.7);
        margin-top: 2rem;
        font-weight: 300;
        letter-spacing: 1px;
    }

    /* Premium Grid Layout */
    .categories-grid {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 3rem;
        margin-top: 4rem;
    }

    /* Enhanced Category Container */
    .category-wrapper {
        background: rgba(20, 20, 40, 0.6);
        border-radius: 2rem;
        padding: 3rem;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 215, 0, 0.1);
        transition: all 0.5s ease;
    }

    .premium-glow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 215, 0, 0.5),
                transparent);
        animation: shimmerEffect 2s infinite;
    }

    /* Refined Icon Styles */
    .main-icon-wrapper {
        width: 140px;
        height: 140px;
        margin: 0 auto;
        background: rgba(255, 215, 0, 0.05);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3.5rem;
        position: relative;
        color: #ffd700;
        border: 2px solid rgba(255, 215, 0, 0.1);
    }

    .icon-ring {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 2px solid rgba(255, 215, 0, 0.2);
        animation: pulseRing 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
    }

    /* Premium Cards */
    .premium-card {
        background: rgba(30, 30, 60, 0.4);
        border-radius: 1.5rem;
        padding: 3rem;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .premium-card:hover {
        transform: translateY(-10px);
        background: rgba(40, 40, 80, 0.4);
        border-color: rgba(255, 215, 0, 0.2);
    }

    .card-shine {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent);
        transition: 0.5s;
    }

    .premium-card:hover .card-shine {
        left: 100%;
        transition: 0.5s;
    }

    /* Enhanced Buttons */
    .premium-btn {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 1rem;
        padding: 1.2rem 2rem;
        width: 100%;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .premium-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        border-color: rgba(255, 215, 0, 0.3);
    }

    .premium-btn::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        transform: scale(0);
        transition: transform 0.5s ease;
    }

    .premium-btn:hover::after {
        transform: scale(1);
    }

    /* Premium Separator */
    .premium-separator {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        position: relative;
        padding: 2rem 0;
    }

    .separator-line {
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg,
                transparent,
                rgba(255, 215, 0, 0.3),
                transparent);
    }

    .separator-circle {
        width: 50px;
        height: 50px;
        background: rgba(255, 215, 0, 0.05);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        animation: glowPulse 2s infinite alternate;
    }

    /* Refined Animations */
    @keyframes expandLine {
        to {
            width: 100%;
        }
    }

    @keyframes pulseRing {
        0% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.2);
            opacity: 0.5;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes shimmerEffect {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    @keyframes glowPulse {
        0% {
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.2);
        }

        100% {
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.4);
        }
    }

    /* Responsive Enhancements */
    @media (max-width: 991px) {
        .categories-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .premium-separator {
            display: none;
        }

        .main-title {
            font-size: 3rem;
        }

        .category-wrapper {
            margin-bottom: 2rem;
        }
    }

    @media (min-width: 992px) {
        .category-wrapper:hover {
            transform: translateZ(20px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .premium-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    }

    .success {
        color: #00ff9d;
    }

    .danger {
        color: #ff4d4d;
    }

    .info {
        color: #4deefd;
    }

    .primary {
        color: #4d79ff;
    }

    .premium-btn.success:hover {
        background: rgba(0, 255, 157, 0.1);
    }

    .premium-btn.danger:hover {
        background: rgba(255, 77, 77, 0.1);
    }

    .premium-btn.info:hover {
        background: rgba(77, 238, 253, 0.1);
    }

    .premium-btn.primary:hover {
        background: rgba(77, 121, 255, 0.1);
    }

</style>
