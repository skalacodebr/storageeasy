@include('layouts/head-main')

<head>
    <title>Checklists</title>

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

        .new-checklist-btn {
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

        .new-checklist-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .checklists-section {
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

        .checklists-table {
            width: 100%;
            border-collapse: collapse;
            background-color: transparent;
        }

        .checklists-table th {
            background-color: transparent;
            color: #888;
            font-weight: 500;
            font-size: 14px;
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #3a3a3a;
        }

        .checklists-table td {
            padding: 16px;
            border-bottom: 1px solid #3a3a3a;
            color: #ffffff;
            font-size: 14px;
        }

        .checklists-table tr:hover {
            background-color: rgba(245, 158, 11, 0.05);
        }

        .checklist-name {
            font-weight: 600;
            color: #f59e0b;
        }

        .description-cell {
            color: #cccccc;
            max-width: 200px;
        }

        .description-text {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block;
        }

        .date-cell {
            font-weight: 500;
            color: #888;
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
            background: none;
            border: none;
            width: 100%;
            text-align: left;
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

        /* Estado vazio específico para checklists */
        .no-checklists-state {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 50px 0;
            color: #888;
        }

        .checklist-icon {
            font-size: 50px;
            margin-bottom: 20px;
            color: #888;
        }

        .btn-create-first {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            border-radius: 8px;
            padding: 12px 24px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 0 auto;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-create-first:hover {
            background-color: #d97706;
            color: #1a1a1a;
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

        .swal-delete-btn {
            background-color: #ef4444 !important;
            border: none !important;
        }
        
        .swal-delete-btn:hover {
            background-color: #dc2626 !important;
        }

        .swal-success-btn {
            background-color: #22c55e !important;
            border: none !important;
        }
        
        .swal-success-btn:hover {
            background-color: #16a34a !important;
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
                        <h1 class="page-title">Templates de Checklist</h1>
                        <a href="{{ route('checklist.create') }}" class="new-checklist-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Novo Template
                        </a>
                    </div>

                    <!-- Checklists Section -->
                    <div class="checklists-section">
                        <div class="section-header">
                            <h2 class="section-title">Gerenciar Templates</h2>
                            <p class="section-description">Visualize, edite e gerencie seus templates de checklist</p>
                            
                            <!-- Search -->
                            <div class="search-container">
                                <svg class="search-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                    <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                <input type="text" class="search-input" placeholder="Buscar por nome ou descrição..." id="searchInput">
                            </div>
                        </div>

                        <!-- Checklists Table -->
                        <table class="checklists-table" id="checklistsTable">
                            <thead>
                                <tr>
                                    <th>Nome do Checklist</th>
                                    <th>Descrição</th>
                                    <th>Data de Criação</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="checklistsTableBody">
                                <!-- Exemplo de checklists -->
                                <tr>
                                    <td class="checklist-name">Setup de Evento Corporativo</td>
                                    <td class="description-cell">
                                        <span class="description-text">Checklist completo para organização de eventos corporativos incluindo logística</span>
                                    </td>
                                    <td class="date-cell">15/12/2024</td>
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
                                                <a href="{{ route('checklist.view', 1) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="{{ route('checklist.edite', 1) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <button class="dropdown-item delete" onclick="confirmDelete(1, 'Setup de Evento Corporativo')">
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

                        <!-- Empty State (mostrado quando não há checklists ou busca sem resultados) -->
                        <div id="emptyState" class="empty-state" style="display: none;">
                            <svg class="empty-state-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            <p>Nenhum template encontrado</p>
                        </div>

                        <!-- Estado quando não há checklists -->
                        <div id="noChecklistsState" class="no-checklists-state" style="display: none;">
                            <div class="checklist-icon">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3>Nenhum template de checklist criado</h3>
                            <p>Comece criando seu primeiro template de checklist.</p>
                            <a href="{{ route('checklist.create') }}" class="btn-create-first mt-4">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                Criar Primeiro Template
                            </a>
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

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('#checklistsTableBody tr');
            const emptyState = document.getElementById('emptyState');
            const checklistsTable = document.getElementById('checklistsTable');
            let visibleRows = 0;
            
            tableRows.forEach(row => {
                const checklistName = row.cells[0].textContent.toLowerCase();
                const description = row.cells[1].textContent.toLowerCase();
                
                if (checklistName.includes(searchTerm) || description.includes(searchTerm)) {
                    row.style.display = '';
                    visibleRows++;
                } else {
                    row.style.display = 'none';
                }
            });

            // Show/hide empty state
            if (visibleRows === 0 && searchTerm !== '') {
                checklistsTable.style.display = 'none';
                emptyState.style.display = 'block';
            } else {
                checklistsTable.style.display = 'table';
                emptyState.style.display = 'none';
            }
        });

        // Confirm delete function
        function confirmDelete(checklistId, checklistName) {
            // Close any open dropdowns
            document.querySelectorAll('.actions-dropdown').forEach(dropdown => {
                dropdown.classList.remove('show');
            });

            Swal.fire({
                title: 'Tem certeza?',
                html: `Você realmente deseja excluir o template <strong>"${checklistName}"</strong>?<br><br>Esta ação não pode ser desfeita!`,
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
                    confirmButton: 'swal-delete-btn',
                    cancelButton: 'swal-cancel-btn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Excluindo...',
                        html: `Aguarde enquanto o template <strong>"${checklistName}"</strong> é excluído.`,
                        icon: 'info',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        background: '#2a2a2a',
                        color: '#ffffff',
                        customClass: {
                            popup: 'swal-dark-popup',
                            title: 'swal-dark-title',
                            htmlContainer: 'swal-dark-content'
                        },
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    setTimeout(() => {
                        Swal.fire({
                            title: 'Excluído!',
                            html: `O template <strong>"${checklistName}"</strong> foi excluído com sucesso.`,
                            icon: 'success',
                            confirmButtonColor: '#22c55e',
                            confirmButtonText: 'OK',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            customClass: {
                                popup: 'swal-dark-popup',
                                title: 'swal-dark-title',
                                htmlContainer: 'swal-dark-content',
                                confirmButton: 'swal-success-btn'
                            }
                        }).then(() => {
                            // Remover a linha da tabela
                            const tableRows = document.querySelectorAll('#checklistsTableBody tr');
                            tableRows.forEach(row => {
                                if (row.cells[0].textContent.trim() === checklistName) {
                                    row.style.opacity = '0.5';
                                    row.style.textDecoration = 'line-through';
                                    setTimeout(() => {
                                        row.remove();
                                        checkEmptyTable();
                                    }, 1000);
                                }
                            });
                        });
                    }, 1500);
                }
            });
        }

        // Check if table is empty
        function checkEmptyTable() {
            const tableRows = document.querySelectorAll('#checklistsTableBody tr');
            const checklistsTable = document.getElementById('checklistsTable');
            const noChecklistsState = document.getElementById('noChecklistsState');
            
            if (tableRows.length === 0) {
                checklistsTable.style.display = 'none';
                noChecklistsState.style.display = 'flex';
            }
        }

        // Initial check for empty table
        document.addEventListener('DOMContentLoaded', function() {
            // Se não há checklists iniciais, você pode descomentar a linha abaixo
            // checkEmptyTable();
        });

        // Truncate description to 15 characters on page load
        document.addEventListener('DOMContentLoaded', function() {
            const descriptionCells = document.querySelectorAll('.description-text');
            descriptionCells.forEach(cell => {
                const fullText = cell.textContent;
                if (fullText.length > 15) {
                    cell.textContent = fullText.substring(0, 15) + '...';
                    cell.title = fullText; // Show full text on hover
                }
            });
        });
    </script>

</body>
</html>
