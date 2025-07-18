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
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
          class="toggle-icon hamburger-icon">
          <path d="M3 12h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M3 6h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
    </div>

    <div class="d-flex gap-2">

      <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon position-relative"
          id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-bell icon-lg">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
          </svg>
          <span class="badge bg-danger rounded-pill">5</span>
        </button>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
          aria-labelledby="page-header-notifications-dropdown">
          <!-- Cabeçalho -->
          <div class="p-3">
            <div class="row align-items-center">
              <div class="col">
                <h6 class="m-0">Notificações</h6>
              </div>
              <div class="col-auto">
                <a href="{{ route('notificacoes.index') }}" class="small text-reset text-decoration-underline">
                  Não lidas (3)
                </a>
              </div>
            </div>
          </div>

          <!-- Lista de notificações com scroll -->
          <div data-simplebar="init" style="max-height: 230px;">
            <div class="simplebar-wrapper" style="margin: 0;">
              <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
              </div>
              <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0; bottom: 0;">
                  <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="conteúdo rolável"
                    style="height: auto; overflow: hidden;">
                    <div class="simplebar-content" style="padding: 0;">
                      <a href="#!" class="text-reset notification-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/images/usuario.png') }}" class="rounded-circle avatar-sm"
                              alt="foto do usuário" />
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Pedro Silva</h6>
                            <div class="font-size-13 text-muted">
                              <p class="mb-1">
                                Você recebeu uma nova notificação.
                              </p>
                              <p class="mb-0">
                                <i class="mdi mdi-clock-outline"></i>
                                <span>há 1 hora</span>
                              </p>
                            </div>
                          </div>
                        </div>
                      </a>
                      <!-- repita blocos <a> aqui para cada notificação -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="simplebar-placeholder" style="width: 0; height: 0;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
              <div class="simplebar-scrollbar" style="width: 0; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
              <div class="simplebar-scrollbar" style="height: 0; display: none;"></div>
            </div>
          </div>

          <!-- Rodapé -->
          <div class="p-2 border-top d-grid">
            <a class="btn btn-sm btn-link font-size-14 text-center" href="{{ route('notificacoes.index') }}">
              <i class="mdi mdi-arrow-right-circle me-1"></i>
              <span>Ver mais...</span>
            </a>
          </div>
        </div>
      </div>



      <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item bg-light-subtle border-start border-end"
          id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="rounded-circle header-profile-user" src="assets/images/usuario.png" alt="Header Avatar">
          <span class="d-none d-xl-inline-block ms-1 fw-medium" style="color: #0f172a;">Paulo</span>
          <i class="mdi mdi-chevron-down d-none d-xl-inline-block" style="color: #0f172a;"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
          <!-- item-->
          <a class="dropdown-item" href="{{ route('perfil.index') }}"><i
              class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i>
            Sair</a>
        </div>
      </div>


    </div>
  </div>
</header>