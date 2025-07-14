@include('layouts/head-main')

<head>
    <title>Orçamentos</title>

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

        .new-budget-btn {
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

        .new-budget-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .budgets-section {
            background-color: rgba(42, 42, 42, 0);
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

        /* Status Filters */
        .status-filters {
            display: flex;
            gap: 12px;
            margin-bottom: 32px;
            flex-wrap: wrap;
        }

        .filter-btn {
            background-color: #3a3a3a;
            border: 1px solid #4a4a4a;
            color: #cccccc;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .filter-btn:hover {
            background-color: #4a4a4a;
            color: #ffffff;
        }

        .filter-btn.active {
            background-color: #f59e0b;
            border-color: #f59e0b;
            color: #1a1a1a;
        }

        .filter-btn.active:hover {
            background-color: #d97706;
            border-color: #d97706;
        }

        /* Status-specific filter styles */
        .filter-btn[data-status="pendentes"] {
            background-color: rgba(245, 158, 11, 0.1);
            border-color: rgba(245, 158, 11, 0.3);
            color: #f59e0b;
        }

        .filter-btn[data-status="pendentes"]:hover,
        .filter-btn[data-status="pendentes"].active {
            background-color: rgba(245, 158, 11, 0.2);
            border-color: #f59e0b;
            color: #f59e0b;
        }

        .filter-btn[data-status="aceitos"] {
            background-color: rgba(34, 197, 94, 0.1);
            border-color: rgba(34, 197, 94, 0.3);
            color: #22c55e;
        }

        .filter-btn[data-status="aceitos"]:hover,
        .filter-btn[data-status="aceitos"].active {
            background-color: rgba(34, 197, 94, 0.2);
            border-color: #22c55e;
            color: #22c55e;
        }

        .filter-btn[data-status="recusados"] {
            background-color: rgba(239, 68, 68, 0.1);
            border-color: rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }

        .filter-btn[data-status="recusados"]:hover,
        .filter-btn[data-status="recusados"].active {
            background-color: rgba(239, 68, 68, 0.2);
            border-color: #ef4444;
            color: #ef4444;
        }

        .filter-btn[data-status="cancelados"] {
            background-color: rgba(107, 114, 128, 0.1);
            border-color: rgba(107, 114, 128, 0.3);
            color: #6b7280;
        }

        .filter-btn[data-status="cancelados"]:hover,
        .filter-btn[data-status="cancelados"].active {
            background-color: rgba(107, 114, 128, 0.2);
            border-color: #6b7280;
            color: #6b7280;
        }

        .budgets-table {
            width: 100%;
            border-collapse: collapse;
            background-color: transparent;
        }

        .budgets-table th {
            background-color: transparent;
            color: #888;
            font-weight: 500;
            font-size: 14px;
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #3a3a3a;
        }

        .budgets-table td {
            padding: 16px;
            border-bottom: 1px solid #3a3a3a;
            color: #ffffff;
            font-size: 14px;
        }

        .budgets-table tr:hover {
            background-color: rgba(245, 158, 11, 0.05);
        }

        .event-name {
            font-weight: 600;
            color: #ffffff;
        }

        .client-name {
            color: #cccccc;
        }

        .date-cell {
            color: #888;
        }

        .value-cell {
            font-weight: 600;
            color: #22c55e;
        }

        .advance-cell {
            font-weight: 500;
            color: #f59e0b;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-badge.pendente {
            background-color: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            border: 1px solid rgba(245, 158, 11, 0.3);
        }

        .status-badge.aceito {
            background-color: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.3);
        }

        .status-badge.recusado {
            background-color: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .status-badge.cancelado {
            background-color: rgba(107, 114, 128, 0.1);
            color: #6b7280;
            border: 1px solid rgba(107, 114, 128, 0.3);
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
            border: none;
            background: none;
            width: 100%;
            text-align: left;
        }

        .dropdown-item:hover {
            background-color: #3a3a3a;
            color: #ffffff;
        }

        .dropdown-item.accept {
            color: #22c55e;
        }

        .dropdown-item.accept:hover {
            background-color: rgba(34, 197, 94, 0.1);
        }

        .dropdown-item.reject {
            color: #ef4444;
        }

        .dropdown-item.reject:hover {
            background-color: rgba(239, 68, 68, 0.1);
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

        .container-fluid {
            padding: 24px 0;
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #888;
        }

        .empty-state-icon {
            width: 48px;
            height: 48px;
            margin: 0 auto 16px;
            opacity: 0.5;
        }

        /* Customização do SweetAlert para tema escuro */
        div:where(.swal2-container) {
            z-index: 10601 !important;
        }

        .swal-dark-popup {
            border: 1px solid #3a3a3a !important;
        }
        
        .swal-dark-title {
            color: #ffffff !important;
        }
        
        .swal-dark-content {
            color: #cccccc !important;
        }
        
        .swal-confirm-btn {
            background-color: #f59e0b !important;
            border: none !important;
        }
        
        .swal-confirm-btn:hover {
            background-color: #d97706 !important;
        }
        
        .swal-cancel-btn {
            background-color: #6b7280 !important;
            border: none !important;
        }
        
        .swal-cancel-btn:hover {
            background-color: #4b5563 !important;
        }

        .swal-accept-btn {
            background-color: #22c55e !important;
            border: none !important;
        }
        
        .swal-accept-btn:hover {
            background-color: #16a34a !important;
        }

        .swal-reject-btn {
            background-color: #ef4444 !important;
            border: none !important;
        }
        
        .swal-reject-btn:hover {
            background-color: #dc2626 !important;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .status-filters {
                gap: 8px;
            }

            .filter-btn {
                font-size: 12px;
                padding: 6px 12px;
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
                        <h1 class="page-title">Orçamentos</h1>
                        <a href="{{ route('agenda.create') }}" class="new-budget-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Novo Orçamento
                        </a>
                    </div>

                    <!-- Budgets Section -->
                    <div class="budgets-section">
                        <div class="section-header">
                            <h2 class="section-title">Gerenciar Orçamentos</h2>
                            
                            <!-- Status Filters -->
                            <div class="status-filters">
                                <button class="filter-btn active" data-status="todos">Todos</button>
                                <button class="filter-btn" data-status="pendentes">Pendentes</button>
                                <button class="filter-btn" data-status="aceitos">Aceitos</button>
                                <button class="filter-btn" data-status="recusados">Recusados</button>
                                <button class="filter-btn" data-status="cancelados">Cancelados</button>
                            </div>
                        </div>

                        <!-- Budgets Table -->
                        <table class="budgets-table" id="budgetsTable">
                            <thead>
                                <tr>
                                    <th>Evento</th>
                                    <th>Cliente</th>
                                    <th>Data</th>
                                    <th>Valor do Contrato</th>
                                    <th>Adiantamento</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="budgetsTableBody">
                                <tr data-status="pendente">
                                    <td class="event-name">Show em Casa Stein</td>
                                    <td class="client-name">Arthur Stein</td>
                                    <td class="date-cell">16/06/2025</td>
                                    <td class="value-cell">R$ 100,00</td>
                                    <td class="advance-cell">R$ 100,00</td>
                                    <td>
                                        <span class="status-badge pendente">Pendente</span>
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
                                                <a href="#" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <button class="dropdown-item accept" onclick="confirmAccept(1, 'Show em Casa Stein')">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    Aceitar
                                                </button>
                                                <button class="dropdown-item reject" onclick="confirmReject(1, 'Show em Casa Stein')">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <line x1="18" y1="6" x2="6" y2="18" stroke="currentColor" stroke-width="2"/>
                                                        <line x1="6" y1="6" x2="18" y2="18" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Recusar
                                                </button>
                                                <button class="dropdown-item delete" onclick="confirmDelete(1, 'Show em Casa Stein')">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <polyline points="3,6 5,6 21,6" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2 2h4a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Excluir
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Empty State -->
                        <div id="emptyState" class="empty-state" style="display: none;">
                            <svg class="empty-state-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            <p>Nenhum orçamento encontrado para este filtro</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Toggle dropdown menu
        function toggleDropdown(button) {
            const dropdown = button.nextElementSibling;
            const allDropdowns = document.querySelectorAll('.actions-dropdown');
            
            // Close all other dropdowns
            allDropdowns.forEach(d => {
                if (d !== dropdown) {
                    d.classList.remove('show');
                }
            });
            
            // Toggle current dropdown
            dropdown.classList.toggle('show');
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.actions-menu')) {
                document.querySelectorAll('.actions-dropdown').forEach(dropdown => {
                    dropdown.classList.remove('show');
                });
            }
        });

        // Filter buttons functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // Filter table rows
                const status = this.dataset.status;
                filterTable(status);
            });
        });

        function filterTable(status) {
            const tableRows = document.querySelectorAll('#budgetsTableBody tr');
            const emptyState = document.getElementById('emptyState');
            const budgetsTable = document.getElementById('budgetsTable');
            let visibleRows = 0;
            
            tableRows.forEach(row => {
                const rowStatus = row.dataset.status;
                
                if (status === 'todos' || rowStatus === status) {
                    row.style.display = '';
                    visibleRows++;
                } else {
                    row.style.display = 'none';
                }
            });

            // Show/hide empty state
            if (visibleRows === 0) {
                budgetsTable.style.display = 'none';
                emptyState.style.display = 'block';
            } else {
                budgetsTable.style.display = 'table';
                emptyState.style.display = 'none';
            }
        }

        // Confirm accept function
        function confirmAccept(budgetId, eventName) {
            document.querySelectorAll('.actions-dropdown').forEach(dropdown => {
                dropdown.classList.remove('show');
            });

            Swal.fire({
                title: 'Aceitar Orçamento',
                html: `Você deseja aceitar o orçamento para <strong>"${eventName}"</strong>?`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#22c55e',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Sim, aceitar!',
                cancelButtonText: 'Cancelar',
                background: '#2a2a2a',
                color: '#ffffff',
                customClass: {
                    popup: 'swal-dark-popup',
                    title: 'swal-dark-title',
                    htmlContainer: 'swal-dark-content',
                    confirmButton: 'swal-accept-btn',
                    cancelButton: 'swal-cancel-btn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Aceito!',
                        html: `O orçamento para <strong>"${eventName}"</strong> foi aceito com sucesso.`,
                        icon: 'success',
                        confirmButtonColor: '#22c55e',
                        confirmButtonText: 'OK',
                        background: '#2a2a2a',
                        color: '#ffffff',
                        customClass: {
                            popup: 'swal-dark-popup',
                            title: 'swal-dark-title',
                            htmlContainer: 'swal-dark-content',
                            confirmButton: 'swal-accept-btn'
                        }
                    });
                }
            });
        }

        // Confirm reject function
        function confirmReject(budgetId, eventName) {
            document.querySelectorAll('.actions-dropdown').forEach(dropdown => {
                dropdown.classList.remove('show');
            });

            Swal.fire({
                title: 'Recusar Orçamento',
                html: `Você deseja recusar o orçamento para <strong>"${eventName}"</strong>?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Sim, recusar!',
                cancelButtonText: 'Cancelar',
                background: '#2a2a2a',
                color: '#ffffff',
                customClass: {
                    popup: 'swal-dark-popup',
                    title: 'swal-dark-title',
                    htmlContainer: 'swal-dark-content',
                    confirmButton: 'swal-reject-btn',
                    cancelButton: 'swal-cancel-btn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Recusado!',
                        html: `O orçamento para <strong>"${eventName}"</strong> foi recusado.`,
                        icon: 'success',
                        confirmButtonColor: '#22c55e',
                        confirmButtonText: 'OK',
                        background: '#2a2a2a',
                        color: '#ffffff',
                        customClass: {
                            popup: 'swal-dark-popup',
                            title: 'swal-dark-title',
                            htmlContainer: 'swal-dark-content',
                            confirmButton: 'swal-accept-btn'
                        }
                    });
                }
            });
        }

        // Confirm delete function
        function confirmDelete(budgetId, eventName) {
            document.querySelectorAll('.actions-dropdown').forEach(dropdown => {
                dropdown.classList.remove('show');
            });

            Swal.fire({
                title: 'Tem certeza?',
                html: `Você realmente deseja excluir o orçamento <strong>"${eventName}"</strong>?<br><br>Esta ação não pode ser desfeita!`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar',
                background: '#2a2a2a',
                color: '#ffffff',
                customClass: {
                    popup: 'swal-dark-popup',
                    title: 'swal-dark-title',
                    htmlContainer: 'swal-dark-content',
                    confirmButton: 'swal-reject-btn',
                    cancelButton: 'swal-cancel-btn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Excluído!',
                        html: `O orçamento <strong>"${eventName}"</strong> foi excluído com sucesso.`,
                        icon: 'success',
                        confirmButtonColor: '#22c55e',
                        confirmButtonText: 'OK',
                        background: '#2a2a2a',
                        color: '#ffffff',
                        customClass: {
                            popup: 'swal-dark-popup',
                            title: 'swal-dark-title',
                            htmlContainer: 'swal-dark-content',
                            confirmButton: 'swal-accept-btn'
                        }
                    });
                }
            });
        }
    </script>

</body>
</html>
