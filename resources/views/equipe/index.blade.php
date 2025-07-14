@include('layouts/head-main')

<head>
    <title>Equipe</title>

    @include('layouts/head')
    @include('layouts/head-style')

    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            padding: 0 24px;
        }

        .page-title {
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .add-btn {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .add-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .equipe-section {
            background-color:rgba(42, 42, 42, 0);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin: 0 24px;
        }

        .section-header {
            margin-bottom: 24px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 8px;
        }

        .section-description {
            color: #888;
            font-size: 14px;
            margin-bottom: 24px;
        }

        .search-container {
            position: relative;
            margin-bottom: 24px;
        }

        .search-input {
            width: 100%;
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px 12px 40px;
            border-radius: 8px;
            font-size: 14px;
        }

        .search-input::placeholder {
            color: #666;
        }

        .search-input:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            color: #666;
        }

        .equipe-table {
            width: 100%;
            border-collapse: collapse;
            background-color: transparent;
        }

        .equipe-table th {
            background-color: transparent;
            color: #888;
            font-weight: 500;
            font-size: 14px;
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #3a3a3a;
        }

        .equipe-table td {
            padding: 16px;
            border-bottom: 1px solid #3a3a3a;
            color: #ffffff;
            font-size: 14px;
        }

        .equipe-table tr:hover {
            background-color: rgba(245, 158, 11, 0.05);
        }

        .member-name {
            font-weight: 600;
            color: #ffffff;
        }

        .member-role {
            color: #888;
            font-size: 12px;
            margin-top: 2px;
        }

        .value-display {
            font-weight: 600;
            color: #10b981;
        }

        .location-info {
            display: flex;
            align-items: center;
            gap: 4px;
            color: #888;
            font-size: 12px;
        }

        .actions-menu {
            position: relative;
            display: inline-block;
        }

        .actions-btn {
            background: none;
            border: none;
            color: #888;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .actions-btn:hover {
            background-color: #3a3a3a;
            color: #ffffff;
        }

        .actions-dropdown {
            position: absolute;
            right: 0;
            top: 100%;
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            min-width: 120px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            display: none;
        }

        .actions-dropdown.show {
            display: block;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 16px;
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .dropdown-item:hover {
            background-color: #3a3a3a;
            color: #ffffff;
        }

        .dropdown-item.delete {
            color: #ef4444;
        }

        .dropdown-item.delete:hover {
            background-color: rgba(239, 68, 68, 0.1);
        }

        .dropdown-icon {
            width: 16px;
            height: 16px;
        }

        .empty-state {
            text-align: center;
            padding: 64px 32px;
            color: #666;
        }

        .empty-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 16px;
            opacity: 0.5;
        }

        .empty-title {
            font-size: 18px;
            font-weight: 600;
            color: #888;
            margin: 0 0 8px 0;
        }

        .empty-subtitle {
            font-size: 14px;
            color: #666;
            margin: 0 0 24px 0;
        }

        .empty-btn {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .empty-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .container-fluid {
            padding: 24px 0;
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 2000;
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal-content {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 32px;
            max-width: 600px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid #3a3a3a;
        }

        .modal-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .modal-subtitle {
            color: #f59e0b;
            font-size: 14px;
            font-weight: 500;
            margin-top: 4px;
        }

        .modal-close {
            background: none;
            border: none;
            color: #888;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .modal-close:hover {
            background-color: #3a3a3a;
            color: #ffffff;
        }

        .modal-body {
            display: grid;
            gap: 24px;
        }

        .detail-section {
            display: grid;
            gap: 16px;
        }

        .detail-row {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 16px;
            align-items: start;
        }

        .detail-label {
            font-size: 14px;
            font-weight: 500;
            color: #888;
        }

        .detail-value {
            font-size: 14px;
            color: #ffffff;
            word-break: break-word;
        }

        .detail-value.currency {
            font-weight: 600;
            color: #10b981;
            font-size: 16px;
        }

        .detail-value.description {
            line-height: 1.5;
        }

        .status-badge-modal {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-badge-modal.ativo {
            background-color: rgba(16, 185, 129, 0.2);
            color: #10b981;
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        .status-badge-modal.inativo {
            background-color: rgba(239, 68, 68, 0.2);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .projects-info {
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .projects-icon {
            width: 24px;
            height: 24px;
            color: #f59e0b;
        }

        .projects-text {
            color: #ffffff;
            font-weight: 500;
        }

        .projects-count {
            color: #f59e0b;
            font-weight: 600;
            font-size: 18px;
        }

        div:where(.swal2-container) {
            z-index: 10601;
        }

        /* Loading State */
        .loading-state {
            text-align: center;
            padding: 64px 32px;
        }

        .loading-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 3px solid #3a3a3a;
            border-top: 3px solid #f59e0b;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loading-content p {
            color: #888;
            margin: 0;
            font-size: 14px;
        }

        /* Pagination Styles */
        .pagination-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 24px;
            padding: 16px 0;
            border-top: 1px solid #3a3a3a;
        }

        .pagination-info {
            color: #888;
            font-size: 14px;
        }

        .pagination {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 4px;
        }

        .pagination .page-item {
            display: block;
        }

        .pagination .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8px 12px;
            background-color: transparent;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            min-width: 40px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .pagination .page-link:hover {
            background-color: #3a3a3a;
            border-color: #4a4a4a;
            color: #ffffff;
        }

        .pagination .page-item.active .page-link {
            background-color: #f59e0b;
            border-color: #f59e0b;
            color: #1a1a1a;
            font-weight: 600;
        }

        .pagination .page-item.disabled .page-link {
            background-color: transparent;
            border-color: #2a2a2a;
            color: #666;
            cursor: not-allowed;
        }

        .pagination .page-item.disabled .page-link:hover {
            background-color: transparent;
            border-color: #2a2a2a;
            color: #666;
        }

        @media (max-width: 768px) {
            .modal-content {
                padding: 24px;
                margin: 20px;
                width: calc(100% - 40px);
            }

            .detail-row {
                grid-template-columns: 1fr;
                gap: 8px;
            }

            .detail-label {
                font-weight: 600;
                color: #ffffff;
            }
        }

        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
                padding: 0 20px;
            }

            .equipe-section {
                margin: 0 20px;
                padding: 16px;
            }

            .equipe-table {
                font-size: 12px;
            }

            .equipe-table th,
            .equipe-table td {
                padding: 12px 8px;
            }

            .search-input {
                font-size: 16px; /* Evita zoom no iOS */
            }

            /* Pagination responsive */
            .pagination-wrapper {
                flex-direction: column;
                gap: 16px;
                align-items: center;
            }

            .pagination {
                justify-content: center;
                flex-wrap: wrap;
            }

            .pagination .page-link {
                padding: 6px 10px;
                font-size: 12px;
                min-width: 32px;
            }

            /* Hide some table columns on mobile */
            .equipe-table th:nth-child(4),
            .equipe-table td:nth-child(4) {
                display: none;
            }
        }
    </style>
</head>

<body>
    @include('layouts/body')
    @include('layouts/menu')
    
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    
                    <!-- Page Header -->
                    <div class="page-header">
                        <h1 class="page-title">Equipe</h1>
                        <a href="{{ route('equipe.create') }}" class="add-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Novo Membro
                        </a>
                    </div>

                    <!-- Equipe Section -->
                    <div class="equipe-section">
                        <div class="section-header">
                            <h2 class="section-title">Gerenciar Equipe</h2>
                            <p class="section-description">Visualize, adicione, edite e exclua membros da equipe.</p>
                            
                            <!-- Search -->
                            <div class="search-container">
                                <svg class="search-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                    <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                <input type="text" class="search-input" placeholder="Buscar por nome, função ou especialidade..." id="searchInput">
                            </div>
                        </div>

                        <!-- Equipe Table -->
                        <table class="equipe-table" id="equipeTable">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Valor/Hora</th>
                                    <th>Custo Mensal</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="equipeTableBody">
                                <!-- Dados serão carregados via AJAX -->
                            </tbody>
                        </table>

                        <!-- Loading State -->
                        <div class="loading-state" id="loadingState" style="display: none;">
                            <div class="loading-content">
                                <div class="spinner"></div>
                                <p>Carregando dados da equipe...</p>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Paginação da equipe" id="paginationNav" style="display: none;">
                            <div class="pagination-wrapper">
                                <div class="pagination-info">
                                    <span id="paginationInfo">Mostrando 0 de 0 resultados</span>
                                </div>
                                <ul class="pagination" id="paginationList">
                                    <!-- Botões de paginação serão inseridos aqui -->
                                </ul>
                            </div>
                        </nav>

                        <!-- Empty State (inicialmente oculto) -->
                        <div class="empty-state" id="emptyState" style="display: none;">
                            <div class="empty-icon">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3 class="empty-title">Nenhum membro encontrado</h3>
                            <p class="empty-subtitle">Comece adicionando o primeiro membro da sua equipe.</p>
                            <a href="{{ route('equipe.create') }}" class="empty-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Adicionar Membro
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Detalhes -->
    <div class="modal-overlay" id="memberModal">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h3 class="modal-title" id="modalMemberName">Nome do Membro</h3>
                    <div class="modal-subtitle" id="modalMemberRole">Função</div>
                </div>
                <button class="modal-close" onclick="closeMemberModal()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            
            <div class="modal-body">
                <div class="detail-section">
                    <div class="detail-row">
                        <div class="detail-label">Descrição</div>
                        <div class="detail-value description" id="modalMemberDescription">-</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Status</div>
                        <div class="detail-value">
                            <span class="status-badge-modal" id="modalMemberStatus">Ativo</span>
                        </div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Valor por Hora</div>
                        <div class="detail-value currency" id="modalMemberHourlyRate">R$ 0,00</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Custo Mensal</div>
                        <div class="detail-value currency" id="modalMemberMonthlyCost">R$ 0,00</div>
                    </div>
                </div>
                
                <div class="projects-info">
                    <svg class="projects-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c1.66 0 3.22.45 4.56 1.23" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="projects-text">
                        Participou de <span class="projects-count" id="modalMemberProjects">0</span> projetos
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            let currentPage = 1;
            let currentSearch = '';
            const perPage = 10;

            // Formatação de moeda
            function formatCurrency(value) {
                if (!value) return 'R$ 0,00';
                const numValue = parseFloat(value.toString().replace(',', '.'));
                return 'R$ ' + numValue.toFixed(2).replace('.', ',').replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }

            // Carregar dados da equipe via AJAX
            function loadTeamData(page = 1, search = '') {
                showLoading();
                
                $.ajax({
                    url: '{{ route("equipe.data") }}',
                    type: 'GET',
                    data: {
                        page: page,
                        per_page: perPage,
                        search: search
                    },
                    success: function(response) {
                        if (response.success) {
                            renderTable(response.data);
                            renderPagination(response.pagination);
                            updatePaginationInfo(response.pagination);
                        } else {
                            showError('Erro ao carregar dados da equipe.');
                        }
                    },
                    error: function(xhr, status, error) {
                        showError('Erro de conexão: ' + error);
                    },
                    complete: function() {
                        hideLoading();
                    }
                });
            }

            // Mostrar estado de carregamento
            function showLoading() {
                $('#equipeTable').hide();
                $('#paginationNav').hide();
                $('#emptyState').hide();
                $('#loadingState').show();
            }

            // Esconder estado de carregamento
            function hideLoading() {
                $('#loadingState').hide();
            }

            // Renderizar tabela
            function renderTable(members) {
                const tbody = $('#equipeTableBody');
                const emptyState = $('#emptyState');
                const equipeTable = $('#equipeTable');

                if (members.length === 0) {
                    equipeTable.hide();
                    emptyState.show();
                    return;
                }

                equipeTable.show();
                emptyState.hide();

                const rows = members.map(member => `
                    <tr>
                        <td>
                            <div class="member-name">${member.nome}</div>
                            <div class="member-role">${member.email}</div>
                        </td>
                        <td>${member.email}</td>
                        <td>
                            <span class="value-display">${formatCurrency(member.valor_por_hora)}</span>
                        </td>
                        <td>
                            <span class="value-display">${member.custo_mensal ? formatCurrency(member.custo_mensal) : 'Não informado'}</span>
                        </td>
                        <td>
                            <span class="status-badge ${member.status.toLowerCase()}">${member.status}</span>
                        </td>
                        <td>
                            <div class="actions-menu">
                                <button class="actions-btn" onclick="toggleDropdown(this)">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="1" fill="currentColor"/>
                                        <circle cx="12" cy="5" r="1" fill="currentColor"/>
                                        <circle cx="12" cy="19" r="1" fill="currentColor"/>
                                    </svg>
                                </button>
                                <div class="actions-dropdown">
                                    <a href="#" class="dropdown-item" onclick="viewMember(${member.id})">
                                        <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        Detalhes
                                    </a>
                                    <a href="/equipe/edite/${member.id}" class="dropdown-item">
                                        <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        Editar
                                    </a>
                                    <a href="#" class="dropdown-item delete" onclick="deleteMember(${member.id}, '${member.nome}')">
                                        <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <polyline points="3,6 5,6 21,6" stroke="currentColor" stroke-width="2"/>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        Excluir
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                `).join('');

                tbody.html(rows);
            }

            // Renderizar paginação
            function renderPagination(pagination) {
                const paginationList = $('#paginationList');
                const paginationNav = $('#paginationNav');

                if (pagination.total_pages <= 1) {
                    paginationNav.hide();
                    return;
                }

                paginationNav.show();

                let paginationHTML = '';

                // Botão Anterior
                paginationHTML += `
                    <li class="page-item ${!pagination.has_prev ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changePage(${pagination.current_page - 1})" ${!pagination.has_prev ? 'tabindex="-1"' : ''}>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="15,18 9,12 15,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>
                `;

                // Páginas numeradas
                const maxVisiblePages = 5;
                let startPage = Math.max(1, pagination.current_page - Math.floor(maxVisiblePages / 2));
                let endPage = Math.min(pagination.total_pages, startPage + maxVisiblePages - 1);

                if (endPage - startPage + 1 < maxVisiblePages) {
                    startPage = Math.max(1, endPage - maxVisiblePages + 1);
                }

                for (let i = startPage; i <= endPage; i++) {
                    paginationHTML += `
                        <li class="page-item ${i === pagination.current_page ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
                        </li>
                    `;
                }

                // Botão Próximo
                paginationHTML += `
                    <li class="page-item ${!pagination.has_next ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changePage(${pagination.current_page + 1})" ${!pagination.has_next ? 'tabindex="-1"' : ''}>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="9,18 15,12 9,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>
                `;

                paginationList.html(paginationHTML);
            }

            // Atualizar informações da paginação
            function updatePaginationInfo(pagination) {
                const info = `Mostrando ${pagination.from} a ${pagination.to} de ${pagination.total} resultados`;
                $('#paginationInfo').text(info);
            }

            // Mostrar erro
            function showError(message) {
                Swal.fire({
                    title: 'Erro!',
                    text: message,
                    icon: 'error',
                    confirmButtonColor: '#ef4444',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup'
                    }
                });
            }

            // Event listeners
            $('#searchInput').on('input', function() {
                currentSearch = $(this).val();
                currentPage = 1;
                loadTeamData(currentPage, currentSearch);
            });

            // Carregar dados iniciais
            loadTeamData(currentPage, currentSearch);

            // Função global para mudança de página
            window.changePage = function(page) {
                if (page < 1) return;
                currentPage = page;
                loadTeamData(currentPage, currentSearch);
            };

            // Toggle dropdown menu
            window.toggleDropdown = function(button) {
                const dropdown = $(button).siblings('.actions-dropdown');
                const allDropdowns = $('.actions-dropdown');
                
                // Close all other dropdowns
                allDropdowns.not(dropdown).removeClass('show');
                
                // Toggle current dropdown
                dropdown.toggleClass('show');
            };

            // Close dropdowns when clicking outside
            $(document).on('click', function(event) {
                if (!$(event.target).closest('.actions-menu').length) {
                    $('.actions-dropdown').removeClass('show');
                }
            });

            // Função global para ver membro
            window.viewMember = function(id) {
                // Implementar visualização de detalhes
                $('.actions-dropdown').removeClass('show');
                // Por enquanto, apenas fechar dropdown
            };

            // Função global para deletar membro  
            window.deleteMember = function(id, name) {
                $('.actions-dropdown').removeClass('show');
                
                Swal.fire({
                    title: 'Excluir Membro',
                    html: `Tem certeza que deseja excluir <strong>${name}</strong> da equipe?<br><br><small style="color: #888;">Esta ação não pode ser desfeita.</small>`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444',
                    cancelButtonColor: '#6b7280',
                    confirmButtonText: 'Sim, excluir',
                    cancelButtonText: 'Cancelar',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Implementar exclusão via AJAX aqui
                        Swal.fire({
                            title: 'Excluído!',
                            text: `${name} foi removido da equipe com sucesso.`,
                            icon: 'success',
                            confirmButtonColor: '#10b981',
                            confirmButtonText: 'OK',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            customClass: {
                                popup: 'swal-dark-popup'
                            }
                        }).then(() => {
                            loadTeamData(currentPage, currentSearch);
                        });
                    }
                });
            };
        });
    </script>

    <style>
        .status-badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .status-badge.ativo {
            background-color: rgba(16, 185, 129, 0.2);
            color: #10b981;
        }

        .status-badge.inativo {
            background-color: rgba(239, 68, 68, 0.2);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        /* SweetAlert2 Custom Styles */
        .swal-dark-popup {
            border: 1px solid #3a3a3a !important;
        }

        .swal-confirm-btn {
            background-color: #ef4444 !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 8px !important;
            padding: 12px 24px !important;
            font-weight: 600 !important;
            font-size: 14px !important;
            transition: all 0.3s ease !important;
        }

        .swal-confirm-btn:hover {
            background-color: #dc2626 !important;
        }

        .swal-cancel-btn {
            background-color: #6b7280 !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 8px !important;
            padding: 12px 24px !important;
            font-weight: 600 !important;
            font-size: 14px !important;
            transition: all 0.3s ease !important;
        }

        .swal-cancel-btn:hover {
            background-color: #4b5563 !important;
        }

        .swal-success-btn {
            background-color: #10b981 !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 8px !important;
            padding: 12px 24px !important;
            font-weight: 600 !important;
            font-size: 14px !important;
            transition: all 0.3s ease !important;
        }

        .swal-success-btn:hover {
            background-color: #059669 !important;
        }
    </style>

</body>
</html>
