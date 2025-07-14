@include('layouts/head-main')

<head>
    <title>Clientes</title>

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

        .new-client-btn {
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

        .new-client-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .clients-section {
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

        .clients-table {
            width: 100%;
            border-collapse: collapse;
            background-color: transparent;
        }

        .clients-table th {
            background-color: transparent;
            color: #888;
            font-weight: 500;
            font-size: 14px;
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #3a3a3a;
        }

        .clients-table td {
            padding: 16px;
            border-bottom: 1px solid #3a3a3a;
            color: #ffffff;
            font-size: 14px;
        }

        .clients-table tr:hover {
            background-color: rgba(245, 158, 11, 0.05);
        }

        .location-badge {
            display: flex;
            align-items: center;
            gap: 4px;
            color: #888;
        }

        .location-icon {
            width: 12px;
            height: 12px;
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

        .container-fluid {
            padding: 24px 0;
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
                        <h1 class="page-title">Clientes</h1>
                        <a href="{{ route('clientes.create') }}" class="new-client-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Novo Cliente
                        </a>
                    </div>

                    <!-- Clients Section -->
                    <div class="clients-section">
                        <div class="section-header">
                            <h2 class="section-title">Gerenciar Clientes</h2>
                            <p class="section-description">Visualize, adicione, edite e exclua clientes do sistema.</p>
                            
                            <!-- Search -->
                            <div class="search-container">
                                <svg class="search-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                    <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                <input type="text" class="search-input" placeholder="Buscar por nome, telefone ou email..." id="searchInput">
                            </div>
                        </div>

                        <!-- Clients Table -->
                        <table class="clients-table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Região</th>
                                    <th>Locais</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="clientsTableBody">
                                <tr>
                                    <td>Arthur Stein</td>
                                    <td>51995244054</td>
                                    <td>dudustein2025@gmail.com</td>
                                    <td>Zona Sul</td>
                                    <td>
                                        <div class="location-badge">
                                            <svg class="location-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/>
                                                <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                            1
                                        </div>
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
                                                <a href="{{ route('clientes.view', 1) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="{{ route('clientes.edite', 1) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <a href="{{ route('clientes.delete', 1) }}" class="dropdown-item delete">
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
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

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
            const tableRows = document.querySelectorAll('#clientsTableBody tr');
            
            tableRows.forEach(row => {
                const name = row.cells[0].textContent.toLowerCase();
                const phone = row.cells[1].textContent.toLowerCase();
                const email = row.cells[2].textContent.toLowerCase();
                
                if (name.includes(searchTerm) || phone.includes(searchTerm) || email.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>

</body>
</html>
