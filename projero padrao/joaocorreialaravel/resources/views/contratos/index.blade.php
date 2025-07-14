@include('layouts/head-main')

<head>
    <title>Contratos</title>

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

        .new-contract-btn {
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

        .new-contract-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .contracts-section {
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

        .filter-btn[data-status="enviados"] {
            background-color: rgba(59, 130, 246, 0.1);
            border-color: rgba(59, 130, 246, 0.3);
            color: #3b82f6;
        }

        .filter-btn[data-status="enviados"]:hover,
        .filter-btn[data-status="enviados"].active {
            background-color: rgba(59, 130, 246, 0.2);
            border-color: #3b82f6;
            color: #3b82f6;
        }

        .filter-btn[data-status="assinados"] {
            background-color: rgba(34, 197, 94, 0.1);
            border-color: rgba(34, 197, 94, 0.3);
            color: #22c55e;
        }

        .filter-btn[data-status="assinados"]:hover,
        .filter-btn[data-status="assinados"].active {
            background-color: rgba(34, 197, 94, 0.2);
            border-color: #22c55e;
            color: #22c55e;
        }

        .filter-btn[data-status="urgentes"] {
            background-color: rgba(239, 68, 68, 0.1);
            border-color: rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }

        .filter-btn[data-status="urgentes"]:hover,
        .filter-btn[data-status="urgentes"].active {
            background-color: rgba(239, 68, 68, 0.2);
            border-color: #ef4444;
            color: #ef4444;
        }

        .contracts-table {
            width: 100%;
            border-collapse: collapse;
            background-color: transparent;
        }

        .contracts-table th {
            background-color: transparent;
            color: #888;
            font-weight: 500;
            font-size: 14px;
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #3a3a3a;
        }

        .contracts-table td {
            padding: 16px;
            border-bottom: 1px solid #3a3a3a;
            color: #ffffff;
            font-size: 14px;
        }

        .contracts-table tr:hover {
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

        .status-badge.enviado {
            background-color: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            border: 1px solid rgba(59, 130, 246, 0.3);
        }

        .status-badge.assinado {
            background-color: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.3);
        }

        .status-badge.urgente {
            background-color: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .action-btn {
            background-color: transparent;
            border: 1px solid #4a4a4a;
            color: #cccccc;
            padding: 8px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .action-btn:hover {
            background-color: #3a3a3a;
            color: #ffffff;
            border-color: #5a5a5a;
        }

        .action-btn.view {
            border-color: #f59e0b;
            color: #f59e0b;
        }

        .action-btn.view:hover {
            background-color: rgba(245, 158, 11, 0.1);
            border-color: #f59e0b;
        }

        .action-btn.edit {
            border-color: #22c55e;
            color: #22c55e;
        }

        .action-btn.edit:hover {
            background-color: rgba(34, 197, 94, 0.1);
            border-color: #22c55e;
        }

        .action-btn.copy {
            border-color: #8b5cf6;
            color: #8b5cf6;
        }

        .action-btn.copy:hover {
            background-color: rgba(139, 92, 246, 0.1);
            border-color: #8b5cf6;
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

        /* Responsividade */
        @media (max-width: 768px) {
            .status-filters {
                gap: 8px;
            }

            .filter-btn {
                font-size: 12px;
                padding: 6px 12px;
            }

            .action-buttons {
                gap: 4px;
            }

            .action-btn {
                padding: 6px;
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
                        <h1 class="page-title">Contratos</h1>
                        <a href="{{ route('agenda.create') }}" class="new-contract-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Novo Contrato
                        </a>
                    </div>

                    <!-- Contracts Section -->
                    <div class="contracts-section">
                        <div class="section-header">
                            <h2 class="section-title">Gerenciar Contratos</h2>
                            
                            <!-- Status Filters -->
                            <div class="status-filters">
                                <button class="filter-btn active" data-status="todos">Todos</button>
                                <button class="filter-btn" data-status="pendentes">Pendentes</button>
                                <button class="filter-btn" data-status="enviados">Enviados</button>
                                <button class="filter-btn" data-status="assinados">Assinados</button>
                                <button class="filter-btn" data-status="urgentes">Urgentes</button>
                            </div>
                        </div>

                        <!-- Contracts Table -->
                        <table class="contracts-table" id="contractsTable">
                            <thead>
                                <tr>
                                    <th>Evento</th>
                                    <th>Cliente</th>
                                    <th>Data do Evento</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="contractsTableBody">
                                <tr data-status="urgente">
                                    <td class="event-name">Show - Cliente</td>
                                    <td class="client-name">Testando</td>
                                    <td class="date-cell">03/06/2025</td>
                                    <td>
                                        <span class="status-badge urgente">Urgente</span>
                                    </td>
                                                                         <td>
                                         <div class="action-buttons">
                                             <a href="{{ route('contratos.view', 1) }}" class="action-btn view" title="Visualizar">
                                                 <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                     <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                 </svg>
                                             </a>
                                             <button class="action-btn copy" title="Copiar URL" onclick="copyContractUrl(1)">
                                                 <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <rect x="9" y="9" width="13" height="13" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                                     <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" stroke="currentColor" stroke-width="2"/>
                                                 </svg>
                                             </button>
                                             <a href="#" class="action-btn edit" title="Editar">
                                                 <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                     <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                 </svg>
                                             </a>
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
                            <p>Nenhum contrato encontrado para este filtro</p>
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
            const tableRows = document.querySelectorAll('#contractsTableBody tr');
            const emptyState = document.getElementById('emptyState');
            const contractsTable = document.getElementById('contractsTable');
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
                contractsTable.style.display = 'none';
                emptyState.style.display = 'block';
            } else {
                contractsTable.style.display = 'table';
                emptyState.style.display = 'none';
            }
                 }

         // Function to copy contract URL
         function copyContractUrl(contractId) {
             // Gera a URL do contrato
             const contractUrl = `${window.location.origin}/contratos/${contractId}`;
             
             // Copia para a área de transferência
             navigator.clipboard.writeText(contractUrl).then(function() {
                 // Mostra notificação de sucesso
                 Swal.fire({
                     title: 'URL Copiada!',
                     html: `A URL do contrato foi copiada para a área de transferência:<br><br><code>${contractUrl}</code>`,
                     icon: 'success',
                     confirmButtonColor: '#8b5cf6',
                     confirmButtonText: 'OK',
                     background: '#2a2a2a',
                     color: '#ffffff',
                     customClass: {
                         popup: 'swal-dark-popup',
                         title: 'swal-dark-title',
                         htmlContainer: 'swal-dark-content',
                         confirmButton: 'swal-confirm-btn'
                     }
                 });
             }).catch(function(err) {
                 // Fallback para navegadores mais antigos
                 const textArea = document.createElement('textarea');
                 textArea.value = contractUrl;
                 document.body.appendChild(textArea);
                 textArea.select();
                 document.execCommand('copy');
                 document.body.removeChild(textArea);
                 
                 Swal.fire({
                     title: 'URL Copiada!',
                     html: `A URL do contrato foi copiada para a área de transferência:<br><br><code>${contractUrl}</code>`,
                     icon: 'success',
                     confirmButtonColor: '#8b5cf6',
                     confirmButtonText: 'OK',
                     background: '#2a2a2a',
                     color: '#ffffff',
                     customClass: {
                         popup: 'swal-dark-popup',
                         title: 'swal-dark-title',
                         htmlContainer: 'swal-dark-content',
                         confirmButton: 'swal-confirm-btn'
                     }
                 });
             });
         }
     </script>

 </body>
 </html>
