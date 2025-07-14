@include('layouts/head-main')

<head>
    <title>Visualizar Tarefa</title>

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

        .header-actions {
            display: flex;
            gap: 12px;
        }

        .back-btn,
        .edit-btn {
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

        .back-btn {
            background-color: #6b7280;
            color: #ffffff;
        }

        .back-btn:hover {
            background-color: #4b5563;
            color: #ffffff;
        }

        .edit-btn {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .edit-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .view-section {
            background-color: rgba(42, 42, 42, 0);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin: 0 24px;
        }

        .section-header {
            margin-bottom: 32px;
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

        .view-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .view-row {
            display: flex;
            gap: 24px;
            margin-bottom: 32px;
        }

        .view-group {
            flex: 1;
        }

        .view-group.full-width {
            flex: 100%;
        }

        .view-label {
            display: block;
            color: #888;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .view-value {
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            min-height: 24px;
        }

        .view-value.large {
            font-size: 20px;
            font-weight: 600;
            color: #f59e0b;
        }

        .priority-badge,
        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
        }

        .priority-badge.baixa {
            background-color: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .priority-badge.media {
            background-color: rgba(245, 158, 11, 0.2);
            color: #f59e0b;
        }

        .priority-badge.alta {
            background-color: rgba(239, 68, 68, 0.2);
            color: #ef4444;
        }

        .status-badge.pendente {
            background-color: rgba(156, 163, 175, 0.2);
            color: #9ca3af;
        }

        .status-badge.em-andamento {
            background-color: rgba(59, 130, 246, 0.2);
            color: #3b82f6;
        }

        .status-badge.concluida {
            background-color: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .description-box {
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 16px;
            min-height: 120px;
            color: #ffffff;
            line-height: 1.6;
        }

        .empty-description {
            color: #666;
            font-style: italic;
        }

        .view-divider {
            height: 1px;
            background-color: #3a3a3a;
            margin: 32px 0;
        }

        .container-fluid {
            padding: 24px 0;
        }

        .info-card {
            background-color: rgba(245, 158, 11, 0.1);
            border: 1px solid rgba(245, 158, 11, 0.3);
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 24px;
        }

        .info-card .info-icon {
            color: #f59e0b;
            margin-right: 8px;
        }

        .info-card .info-text {
            color: #f59e0b;
            font-size: 14px;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .view-row {
                flex-direction: column;
                gap: 16px;
            }

            .header-actions {
                flex-direction: column;
                gap: 8px;
            }

            .back-btn,
            .edit-btn {
                justify-content: center;
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
                        <h1 class="page-title">Visualizar Tarefa</h1>
                        <div class="header-actions">
                            <a href="{{ route('tarefas.index') }}" class="back-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Voltar
                            </a>
                            <a href="#" class="edit-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Editar
                            </a>
                        </div>
                    </div>

                    <!-- View Section -->
                    <div class="view-section">
                        <div class="section-header">
                            <h2 class="section-title">Detalhes da Tarefa</h2>
                            <p class="section-description">Informações completas sobre a tarefa selecionada</p>
                        </div>

                        <div class="view-container">
                            <!-- Info Card -->
                            <div class="info-card">
                                <div style="display: flex; align-items: center;">
                                    <svg class="info-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                        <path d="M12 16v-4M12 8h.01" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    <span class="info-text">Esta é uma visualização somente leitura. Use o botão "Editar" para fazer alterações.</span>
                                </div>
                            </div>

                            <!-- Nome da Tarefa -->
                            <div class="view-row">
                                <div class="view-group full-width">
                                    <label class="view-label">Nome da Tarefa</label>
                                    <div class="view-value large">Reunião com equipe de desenvolvimento</div>
                                </div>
                            </div>

                            <div class="view-divider"></div>

                            <!-- Prioridade e Data -->
                            <div class="view-row">
                                <div class="view-group">
                                    <label class="view-label">Prioridade</label>
                                    <div class="view-value">
                                        <span class="priority-badge alta">Alta</span>
                                    </div>
                                </div>

                                <div class="view-group">
                                    <label class="view-label">Data</label>
                                    <div class="view-value">15/12/2024</div>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="view-row">
                                <div class="view-group full-width">
                                    <label class="view-label">Status</label>
                                    <div class="view-value">
                                        <span class="status-badge em-andamento">Em Andamento</span>
                                    </div>
                                </div>
                            </div>

                            <div class="view-divider"></div>

                            <!-- Descrição -->
                            <div class="view-row">
                                <div class="view-group full-width">
                                    <label class="view-label">Descrição</label>
                                    <div class="description-box">
                                        Discutir cronograma do projeto Q1 2025, definir marcos principais, revisar recursos necessários e alinhamento com stakeholders sobre expectativas e deliverables.
                                        <!-- Para descrição vazia, use: -->
                                        <!-- <div class="empty-description">Nenhuma descrição fornecida</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
