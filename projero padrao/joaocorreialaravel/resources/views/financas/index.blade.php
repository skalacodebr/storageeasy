@include('layouts/head-main')

<head>
    <title>Finanças</title>

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

        .financas-section {
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

        .financas-table {
            width: 100%;
            border-collapse: collapse;
            background-color: transparent;
        }

        .financas-table th {
            background-color: transparent;
            color: #888;
            font-weight: 500;
            font-size: 14px;
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #3a3a3a;
        }

        .financas-table td {
            padding: 16px;
            border-bottom: 1px solid #3a3a3a;
            color: #ffffff;
            font-size: 14px;
        }

        .financas-table tr:hover {
            background-color: rgba(245, 158, 11, 0.05);
        }

        .transaction-info {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .transaction-description {
            font-weight: 600;
            color: #ffffff;
        }

        .transaction-category {
            color: #888;
            font-size: 12px;
        }

        .transaction-type {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .transaction-type.receita {
            background-color: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .transaction-type.despesa {
            background-color: rgba(239, 68, 68, 0.2);
            color: #ef4444;
        }

        .value-display {
            font-weight: 700;
            font-size: 16px;
        }

        .value-display.receita {
            color: #22c55e;
        }

        .value-display.despesa {
            color: #ef4444;
        }

        .date-display {
            color: #ffffff;
            font-weight: 500;
        }

        .roteiro-badge {
            display: inline-block;
            background-color: rgba(245, 158, 11, 0.2);
            color: #f59e0b;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 500;
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
            font-size: 14px;
            font-weight: 500;
            margin-top: 4px;
        }

        .modal-subtitle.receita {
            color: #22c55e;
        }

        .modal-subtitle.despesa {
            color: #ef4444;
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
            font-weight: 700;
            font-size: 18px;
        }

        .detail-value.currency.receita {
            color: #22c55e;
        }

        .detail-value.currency.despesa {
            color: #ef4444;
        }

        .detail-value.description {
            line-height: 1.5;
            background-color: rgba(42, 42, 42, 0.3);
            padding: 12px;
            border-radius: 6px;
            border-left: 3px solid #f59e0b;
        }
        
        div:where(.swal2-container) {
            z-index: 10601 !important;
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

            .financas-section {
                margin: 0 20px;
                padding: 24px;
            }

            .financas-table th,
            .financas-table td {
                padding: 12px 8px;
            }

            .search-input {
                font-size: 16px; /* Evita zoom no iOS */
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
                        <h1 class="page-title">Finanças</h1>
                        <a href="{{ route('financas.create') }}" class="add-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Nova Transação
                        </a>
                    </div>

                    <!-- Finanças Section -->
                    <div class="financas-section">
                        <div class="section-header">
                            <h2 class="section-title">Gerenciar Transações</h2>
                            <p class="section-description">Visualize, adicione, edite e exclua transações financeiras (receitas e despesas).</p>
                            
                            <!-- Search -->
                            <div class="search-container">
                                <svg class="search-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                    <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                <input type="text" class="search-input" placeholder="Buscar por descrição, categoria ou roteiro..." id="searchInput">
                            </div>
                        </div>

                        <!-- Finanças Table -->
                        <table class="financas-table" id="financasTable">
                            <thead>
                                <tr>
                                    <th>Transação</th>
                                    <th>Tipo</th>
                                    <th>Valor</th>
                                    <th>Data</th>
                                    <th>Roteiro</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="financasTableBody">
                                <!-- Dados serão inseridos via JavaScript -->
                            </tbody>
                        </table>

                        <!-- Empty State (inicialmente oculto) -->
                        <div class="empty-state" id="emptyState" style="display: none;">
                            <div class="empty-icon">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3 class="empty-title">Nenhuma transação encontrada</h3>
                            <p class="empty-subtitle">Comece adicionando sua primeira transação financeira.</p>
                            <a href="{{ route('financas.create') }}" class="empty-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Adicionar Transação
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Detalhes -->
    <div class="modal-overlay" id="transactionModal">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h3 class="modal-title" id="modalTransactionDescription">Descrição da Transação</h3>
                    <div class="modal-subtitle" id="modalTransactionType">Tipo</div>
                </div>
                <button class="modal-close" onclick="closeTransactionModal()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            
            <div class="modal-body">
                <div class="detail-section">
                    <div class="detail-row">
                        <div class="detail-label">Valor</div>
                        <div class="detail-value currency" id="modalTransactionValue">R$ 0,00</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Data</div>
                        <div class="detail-value" id="modalTransactionDate">-</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Categoria</div>
                        <div class="detail-value" id="modalTransactionCategory">-</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Roteiro</div>
                        <div class="detail-value" id="modalTransactionRoteiro">-</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Descrição Completa</div>
                        <div class="detail-value description" id="modalTransactionFullDescription">-</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Dados de exemplo das transações financeiras
        const transactions = [
            {
                id: 1,
                tipo: 'receita',
                valor: 3500.00,
                descricao: 'Pagamento evento casamento - João e Maria',
                data: '2025-01-15',
                categoria: 'eventos',
                roteiro: 'evento-casamento'
            },
            {
                id: 2,
                tipo: 'despesa',
                valor: 1250.00,
                descricao: 'Pagamento de equipamentos Som & Luz Eventos',
                data: '2025-01-10',
                categoria: 'equipamentos',
                roteiro: 'evento-casamento'
            },
            {
                id: 3,
                tipo: 'receita',
                valor: 2800.00,
                descricao: 'Serviço de DJ para festa de aniversário',
                data: '2025-01-08',
                categoria: 'servicos',
                roteiro: 'evento-aniversario'
            },
            {
                id: 4,
                tipo: 'despesa',
                valor: 450.00,
                descricao: 'Manutenção preventiva mesa de som',
                data: '2025-01-05',
                categoria: 'manutencao',
                roteiro: 'manutencao-equipamentos'
            },
            {
                id: 5,
                tipo: 'receita',
                valor: 5200.00,
                descricao: 'Evento corporativo - Empresa XYZ',
                data: '2025-01-03',
                categoria: 'eventos',
                roteiro: 'evento-corporativo'
            },
            {
                id: 6,
                tipo: 'despesa',
                valor: 800.00,
                descricao: 'Combustível e transporte de equipamentos',
                data: '2025-01-02',
                categoria: 'transporte',
                roteiro: 'evento-corporativo'
            }
        ];

        let filteredTransactions = [...transactions];

        // Formatação de moeda
        function formatCurrency(value) {
            return new Intl.NumberFormat('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            }).format(value);
        }

        // Formatação de data
        function formatDate(dateString) {
            const date = new Date(dateString + 'T00:00:00');
            return date.toLocaleDateString('pt-BR', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            });
        }

        // Tradução de categorias
        function translateCategory(category) {
            const categories = {
                'vendas': 'Vendas',
                'servicos': 'Serviços',
                'aluguel': 'Aluguel de Equipamentos',
                'eventos': 'Eventos',
                'outros-receitas': 'Outras Receitas',
                'fornecedores': 'Fornecedores',
                'equipamentos': 'Equipamentos',
                'manutencao': 'Manutenção',
                'transporte': 'Transporte',
                'marketing': 'Marketing',
                'funcionarios': 'Funcionários',
                'impostos': 'Impostos',
                'outros-despesas': 'Outras Despesas'
            };
            return categories[category] || category;
        }

        // Tradução de roteiros
        function translateRoteiro(roteiro) {
            const roteiros = {
                'evento-casamento': 'Evento - Casamento',
                'evento-aniversario': 'Evento - Aniversário',
                'evento-corporativo': 'Evento - Corporativo',
                'evento-formatura': 'Evento - Formatura',
                'manutencao-equipamentos': 'Manutenção de Equipamentos',
                'compra-materiais': 'Compra de Materiais',
                'marketing-digital': 'Marketing Digital',
                'outros': 'Outros'
            };
            return roteiros[roteiro] || roteiro;
        }

        // Renderizar tabela
        function renderTable() {
            const tbody = document.getElementById('financasTableBody');
            const emptyState = document.getElementById('emptyState');
            const financasTable = document.getElementById('financasTable');

            if (filteredTransactions.length === 0) {
                financasTable.style.display = 'none';
                emptyState.style.display = 'block';
                return;
            }

            financasTable.style.display = 'table';
            emptyState.style.display = 'none';

            tbody.innerHTML = filteredTransactions.map(transaction => `
                <tr>
                    <td>
                        <div class="transaction-info">
                            <div class="transaction-description">${transaction.descricao}</div>
                            <div class="transaction-category">${translateCategory(transaction.categoria)}</div>
                        </div>
                    </td>
                    <td>
                        <span class="transaction-type ${transaction.tipo}">${transaction.tipo === 'receita' ? 'Receita' : 'Despesa'}</span>
                    </td>
                    <td>
                        <span class="value-display ${transaction.tipo}">
                            ${transaction.tipo === 'receita' ? '+' : '-'} ${formatCurrency(transaction.valor)}
                        </span>
                    </td>
                    <td>
                        <span class="date-display">${formatDate(transaction.data)}</span>
                    </td>
                    <td>
                        <span class="roteiro-badge">${translateRoteiro(transaction.roteiro)}</span>
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
                                <a href="{{ route('financas.view', '') }}/${transaction.id}" class="dropdown-item">
                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Detalhes
                                </a>
                                <a href="{{ route('financas.edite', '') }}/${transaction.id}" class="dropdown-item">
                                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Editar
                                </a>
                                <button class="dropdown-item delete" onclick="deleteTransaction(${transaction.id}, '${transaction.descricao}')">
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
            `).join('');
        }

        // Busca
        function filterTransactions(searchTerm) {
            filteredTransactions = transactions.filter(transaction => 
                transaction.descricao.toLowerCase().includes(searchTerm.toLowerCase()) ||
                translateCategory(transaction.categoria).toLowerCase().includes(searchTerm.toLowerCase()) ||
                translateRoteiro(transaction.roteiro).toLowerCase().includes(searchTerm.toLowerCase())
            );
            renderTable();
        }

        // Event listeners
        document.getElementById('searchInput').addEventListener('input', function() {
            filterTransactions(this.value);
        });

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

        // Modal functions
        function openTransactionModal(transaction) {
            // Preencher dados do modal
            document.getElementById('modalTransactionDescription').textContent = transaction.descricao;
            document.getElementById('modalTransactionType').textContent = transaction.tipo === 'receita' ? 'Receita' : 'Despesa';
            document.getElementById('modalTransactionType').className = `modal-subtitle ${transaction.tipo}`;
            document.getElementById('modalTransactionValue').textContent = (transaction.tipo === 'receita' ? '+' : '-') + ' ' + formatCurrency(transaction.valor);
            document.getElementById('modalTransactionValue').className = `detail-value currency ${transaction.tipo}`;
            document.getElementById('modalTransactionDate').textContent = formatDate(transaction.data);
            document.getElementById('modalTransactionCategory').textContent = translateCategory(transaction.categoria);
            document.getElementById('modalTransactionRoteiro').textContent = translateRoteiro(transaction.roteiro);
            document.getElementById('modalTransactionFullDescription').textContent = transaction.descricao;
            
            // Mostrar modal
            document.getElementById('transactionModal').classList.add('show');
            document.body.style.overflow = 'hidden'; // Prevenir scroll do body
        }

        function closeTransactionModal() {
            document.getElementById('transactionModal').classList.remove('show');
            document.body.style.overflow = 'auto'; // Restaurar scroll do body
        }

        // Action functions
        function viewTransaction(id) {
            const transaction = transactions.find(t => t.id === id);
            if (transaction) {
                openTransactionModal(transaction);
            }
            // Close dropdown
            document.querySelectorAll('.actions-dropdown').forEach(dropdown => {
                dropdown.classList.remove('show');
            });
        }

        function deleteTransaction(id, description) {
            // Close dropdown first
            document.querySelectorAll('.actions-dropdown').forEach(dropdown => {
                dropdown.classList.remove('show');
            });
            
            // SweetAlert2 confirmation
            Swal.fire({
                title: 'Excluir Transação',
                html: `Tem certeza que deseja excluir a transação <strong>"${description}"</strong>?<br><br><small style="color: #888;">Esta ação não pode ser desfeita.</small>`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Sim, excluir',
                cancelButtonText: 'Cancelar',
                background: '#2a2a2a',
                color: '#ffffff',
                customClass: {
                    popup: 'swal-dark-popup',
                    title: 'swal-dark-title',
                    htmlContainer: 'swal-dark-html',
                    confirmButton: 'swal-confirm-btn',
                    cancelButton: 'swal-cancel-btn'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    // Simular delay de requisição
                    Swal.fire({
                        title: 'Excluindo...',
                        text: 'Aguarde um momento',
                        icon: 'info',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        background: '#2a2a2a',
                        color: '#ffffff',
                        customClass: {
                            popup: 'swal-dark-popup'
                        },
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    
                    // Simular requisição
                    setTimeout(() => {
                        // Remover da lista local para demonstração
                        const index = transactions.findIndex(t => t.id === id);
                        if (index > -1) {
                            transactions.splice(index, 1);
                            filterTransactions(document.getElementById('searchInput').value);
                        }
                        
                        // Sucesso
                        Swal.fire({
                            title: 'Excluída!',
                            text: `A transação "${description}" foi excluída com sucesso.`,
                            icon: 'success',
                            confirmButtonColor: '#10b981',
                            confirmButtonText: 'OK',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            customClass: {
                                popup: 'swal-dark-popup',
                                confirmButton: 'swal-success-btn'
                            },
                            buttonsStyling: false
                        });
                    }, 1500);
                }
            });
        }

        // Fechar modal ao clicar no overlay
        document.getElementById('transactionModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeTransactionModal();
            }
        });

        // Fechar modal com ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeTransactionModal();
            }
        });

        // Inicializar
        document.addEventListener('DOMContentLoaded', function() {
            renderTable();
        });
    </script>

    <style>
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
