@include('layouts/head-main')

<head>
    <title>Nova Equipe</title>

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
            color: #888;
            font-size: 16px;
            margin: 0;
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
            background-color: rgba(42, 42, 42, 0);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 32px;
            margin: 0 24px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .form-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin: 0 0 24px 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .form-icon {
            width: 32px;
            height: 32px;
            background-color: #f59e0b;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1a1a1a;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #ffffff;
            margin-bottom: 8px;
        }

        .form-label.required::after {
            content: " *";
            color: #ef4444;
        }

        .form-input {
            width: 100%;
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 12px 16px;
            color: #ffffff;
            font-size: 14px;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        /* Estilos específicos para select */
        .form-input select,
        select.form-input {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23888' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6,9 12,15 18,9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding-right: 40px;
            cursor: pointer;
        }

        .form-input select option {
            background-color: #2a2a2a;
            color: #ffffff;
            padding: 8px 12px;
        }

        .form-input:focus {
            outline: none;
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
        }

        .form-input::placeholder {
            color: #666;
        }

        .form-textarea {
            min-height: 100px;
            resize: vertical;
            font-family: inherit;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
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
            pointer-events: none;
        }

        .currency-input .form-input {
            padding-left: 40px;
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
            padding: 12px 24px;
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
        }

        .btn-secondary {
            background-color: #3a3a3a;
            color: #ffffff;
            border: 1px solid #4a4a4a;
        }

        .btn-secondary:hover {
            background-color: #4a4a4a;
            border-color: #5a5a5a;
        }

        .btn-primary {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: 1px solid #f59e0b;
        }

        .btn-primary:hover {
            background-color: #d97706;
            border-color: #d97706;
        }

        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .form-help {
            font-size: 12px;
            color: #888;
            margin-top: 4px;
        }

        .error-message {
            color: #ef4444;
            font-size: 12px;
            margin-top: 4px;
            display: none;
        }

        .form-input.error {
            border-color: #ef4444;
        }

        .form-input.error:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        /* Permissions Styling */
        .permissions-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 16px;
            background-color: #2a2a2a;
        }

        .permission-group {
            display: flex;
            align-items: flex-start;
        }

        .permission-label {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            cursor: pointer;
            padding: 8px;
            border-radius: 6px;
            transition: all 0.3s ease;
            width: 100%;
        }

        .permission-label:hover {
            background-color: rgba(245, 158, 11, 0.05);
        }

        .permission-checkbox {
            width: 18px;
            height: 18px;
            margin: 0;
            accent-color: #f59e0b;
            cursor: pointer;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .permission-content {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .permission-text {
            font-weight: 500;
            color: #ffffff;
            font-size: 14px;
            line-height: 1.2;
        }

        .permission-desc {
            font-size: 12px;
            color: #888;
            line-height: 1.3;
        }

        .permission-label input:checked + .permission-content .permission-text {
            color: #f59e0b;
        }

        .permissions-container.error {
            border-color: #ef4444;
        }

        /* Select All Button */
        .permissions-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .select-all-btn {
            background: none;
            border: 1px solid #4a4a4a;
            color: #f59e0b;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .select-all-btn:hover {
            background-color: rgba(245, 158, 11, 0.1);
            border-color: #f59e0b;
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
                padding: 24px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .permissions-container {
                grid-template-columns: 1fr;
            }
        }

        div:where(.swal2-container) {
            z-index: 10601 !important;
        }

        .btn-check:focus+.btn-primary, .btn-primary:focus {
            color: #000000;
            background-color: #f59e0b;
            border-color: #f59e0b;
            -webkit-box-shadow: 0 0 0 .15rem rgba(62, 150, 241, .5);
            box-shadow: 0 0 0 .15rem #f59e0b59;
        }

        .btn-primary.disabled, .btn-primary:disabled {
            color: #000000;
            background-color: #f59e0b;
            border-color: #f59e0b;
        }
        /* SweetAlert2 Dark Theme */
        .swal-dark-popup {
            border: 1px solid #3a3a3a !important;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.4), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .swal2-popup.swal2-modal.swal-dark-popup .swal2-title {
            color: #ffffff !important;
            font-weight: 600;
        }

        .swal2-popup.swal2-modal.swal-dark-popup .swal2-content {
            color: #e5e7eb !important;
        }

        .swal2-popup.swal2-modal.swal-dark-popup .swal2-confirm {
            background-color: #f59e0b !important;
            border: none !important;
            color: #000000 !important;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 24px;
            transition: all 0.3s ease;
        }

        .swal2-popup.swal2-modal.swal-dark-popup .swal2-confirm:hover {
            background-color: #d97706 !important;
            transform: translateY(-1px);
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
                            <h1 class="page-title">Novo Membro da Equipe</h1>
                            <p class="page-subtitle">Adicione um novo membro à sua equipe</p>
                        </div>
                        <a href="{{ route('equipe.index') }}" class="back-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Voltar
                        </a>
                    </div>

                    <!-- Form Container -->
                    <div class="form-container">
                        <div class="form-title">
                            <div class="form-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            Informações do Membro
                        </div>

                        <form id="equipeForm" action="{{ route('equipe.store') }}" method="POST">
                            @csrf
                            
                            <!-- Nome -->
                            <div class="form-group">
                                <label for="nome" class="form-label required">Nome</label>
                                <input 
                                    type="text" 
                                    id="nome" 
                                    name="nome" 
                                    class="form-input" 
                                    placeholder="Digite o nome completo do membro"
                                    required
                                >
                                <div class="error-message" id="nomeError">Por favor, digite o nome do membro.</div>
                            </div>

                            <!-- Email, Senha e Status -->
                            <div class="form-row">
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email" class="form-label required">E-mail</label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        class="form-input" 
                                        placeholder="Digite o e-mail do membro"
                                        required
                                    >
                                    <div class="form-help">E-mail será usado para login no sistema</div>
                                    <div class="error-message" id="emailError">Por favor, digite um e-mail válido.</div>
                                </div>

                                <!-- Senha -->
                                <div class="form-group">
                                    <label for="senha" class="form-label required">Senha</label>
                                    <input 
                                        type="password" 
                                        id="senha" 
                                        name="senha" 
                                        class="form-input" 
                                        placeholder="Digite a senha do membro"
                                        minlength="6"
                                        required
                                    >
                                    <div class="form-help">Mínimo de 6 caracteres</div>
                                    <div class="error-message" id="senhaError">A senha deve ter pelo menos 6 caracteres.</div>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="form-group">
                                <label for="status_user" class="form-label required">Status</label>
                                <select 
                                    id="status_user" 
                                    name="status" 
                                    class="form-input"
                                    required
                                >
                                    <option value="">Selecione o status</option>
                                    <option value="ativo" selected>Ativo</option>
                                    <option value="inativo">Inativo</option>
                                </select>
                                <div class="form-help">Determina se o membro pode acessar o sistema</div>
                                <div class="error-message" id="statusUserError">Por favor, selecione um status.</div>
                            </div>

                            <!-- Permissões -->
                            <div class="form-group">
                                <label for="permissoes" class="form-label required">Permissões de Acesso</label>
                                <div class="permissions-header">
                                    <span></span>
                                    <button type="button" class="select-all-btn" onclick="toggleAllPermissions()">Selecionar Todos</button>
                                </div>
                                <div class="permissions-container" id="permissionsContainer">
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="1" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Dashboard</span>
                                                <span class="permission-desc">Visualizar painel principal</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="2" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Clientes</span>
                                                <span class="permission-desc">Gerenciar cadastro de clientes</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="3" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Agenda</span>
                                                <span class="permission-desc">Gerenciar eventos e agendamentos</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="4" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Assistente</span>
                                                <span class="permission-desc">Acessar assistente virtual</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="5" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Equipe</span>
                                                <span class="permission-desc">Gerenciar membros da equipe</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="6" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Fornecedores</span>
                                                <span class="permission-desc">Gerenciar fornecedores</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="7" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Produtos</span>
                                                <span class="permission-desc">Gerenciar produtos</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="8" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Finanças</span>
                                                <span class="permission-desc">Acessar relatórios financeiros</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="9" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Tarefas</span>
                                                <span class="permission-desc">Gerenciar tarefas</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="10" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Checklist</span>
                                                <span class="permission-desc">Gerenciar checklists</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="11" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Orçamentos</span>
                                                <span class="permission-desc">Criar e gerenciar orçamentos</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="12" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Contratos</span>
                                                <span class="permission-desc">Visualizar e gerenciar contratos</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="13" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Aguardando</span>
                                                <span class="permission-desc">Gerenciar itens aguardando</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="permission-group">
                                        <label class="permission-label">
                                            <input type="checkbox" name="permissoes[]" value="14" class="permission-checkbox">
                                            <div class="permission-content">
                                                <span class="permission-text">Veículos</span>
                                                <span class="permission-desc">Gerenciar frota de veículos</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-help">Selecione as páginas que este membro poderá acessar no sistema.</div>
                                <div class="error-message" id="permissoesError">Por favor, selecione pelo menos uma permissão.</div>
                            </div>

                            <!-- Valores -->
                            <div class="form-row">
                                <!-- Valor por Hora -->
                                <div class="form-group">
                                    <label for="valor_hora" class="form-label required">Valor por Hora</label>
                                    <div class="currency-input">
                                        <span class="currency-symbol">R$</span>
                                        <input 
                                            type="text" 
                                            id="valor_hora" 
                                            name="valor_por_hora" 
                                            class="form-input" 
                                            placeholder="0,00"
                                            value=""
                                            required
                                        >
                                    </div>
                                    <div class="form-help">Valor cobrado por hora de trabalho</div>
                                    <div class="error-message" id="valorHoraError">Por favor, digite um valor válido.</div>
                                </div>

                                <!-- Custo Mensal -->
                                <div class="form-group">
                                    <label for="custo_mensal" class="form-label">Custo Mensal</label>
                                    <div class="currency-input">
                                        <span class="currency-symbol">R$</span>
                                        <input 
                                            type="text" 
                                            id="custo_mensal" 
                                            name="custo_mensal" 
                                            class="form-input" 
                                            placeholder="0,00"
                                        >
                                    </div>
                                    <div class="form-help">Custo fixo mensal (salário, benefícios, etc.)</div>
                                </div>
                            </div>

                            <!-- Form Actions -->
                            <div class="form-actions">
                                <a href="{{ route('equipe.index') }}" class="btn btn-secondary">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary" id="submitBtn">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="17,21 17,13 7,13 7,21" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="7,3 7,8 15,8" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Salvar
                                </button>
                            </div>
                        </form>
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
        // Formatação de moeda
        function formatCurrency(input) {
            let value = input.value.replace(/\D/g, '');
            if (value === '') {
                input.value = '';
                return;
            }
            value = (value / 100).toFixed(2);
            value = value.replace('.', ',');
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            input.value = value;
        }

        // Aplicar formatação aos campos de valor
        document.getElementById('valor_hora').addEventListener('input', function() {
            formatCurrency(this);
        });

        document.getElementById('custo_mensal').addEventListener('input', function() {
            formatCurrency(this);
        });

        // Função para selecionar/deselecionar todas as permissões
        function toggleAllPermissions() {
            const checkboxes = document.querySelectorAll('input[name="permissoes[]"]');
            const allChecked = Array.from(checkboxes).every(cb => cb.checked);
            
            checkboxes.forEach(cb => {
                cb.checked = !allChecked;
            });
            
            // Atualizar texto do botão
            const button = document.querySelector('.select-all-btn');
            button.textContent = allChecked ? 'Selecionar Todos' : 'Desselecionar Todos';
            
            // Remover erro se pelo menos uma permissão estiver selecionada
            if (!allChecked) {
                document.getElementById('permissionsContainer').classList.remove('error');
                document.getElementById('permissoesError').style.display = 'none';
            }
        }

        // Validação do formulário com SweetAlert
        function validateForm() {
            // Validar nome
            const nome = $('#nome').val().trim();
            if (!nome) {
                Swal.fire({
                    title: 'Campo obrigatório!',
                    text: 'Por favor, digite o nome do membro da equipe.',
                    icon: 'warning',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup',
                    }
                }).then(() => {
                    $('#nome').focus();
                });
                return false;
            }

            // Validar email
            const email = $('#email').val().trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email) {
                Swal.fire({
                    title: 'Campo obrigatório!',
                    text: 'Por favor, digite o e-mail do membro.',
                    icon: 'warning',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup',
                    }
                }).then(() => {
                    $('#email').focus();
                });
                return false;
            }
            if (!emailRegex.test(email)) {
                Swal.fire({
                    title: 'E-mail inválido!',
                    text: 'Por favor, digite um e-mail válido.',
                    icon: 'warning',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup',
                    }
                }).then(() => {
                    $('#email').focus();
                });
                return false;
            }

            // Validar senha
            const senha = $('#senha').val().trim();
            if (!senha) {
                Swal.fire({
                    title: 'Campo obrigatório!',
                    text: 'Por favor, digite a senha do membro.',
                    icon: 'warning',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup',
                    }
                }).then(() => {
                    $('#senha').focus();
                });
                return false;
            }
            if (senha.length < 6) {
                Swal.fire({
                    title: 'Senha muito curta!',
                    text: 'A senha deve ter pelo menos 6 caracteres.',
                    icon: 'warning',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup',
                    }
                }).then(() => {
                    $('#senha').focus();
                });
                return false;
            }

            // Validar status
            const status = $('#status_user').val();
            if (!status) {
                Swal.fire({
                    title: 'Campo obrigatório!',
                    text: 'Por favor, selecione o status do membro.',
                    icon: 'warning',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup',
                    }
                }).then(() => {
                    $('#status_user').focus();
                });
                return false;
            }

            // Validar permissões
            const permissoes = $('input[name="permissoes[]"]:checked');
            if (permissoes.length === 0) {
                Swal.fire({
                    title: 'Permissões obrigatórias!',
                    text: 'Por favor, selecione pelo menos uma permissão para o membro.',
                    icon: 'warning',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup',
                    }
                });
                return false;
            }

            // Validar valor por hora
            const valorHora = $('#valor_hora').val().trim();
            if (!valorHora || valorHora === '0,00' || valorHora === '' || parseFloat(valorHora.replace(',', '.')) <= 0) {
                Swal.fire({
                    title: 'Campo obrigatório!',
                    text: 'Por favor, digite um valor por hora válido e maior que zero.',
                    icon: 'warning',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup',
                    }
                }).then(() => {
                    $('#valor_hora').focus();
                });
                return false;
            }

            return true;
        }

        // Remover erro ao digitar
        document.getElementById('nome').addEventListener('input', function() {
            if (this.value.trim()) {
                this.classList.remove('error');
                document.getElementById('nomeError').style.display = 'none';
            }
        });

        document.getElementById('email').addEventListener('input', function() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (this.value.trim() && emailRegex.test(this.value)) {
                this.classList.remove('error');
                document.getElementById('emailError').style.display = 'none';
            }
        });

        document.getElementById('senha').addEventListener('input', function() {
            if (this.value.trim() && this.value.length >= 6) {
                this.classList.remove('error');
                document.getElementById('senhaError').style.display = 'none';
            }
        });

        document.getElementById('status_user').addEventListener('change', function() {
            if (this.value) {
                this.classList.remove('error');
                document.getElementById('statusUserError').style.display = 'none';
            }
        });

        document.getElementById('valor_hora').addEventListener('input', function() {
            if (this.value.trim() && this.value !== '0,00') {
                this.classList.remove('error');
                document.getElementById('valorHoraError').style.display = 'none';
            }
        });

        // Garantir que o campo não esteja vazio ao fazer blur
        document.getElementById('valor_hora').addEventListener('blur', function() {
            if (!this.value.trim() || this.value === '0,00') {
                this.value = '';
            }
        });

        // Remover erro das permissões ao selecionar qualquer checkbox
        document.querySelectorAll('input[name="permissoes[]"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const checkedPermissions = document.querySelectorAll('input[name="permissoes[]"]:checked');
                if (checkedPermissions.length > 0) {
                    document.getElementById('permissionsContainer').classList.remove('error');
                    document.getElementById('permissoesError').style.display = 'none';
                }
                
                // Atualizar texto do botão "Selecionar Todos"
                const allCheckboxes = document.querySelectorAll('input[name="permissoes[]"]');
                const allChecked = Array.from(allCheckboxes).every(cb => cb.checked);
                const button = document.querySelector('.select-all-btn');
                button.textContent = allChecked ? 'Desselecionar Todos' : 'Selecionar Todos';
            });
        });

        // Submissão do formulário com jQuery
        $('#equipeForm').on('submit', function(e) {
            e.preventDefault();
            
            if (validateForm()) {
                const submitBtn = $('#submitBtn');
                const originalContent = submitBtn.html();
                
                // Desabilitar botão e mostrar loading
                submitBtn.prop('disabled', true);
                submitBtn.html(`
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Salvando...
                `);

                // Preparar dados do formulário
                const formData = new FormData(this);
                
                // Debug: verificar se o valor está sendo capturado
                console.log('Valor por hora enviado:', formData.get('valor_por_hora'));
                
                // Enviar via AJAX
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: 'Sucesso!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonColor: '#f59e0b',
                                confirmButtonText: 'OK',
                                background: '#2a2a2a',
                                color: '#ffffff',
                                customClass: {
                                    popup: 'swal-dark-popup',
                                }
                            }).then(() => {
                                window.location.href = "{{ route('equipe.index') }}";
                            });
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = 'Erro ao salvar dados.';
                        
                        if (xhr.status === 422) {
                            const responseData = xhr.responseJSON;
                            
                            // Verificar se é erro de e-mail já cadastrado
                            if (responseData.error_type === 'email_exists') {
                                Swal.fire({
                                    title: 'E-mail já cadastrado!',
                                    html: `O e-mail <strong>${responseData.email}</strong> já está sendo usado por outro membro da equipe.<br><br>Por favor, use um e-mail diferente.`,
                                    icon: 'warning',
                                    confirmButtonColor: '#f59e0b',
                                    confirmButtonText: 'OK',
                                    background: '#2a2a2a',
                                    color: '#ffffff',
                                    customClass: {
                                        popup: 'swal-dark-popup',
                                    }
                                }).then(() => {
                                    $('#email').focus().select();
                                });
                                return;
                            }
                            
                            // Outros erros de validação
                            const errors = responseData.errors;
                            let errorsList = '';
                            
                            Object.keys(errors).forEach(function(field) {
                                errorsList += errors[field].join('<br>') + '<br>';
                            });
                            
                            errorMessage = errorsList;
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }

                        Swal.fire({
                            title: 'Erro!',
                            html: errorMessage,
                            icon: 'error',
                            confirmButtonColor: '#ef4444',
                            confirmButtonText: 'OK',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            customClass: {
                                popup: 'swal-dark-popup',
                            }
                        });
                    },
                    complete: function() {
                        // Reabilitar botão
                        submitBtn.prop('disabled', false);
                        submitBtn.html(originalContent);
                    }
                });
            }
        });

        // Focar no primeiro campo ao carregar
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('nome').focus();
        });
    </script>

</body>
</html>
