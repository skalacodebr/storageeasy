@include('layouts/head-main')

<head>
    <title>Visualizar Veículo</title>

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
            justify-content: space-between;
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
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
            text-decoration: none;
            cursor: pointer!important;
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
            background: #1c1c1c;
            border: 1px solid #2d2d2d;
            border-radius: 12px;
            padding: 32px;
            margin-top: 20px;
        }

        .form-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin: 0 0 32px 0;
            text-align: left;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-size: 13px;
            font-weight: 500;
            color: #a0a0a0;
            margin-bottom: 6px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .required {
            color: #ff4444;
            margin-left: 2px;
        }

        .info-value {
            background: #262626;
            border: 1px solid #333333;
            color: #e5e5e5;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            min-height: 18px;
            display: flex;
            align-items: center;
            font-weight: 400;
        }

        .info-value.large {
            min-height: 120px;
            align-items: flex-start;
            white-space: pre-wrap;
        }

        .info-value.with-suffix {
            padding-right: 60px;
            position: relative;
        }

        .info-value .suffix {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #888888;
            font-size: 14px;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-ativo {
            background: rgba(34, 197, 94, 0.15);
            color: #4ade80;
            border: 1px solid rgba(34, 197, 94, 0.3);
        }

        .status-manutencao {
            background: rgba(245, 158, 11, 0.15);
            color: #fbbf24;
            border: 1px solid rgba(245, 158, 11, 0.3);
        }

        .status-inativo {
            background: rgba(239, 68, 68, 0.15);
            color: #f87171;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
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
            background: #2d2d2d;
            margin: 32px 0;
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
                        <div style="display: flex; align-items: center; gap: 24px;">
                            <a href="{{ route('veiculos.index') }}" class="back-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Voltar
                            </a>
                            <div>
                                <h1 class="page-title">Visualizar Veículo</h1>
                                <p class="page-subtitle">Detalhes do veículo cadastrado</p>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('veiculos.edite', 1) }}" class="back-btn" style="background: #f59e0b; color: #000000;">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Editar
                            </a>
                        </div>
                    </div>

                    <div class="main-container">
                        <div class="form-card">
                            <h2 class="form-title">Visualizar Veículo</h2>

                            <!-- Tipo de Veículo -->
                            <div class="form-group">
                                <label class="form-label">Tipo de Veículo</label>
                                <div class="info-value">Van</div>
                            </div>

                            <!-- Marca e Modelo -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Marca</label>
                                    <div class="info-value">Volkswagen</div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Modelo</label>
                                    <div class="info-value">Kombi</div>
                                </div>
                            </div>

                            <!-- Ano e Cor -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Ano</label>
                                    <div class="info-value">2014</div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Cor</label>
                                    <div class="info-value">Branco</div>
                                </div>
                            </div>

                            <!-- Placa e Capacidade -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Placa</label>
                                    <div class="info-value">ABC-1234</div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Capacidade de Passageiros</label>
                                    <div class="info-value">8 pessoas</div>
                                </div>
                            </div>

                            <!-- Combustível -->
                            <div class="form-group">
                                <label class="form-label">Combustível</label>
                                <div class="info-value">Flex (Gasolina/Álcool)</div>
                            </div>

                            <!-- Consumo de Combustível -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Consumo de Combustível (Cidade)</label>
                                    <div class="info-value with-suffix">
                                        8,5
                                        <span class="suffix">km/l</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Consumo de Combustível (Estrada)</label>
                                    <div class="info-value with-suffix">
                                        12,0
                                        <span class="suffix">km/l</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Capacidade do Tanque e Quilometragem -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Capacidade do Tanque</label>
                                    <div class="info-value with-suffix">
                                        50
                                        <span class="suffix">litros</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Quilometragem Atual</label>
                                    <div class="info-value with-suffix">
                                        185.642
                                        <span class="suffix">km</span>
                                    </div>
                                </div>
                            </div>

                            <div class="section-divider"></div>

                            <!-- Status e Proprietário -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Status do Veículo</label>
                                    <div class="info-value">
                                        <span class="status-badge status-ativo">Ativo</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Proprietário</label>
                                    <div class="info-value">Empresa</div>
                                </div>
                            </div>

                            <!-- Observações -->
                            <div class="form-row single">
                                <div class="form-group">
                                    <label class="form-label">Observações</label>
                                    <div class="info-value large">Veículo em ótimo estado de conservação. Manutenção preventiva realizada em dezembro de 2024. Pneus novos. Documentação em dia.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

</body>
</html>
