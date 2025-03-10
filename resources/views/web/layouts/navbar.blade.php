<div id="kt_app_header" class="app-header navbar flex-column"  data-kt-sticky="true"
    data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize"
    data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false" style="border-bottom: 0px !important; background-color: var(--background); padding-top: 0px;">
    <!--begin::Header container-->
    <div class="container d-flex align-items-stretch justify-content-between pt-2"
        id="kt_app_header_container" style="height: 1000px !important">
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <span>
                <div class="d-flex align-items-center gap-3">
                    {{-- <img alt="Logo" src="{{ asset('vendor/img/logo/logoCropped.svg') }}"
                        class="w-75px app-sidebar-logo-default me-1"> --}}
                    {{-- @include('web.components.logo') --}}
                    <x-logo />
                    <div class="d-flex flex-column">
                        <span class="fs-2 fw-bold d-none d-lg-block">أهل الحديث</span>
                        <span class="text-muted fs-8 d-none d-lg-block">أحمد ورافع</span>
                    </div>
                </div>
            </span>
        </div>
        <!--end::Logo-->

        <!--begin::Header wrapper-->
        <div class="Header-wrapper-menu d-flex align-items-stretch justify-content-between" id="kt_app_header_wrapper" style="flex-grow: 0.5;">

            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menu-->
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">
                    {{-- @guest --}}
                        <x-nav-item href="articles">{{ __('مقالات') }}</x-nav-item>
                        <x-nav-item href="books">{{ __('كتب') }}</x-nav-item>
                        <x-nav-item href="akida">{{ __('عقيدة') }}</x-nav-item>
                        <x-nav-item href="fiqh">{{ __('فقه') }}</x-nav-item>
                        <x-nav-item href="youtube">{{ __('فيديوهات') }}</x-nav-item>
                        <x-nav-item href="personalities">{{ __('شخصيات') }}</x-nav-item>
                    {{-- @else --}}
                    {{-- @endguest --}}
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Theme mode-->
                <div class="app-navbar-item">
                    <x-theme-toggle />
                </div>
                <!--end::Theme mode-->
                @guest
                    <div class="menu-item ps-3 ps-lg-0 pe-2 d-flex align-items-center justify-content-center flex-lg-grow-1">
                        <x-button href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</x-button>
                    </div>
                @endguest
                {{-- End Language --}}
                @auth
                    <!--begin::User menu-->
                    <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
                        <!--begin::Menu wrapper-->
                        <div class="cursor-pointer symbol symbol-35px" style="width: 35px; height: 35px;"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end">
                            <img src="" width="35px" height="35px"
                                class="rounded-3" alt="user">
                        </div>
                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-350px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-3">
                                        <img alt="User Avatar" src=""
                                            class="rounded-circle" width="50" height="50">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User Info-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="fw-bold fs-5 me-2">Ahmad</span>
                                            {{-- <span class="badge bg-success text-white fs-8 px-2 py-1">
                                                {{ $role == 'student' ? 'Student' : 'admin' }}
                                            </span> --}}
                                        </div>
                                        <span class="text-muted fs-7">Ahmad@gmail.com</span>
                                    </div>
                                    <!--end::User Info-->
                                </div>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5 my-1">
                                <a href="" class="menu-link px-5">
                                    {{ __('profile') }}
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5 my-1">
                                <button submit-form-id="logout-form" type="submit" class="menu-link logout-button px-5">
                                    {{ __('logout') }}
                                </button>
                            </div>
                            <!--end::Menu item-->
                            <form identifier="single-form-post-handler" form-id="logout-form" http-request
                                route="" on-success="handleSuccess" style="display: none;"
                                success-toast>
                                @csrf
                            </form>
                        </div>
                        <!--end::User account menu-->

                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::User menu-->
                @endauth
                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                        id="kt_app_header_menu_toggle">
                        <i class="bi bi-grid-3x3-gap-fill fs-1 icon-light"></i>
                    </div>
                </div>
                <!--end::Header menu toggle-->

                <!--begin::Aside toggle-->
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>

<script>
    function handleSuccess(response) {
        setTimeout(() => {
            window.location.href = '/';
        }, 2000);
    }
</script>
