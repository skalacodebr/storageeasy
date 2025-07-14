@include('layouts/head-main')

<head>
    <title>Visualizar Checklist</title>

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

        .back-btn {
            background-color: #6b7280;
            color: #ffffff;
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

        .back-btn:hover {
            background-color: #4b5563;
            color: #ffffff;
        }

        .edit-btn {
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

        .info-card {
            background-color: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 32px;
        }

        .info-card-content {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-icon {
            color: #3b82f6;
            flex-shrink: 0;
        }

        .info-text {
            color: #dbeafe;
            font-size: 14px;
        }

        .view-container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .view-row {
            display: flex;
            gap: 24px;
            margin-bottom: 24px;
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
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .view-value {
            background-color: rgba(42, 42, 42, 0.3);
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            min-height: 20px;
        }

        .view-value.large {
            min-height: 120px;
            white-space: pre-wrap;
        }

        .view-value.empty {
            color: #666;
            font-style: italic;
        }

        /* Status Badge */
        .status-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-badge.active {
            background-color: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.3);
        }

        .status-badge.inactive {
            background-color: rgba(107, 114, 128, 0.1);
            color: #6b7280;
            border: 1px solid rgba(107, 114, 128, 0.3);
        }

        .status-icon {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: currentColor;
        }

        /* Checklist Items */
        .checklist-section {
            margin-top: 32px;
        }

        .checklist-header {
            margin-bottom: 24px;
        }

        .checklist-title {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 8px;
        }

        .checklist-subtitle {
            color: #888;
            font-size: 14px;
        }

        .checklist-items {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .checklist-item {
            display: flex;
            align-items: center;
            gap: 12px;
            background-color: rgba(42, 42, 42, 0.3);
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 16px;
        }

        .item-checkbox {
            width: 20px;
            height: 20px;
            border: 2px solid #3a3a3a;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .item-text {
            color: #ffffff;
            font-size: 14px;
            flex: 1;
        }

        .item-number {
            color: #666;
            font-size: 12px;
            font-weight: 600;
            min-width: 24px;
            text-align: center;
        }

        .container-fluid {
            padding: 24px 0;
        }

        /* Separator */
        .section-separator {
            height: 1px;
            background-color: #3a3a3a;
            margin: 32px 0;
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
                        <h1 class="page-title">Visualizar Template</h1>
                        <div class="header-actions">
                            <a href="{{ route('checklist.index') }}" class="back-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Voltar
                            </a>
                            <a href="{{ route('checklist.edite', 1) }}" class="edit-btn">
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
                            <h2 class="section-title">Detalhes do Template</h2>
                            <p class="section-description">Informações completas do template de checklist</p>
                        </div>

                   

                        <div class="view-container">
                            <!-- Título -->
                            <div class="view-row">
                                <div class="view-group full-width">
                                    <label class="view-label">Título</label>
                                    <div class="view-value">Setup de Evento Corporativo</div>
                                </div>
                            </div>

                            <!-- Descrição -->
                            <div class="view-row">
                                <div class="view-group full-width">
                                    <label class="view-label">Descrição</label>
                                    <div class="view-value large">Checklist completo para organização de eventos corporativos incluindo todas as etapas necessárias para um evento bem-sucedido, desde o planejamento inicial até a execução final.</div>
                                </div>
                            </div>

                            <!-- Status e Data de Criação -->
                            <div class="view-row">
                                <div class="view-group">
                                    <label class="view-label">Status</label>
                                    <div class="view-value">
                                        <div class="status-container">
                                            <div class="status-badge active">
                                                <div class="status-icon"></div>
                                                Ativo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-group">
                                    <label class="view-label">Data de Criação</label>
                                    <div class="view-value">15/12/2024 às 14:30</div>
                                </div>
                            </div>

                            <div class="section-separator"></div>

                            <!-- Itens do Checklist -->
                            <div class="checklist-section">
                                <div class="checklist-header">
                                    <h3 class="checklist-title">Itens do Checklist</h3>
                                    <p class="checklist-subtitle">8 itens configurados neste template</p>
                                </div>

                                <div class="checklist-items">
                                    <div class="checklist-item">
                                        <div class="item-number">01</div>
                                        <div class="item-checkbox">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6L9 17l-5-5" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="item-text">Definir data, horário e local do evento</div>
                                    </div>

                                    <div class="checklist-item">
                                        <div class="item-number">02</div>
                                        <div class="item-checkbox">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6L9 17l-5-5" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="item-text">Elaborar lista de convidados e enviar convites</div>
                                    </div>

                                    <div class="checklist-item">
                                        <div class="item-number">03</div>
                                        <div class="item-checkbox">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6L9 17l-5-5" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="item-text">Contratar serviços de catering e buffet</div>
                                    </div>

                                    <div class="checklist-item">
                                        <div class="item-number">04</div>
                                        <div class="item-checkbox">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6L9 17l-5-5" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="item-text">Reservar equipamentos de som e projeção</div>
                                    </div>

                                    <div class="checklist-item">
                                        <div class="item-number">05</div>
                                        <div class="item-checkbox">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6L9 17l-5-5" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="item-text">Preparar material gráfico e decoração</div>
                                    </div>

                                    <div class="checklist-item">
                                        <div class="item-number">06</div>
                                        <div class="item-checkbox">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6L9 17l-5-5" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="item-text">Confirmar presença dos palestrantes</div>
                                    </div>

                                    <div class="checklist-item">
                                        <div class="item-number">07</div>
                                        <div class="item-checkbox">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6L9 17l-5-5" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="item-text">Organizar cronograma detalhado do evento</div>
                                    </div>

                                    <div class="checklist-item">
                                        <div class="item-number">08</div>
                                        <div class="item-checkbox">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6L9 17l-5-5" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="item-text">Realizar checklist final no dia anterior</div>
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

    <script>
        // Toggle switch functionality
        document.getElementById('activeToggle').addEventListener('click', function() {
            const toggle = this;
            const hiddenInput = document.getElementById('isActive');
            
            if (toggle.classList.contains('inactive')) {
                toggle.classList.remove('inactive');
                hiddenInput.value = 'true';
            } else {
                toggle.classList.add('inactive');
                hiddenInput.value = 'false';
            }
        });

        // Add new checklist item
        document.getElementById('addItemBtn').addEventListener('click', function() {
            const container = document.getElementById('checklistItems');
            const newItem = document.createElement('div');
            newItem.className = 'checklist-item';
            newItem.innerHTML = `
                <input 
                    type="text" 
                    class="item-input" 
                    placeholder="Descrição do item" 
                    name="items[]"
                >
                <button type="button" class="remove-item-btn" onclick="removeItem(this)">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="3,6 5,6 21,6" stroke="currentColor" stroke-width="2"/>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2 2h4a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </button>
            `;
            container.appendChild(newItem);
            
            // Focus no novo input
            newItem.querySelector('.item-input').focus();
        });

        // Remove checklist item
        function removeItem(button) {
            const item = button.closest('.checklist-item');
            const container = document.getElementById('checklistItems');
            
            // Não permitir remover se for o último item
            if (container.children.length > 1) {
                item.remove();
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Atenção',
                    text: 'Deve haver pelo menos um item no checklist',
                    confirmButtonColor: '#f59e0b',
                    background: '#2a2a2a',
                    color: '#ffffff'
                });
            }
        }

        // Form submission
        document.getElementById('checklistForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Coletar dados do formulário
            const title = document.getElementById('checklistTitle').value.trim();
            const description = document.getElementById('checklistDescription').value.trim();
            const isActive = document.getElementById('isActive').value === 'true';
            const items = Array.from(document.querySelectorAll('.item-input'))
                .map(input => input.value.trim())
                .filter(value => value !== '');

            // Validação
            if (!title) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro de validação',
                    text: 'Por favor, informe o título do checklist',
                    confirmButtonColor: '#f59e0b',
                    background: '#2a2a2a',
                    color: '#ffffff'
                });
                return;
            }

            if (items.length === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro de validação',
                    text: 'Por favor, adicione pelo menos um item ao checklist',
                    confirmButtonColor: '#f59e0b',
                    background: '#2a2a2a',
                    color: '#ffffff'
                });
                return;
            }

            // Mostrar loading
            Swal.fire({
                title: 'Salvando checklist...',
                text: 'Aguarde enquanto salvamos seu template',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                background: '#2a2a2a',
                color: '#ffffff',
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Simular delay de salvamento
            setTimeout(() => {
                Swal.fire({
                    icon: 'success',
                    title: 'Template criado com sucesso!',
                    text: 'Seu template de checklist foi salvo',
                    confirmButtonColor: '#22c55e',
                    background: '#2a2a2a',
                    color: '#ffffff'
                }).then(() => {
                    console.log('Dados do checklist:', {
                        title,
                        description,
                        isActive,
                        items
                    });
                });
            }, 1500);
        });

        // Auto-focus no primeiro campo
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('checklistTitle').focus();
        });
    </script>

</body>
</html>
