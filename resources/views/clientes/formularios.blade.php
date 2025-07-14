@include('layouts/head-main')

<head>
    <title>Cadastro de Cliente - João Luiz Corrêa</title>

    @include('layouts/head')
    @include('layouts/head-style')

    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }

        .public-form-container {
            min-height: 100vh;
            background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
            padding: 40px 20px;
        }

        .form-wrapper {
            max-width: 900px;
            margin: 0 auto;
            background-color: #2a2a2a;
            border-radius: 16px;
            border: 1px solid #3a3a3a;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .form-header {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            padding: 40px;
            text-align: center;
            color: #1a1a1a;
        }

        .logo {
            max-width: 200px;
            height: auto;
            margin-bottom: 20px;
            filter: brightness(0) saturate(100%);
        }

        .form-header h1 {
            font-size: 28px;
            font-weight: 700;
            margin: 0 0 10px 0;
        }

        .form-header p {
            font-size: 16px;
            margin: 0;
            opacity: 0.9;
        }

        .form-content {
            padding: 40px;
        }

        .form-container {
            background-color: transparent;
            border-radius: 12px;
            padding: 0;
            margin-bottom: 32px;
            border: none;
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #f59e0b;
            margin-bottom: 24px;
            padding-bottom: 12px;
            border-bottom: 2px solid #f59e0b;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #cccccc;
            margin-bottom: 8px;
        }

        .required {
            color: #ef4444;
        }

        .form-input,
        .form-select,
        .form-textarea {
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
        }

        .form-input::placeholder {
            color: #666;
        }

        .form-textarea {
            resize: vertical;
            min-height: 100px;
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 16px;
            margin-top: 16px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checkbox-input {
            width: 18px;
            height: 18px;
            accent-color: #f59e0b;
        }

        .checkbox-label {
            font-size: 14px;
            color: #cccccc;
            cursor: pointer;
        }

        .locals-section {
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 24px;
            background-color: rgba(26, 26, 26, 0.5);
        }

        .locals-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .add-local-btn {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .add-local-btn:hover {
            background-color: #d97706;
        }

        .local-item {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
        }

        .local-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .local-capacity {
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 6px 10px;
            border-radius: 6px;
            width: 80px;
            text-align: center;
        }

        .remove-local-btn {
            background-color: #ef4444;
            color: #ffffff;
            border: none;
            padding: 8px;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .remove-local-btn:hover {
            background-color: #dc2626;
        }

        .exclusivity-input {
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            width: 120px;
        }

        .form-actions {
            display: flex;
            gap: 16px;
            justify-content: center;
            margin-top: 40px;
            padding-top: 32px;
            border-top: 1px solid #3a3a3a;
        }

        .btn-cancel {
            background-color: #374151;
            color: #ffffff;
            border: none;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-cancel:hover {
            background-color: #4b5563;
        }

        .btn-save {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-save:hover {
            background-color: #d97706;
        }

        .success-message {
            background-color: rgba(16, 185, 129, 0.1);
            border: 1px solid #10b981;
            color: #10b981;
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 24px;
            display: none;
        }

        @media (max-width: 768px) {
            .form-wrapper {
                margin: 0;
                border-radius: 0;
            }

            .form-header,
            .form-content {
                padding: 24px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .locals-header {
                flex-direction: column;
                gap: 16px;
                align-items: stretch;
            }

            .local-header {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }
        }

        /* Loading state */
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }

        .loading .btn-save {
            background-color: #9ca3af;
        }
    </style>
</head>

<body>
    <div class="public-form-container">
        <div class="form-wrapper">
            <!-- Header -->
            <div class="form-header">
                <img src="{{ asset('assets/images/jlc-logo-web.png') }}" alt="João Luiz Corrêa" class="logo">
                <h1>Cadastro de Cliente</h1>
                <p>Preencha seus dados para que possamos entrar em contato</p>
            </div>

            <!-- Form Content -->
            <div class="form-content">
                <div id="successMessage" class="success-message">
                    <strong>Sucesso!</strong> Seu cadastro foi enviado com sucesso. Entraremos em contato em breve!
                </div>

                <form id="clientForm">
                    <!-- Informações Básicas -->
                    <div class="form-container">
                        <h2 class="section-title">Informações Básicas</h2>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Nome <span class="required">*</span></label>
                                <input type="text" name="nome" class="form-input" placeholder="Seu nome completo" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Telefone <span class="required">*</span></label>
                                <input type="text" name="telefone" class="form-input" placeholder="(11) 99999-9999" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-input" placeholder="seu@email.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">CPF/CNPJ</label>
                                <input type="text" name="cpf_cnpj" class="form-input" placeholder="000.000.000-00">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Região</label>
                                <input type="text" name="regiao" class="form-input" placeholder="Ex: Zona Sul, Centro, etc.">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group full-width">
                                <label class="form-label">Observações Gerais</label>
                                <textarea name="observacoes_gerais" class="form-input form-textarea" placeholder="Conte-nos mais sobre você ou seu evento..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Locais -->
                    <div class="form-container locals-section">
                        <div class="locals-header">
                            <h2 class="section-title" style="margin-bottom: 0; border-bottom: none;">Locais dos Eventos</h2>
                            <button type="button" class="add-local-btn" onclick="addLocal()">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                Adicionar Local
                            </button>
                        </div>

                        <div id="localsContainer">
                            <div class="local-item">
                                <div class="local-header">
                                    <span style="color: #888; font-size: 14px;">Local 1</span>
                                    <div style="display: flex; align-items: center; gap: 12px;">
                                        <div style="display: flex; align-items: center; gap: 8px;">
                                            <span style="color: #888; font-size: 14px;">Capacidade</span>
                                            <input type="number" name="capacidade[]" class="local-capacity" value="0" min="0">
                                        </div>
                                        <button type="button" class="remove-local-btn" onclick="removeLocal(this)" style="display: none;">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="3,6 5,6 21,6" stroke="currentColor" stroke-width="2"/>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Nome do Local <span class="required">*</span></label>
                                        <input type="text" name="nome_local[]" class="form-input" placeholder="Ex: Salão de Festas, CTG, etc." required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">CEP <span class="required">*</span></label>
                                        <input type="text" name="cep[]" class="form-input cep-input" placeholder="00000-000" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Rua <span class="required">*</span></label>
                                        <input type="text" name="rua[]" class="form-input" placeholder="Rua das Flores" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Número</label>
                                        <input type="text" name="numero[]" class="form-input" placeholder="123">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Bairro <span class="required">*</span></label>
                                        <input type="text" name="bairro[]" class="form-input" placeholder="Centro" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Cidade <span class="required">*</span></label>
                                        <input type="text" name="cidade[]" class="form-input" placeholder="São Paulo" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Estado <span class="required">*</span></label>
                                        <select name="estado[]" class="form-select" required>
                                            <option value="">Selecione</option>
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
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group full-width">
                                        <label class="form-label">Observações do Local</label>
                                        <textarea name="observacoes_local[]" class="form-input form-textarea" placeholder="Detalhes importantes sobre o local..."></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group full-width">
                                        <label class="form-label">Raio de Exclusividade (km)</label>
                                        <input type="number" name="raio_exclusividade[]" class="exclusivity-input" value="0" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dias Disponíveis -->
                    <div class="form-container">
                        <h2 class="section-title">Dias Disponíveis para Eventos</h2>
                        
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="segunda" name="dias_disponiveis[]" value="segunda" class="checkbox-input">
                                <label for="segunda" class="checkbox-label">Segunda</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="terca" name="dias_disponiveis[]" value="terca" class="checkbox-input">
                                <label for="terca" class="checkbox-label">Terça</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="quarta" name="dias_disponiveis[]" value="quarta" class="checkbox-input">
                                <label for="quarta" class="checkbox-label">Quarta</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="quinta" name="dias_disponiveis[]" value="quinta" class="checkbox-input">
                                <label for="quinta" class="checkbox-label">Quinta</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sexta" name="dias_disponiveis[]" value="sexta" class="checkbox-input">
                                <label for="sexta" class="checkbox-label">Sexta</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sabado" name="dias_disponiveis[]" value="sabado" class="checkbox-input">
                                <label for="sabado" class="checkbox-label">Sábado</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="domingo" name="dias_disponiveis[]" value="domingo" class="checkbox-input">
                                <label for="domingo" class="checkbox-label">Domingo</label>
                            </div>
                        </div>
                    </div>

                    <!-- Transporte -->
                    <div class="form-container">
                        <h2 class="section-title">Transporte</h2>
                        
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="precisa-van" name="transporte[]" value="precisa_van" class="checkbox-input">
                                <label for="precisa-van" class="checkbox-label">Precisa de van</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="cliente-van" name="transporte[]" value="cliente_van" class="checkbox-input">
                                <label for="cliente-van" class="checkbox-label">Cliente disponibiliza van</label>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button type="button" class="btn-cancel" onclick="window.history.back()">Cancelar</button>
                        <button type="submit" class="btn-save">Enviar Cadastro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let localCounter = 1;

        // Add new local
        function addLocal() {
            localCounter++;
            const container = document.getElementById('localsContainer');
            const newLocal = document.createElement('div');
            newLocal.className = 'local-item';
            newLocal.innerHTML = `
                <div class="local-header">
                    <span style="color: #888; font-size: 14px;">Local ${localCounter}</span>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <span style="color: #888; font-size: 14px;">Capacidade</span>
                            <input type="number" name="capacidade[]" class="local-capacity" value="0" min="0">
                        </div>
                        <button type="button" class="remove-local-btn" onclick="removeLocal(this)">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="3,6 5,6 21,6" stroke="currentColor" stroke-width="2"/>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Nome do Local <span class="required">*</span></label>
                        <input type="text" name="nome_local[]" class="form-input" placeholder="Ex: Salão de Festas, CTG, etc." required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">CEP <span class="required">*</span></label>
                        <input type="text" name="cep[]" class="form-input cep-input" placeholder="00000-000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rua <span class="required">*</span></label>
                        <input type="text" name="rua[]" class="form-input" placeholder="Rua das Flores" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Número</label>
                        <input type="text" name="numero[]" class="form-input" placeholder="123">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Bairro <span class="required">*</span></label>
                        <input type="text" name="bairro[]" class="form-input" placeholder="Centro" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Cidade <span class="required">*</span></label>
                        <input type="text" name="cidade[]" class="form-input" placeholder="São Paulo" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Estado <span class="required">*</span></label>
                        <select name="estado[]" class="form-select" required>
                            <option value="">Selecione</option>
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
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label class="form-label">Observações do Local</label>
                        <textarea name="observacoes_local[]" class="form-input form-textarea" placeholder="Detalhes importantes sobre o local..."></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label class="form-label">Raio de Exclusividade (km)</label>
                        <input type="number" name="raio_exclusividade[]" class="exclusivity-input" value="0" min="0">
                    </div>
                </div>
            `;
            
            container.appendChild(newLocal);
            updateRemoveButtons();
        }

        // Remove local
        function removeLocal(button) {
            const localItem = button.closest('.local-item');
            localItem.remove();
            updateLocalNumbers();
            updateRemoveButtons();
        }

        // Update local numbers
        function updateLocalNumbers() {
            const locals = document.querySelectorAll('.local-item');
            locals.forEach((local, index) => {
                const numberSpan = local.querySelector('.local-header span');
                numberSpan.textContent = `Local ${index + 1}`;
            });
            localCounter = locals.length;
        }

        // Update remove buttons visibility
        function updateRemoveButtons() {
            const removeButtons = document.querySelectorAll('.remove-local-btn');
            const locals = document.querySelectorAll('.local-item');
            
            removeButtons.forEach(button => {
                button.style.display = locals.length > 1 ? 'flex' : 'none';
            });
        }

        // CEP mask and validation
        document.addEventListener('input', function(e) {
            if (e.target.classList.contains('cep-input')) {
                let value = e.target.value.replace(/\D/g, '');
                value = value.replace(/^(\d{5})(\d)/, '$1-$2');
                e.target.value = value;
            }
        });

        // Phone mask
        document.addEventListener('input', function(e) {
            if (e.target.name === 'telefone') {
                let value = e.target.value.replace(/\D/g, '');
                value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
                value = value.replace(/(\d)(\d{4})$/, '$1-$2');
                e.target.value = value;
            }
        });

        // CPF/CNPJ mask
        document.addEventListener('input', function(e) {
            if (e.target.name === 'cpf_cnpj') {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length <= 11) {
                    value = value.replace(/^(\d{3})(\d)/, '$1.$2');
                    value = value.replace(/^(\d{3})\.(\d{3})(\d)/, '$1.$2.$3');
                    value = value.replace(/\.(\d{3})(\d)/, '.$1-$2');
                } else {
                    value = value.replace(/^(\d{2})(\d)/, '$1.$2');
                    value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
                    value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
                    value = value.replace(/(\d{4})(\d)/, '$1-$2');
                }
                e.target.value = value;
            }
        });

        // Form submission
        document.getElementById('clientForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = e.target;
            const formData = new FormData(form);
            
            // Add loading state
            form.classList.add('loading');
            
            // Simulate form submission
            setTimeout(() => {
                Swal.fire({
                    title: 'Sucesso!',
                    text: 'Seu cadastro foi enviado com sucesso. Entraremos em contato em breve!',
                    icon: 'success',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff'
                }).then(() => {
                    // Reset form
                    form.reset();
                    form.classList.remove('loading');
                    
                    // Reset locals to just one
                    const container = document.getElementById('localsContainer');
                    const firstLocal = container.querySelector('.local-item');
                    container.innerHTML = '';
                    container.appendChild(firstLocal);
                    localCounter = 1;
                    updateRemoveButtons();
                });
            }, 1500);
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateRemoveButtons();
        });
    </script>
 </body>
 </html>
