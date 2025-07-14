@include('layouts/head-main')

<head>
    <title>Veículos</title>

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

        .new-task-btn {
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

        .new-task-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .tasks-section {
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

        .tasks-table {
            width: 100%;
            border-collapse: collapse;
            background-color: transparent;
        }

        .tasks-table th {
            background-color: transparent;
            color: #888;
            font-weight: 500;
            font-size: 14px;
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #3a3a3a;
        }

        .tasks-table td {
            padding: 16px;
            border-bottom: 1px solid #3a3a3a;
            color: #ffffff;
            font-size: 14px;
        }

        .tasks-table tr:hover {
            background-color: rgba(245, 158, 11, 0.05);
        }

        .priority-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }

        .priority-badge.alta {
            background-color: rgba(239, 68, 68, 0.2);
            color: #ef4444;
        }

        .priority-badge.media {
            background-color: rgba(245, 158, 11, 0.2);
            color: #f59e0b;
        }

        .priority-badge.baixa {
            background-color: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .status-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-badge.pendente {
            background-color: rgba(156, 163, 175, 0.2);
            color: #9ca3af;
        }

        .status-badge.em-andamento {
            background-color: rgba(59, 130, 246, 0.2);
            color: #3b82f6;
        }

        .status-badge.concluida {
            background-color: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .date-cell {
            font-weight: 500;
            color: #f59e0b;
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

        /* Estado vazio específico para tarefas */
        .no-tasks-state {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 50px 0;
            color: #888;
        }

        .calendar-icon {
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
                        <h1 class="page-title">Veículos</h1>
                        <a href="{{ route('veiculos.create') }}" class="new-task-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Novo Veículo
                        </a>
                    </div>

                    <!-- Vehicles Section -->
                    <div class="tasks-section">
                        <div class="section-header">
                            <h2 class="section-title">Gerenciar Veículos</h2>
                            <p class="section-description">Controle e organize informações da frota de veículos</p>
                            
                            <!-- Search -->
                            <div class="search-container">
                                <svg class="search-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                    <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                <input type="text" class="search-input" placeholder="Buscar por placa, modelo, marca ou status..." id="searchInput">
                            </div>
                        </div>

                        <!-- Vehicles Table -->
                        <table class="tasks-table" id="tasksTable">
                            <thead>
                                <tr>
                                    <th>Placa</th>
                                    <th>Veículo</th>
                                    <th>Capacidade</th>
                                    <th>Combustível</th>
                                    <th>Status</th>
                                    <th>Quilometragem</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="tasksTableBody">
                                <!-- Exemplos de veículos -->
                                <tr>
                                    <td><strong>ABC-1234</strong></td>
                                    <td>
                                        <div>
                                            <strong>Volkswagen Kombi</strong><br>
                                            <small style="color: #888;">2014 • Branco</small>
                                        </div>
                                    </td>
                                    <td>8 pessoas</td>
                                    <td><span class="priority-badge baixa">Flex</span></td>
                                    <td><span class="status-badge concluida">Ativo</span></td>
                                    <td class="date-cell">185.642 km</td>
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
                                                <a href="{{ route('veiculos.view', 1) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="{{ route('veiculos.edite', 1) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <button class="dropdown-item delete" onclick="confirmDelete(1, 'Volkswagen Kombi ABC-1234')">
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

                                <tr>
                                    <td><strong>XYZ-5678</strong></td>
                                    <td>
                                        <div>
                                            <strong>Mercedes Sprinter</strong><br>
                                            <small style="color: #888;">2020 • Prata</small>
                                        </div>
                                    </td>
                                    <td>16 pessoas</td>
                                    <td><span class="priority-badge media">Diesel</span></td>
                                    <td><span class="status-badge em-andamento">Manutenção</span></td>
                                    <td class="date-cell">89.450 km</td>
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
                                                <a href="{{ route('veiculos.view', 2) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="{{ route('veiculos.edite', 2) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <button class="dropdown-item delete" onclick="confirmDelete(2, 'Mercedes Sprinter XYZ-5678')">
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

                                <tr>
                                    <td><strong>DEF-9012</strong></td>
                                    <td>
                                        <div>
                                            <strong>Renault Master</strong><br>
                                            <small style="color: #888;">2018 • Azul</small>
                                        </div>
                                    </td>
                                    <td>20 pessoas</td>
                                    <td><span class="priority-badge media">Diesel</span></td>
                                    <td><span class="status-badge pendente">Inativo</span></td>
                                    <td class="date-cell">234.120 km</td>
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
                                                <a href="{{ route('veiculos.view', 3) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="{{ route('veiculos.edite', 3) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <button class="dropdown-item delete" onclick="confirmDelete(3, 'Renault Master DEF-9012')">
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

                        <!-- Empty State (mostrado quando não há veículos ou busca sem resultados) -->
                        <div id="emptyState" class="empty-state" style="display: none;">
                            <svg class="empty-state-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            <p>Nenhum veículo encontrado</p>
                        </div>

                        <!-- Estado quando não há veículos -->
                        <div id="noTasksState" class="no-tasks-state" style="display: none;">
                            <div class="calendar-icon">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 17h10l-2-6H9l-2 6z" stroke="currentColor" stroke-width="2"/>
                                    <path d="M6 6h15l-1 7H7L6 6z" stroke="currentColor" stroke-width="2"/>
                                    <path d="M9 11v6" stroke="currentColor" stroke-width="2"/>
                                    <path d="M15 11v6" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="8" cy="18" r="1" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="16" cy="18" r="1" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3>Nenhum veículo cadastrado</h3>
                            <p>Comece cadastrando o primeiro veículo da frota.</p>
                            <a href="{{ route('veiculos.create') }}" class="btn-create-first mt-4">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                Cadastrar Primeiro Veículo
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
            const tableRows = document.querySelectorAll('#tasksTableBody tr');
            const emptyState = document.getElementById('emptyState');
            const tasksTable = document.getElementById('tasksTable');
            let visibleRows = 0;
            
            tableRows.forEach(row => {
                const placa = row.cells[0].textContent.toLowerCase();
                const veiculo = row.cells[1].textContent.toLowerCase();
                const capacidade = row.cells[2].textContent.toLowerCase();
                const combustivel = row.cells[3].textContent.toLowerCase();
                const status = row.cells[4].textContent.toLowerCase();
                const quilometragem = row.cells[5].textContent.toLowerCase();
                
                if (placa.includes(searchTerm) || veiculo.includes(searchTerm) || 
                    capacidade.includes(searchTerm) || combustivel.includes(searchTerm) || 
                    status.includes(searchTerm) || quilometragem.includes(searchTerm)) {
                    row.style.display = '';
                    visibleRows++;
                } else {
                    row.style.display = 'none';
                }
            });

            // Show/hide empty state
            if (visibleRows === 0 && searchTerm !== '') {
                tasksTable.style.display = 'none';
                emptyState.style.display = 'block';
            } else {
                tasksTable.style.display = 'table';
                emptyState.style.display = 'none';
            }
        });



        // Confirm delete function
        function confirmDelete(vehicleId, vehicleName) {
            // Close any open dropdowns
            document.querySelectorAll('.actions-dropdown').forEach(dropdown => {
                dropdown.classList.remove('show');
            });

            Swal.fire({
                title: 'Tem certeza?',
                html: `Você realmente deseja excluir o veículo <strong>"${vehicleName}"</strong>?<br><br>Esta ação não pode ser desfeita!`,
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
                        html: `Aguarde enquanto o veículo <strong>"${vehicleName}"</strong> é excluído.`,
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
                            html: `O veículo <strong>"${vehicleName}"</strong> foi excluído com sucesso.`,
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
                            const tableRows = document.querySelectorAll('#tasksTableBody tr');
                            tableRows.forEach(row => {
                                const vehicleInfo = row.cells[1].textContent;
                                if (vehicleInfo.includes(vehicleName.split(' ')[0]) && vehicleInfo.includes(vehicleName.split(' ')[1])) {
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
            const tableRows = document.querySelectorAll('#tasksTableBody tr');
            const tasksTable = document.getElementById('tasksTable');
            const noTasksState = document.getElementById('noTasksState');
            
            if (tableRows.length === 0) {
                tasksTable.style.display = 'none';
                noTasksState.style.display = 'flex';
            }
        }

    
    </script>

</body>
</html>
