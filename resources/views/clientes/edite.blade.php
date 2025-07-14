@include('layouts/head-main')

<head>
    <title>Editar Cliente</title>

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

        .form-container {
            background-color: rgba(42, 42, 42, 0);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin: 0 24px 24px 24px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 24px;
            padding-bottom: 12px;
            border-bottom: 1px solid #3a3a3a;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
        }

        .form-group.full-width {
            flex: 100%;
        }

        .form-label {
            display: block;
            color: #ffffff;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .required {
            color: #ef4444;
        }

        .form-input {
            width: 100%;
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-input::placeholder {
            color: #666;
        }

        .form-input:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .form-textarea {
            min-height: 100px;
            resize: vertical;
        }

        .form-select {
            width: 100%;
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-select:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .locals-section {
            margin-top: 32px;
        }

        .locals-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .add-local-btn {
            background-color: transparent;
            border: 1px solid #f59e0b;
            color: #f59e0b;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .add-local-btn:hover {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .local-item {
            background-color:rgba(42, 42, 42, 0);
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 16px;
            position: relative;
        }

        .local-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .local-capacity {
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            min-width: 40px;
            text-align: center;
        }

        .remove-local-btn {
            background: none;
            border: none;
            color: #ef4444;
            cursor: pointer;
            padding: 4px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .remove-local-btn:hover {
            background-color: rgba(239, 68, 68, 0.1);
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 12px;
            margin-bottom: 20px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checkbox-input {
            width: 16px;
            height: 16px;
            accent-color: #f59e0b;
        }

        .checkbox-label {
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            padding: 24px;
            border-top: 1px solid #3a3a3a;
            margin-top: 32px;
        }

        .btn-cancel {
            background-color: transparent;
            border: 1px solid #666;
            color: #666;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-cancel:hover {
            border-color: #888;
            color: #888;
        }

        .btn-save {
            background-color: #f59e0b;
            border: none;
            color: #1a1a1a;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-save:hover {
            background-color: #d97706;
        }

        .container-fluid {
            padding: 24px 0;
        }

        .exclusivity-input {
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 14px;
            width: 80px;
            text-align: center;
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
                        <h1 class="page-title">Editar Cliente</h1>
                    </div>

                    <!-- Informações Básicas -->
                    <div class="form-container">
                        <h2 class="section-title">Informações Básicas</h2>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Nome <span class="required">*</span></label>
                                <input type="text" class="form-input" placeholder="Nome do cliente">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Telefone <span class="required">*</span></label>
                                <input type="text" class="form-input" placeholder="(11) 99999-9999">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">E-mail</label>
                                <input type="email" class="form-input" placeholder="cliente@email.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">CPF/CNPJ</label>
                                <input type="text" class="form-input" placeholder="000.000.000-00">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Região</label>
                                <input type="text" class="form-input" placeholder="Ex: Zona Sul, Centro, etc.">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group full-width">
                                <label class="form-label">Observações Gerais</label>
                                <textarea class="form-input form-textarea" placeholder="Observações sobre o cliente..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Locais -->
                    <div class="form-container locals-section">
                        <div class="locals-header">
                            <h2 class="section-title" style="margin-bottom: 0; border-bottom: none;">Locais</h2>
                            <button class="add-local-btn" onclick="addLocal()">
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
                                            <input type="number" class="local-capacity" value="0" min="0">
                                        </div>
                                        <button class="remove-local-btn" onclick="removeLocal(this)">
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
                                        <input type="text" class="form-input" placeholder="CTG Estância da Serra">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">CEP <span class="required">*</span></label>
                                        <input type="text" class="form-input" placeholder="00000-000">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Rua <span class="required">*</span></label>
                                        <input type="text" class="form-input" placeholder="Rua das Flores">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Número</label>
                                        <input type="text" class="form-input" placeholder="123">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Bairro <span class="required">*</span></label>
                                        <input type="text" class="form-input" placeholder="Centro">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Cidade <span class="required">*</span></label>
                                        <input type="text" class="form-input" placeholder="São Paulo">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Estado <span class="required">*</span></label>
                                        <select class="form-select">
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
                                        <textarea class="form-input form-textarea" placeholder="Observações sobre o local..."></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group full-width">
                                        <label class="form-label">Raio de Exclusividade (km)</label>
                                        <input type="number" class="exclusivity-input" value="0" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dias Disponíveis -->
                    <div class="form-container">
                        <h2 class="section-title">Dias Disponíveis</h2>
                        
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="segunda" class="checkbox-input">
                                <label for="segunda" class="checkbox-label">Segunda</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="terca" class="checkbox-input">
                                <label for="terca" class="checkbox-label">Terça</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="quarta" class="checkbox-input">
                                <label for="quarta" class="checkbox-label">Quarta</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="quinta" class="checkbox-input">
                                <label for="quinta" class="checkbox-label">Quinta</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sexta" class="checkbox-input">
                                <label for="sexta" class="checkbox-label">Sexta</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sabado" class="checkbox-input">
                                <label for="sabado" class="checkbox-label">Sábado</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="domingo" class="checkbox-input">
                                <label for="domingo" class="checkbox-label">Domingo</label>
                            </div>
                        </div>
                    </div>

                    <!-- Transporte -->
                    <div class="form-container">
                        <h2 class="section-title">Transporte</h2>
                        
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="precisa-van" class="checkbox-input">
                                <label for="precisa-van" class="checkbox-label">Precisa de van</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="cliente-van" class="checkbox-input">
                                <label for="cliente-van" class="checkbox-label">Cliente disponibiliza van</label>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button type="button" class="btn-cancel">Cancelar</button>
                        <button type="submit" class="btn-save">Salvar</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <script>
        let localCounter = 1;

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
                            <input type="number" class="local-capacity" value="0" min="0">
                        </div>
                        <button class="remove-local-btn" onclick="removeLocal(this)">
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
                        <input type="text" class="form-input" placeholder="CTG Estância da Serra">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">CEP <span class="required">*</span></label>
                        <input type="text" class="form-input" placeholder="00000-000">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rua <span class="required">*</span></label>
                        <input type="text" class="form-input" placeholder="Rua das Flores">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Número</label>
                        <input type="text" class="form-input" placeholder="123">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Bairro <span class="required">*</span></label>
                        <input type="text" class="form-input" placeholder="Centro">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Cidade <span class="required">*</span></label>
                        <input type="text" class="form-input" placeholder="São Paulo">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Estado <span class="required">*</span></label>
                        <select class="form-select">
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
                        <textarea class="form-input form-textarea" placeholder="Observações sobre o local..."></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label class="form-label">Raio de Exclusividade (km)</label>
                        <input type="number" class="exclusivity-input" value="0" min="0">
                    </div>
                </div>
            `;
            container.appendChild(newLocal);
        }

        function removeLocal(button) {
            const localItem = button.closest('.local-item');
            const container = document.getElementById('localsContainer');
            
            // Don't remove if it's the last local
            if (container.children.length > 1) {
                localItem.remove();
                updateLocalNumbers();
            }
        }

        function updateLocalNumbers() {
            const locals = document.querySelectorAll('.local-item');
            locals.forEach((local, index) => {
                const header = local.querySelector('.local-header span');
                header.textContent = `Local ${index + 1}`;
            });
            localCounter = locals.length;
        }

        // CEP mask and auto-fill
        document.addEventListener('input', function(e) {
            if (e.target.type === 'text' && e.target.placeholder === '00000-000') {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 5) {
                    value = value.substring(0, 5) + '-' + value.substring(5, 8);
                }
                e.target.value = value;
            }
        });

        // Phone mask
        document.addEventListener('input', function(e) {
            if (e.target.placeholder === '(11) 99999-9999') {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 0) {
                    value = value.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
                }
                e.target.value = value;
            }
        });

        // CPF/CNPJ mask
        document.addEventListener('input', function(e) {
            if (e.target.placeholder === '000.000.000-00') {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length <= 11) {
                    // CPF
                    value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                } else {
                    // CNPJ
                    value = value.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
                }
                e.target.value = value;
            }
        });
    </script>

</body>
</html>
