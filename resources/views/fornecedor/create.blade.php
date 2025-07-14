@include('layouts/head-main')

<head>
    <title>Novo Fornecedor</title>

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
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .form-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin: 0 0 32px 0;
            padding-bottom: 16px;
            border-bottom: 1px solid #3a3a3a;
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

        .form-input, .form-select {
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

        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
        }

        .form-input::placeholder {
            color: #666;
        }

        .form-select {
            cursor: pointer;
        }

        .form-select option {
            background-color: #2a2a2a;
            color: #ffffff;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }

        .form-row-3 {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 24px;
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

        .error-message {
            color: #ef4444;
            font-size: 12px;
            margin-top: 4px;
            display: none;
        }

        .form-input.error, .form-select.error {
            border-color: #ef4444;
        }

        .form-input.error:focus, .form-select.error:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        .loading-cep {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #f59e0b;
            display: none;
        }

        .cep-group {
            position: relative;
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

            .form-row, .form-row-3 {
                grid-template-columns: 1fr;
                gap: 16px;
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
                            <h1 class="page-title">Novo Fornecedor</h1>
                        </div>
                        <a href="{{ route('fornecedor.index') }}" class="back-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Voltar
                        </a>
                    </div>

                    <!-- Form Container -->
                    <div class="form-container">
                        <h2 class="form-title">Dados do Fornecedor</h2>

                        <form id="fornecedorForm" action="" method="POST">
                            @csrf
                            
                            <!-- Nome -->
                            <div class="form-group">
                                <label for="nome" class="form-label required">Nome</label>
                                <input 
                                    type="text" 
                                    id="nome" 
                                    name="nome" 
                                    class="form-input" 
                                    placeholder="Nome do fornecedor"
                                    required
                                >
                                <div class="error-message" id="nomeError">Por favor, digite o nome do fornecedor.</div>
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
                                    <option value="equipamentos">Equipamentos de Som</option>
                                    <option value="iluminacao">Iluminação</option>
                                    <option value="decoracao">Decoração</option>
                                    <option value="catering">Catering</option>
                                    <option value="transporte">Transporte</option>
                                    <option value="seguranca">Segurança</option>
                                    <option value="limpeza">Limpeza</option>
                                    <option value="outros">Outros</option>
                                </select>
                                <div class="error-message" id="categoriaError">Por favor, selecione uma categoria.</div>
                            </div>

                            <!-- E-mail e Telefone -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        class="form-input" 
                                        placeholder="email@exemplo.com"
                                    >
                                    <div class="error-message" id="emailError">Por favor, digite um e-mail válido.</div>
                                </div>

                                <div class="form-group">
                                    <label for="telefone" class="form-label required">Telefone</label>
                                    <input 
                                        type="tel" 
                                        id="telefone" 
                                        name="telefone" 
                                        class="form-input" 
                                        placeholder="(00) 00000-0000"
                                        required
                                    >
                                    <div class="error-message" id="telefoneError">Por favor, digite um telefone válido.</div>
                                </div>
                            </div>

                            <!-- WhatsApp -->
                            <div class="form-group">
                                <label for="whatsapp" class="form-label">WhatsApp</label>
                                <input 
                                    type="tel" 
                                    id="whatsapp" 
                                    name="whatsapp" 
                                    class="form-input" 
                                    placeholder="(00) 00000-0000"
                                >
                            </div>

                            <!-- CEP -->
                            <div class="form-group">
                                <label for="cep" class="form-label required">CEP</label>
                                <div class="cep-group">
                                    <input 
                                        type="text" 
                                        id="cep" 
                                        name="cep" 
                                        class="form-input" 
                                        placeholder="Digite o CEP"
                                        maxlength="9"
                                        required
                                    >
                                    <div class="loading-cep" id="loadingCep">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                            <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="error-message" id="cepError">Por favor, digite um CEP válido.</div>
                            </div>

                            <!-- Endereço -->
                            <div class="form-group">
                                <label for="endereco" class="form-label required">Endereço</label>
                                <input 
                                    type="text" 
                                    id="endereco" 
                                    name="endereco" 
                                    class="form-input" 
                                    placeholder="Logradouro e número"
                                    required
                                >
                                <div class="error-message" id="enderecoError">Por favor, digite o endereço.</div>
                            </div>

                            <!-- Cidade e Estado -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="cidade" class="form-label required">Cidade</label>
                                    <input 
                                        type="text" 
                                        id="cidade" 
                                        name="cidade" 
                                        class="form-input" 
                                        placeholder="Cidade"
                                        required
                                    >
                                    <div class="error-message" id="cidadeError">Por favor, digite a cidade.</div>
                                </div>

                                <div class="form-group">
                                    <label for="estado" class="form-label required">Estado</label>
                                    <select 
                                        id="estado" 
                                        name="estado" 
                                        class="form-select" 
                                        required
                                    >
                                        <option value="">Estado</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                    <div class="error-message" id="estadoError">Por favor, selecione o estado.</div>
                                </div>
                            </div>

                            <!-- Form Actions -->
                            <div class="form-actions">
                                <a href="{{ route('fornecedor.index') }}" class="btn btn-secondary">
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

    <script>
        // Máscaras para telefone e CEP
        function applyPhoneMask(input) {
            let value = input.value.replace(/\D/g, '');
            if (value.length <= 10) {
                value = value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
            } else {
                value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
            }
            input.value = value;
        }

        function applyCepMask(input) {
            let value = input.value.replace(/\D/g, '');
            value = value.replace(/(\d{5})(\d{3})/, '$1-$2');
            input.value = value;
        }

        // Aplicar máscaras
        document.getElementById('telefone').addEventListener('input', function() {
            applyPhoneMask(this);
        });

        document.getElementById('whatsapp').addEventListener('input', function() {
            applyPhoneMask(this);
        });

        document.getElementById('cep').addEventListener('input', function() {
            applyCepMask(this);
            if (this.value.length === 9) {
                buscarCep(this.value);
            }
        });

        // Buscar CEP
        async function buscarCep(cep) {
            const cepLimpo = cep.replace(/\D/g, '');
            if (cepLimpo.length !== 8) return;

            const loadingCep = document.getElementById('loadingCep');
            loadingCep.style.display = 'block';

            try {
                const response = await fetch(`https://viacep.com.br/ws/${cepLimpo}/json/`);
                const data = await response.json();

                if (!data.erro) {
                    document.getElementById('endereco').value = data.logradouro || '';
                    document.getElementById('cidade').value = data.localidade || '';
                    document.getElementById('estado').value = data.uf || '';
                    
                    // Focar no campo endereço se estiver vazio
                    if (!data.logradouro) {
                        document.getElementById('endereco').focus();
                    }
                } else {
                    alert('CEP não encontrado');
                }
            } catch (error) {
                console.error('Erro ao buscar CEP:', error);
                alert('Erro ao buscar CEP');
            } finally {
                loadingCep.style.display = 'none';
            }
        }

        // Validação do formulário
        function validateForm() {
            let isValid = true;
            
            // Campos obrigatórios
            const requiredFields = [
                { id: 'nome', errorId: 'nomeError', message: 'Por favor, digite o nome do fornecedor.' },
                { id: 'categoria', errorId: 'categoriaError', message: 'Por favor, selecione uma categoria.' },
                { id: 'telefone', errorId: 'telefoneError', message: 'Por favor, digite um telefone válido.' },
                { id: 'cep', errorId: 'cepError', message: 'Por favor, digite um CEP válido.' },
                { id: 'endereco', errorId: 'enderecoError', message: 'Por favor, digite o endereço.' },
                { id: 'cidade', errorId: 'cidadeError', message: 'Por favor, digite a cidade.' },
                { id: 'estado', errorId: 'estadoError', message: 'Por favor, selecione o estado.' }
            ];

            requiredFields.forEach(field => {
                const input = document.getElementById(field.id);
                const error = document.getElementById(field.errorId);
                
                if (!input.value.trim()) {
                    input.classList.add('error');
                    error.style.display = 'block';
                    error.textContent = field.message;
                    isValid = false;
                } else {
                    input.classList.remove('error');
                    error.style.display = 'none';
                }
            });

            // Validar e-mail se preenchido
            const email = document.getElementById('email');
            const emailError = document.getElementById('emailError');
            if (email.value && !email.value.includes('@')) {
                email.classList.add('error');
                emailError.style.display = 'block';
                isValid = false;
            } else {
                email.classList.remove('error');
                emailError.style.display = 'none';
            }

            return isValid;
        }

        // Remover erro ao digitar
        document.querySelectorAll('.form-input, .form-select').forEach(input => {
            input.addEventListener('input', function() {
                if (this.value.trim()) {
                    this.classList.remove('error');
                    const errorId = this.id + 'Error';
                    const errorElement = document.getElementById(errorId);
                    if (errorElement) {
                        errorElement.style.display = 'none';
                    }
                }
            });
        });

        // Submissão do formulário
        document.getElementById('fornecedorForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm()) {
                const submitBtn = document.getElementById('submitBtn');
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Salvando...
                `;

                // Simular envio
                setTimeout(() => {
                    alert('Fornecedor cadastrado com sucesso!');
                    // window.location.href = "{{ route('fornecedor.index') }}";
                }, 1500);
            }
        });

        // Focar no primeiro campo ao carregar
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('nome').focus();
        });
    </script>

</body>
</html>
