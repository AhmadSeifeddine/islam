<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
    <i class="bi bi-brightness-high theme-light-show icon-light fs-2" data-bs-toggle="tooltip" data-bs-placement="bottom"
        title="فاتح"></i>
    <i class="bi bi-moon-stars theme-dark-show fs-2" data-bs-toggle="tooltip" data-bs-placement="bottom"
        title="داكن"></i>
</a>
<!--begin::Menu toggle-->
<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
    data-kt-menu="true" data-kt-element="theme-mode-menu">
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2 d-flex align-items-center gap-2 active" data-kt-element="mode"
            data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                <i class="bi bi-brightness-high icon-light fs-2"></i>
            </span>
            <span class="menu-title">
                {{ __('فاتح') }}
            </span>
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2 d-flex align-items-center gap-2" data-kt-element="mode"
            data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                <i class="bi bi-moon-stars icon-light fs-2"></i>
            </span>
            <span class="menu-title">
                {{ __('داكن') }}
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0 ">
        <a href="#" class="menu-link px-3 py-2 d-flex align-items-center gap-2" data-kt-element="mode"
            data-kt-value="system">
            <span class="menu-icon" data-kt-element="icon">
                <i class="bi bi-display fs-2"></i>
            </span>
            <span class="menu-title">
                {{ __('النظام') }}
            </span>
        </a>
    </div>
    <!--end::Menu item-->
</div>
