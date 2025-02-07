<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="index.html">
            <img alt="Logo" style="height: 35px"
                src="{{ asset('core/vendor/img/logo/logo-no-background-dark.svg') }}"
                class="app-sidebar-logo-default theme-light-show" />
            <img alt="Logo" style="height: 35px" src="{{ asset('core/vendor/img/logo/logo-no-background.svg') }}"
                class="app-sidebar-logo-default theme-dark-show" />
            @if (LaravelLocalization::getCurrentLocale() == 'ar')
                <img alt="Logo" style="height: 33px;transform: scaleX(-1);"
                    src="{{ asset('vendor/img/logo/logo-icon.png') }}" class="app-sidebar-logo-minimize" />
            @else
                <img alt="Logo" style="height: 33px" src="{{ asset('core/vendor/img/logo/logo-icon.png') }}"
                    class="app-sidebar-logo-minimize" />
            @endif
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <i class="bi bi-arrow-right-short fs-3 rotate-180"></i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <!--begin::Scroll wrapper-->
            <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true">
                <!--begin::Menu-->
                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
                    data-kt-menu="true" data-kt-menu-expand="false">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click"
                        class="menu-item {{ request()->routeIs('dashboard.welcome') ? 'here show' : '' }} menu-accordion">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="bi bi-grid fs-2"></i>
                            </span>
                            <span class="menu-title">{{ __('common.dashboard.dashboards') }}</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link {{ request()->routeIs('dashboard.welcome') ? 'active' : '' }}"
                                    href="{{ route('dashboard.welcome') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Welcome</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item pt-5">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span
                                class="menu-heading fw-bold text-uppercase fs-7">{{ __('common.dashboard.pages') }}</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    @role(['admin', 'super_admin'])
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-person-lines-fill fs-2"></i>
                                </span>
                                <span class="menu-title">Users</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link {{ request()->routeIs('dashboard.users.index') ? 'active' : '' }}"
                                        href="{{ route('dashboard.users.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">{{ __('common.dashboard.overview') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="menu-item menu-accordion opacity-50 pe-none">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-person-lines-fill fs-2"></i>
                                </span>
                                <span class="menu-title">Users</span>
                                <span class="menu-location">
                                    <i class="bi bi-lock-fill fs-2"></i>
                                </span>
                            </span>
                        </div>
                    @endrole
                    <!--end:Menu item-->
                    @permission('writing_view')
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('dashboard.writing.index') ? 'active' : '' }}"
                                href="{{ route('dashboard.writing.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-file-earmark-text fs-2"></i>
                                </span>
                                <span class="menu-title">Writing</span>
                            </a>
                        </div>
                    @else
                        <div class="menu-item">
                            <p class="menu-link pb-0 opacity-50">
                                <span class="menu-icon">
                                    <i class="bi bi-file-earmark-text fs-2"></i>
                                </span>
                                <span class="menu-title">Writing</span>
                                <span class="menu-location">
                                    <i class="bi bi-lock-fill fs-2"></i>
                                </span>
                            </p>
                        </div>
                    @endpermission
                    <!--end:Menu item-->
                    @permission('categories_view')
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('dashboard.categories.index') ? 'active' : '' }}"
                                href="{{ route('dashboard.categories.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-tags fs-2"></i>
                                </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>
                    @else
                        <div class="menu-item">
                            <p class="menu-link pb-0 opacity-50">
                                <span class="menu-icon">
                                    <i class="bi bi-tags fs-2"></i>
                                </span>
                                <span class="menu-title">Categories</span>
                                <span class="menu-location">
                                    <i class="bi bi-lock-fill fs-2"></i>
                                </span>
                            </p>
                        </div>
                    @endpermission
                    <!--end:Menu item-->
                    <div class="menu-item">
                        @permission('scholars_view')
                            <a class="menu-link {{ request()->routeIs('dashboard.scholars.index') ? 'active' : '' }}"
                                href="{{ route('dashboard.scholars.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-person fs-2"></i>
                                </span>
                                <span class="menu-title">Scholars</span>
                            </a>
                        @else
                            <p class="menu-link pb-0 opacity-50">
                                <span class="menu-icon">
                                    <i class="bi bi-person fs-2"></i>
                                </span>
                                <span class="menu-title">Scholars</span>
                                <span class="menu-location">
                                    <i class="bi bi-lock-fill fs-2"></i>
                                </span>
                            </p>
                        @endpermission
                    </div>
                    <div class="menu-item">
                        @permission('youtubes_view')
                            <a class="menu-link {{ request()->routeIs('dashboard.youtubes.index') ? 'active' : '' }}"
                                href="{{ route('dashboard.youtubes.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-youtube fs-2"></i>
                                </span>
                                <span class="menu-title">Youtube</span>
                            </a>
                        @else
                            <p class="menu-link pb-0 opacity-50">
                                <span class="menu-icon">
                                    <i class="bi bi-youtube fs-2"></i>
                                </span>
                                <span class="menu-title">Youtube</span>
                                <span class="menu-location">
                                    <i class="bi bi-lock-fill fs-2"></i>
                                </span>
                            </p>
                        @endpermission
                    </div>
                    <div class="menu-item pt-5">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">Books</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    @permission('books_view')
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-book fs-2"></i>
                                </span>
                                <span class="menu-title">Books</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link {{ request()->routeIs('dashboard.books.index') ? 'active' : '' }}"
                                        href="{{ route('dashboard.books.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">{{ __('common.dashboard.overview') }}</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ request()->routeIs('dashboard.books.explanations.index') ? 'active' : '' }}"
                                        href="{{ route('dashboard.books.explanations.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Book Explanations</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="menu-item menu-accordion opacity-50 pe-none">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-book fs-2"></i>
                                </span>
                                <span class="menu-title">Books</span>
                                <span class="menu-location">
                                    <i class="bi bi-lock-fill fs-2"></i>
                                </span>
                            </span>
                        </div>
                    @endpermission
                    <!--end:Menu item-->
                    <div class="menu-item pt-5">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">Privileges</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    @role('super_admin')
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-person-lines-fill fs-2"></i>
                                </span>
                                <span class="menu-title">Privileges</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('dashboard.roles.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Roles</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('dashboard.permissions.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Permissions</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('dashboard.roles.users.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Roles Users</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('dashboard.permissions.users.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Permissions Users</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('dashboard.permission-role.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Permissions Roles</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="menu-item menu-accordion opacity-50 pe-none">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-person-lines-fill fs-2"></i>
                                </span>
                                <span class="menu-title">Privileges</span>
                                <span class="menu-location">
                                    <i class="bi bi-lock-fill fs-2"></i>
                                </span>
                            </span>
                        </div>
                    @endrole
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Scroll wrapper-->
        </div>
        <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-3" id="kt_app_sidebar_footer">
            <a href="#"
                class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
                data-kt-initialized="1">
                <span class="btn-label">{{ __('common.dashboard.docs_and_components') }}</span>
                <i class="bi bi-box-arrow-up-right p-0 btn-icon fs-2 m-0"></i>
            </a>
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
</div>
