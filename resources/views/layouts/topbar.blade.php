<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm"></span>
                    <span class="logo-lg"></span>
                </a>

                <a href="#" class="logo logo-light">
                    <span class="logo-sm"></span>
                    <span class="logo-lg"></span>
                </a>
            </div>

            <!-- Page Title -->
            <div class="page-title-box">
                <h4 class="mb-0 text-white">@yield('title')</h4>
            </div>

            <div class="btn-hamburger" id="vertical-menu-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="toggle-icon hamburger-icon">
                    <path d="M3 12h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 6h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <div class="d-flex gap-2">
          

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium setting_user_name" id="setting_user_name">Usuário</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="">
                        <i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Perfil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">
                        <i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Sair
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


