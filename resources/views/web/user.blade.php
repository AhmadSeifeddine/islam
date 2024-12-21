<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" data-bs-theme="light" <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- ===============================================-->
<!--    Document Title-->
<!-- ===============================================-->
<title>@yield('title') | ISLAMIC STUDIES </title>
<!-- ===============================================-->
<!--    Favicons-->
<!-- ===============================================-->
<meta name="keywords"
    content="Lebify Learning, online courses, web development, programming, full stack, Laravel, PHP, JavaScript, HTML, CSS, database, SQL, React, Vue.js, Node.js, API development, responsive design, version control, Git, Agile methodology, software engineering, coding bootcamp, tech education, career development, IT skills, web applications, mobile development, cloud computing, cybersecurity, data structures, algorithms, user experience, UI/UX design, DevOps, continuous integration, software architecture, test-driven development, scalability, performance optimization, front-end development, back-end development, quizzes, interactive learning">
<meta name="description"
    content="Lebify Learning: Your premier destination for mastering development skills. Dive into our comprehensive courses, engaging quizzes, and interactive learning experiences. From web development to mobile apps, we offer cutting-edge curriculum to boost your tech career. Join Lebify Learning today and transform your coding journey!">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendor/img/favicons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendor/img/favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendor/img/favicons/favicon-16x16.png') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('vendor/img/favicons/favicon.ico') }}">
<link rel="canonical" href="{{ url()->current() }}">
<meta name="msapplication-TileColor" content="#008382">
<meta name="msapplication-TileImage" content="{{ asset('vendor/img/favicons/mstile-150x150.png') }}">
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Lebify Learning - Your Gateway to Development Mastery">
<meta property="og:description"
    content="Elevate your coding skills with Lebify Learning. Explore our diverse range of development courses, interactive quizzes, and hands-on projects. Start your journey to becoming a proficient developer today!">
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="Lebify Learning - Your Gateway to Development Mastery">
<meta property="twitter:description"
    content="Elevate your coding skills with Lebify Learning. Explore our diverse range of development courses, interactive quizzes, and hands-on projects. Start your journey to becoming a proficient developer today!">
<!-- ===============================================-->
<!--    Package-->
<!-- ===============================================-->
<link rel="stylesheet" href="{{ asset('packages/iziToast/css/iziToast.min.css') }}">
<!-- ===============================================-->
<!--    Meta-->
<!-- ===============================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="google" content="notranslate">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#FFFFFF" />
<meta name="author" content="Lebify Learning">
<meta name="robots" content="index, follow">
<!-- ===============================================-->
<!--    Stylesheets-->
<!-- ===============================================-->

<link rel="stylesheet" href="{{ asset('css/loading/loading.css', true) }}">
<link rel="stylesheet" href="{{ asset('css/app.css', true) }}">
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
<link href="{{ url('vendor/css/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('vendor/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('vendor/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/preferences.css', true) }}">
@stack('styles')

<style>
    .typing-animation {
        display: inline-block;
        overflow: hidden;
        white-space: nowrap;
        border-right: 0.15em solid var(--gold);
        animation: typing 2s steps(30, end), blink-caret 0.75s step-end 0s infinite;
        direction: rtl;
    }

    @keyframes typing {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    @keyframes blink-caret {

        from,
        to {
            border-color: transparent;
        }

        50% {
            border-color: var(--gold);
        }
    }

</style>
</head>
<!--end::Head-->
<!--begin::Body-->

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "EducationalOrganization",
        "name": "Lebify Learning - Your Gateway to Development Mastery",
        "description": "Learn full stack development with Lebify",
        "url": "https://learning.lebify.online/en",
        "logo": "{{ asset('vendor/img/favicons/favicon.ico') }}",
    }

</script>

<body id="kt_app_body" data-kt-app-layout="light-header" data-kt-app-header-fixed="true"
    data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "dark";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }

    </script>

    <div class="d-flex flex-column app-bg flex-root app-root" id="kt_app_root">
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <main class="app-page flex-column flex-column-fluid" id="kt_app_page">
                <!-- Navbar -->
                @include('web.components.navbar')

                <!-- Landing -->
                <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div
                            class="landing-vh d-flex flex-column flex-column-fluid justify-content-center align-items-center">
                            <div id="kt_app_content"
                                class="app-content flex-column-fluid d-flex justify-content-center align-items-center">
                                <div id="kt_app_content_container" class="text-center">
                                    <section class="landing-page py-5">
                                        <div class="container text-center">
                                            <h1 class="display-2 mb-4" style="color: var(--gold);">
                                                <span class="typing-animation huge-font">وَاتَّقُوا اللَّهَ لَعَلَّكُمْ
                                                    تُفْلِحُونَ</span>
                                            </h1>
                                            <p class="lead mb-5" style="color: var(--text);">
                                                <span class="big-font">لا نجاة إلا بالإعتصام بالقرآن والسنة بفهم سلف
                                                    الأمة </span>
                                            </p>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About us -->
                @include('web.components.books')
                @include('web.components.personalities')
                @include('web.components.youtube')
                @include('web.components.faq')
                @include('web.components.contact')
                @include('web.components.footer')
            </main>
        </div>

        <script src="{{ url('vendor/js/plugins.bundle.js') }}"></script>
        <script src="{{ url('vendor/js/scripts.bundle.js') }}"></script>
        <script src="{{ url('vendor/js/datatables.bundle.js') }}"></script>
        <script src="{{ url('js/app.js') }}"></script>
        @stack('scripts')
</body>

</html>
