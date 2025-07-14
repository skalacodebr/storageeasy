@include('layouts/head-main')

<head>
    <title>Produtos</title>

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

        .new-product-btn {
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

        .new-product-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .products-section {
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

        .products-table {
            width: 100%;
            border-collapse: collapse;
            background-color: transparent;
        }

        .products-table th {
            background-color: transparent;
            color: #888;
            font-weight: 500;
            font-size: 14px;
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #3a3a3a;
        }

        .products-table td {
            padding: 16px;
            border-bottom: 1px solid #3a3a3a;
            color: #ffffff;
            font-size: 14px;
        }

        .products-table tr:hover {
            background-color: rgba(245, 158, 11, 0.05);
        }

        .category-badge {
            display: inline-block;
            background-color: #3a3a3a;
            color: #ffffff;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }

        .price-cell {
            font-weight: 600;
            color: #22c55e;
        }

        .stock-cell {
            font-weight: 500;
        }

        .stock-low {
            color: #ef4444;
        }

        .stock-medium {
            color: #f59e0b;
        }

        .stock-high {
            color: #22c55e;
        }

        .status-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-badge.active {
            background-color: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .status-badge.inactive {
            background-color: rgba(156, 163, 175, 0.2);
            color: #9ca3af;
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

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #888;
        }

        div:where(.swal2-container) {
            z-index: 10601 !important;
        }

        .empty-state-icon {
            width: 48px;
            height: 48px;
            margin: 0 auto 16px;
            opacity: 0.5;
        }

        .product-code {
            font-family: 'Courier New', monospace;
            background-color: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 12px;
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
                        <h1 class="page-title">Produtos</h1>
                        <a href="{{ route('produtos.create') }}" class="new-product-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Novo Produto
                        </a>
                    </div>

                    <!-- Products Section -->
                    <div class="products-section">
                        <div class="section-header">
                            <h2 class="section-title">Gerenciar Produtos</h2>
                            <p class="section-description">Visualize, adicione, edite e exclua produtos do sistema.</p>
                            
                            <!-- Search -->
                            <div class="search-container">
                                <svg class="search-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                    <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                <input type="text" class="search-input" placeholder="Buscar por nome, código, categoria ou fornecedor..." id="searchInput">
                            </div>
                        </div>

                        <!-- Products Table -->
                        <table class="products-table">
                            <thead>
                                <tr>
                                    <th>Produto</th>
                                    <th>Código</th>
                                    <th>Categoria</th>
                                    <th>Preço</th>
                                    <th>Estoque</th>
                                    <th>Fornecedor</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="productsTableBody">
                                <tr>
                                    <td>Mesa de Som Digital 24 Canais</td>
                                    <td><span class="product-code">PROD001</span></td>
                                    <td><span class="category-badge">Equipamentos</span></td>
                                    <td class="price-cell">R$ 2.500,00</td>
                                    <td class="stock-cell stock-medium">5 Un</td>
                                    <td>Som & Luz Eventos</td>
                                    <td><span class="status-badge active">Ativo</span></td>
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
                                                <a href="{{ route('produtos.view', 1) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="{{ route('produtos.edite', 1) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <button class="dropdown-item delete" onclick="confirmDelete(1, 'Mesa de Som Digital 24 Canais')">
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
                                    <td>Refletor LED 200W RGB</td>
                                    <td><span class="product-code">PROD002</span></td>
                                    <td><span class="category-badge">Iluminação</span></td>
                                    <td class="price-cell">R$ 450,00</td>
                                    <td class="stock-cell stock-high">15 Un</td>
                                    <td>Iluminação Total</td>
                                    <td><span class="status-badge active">Ativo</span></td>
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
                                                <a href="{{ route('produtos.view', 2) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="{{ route('produtos.edite', 2) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <button class="dropdown-item delete" onclick="confirmDelete(2, 'Refletor LED 200W RGB')">
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
                                    <td>Balão Metalizado Dourado</td>
                                    <td><span class="product-code">PROD003</span></td>
                                    <td><span class="category-badge">Decoração</span></td>
                                    <td class="price-cell">R$ 15,00</td>
                                    <td class="stock-cell stock-high">50 Un</td>
                                    <td>Decorações Festivas</td>
                                    <td><span class="status-badge active">Ativo</span></td>
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
                                                <a href="{{ route('produtos.view', 3) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="{{ route('produtos.edite', 3) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <button class="dropdown-item delete" onclick="confirmDelete(3, 'Balão Metalizado Dourado')">
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
                                    <td>Salgadinho Gourmet Mix</td>
                                    <td><span class="product-code">PROD004</span></td>
                                    <td><span class="category-badge">Consumíveis</span></td>
                                    <td class="price-cell">R$ 25,00</td>
                                    <td class="stock-cell stock-low">2 Kg</td>
                                    <td>Buffet Gourmet</td>
                                    <td><span class="status-badge active">Ativo</span></td>
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
                                                <a href="{{ route('produtos.view', 4) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="{{ route('produtos.edite', 4) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <button class="dropdown-item delete" onclick="confirmDelete(4, 'Salgadinho Gourmet Mix')">
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
                                    <td>Cabo XLR Profissional 5m</td>
                                    <td><span class="product-code">PROD005</span></td>
                                    <td><span class="category-badge">Acessórios</span></td>
                                    <td class="price-cell">R$ 85,00</td>
                                    <td class="stock-cell stock-medium">8 Un</td>
                                    <td>Som & Luz Eventos</td>
                                    <td><span class="status-badge inactive">Inativo</span></td>
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
                                                <a href="{{ route('produtos.view', 5) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Detalhes
                                                </a>
                                                <a href="{{ route('produtos.edite', 5) }}" class="dropdown-item">
                                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <button class="dropdown-item delete" onclick="confirmDelete(5, 'Cabo XLR Profissional 5m')">
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

                        <!-- Empty State (hidden by default, shown when no results) -->
                        <div id="emptyState" class="empty-state" style="display: none;">
                            <svg class="empty-state-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            <p>Nenhum produto encontrado</p>
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
            const tableRows = document.querySelectorAll('#productsTableBody tr');
            const emptyState = document.getElementById('emptyState');
            let visibleRows = 0;
            
            tableRows.forEach(row => {
                const name = row.cells[0].textContent.toLowerCase();
                const code = row.cells[1].textContent.toLowerCase();
                const category = row.cells[2].textContent.toLowerCase();
                const supplier = row.cells[5].textContent.toLowerCase();
                
                if (name.includes(searchTerm) || code.includes(searchTerm) || 
                    category.includes(searchTerm) || supplier.includes(searchTerm)) {
                    row.style.display = '';
                    visibleRows++;
                } else {
                    row.style.display = 'none';
                }
            });

            // Show/hide empty state
            if (visibleRows === 0 && searchTerm !== '') {
                emptyState.style.display = 'block';
            } else {
                emptyState.style.display = 'none';
            }
        });

        // Confirm delete function with SweetAlert2
        function confirmDelete(productId, productName) {
            // Close any open dropdowns
            document.querySelectorAll('.actions-dropdown').forEach(dropdown => {
                dropdown.classList.remove('show');
            });

            Swal.fire({
                title: 'Tem certeza?',
                html: `Você realmente deseja excluir o produto <strong>"${productName}"</strong>?<br><br>Esta ação não pode ser desfeita!`,
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
                    confirmButton: 'swal-confirm-btn',
                    cancelButton: 'swal-cancel-btn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Mostrar loading
                    Swal.fire({
                        title: 'Excluindo...',
                        html: `Aguarde enquanto o produto <strong>"${productName}"</strong> é excluído.`,
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

                    // Simular delay e redirecionar
                    setTimeout(() => {
                        // Aqui você redirecionaria para a rota de exclusão
                        // window.location.href = `/produtos/delete/${productId}`;
                        
                        // Por enquanto, mostrar sucesso e remover da tabela
                        Swal.fire({
                            title: 'Excluído!',
                            html: `O produto <strong>"${productName}"</strong> foi excluído com sucesso.`,
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
                            // Remover a linha da tabela (simulação)
                            const tableRows = document.querySelectorAll('#productsTableBody tr');
                            tableRows.forEach(row => {
                                if (row.cells[0].textContent.trim() === productName) {
                                    row.style.opacity = '0.5';
                                    row.style.textDecoration = 'line-through';
                                    setTimeout(() => {
                                        row.remove();
                                    }, 1000);
                                }
                            });
                        });
                    }, 1500);
                }
            });
        }
    </script>

    <style>
        /* Customização do SweetAlert para tema escuro */
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
            background-color: #ef4444 !important;
            border: none !important;
        }
        
        .swal-confirm-btn:hover {
            background-color: #dc2626 !important;
        }
        
        .swal-cancel-btn {
            background-color: #6b7280 !important;
            border: none !important;
        }
        
        .swal-cancel-btn:hover {
            background-color: #4b5563 !important;
        }

        .swal-success-btn {
            background-color: #22c55e !important;
            border: none !important;
        }
        
        .swal-success-btn:hover {
            background-color: #16a34a !important;
        }

        /* Estilo para botões no dropdown */
        .dropdown-item.delete {
            background: none;
            border: none;
            width: 100%;
            text-align: left;
        }
    </style>

</body>
</html>
