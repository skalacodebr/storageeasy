<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- Logo -->
                <li class="text-center sidebar-menu-logo" style="border-bottom: 1px solid #3a3a3a;padding-bottom: 6.7px;margin-bottom: 10px;">
                    <img src="{{ asset('assets/images/jlc-logo-web.png') }}" alt="Logo" style="width: 90px;">
                </li>

                <!-- VISÃO GERAL -->
                <li class="menu-title">VISÃO GERAL</li>
                <li class="{{ Request::is('dashboard*') ? 'mm-active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="currentColor" stroke-width="2" fill="none"/>
                            <polyline points="9,22 9,12 15,12 15,22" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- CLIENTES -->
                <li class="menu-title">CLIENTES</li>
                <li>
                    <a href="{{ route('clientes') }}" class="{{ Request::is('clientes*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" fill="none"/>
                            <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Clientes</span>
                    </a>
                </li>

                <!-- PLANEJAMENTO E AGENDA -->
                <li class="menu-title">PLANEJAMENTO E AGENDA</li>
                <li>
                    <a href="{{ route('agenda') }}" class="{{ Request::is('agenda*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2" fill="none"/>
                            <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                            <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                            <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        <span>Agenda</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tarefas.index') }}" class="{{ Request::is('tarefas*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" fill="none"/>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Tarefas Pessoais</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2" fill="none"/>
                            <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Roteiros</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('aguardando.index') }}" class="{{ Request::is('aguardando*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                            <polyline points="12,6 12,12 16,14" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Aguardando</span>
                    </a>
                </li>

                <!-- DOCUMENTOS E FINANÇAS -->
                <li class="menu-title">DOCUMENTOS E FINANÇAS</li>
                <li>
                    <a href="{{ route('contratos.index') }}" class="{{ Request::is('contratos*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2" fill="none"/>
                            <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2" fill="none"/>
                            <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2"/>
                            <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2"/>
                            <polyline points="10,9 9,9 8,9" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Contratos</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('orcamentos.index') }}" class="{{ Request::is('orcamentos*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2" fill="none"/>
                            <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2" fill="none"/>
                            <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2"/>
                            <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        <span>Orçamentos</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('financas.index') }}" class="{{ Request::is('financas*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="12" y1="1" x2="12" y2="23" stroke="currentColor" stroke-width="2"/>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Finanças</span>
                    </a>
                </li>

                <!-- ESTOQUE E PRODUTOS -->
                <li class="menu-title">ESTOQUE E PRODUTOS</li>
                <li>
                    <a href="{{ route('produtos.index') }}" class="{{ Request::is('produtos*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" stroke="currentColor" stroke-width="2" fill="none"/>
                            <polyline points="3.27,6.96 12,12.01 20.73,6.96" stroke="currentColor" stroke-width="2" fill="none"/>
                            <line x1="12" y1="22.08" x2="12" y2="12" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        <span>Produtos</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('fornecedor.index') }}" class="{{ Request::is('fornecedor*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" fill="none"/>
                            <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" fill="none"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="2" fill="none"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Fornecedores</span>
                    </a>
                </li>

                <!-- OPERACIONAL -->
                <li class="menu-title">OPERACIONAL</li>
                <li>
                    <a href="{{ route('checklist.index') }}" class="{{ Request::is('checklist*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" fill="none"/>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Checklists</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('equipe.index') }}" class="{{ Request::is('equipe*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" fill="none"/>
                            <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" fill="none"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="2" fill="none"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Equipe</span>
                    </a>
                </li>
                
                <!-- FERRAMENTAS -->
                <li class="menu-title">FERRAMENTAS</li>
                <li>
                    <a href="{{ route('asistente.index') }}" class="{{ Request::is('asistente*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Assistente</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('veiculos.index') }}" class="{{ Request::is('veiculos*') ? 'active' : '' }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" stroke="currentColor" stroke-width="2" fill="none"/>
                            <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" stroke="currentColor" stroke-width="2" fill="none"/>
                            <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                        <span>Veículos</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Botão Sair e Copyright -->
        <div class="sidebar-footer">
            <div class="sidebar-logout">
                <a href="#" class="logout-btn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" stroke="#dc3545" stroke-width="2" fill="none"/>
                        <polyline points="16,17 21,12 16,7" stroke="#dc3545" stroke-width="2" fill="none"/>
                        <line x1="21" y1="12" x2="9" y2="12" stroke="#dc3545" stroke-width="2"/>
                    </svg>
                    <span>Sair</span>
                </a>
            </div>
            <div class="sidebar-copyright mb-4">
                 © <span id="current-year">2025</span> João Luiz Correa
             </div>
        </div>
    </div>
</div>

