@include('layouts/head-main')

<head>
    <title>Cadastrar Veículo</title>

    @include('layouts/head')
    @include('layouts/head-style')

    <style>
        body {
            background: #1a1a1a;
            color: #ffffff;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            margin: 0;
            padding: 0;
        }

        .page-header {
            padding: 32px 40px 24px;
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .back-btn {
            background: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .back-btn:hover {
            background: #3a3a3a;
            color: #ffffff;
        }

        .page-title {
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .page-subtitle {
            font-size: 16px;
            color: #888888;
            margin: 8px 0 0 0;
            font-weight: 400;
        }

        .main-container {
            padding: 0 40px 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .form-card {
            background: #1a1a1a;
            border: 1px solid #2a2a2a;
            border-radius: 12px;
            padding: 40px;
            margin-top: 24px;
        }

        .form-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin: 0 0 32px 0;
            text-align: center;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #ffffff;
            margin-bottom: 8px;
            display: block;
        }

        .required {
            color: #ff4444;
            margin-left: 2px;
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            background: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 14px 16px;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.2s ease;
            box-sizing: border-box;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #555555;
            background: #333333;
        }

        .form-input::placeholder {
            color: #666666;
        }

        .form-select option {
            background: #2a2a2a;
            color: #ffffff;
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
            font-family: inherit;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 24px;
        }

        .form-row.single {
            grid-template-columns: 1fr;
        }

        .input-group {
            position: relative;
        }

        .input-suffix {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #888888;
            font-size: 14px;
            pointer-events: none;
        }

        .input-with-suffix {
            padding-right: 60px;
        }

        .section-divider {
            height: 1px;
            background: #2a2a2a;
            margin: 40px 0;
        }

        .form-actions {
            display: flex;
            gap: 16px;
            justify-content: flex-end;
            margin-top: 40px;
            padding-top: 24px;
            border-top: 1px solid #2a2a2a;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
            min-width: 120px;
        }

        .btn-secondary {
            background: #2a2a2a;
            color: #ffffff;
            border: 1px solid #3a3a3a;
        }

        .btn-secondary:hover {
            background: #3a3a3a;
        }

        .btn-primary {
            background: #f59e0b;
            color: #000000;
            border: none;
        }

        .btn-primary:hover {
            background: #d97706;
            color: #000000;
        }

        .success-message {
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid #22c55e;
            color: #22c55e;
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 24px;
            display: none;
        }

        /* Loading state */
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }

        .loading .btn-primary {
            background: #666666;
        }

        @media (max-width: 768px) {
            .page-header {
                padding: 24px 20px 16px;
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }

            .main-container {
                padding: 0 20px 40px;
            }

            .form-card {
                padding: 24px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .form-actions {
                flex-direction: column-reverse;
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
                        <a href="{{ route('veiculos.index') }}" class="back-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Voltar
                        </a>
                        <div>
                            <h1 class="page-title">Novo Veículo</h1>
                            <p class="page-subtitle">Registre um novo veículo no sistema</p>
                        </div>
                    </div>

                    <div class="main-container">
                        <div class="form-card">
                            <div id="successMessage" class="success-message">
                                <strong>Sucesso!</strong> Veículo cadastrado com sucesso!
                            </div>

                            <h2 class="form-title">Novo Veículo</h2>

                            <form id="vehicleForm">
                                <!-- Tipo de Veículo -->
                                <div class="form-group">
                                    <label class="form-label">Tipo de Veículo <span class="required">*</span></label>
                                    <select name="tipo" class="form-select" required>
                                        <option value="">Selecione o tipo</option>
                                        <option value="van">Van</option>
                                        <option value="micro-onibus">Micro-ônibus</option>
                                        <option value="onibus">Ônibus</option>
                                        <option value="caminhao">Caminhão</option>
                                        <option value="utilitario">Utilitário</option>
                                        <option value="carro">Carro</option>
                                    </select>
                                </div>

                                <!-- Marca e Modelo -->
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Marca <span class="required">*</span></label>
                                        <select name="marca" class="form-select" required>
                                            <option value="">Selecione a marca</option>
                                            <option value="volkswagen">Volkswagen</option>
                                            <option value="fiat">Fiat</option>
                                            <option value="chevrolet">Chevrolet</option>
                                            <option value="ford">Ford</option>
                                            <option value="renault">Renault</option>
                                            <option value="hyundai">Hyundai</option>
                                            <option value="toyota">Toyota</option>
                                            <option value="honda">Honda</option>
                                            <option value="nissan">Nissan</option>
                                            <option value="peugeot">Peugeot</option>
                                            <option value="citroën">Citroën</option>
                                            <option value="jeep">Jeep</option>
                                            <option value="mercedes">Mercedes-Benz</option>
                                            <option value="bmw">BMW</option>
                                            <option value="audi">Audi</option>
                                            <option value="outro">Outro</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Modelo <span class="required">*</span></label>
                                        <input type="text" name="modelo" class="form-input" placeholder="Ex: Kombi, Sprinter, Master..." required>
                                    </div>
                                </div>

                                <!-- Ano e Cor -->
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Ano <span class="required">*</span></label>
                                        <input type="number" name="ano" class="form-input" placeholder="2020" min="1990" max="2025" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Cor</label>
                                        <input type="text" name="cor" class="form-input" placeholder="Ex: Branco, Prata, Azul...">
                                    </div>
                                </div>

                                <!-- Placa e Capacidade -->
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Placa <span class="required">*</span></label>
                                        <input type="text" name="placa" class="form-input placa-input" placeholder="ABC-1234" maxlength="8" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Capacidade de Passageiros <span class="required">*</span></label>
                                        <input type="number" name="capacidade_passageiros" class="form-input" placeholder="15" min="1" max="50" required>
                                    </div>
                                </div>

                                <!-- Combustível -->
                                <div class="form-group">
                                    <label class="form-label">Combustível <span class="required">*</span></label>
                                    <select name="combustivel" class="form-select" required>
                                        <option value="">Selecione o combustível</option>
                                        <option value="gasolina">Gasolina</option>
                                        <option value="alcool">Álcool</option>
                                        <option value="flex">Flex (Gasolina/Álcool)</option>
                                        <option value="diesel">Diesel</option>
                                        <option value="gnv">GNV</option>
                                        <option value="eletrico">Elétrico</option>
                                        <option value="hibrido">Híbrido</option>
                                    </select>
                                </div>

                                <!-- Consumo de Combustível -->
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Consumo de Combustível (Cidade) <span class="required">*</span></label>
                                        <div class="input-group">
                                            <input type="number" name="consumo_cidade" class="form-input input-with-suffix" placeholder="8,5" step="0.1" min="1" max="30" required>
                                            <span class="input-suffix">km/l</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Consumo de Combustível (Estrada)</label>
                                        <div class="input-group">
                                            <input type="number" name="consumo_estrada" class="form-input input-with-suffix" placeholder="12,0" step="0.1" min="1" max="30">
                                            <span class="input-suffix">km/l</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Capacidade do Tanque e Quilometragem -->
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Capacidade do Tanque</label>
                                        <div class="input-group">
                                            <input type="number" name="capacidade_tanque" class="form-input input-with-suffix" placeholder="60" min="20" max="200">
                                            <span class="input-suffix">litros</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Quilometragem Atual</label>
                                        <div class="input-group">
                                            <input type="number" name="quilometragem" class="form-input input-with-suffix" placeholder="150.000" min="0">
                                            <span class="input-suffix">km</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="section-divider"></div>

                                <!-- Status e Proprietário -->
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Status do Veículo</label>
                                        <select name="status" class="form-select">
                                            <option value="ativo">Ativo</option>
                                            <option value="manutencao">Em Manutenção</option>
                                            <option value="inativo">Inativo</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Proprietário</label>
                                        <select name="proprietario" class="form-select">
                                            <option value="empresa">Empresa</option>
                                            <option value="terceiro">Terceiro</option>
                                            <option value="alugado">Alugado</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Observações -->
                                <div class="form-row single">
                                    <div class="form-group">
                                        <label class="form-label">Observações</label>
                                        <textarea name="observacoes" class="form-textarea" placeholder="Informações adicionais sobre o veículo..."></textarea>
                                    </div>
                                </div>

                                <!-- Form Actions -->
                                <div class="form-actions">
                                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Cadastrar Veículo</button>
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
        // Mask for license plate
        document.addEventListener('input', function(e) {
            if (e.target.classList.contains('placa-input')) {
                let value = e.target.value.replace(/[^A-Za-z0-9]/g, '').toUpperCase();
                
                // Format: ABC-1234 or ABC1D234 (Mercosul)
                if (value.length <= 7) {
                    value = value.replace(/^([A-Z]{3})([0-9]{1,4})$/, '$1-$2');
                } else {
                    value = value.replace(/^([A-Z]{3})([0-9]{1})([A-Z]{1})([0-9]{1,2})$/, '$1$2$3$4');
                }
                
                e.target.value = value;
            }
        });

        // Form submission
        document.getElementById('vehicleForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = e.target;
            const formData = new FormData(form);
            
            // Add loading state
            form.classList.add('loading');
            
            // Simulate form submission
                         setTimeout(() => {
                 Swal.fire({
                     title: 'Sucesso!',
                     text: 'Veículo cadastrado com sucesso!',
                     icon: 'success',
                     confirmButtonColor: '#ffffff',
                     confirmButtonText: 'OK',
                     background: '#1a1a1a',
                     color: '#ffffff',
                     customClass: {
                         popup: 'swal-dark-popup',
                         confirmButton: 'swal-confirm-btn'
                     }
                 }).then(() => {
                     // Redirect to vehicles index or reset form
                     window.location.href = "{{ route('veiculos.index') }}";
                 });
             }, 1500);
        });

        // Custom SweetAlert styles
        const style = document.createElement('style');
        style.textContent = `
            .swal-dark-popup {
                border: 1px solid #2a2a2a !important;
            }
            .swal-confirm-btn {
                background: #ffffff !important;
                color: #000000 !important;
            }
        `;
        document.head.appendChild(style);
    </script>

</body>
</html>
