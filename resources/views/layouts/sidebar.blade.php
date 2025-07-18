<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- Logo -->
                <li class="text-center sidebar-menu-logo"
                    style="border-bottom: 1px solid #192437;padding-bottom: 6.7px;margin-bottom: 18px;">
                    <img src="{{ asset('assets/images/logo-storagefacil.png') }}" alt="Logo" style="width: 64px;">
                </li>

                <li>
                    <a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard*') ? 'active' : '' }}">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="currentColor"
                                    stroke-width="2" fill="none" />
                                <polyline points="9,22 9,12 15,12 15,22" stroke="currentColor" stroke-width="2"
                                    fill="none" />
                            </svg>
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('mapa.index') }}"
                        class="{{ Request::is('mapa*') ? 'active' : '' }} position-relative">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor"
                                    stroke-width="2" fill="none" />
                                <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" fill="none" />
                            </svg>
                            <span>Mapa</span>
                        </div>

                    </a>
                </li>

                <li>
                    <a href="{{ route('leads.index') }}"
                        class="position-relative {{ Request::is('leads*') ? 'active' : '' }}">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor"
                                    stroke-width="2" fill="none" />
                                <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2" fill="none" />
                            </svg>
                            <span>Leads</span>
                        </div>

                    </a>
                </li>

                <li>
                    <a href="{{ route('produtos.index') }}"
                        class="position-relative {{ Request::is('produtos*') ? 'active' : '' }}">
                        <div>

                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"
                                    stroke="currentColor" stroke-width="2" fill="none" />
                                <line x1="3.27" y1="6.96" x2="12" y2="12.01" stroke="currentColor" stroke-width="2" />
                                <line x1="12" y1="12.01" x2="20.73" y2="6.96" stroke="currentColor" stroke-width="2" />
                                <line x1="12" y1="22.08" x2="12" y2="12" stroke="currentColor" stroke-width="2" />
                            </svg>
                            <span>Produtos</span>
                        </div>

                    </a>
                </li>

                <li>
                    <a href="{{ route('boxes.index') }}"
                        class="position-relative {{ Request::is('boxes*') ? 'active' : '' }}">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"
                                    fill="none" />
                                <line x1="3" y1="9" x2="21" y2="9" stroke="currentColor" stroke-width="2" />
                                <line x1="9" y1="21" x2="9" y2="9" stroke="currentColor" stroke-width="2" />
                            </svg>
                            <span>Boxes</span>
                        </div>

                    </a>
                </li>

                <li>
                    <a href="{{ route('unidades.index') }}"
                        class="position-relative {{ Request::is('unidades*') ? 'active' : '' }}">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"
                                    fill="none" />
                                <line x1="3" y1="9" x2="21" y2="9" stroke="currentColor" stroke-width="2" />
                                <line x1="12" y1="3" x2="12" y2="21" stroke="currentColor" stroke-width="2" />
                            </svg>
                            <span>Unidades</span>
                        </div>

                    </a>
                </li>

                <li>
                    <a href="{{ route('clientes.index') }}"
                        class="position-relative {{ Request::is('clientes*') ? 'active' : '' }}">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor"
                                    stroke-width="2" fill="none" />
                                <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2" fill="none" />
                            </svg>
                            <span>Clientes</span>
                        </div>

                    </a>
                </li>

                <li>
                    <a href="{{ route('contas-pagar.index') }}"
                        class="position-relative {{ Request::is('contas-pagar*') ? 'active' : '' }}">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"
                                    fill="none" />
                                <line x1="3" y1="9" x2="21" y2="9" stroke="currentColor" stroke-width="2" />
                                <path d="M8 13h8" stroke="currentColor" stroke-width="2" />
                                <path d="M8 17h6" stroke="currentColor" stroke-width="2" />
                            </svg>
                            <span>Contas a Pagar</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('entrada-locacao.index') }}"
                        class="position-relative {{ Request::is('entrada-locacao*') ? 'active' : '' }}">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14" stroke="currentColor" stroke-width="2" />
                                <path d="M19 12l-7 7-7-7" stroke="currentColor" stroke-width="2" />
                            </svg>
                            <span>Entrada de Locações</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('saida-locacao.index') }}"
                        class="position-relative {{ Request::is('saida-locacao*') ? 'active' : '' }}">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 19V5" stroke="currentColor" stroke-width="2" />
                                <path d="M5 12l7-7 7 7" stroke="currentColor" stroke-width="2" />
                            </svg>
                            <span>Saída de Locações</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('transferencia-boxes.index') }}"
                        class="position-relative {{ Request::is('transferencia-boxes*') ? 'active' : '' }}">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4v16" stroke="currentColor" stroke-width="2" />
                                <path d="M20 4v16" stroke="currentColor" stroke-width="2" />
                                <path d="M4 12h16" stroke="currentColor" stroke-width="2" />
                                <path d="M8 8l4-4 4 4" stroke="currentColor" stroke-width="2" />
                                <path d="M16 16l-4 4-4-4" stroke="currentColor" stroke-width="2" />
                            </svg>
                            <span>Transferência de Boxes</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('relatorios.index') }}"
                        class="position-relative {{ Request::is('relatorios*') ? 'active' : '' }}">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 19h16" stroke="currentColor" stroke-width="2" />
                                <path d="M4 15h16" stroke="currentColor" stroke-width="2" />
                                <path d="M4 11h16" stroke="currentColor" stroke-width="2" />
                                <path d="M4 7h16" stroke="currentColor" stroke-width="2" />
                                <path d="M9 15l3 3 3-3" stroke="currentColor" stroke-width="2" />
                            </svg>
                            <span>Relatórios</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('contratos.index') }}"
                        class=" position-relative {{ Request::is('contratos*') ? 'active' : '' }}">
                        <div>
                            <!-- SVG de contrato/documento -->
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="2" width="18" height="20" rx="3" stroke="currentColor"
                                    stroke-width="2" />
                                <path d="M7 6h10M7 10h10M7 14h6" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M15.5 18l1.5 1.5L20 16" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                            <span>Contratos</span>
                        </div>
                    </a>
                </li>

            </ul>
        </div>


    </div>
</div>

<script>
    function addActiveIndicator() {
        const activeLinks = document.querySelectorAll('#side-menu li a.active');

        activeLinks.forEach(link => {
            if (!link.querySelector('.active-indicator')) {
                const indicator = document.createElement('div');
                indicator.className = 'position-absolute top-0 bottom-0 start-0 bg-primary rounded-end active-indicator';
                indicator.style.width = '4px';
                link.insertBefore(indicator, link.firstChild);
            }
        });
    }

    // Executar quando o DOM estiver pronto
    document.addEventListener('DOMContentLoaded', addActiveIndicator);

    // Observar mudanças na classe active
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.attributeName === 'class') {
                addActiveIndicator();
            }
        });
    });

    document.querySelectorAll('#side-menu li a').forEach(link => {
        observer.observe(link, {
            attributes: true
        });
    });
</script>