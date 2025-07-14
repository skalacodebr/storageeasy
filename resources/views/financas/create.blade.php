@include('layouts/head-main')

<head>
    <title>Nova Transação</title>

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
            align-items: flex-start;
            margin-bottom: 32px;
            padding: 0 24px;
        }

        .header-left {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .page-title {
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .page-subtitle {
            font-size: 16px;
            color: #888;
        }

        .back-btn {
            background-color: #3a3a3a;
            color: #ffffff;
            border: 1px solid #4a4a4a;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .back-btn:hover {
            background-color: #4a4a4a;
            color: #ffffff;
            border-color: #5a5a5a;
        }

        .form-container {
            margin: 0 24px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .transaction-card {
            background-color: rgba(42, 42, 42, 0.5);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 32px;
            margin-bottom: 32px;
        }

        .card-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 32px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 8px;
        }

        .form-label.required::after {
            content: " *";
            color: #ef4444;
        }

        .form-input, .form-select, .form-textarea {
            width: 100%;
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 14px 16px;
            color: #ffffff;
            font-size: 14px;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .form-input:focus, .form-select:focus, .form-textarea:focus {
            outline: none;
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
        }

        .form-input::placeholder, .form-textarea::placeholder {
            color: #666;
        }

        .form-textarea {
            resize: vertical;
            min-height: 80px;
        }

        .form-select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 12px center;
            background-repeat: no-repeat;
            background-size: 16px;
            padding-right: 40px;
        }

        .form-select option {
            background-color: #2a2a2a;
            color: #ffffff;
        }

        .currency-input {
            position: relative;
        }

        .currency-symbol {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            font-size: 14px;
            font-weight: 500;
            pointer-events: none;
        }

        .currency-input .form-input {
            padding-left: 40px;
        }

        .date-input {
            position: relative;
        }

        .date-input .form-input {
            padding-right: 40px;
        }

        .date-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            pointer-events: none;
        }

        .form-actions {
            display: flex;
            gap: 16px;
            justify-content: flex-end;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid #3a3a3a;
        }

        .btn {
            padding: 14px 28px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-width: 120px;
        }

        .btn-secondary {
            background-color: #3a3a3a;
            color: #ffffff;
            border: 1px solid #4a4a4a;
        }

        .btn-secondary:hover {
            background-color: #4a4a4a;
            border-color: #5a5a5a;
            color: #ffffff;
        }

        .btn-primary {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: 1px solid #f59e0b;
        }

        .btn-primary:hover {
            background-color: #d97706;
            border-color: #d97706;
            color: #1a1a1a;
        }

        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .error-message {
            color: #ef4444;
            font-size: 12px;
            margin-top: 6px;
            display: none;
        }

        .form-input.error, .form-select.error, .form-textarea.error {
            border-color: #ef4444;
        }

        .form-input.error:focus, .form-select.error:focus, .form-textarea.error:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        /* Transaction type specific styling */
        .transaction-type-receita {
            border-left: 4px solid #22c55e;
        }

        .transaction-type-despesa {
            border-left: 4px solid #ef4444;
        }

        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
                padding: 0 20px;
            }

            .form-container {
                margin: 0 20px;
            }

            .transaction-card {
                padding: 24px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
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
                        <div class="header-left">
                            <h1 class="page-title">Nova Transação</h1>
                            <p class="page-subtitle">Registre uma nova transação financeira</p>
                        </div>
                        <a href="{{ route('financas.index') }}" class="back-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Voltar
                        </a>
                    </div>

                    <!-- Form Container -->
                    <div class="form-container">
                        <div class="transaction-card" id="transactionCard">
                            <h2 class="card-title">Nova Transação</h2>
                            
                            <form id="transactionForm" action="" method="POST">
                                @csrf
                                
                                <!-- Tipo de Transação -->
                                <div class="form-group">
                                    <label for="tipo" class="form-label required">Tipo de Transação</label>
                                    <select 
                                        id="tipo" 
                                        name="tipo" 
                                        class="form-select" 
                                        required
                                        onchange="updateTransactionType()"
                                    >
                                        <option value="">Selecione o tipo</option>
                                        <option value="receita">Receita</option>
                                        <option value="despesa">Despesa</option>
                                    </select>
                                    <div class="error-message" id="tipo-error"></div>
                                </div>

                                <!-- Valor -->
                                <div class="form-group">
                                    <label for="valor" class="form-label required">Valor (R$)</label>
                                    <div class="currency-input">
                                        <span class="currency-symbol">R$</span>
                                        <input 
                                            type="text" 
                                            id="valor" 
                                            name="valor" 
                                            class="form-input" 
                                            placeholder="0,00"
                                            required
                                        >
                                    </div>
                                    <div class="error-message" id="valor-error"></div>
                                </div>

                                <!-- Descrição -->
                                <div class="form-group">
                                    <label for="descricao" class="form-label required">Descrição</label>
                                    <textarea 
                                        id="descricao" 
                                        name="descricao" 
                                        class="form-textarea" 
                                        placeholder="Descrição da transação"
                                        rows="3"
                                        required
                                    ></textarea>
                                    <div class="error-message" id="descricao-error"></div>
                                </div>

                                <!-- Data -->
                                <div class="form-group">
                                    <label for="data" class="form-label required">Data</label>
                                    <div class="date-input">
                                        <input 
                                            type="date" 
                                            id="data" 
                                            name="data" 
                                            class="form-input" 
                                            required
                                        >
                                        <svg class="date-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                            <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                            <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                            <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                    </div>
                                    <div class="error-message" id="data-error"></div>
                                </div>

                                <!-- Categoria -->
                                <div class="form-group">
                                    <label for="categoria" class="form-label required">Categoria</label>
                                    <select 
                                        id="categoria" 
                                        name="categoria" 
                                        class="form-select" 
                                        required
                                    >
                                        <option value="">Selecione uma categoria</option>
                                        <!-- Categorias de Receita -->
                                        <optgroup label="Receitas" id="receita-options" style="display: none;">
                                            <option value="vendas">Vendas</option>
                                            <option value="servicos">Serviços</option>
                                            <option value="aluguel">Aluguel de Equipamentos</option>
                                            <option value="eventos">Eventos</option>
                                            <option value="outros-receitas">Outras Receitas</option>
                                        </optgroup>
                                        <!-- Categorias de Despesa -->
                                        <optgroup label="Despesas" id="despesa-options" style="display: none;">
                                            <option value="fornecedores">Fornecedores</option>
                                            <option value="equipamentos">Equipamentos</option>
                                            <option value="manutencao">Manutenção</option>
                                            <option value="transporte">Transporte</option>
                                            <option value="marketing">Marketing</option>
                                            <option value="funcionarios">Funcionários</option>
                                            <option value="impostos">Impostos</option>
                                            <option value="outros-despesas">Outras Despesas</option>
                                        </optgroup>
                                    </select>
                                    <div class="error-message" id="categoria-error"></div>
                                </div>

                                <!-- Roteiro (opcional) -->
                                <div class="form-group">
                                    <label for="roteiro" class="form-label">Roteiro (opcional)</label>
                                    <select 
                                        id="roteiro" 
                                        name="roteiro" 
                                        class="form-select"
                                    >
                                        <option value="">Selecione um roteiro</option>
                                        <option value="evento-casamento">Evento - Casamento</option>
                                        <option value="evento-aniversario">Evento - Aniversário</option>
                                        <option value="evento-corporativo">Evento - Corporativo</option>
                                        <option value="evento-formatura">Evento - Formatura</option>
                                        <option value="manutencao-equipamentos">Manutenção de Equipamentos</option>
                                        <option value="compra-materiais">Compra de Materiais</option>
                                        <option value="marketing-digital">Marketing Digital</option>
                                        <option value="outros">Outros</option>
                                    </select>
                                </div>

                                <!-- Form Actions -->
                                <div class="form-actions">
                                    <a href="{{ route('financas.index') }}" class="btn btn-secondary">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        Cancelar
                                    </a>
                                    <button type="submit" class="btn btn-primary" id="submitBtn">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" stroke="currentColor" stroke-width="2"/>
                                            <polyline points="17,21 17,13 7,13 7,21" stroke="currentColor" stroke-width="2"/>
                                            <polyline points="7,3 7,8 15,8" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        Salvar Transação
                                    </button>
                                </div>

                            </form>
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
        // Set today's date as default
        document.getElementById('data').valueAsDate = new Date();

        // Update transaction type styling and categories
        function updateTransactionType() {
            const tipo = document.getElementById('tipo').value;
            const card = document.getElementById('transactionCard');
            const categoria = document.getElementById('categoria');
            const receitaOptions = document.getElementById('receita-options');
            const despesaOptions = document.getElementById('despesa-options');
            
            // Reset category selection
            categoria.value = '';
            
            // Update card styling
            card.classList.remove('transaction-type-receita', 'transaction-type-despesa');
            
            if (tipo === 'receita') {
                card.classList.add('transaction-type-receita');
                receitaOptions.style.display = 'block';
                despesaOptions.style.display = 'none';
            } else if (tipo === 'despesa') {
                card.classList.add('transaction-type-despesa');
                receitaOptions.style.display = 'none';
                despesaOptions.style.display = 'block';
            } else {
                receitaOptions.style.display = 'none';
                despesaOptions.style.display = 'none';
            }
        }

        // Format currency input
        function formatCurrency(input) {
            let value = input.value.replace(/\D/g, '');
            value = (value / 100).toFixed(2);
            value = value.replace('.', ',');
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            input.value = value;
        }

        // Add currency formatting to value input
        document.getElementById('valor').addEventListener('input', function() {
            formatCurrency(this);
        });

        // Form validation
        function validateForm() {
            let isValid = true;
            const requiredFields = ['tipo', 'valor', 'descricao', 'data', 'categoria'];
            
            requiredFields.forEach(field => {
                const input = document.getElementById(field);
                const errorDiv = document.getElementById(field + '-error');
                
                if (!input.value.trim()) {
                    input.classList.add('error');
                    errorDiv.textContent = 'Este campo é obrigatório';
                    errorDiv.style.display = 'block';
                    isValid = false;
                } else {
                    input.classList.remove('error');
                    errorDiv.style.display = 'none';
                }
            });
            
            return isValid;
        }

        // Form submission
        document.getElementById('transactionForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm()) {
                const submitBtn = document.getElementById('submitBtn');
                const tipo = document.getElementById('tipo').value;
                const valor = document.getElementById('valor').value;
                const descricao = document.getElementById('descricao').value;
                
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Salvando...
                `;

                // Simulate form submission
                setTimeout(() => {
                    const tipoText = tipo === 'receita' ? 'Receita' : 'Despesa';
                    const icon = tipo === 'receita' ? 'success' : 'info';
                    
                    Swal.fire({
                        title: 'Transação Salva!',
                        html: `<strong>${tipoText}</strong> de <strong>R$ ${valor}</strong> foi registrada com sucesso.<br><br><em>"${descricao}"</em>`,
                        icon: icon,
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
                        // Reset form
                        this.reset();
                        document.getElementById('data').valueAsDate = new Date();
                        updateTransactionType();
                        
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = `
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" stroke="currentColor" stroke-width="2"/>
                                <polyline points="17,21 17,13 7,13 7,21" stroke="currentColor" stroke-width="2"/>
                                <polyline points="7,3 7,8 15,8" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            Salvar Transação
                        `;
                    });
                }, 1500);
            }
        });

        // Remove error styling on input
        document.querySelectorAll('.form-input, .form-select, .form-textarea').forEach(input => {
            input.addEventListener('input', function() {
                if (this.classList.contains('error')) {
                    this.classList.remove('error');
                    const errorDiv = document.getElementById(this.id + '-error');
                    if (errorDiv) {
                        errorDiv.style.display = 'none';
                    }
                }
            });
        });
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

        .swal-success-btn {
            background-color: #22c55e !important;
            border: none !important;
        }
        
        .swal-success-btn:hover {
            background-color: #16a34a !important;
        }

        /* Hide default date picker icon on some browsers */
        input[type="date"]::-webkit-calendar-picker-indicator {
            opacity: 0;
            position: absolute;
            right: 16px;
            width: 16px;
            height: 16px;
            cursor: pointer;
        }
    </style>

</body>
</html>
