<aside class="sidenav bg-blue navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
    id="sidenav-main">
    <div class="sidenav-header text-center">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}" target="_blank">
            <img src="{{ env('APP_URL') . '/img/logo-staff.png' }}" class="navbar-brand-img h-100" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 text-white">Menu</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">
                    <div
                        class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">Profil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'manageMCourse.indexStaff' ? 'active' : '' }}"
                    href="{{ route('manageMCourse.indexStaff') }}">
                    <div
                        class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-file-alt text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">Kursus Kahwin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'manageMRequest.indexStaff' ? 'active' : '' }}"
                    href="{{ route('manageMRequest.indexStaff') }}">
                    <div
                        class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-file-alt text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">Kebenaran Kahwin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'manageMRegistration.indexStaff' ? 'active' : '' }}"
                    href="{{ route('manageMRegistration.indexStaff') }}">
                    <div
                        class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-file-alt text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">Pendaftaran Perkahwinan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'manageMCard.indexStaff' ? 'active' : '' }}"
                    href="{{ route('manageMCard.index') }}">
                    <div
                        class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-id-card text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">Permohonan Kad Kahwin</span>
                </a>
            </li>

            
            <!-- Contoh SideNav -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Example</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'user.index' ? 'active' : '' }}"
                    href="{{ route('user.index') }}">
                    <div
                        class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'form-example' ? 'active' : '' }}"
                    href="{{ route('form-example') }}">
                    <div
                        class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Form</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'manage' ? 'active' : '' }}"
                    href="{{ route('manage') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Manage</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">

    </div>
</aside>
