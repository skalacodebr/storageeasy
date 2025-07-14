@include('layouts/head-main')

<head>
    <title>Editar Tarefa</title>

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

        .form-section {
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

        .form-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .form-row {
            display: flex;
            gap: 24px;
            margin-bottom: 24px;
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
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-input::placeholder,
        .form-textarea::placeholder {
            color: #666;
        }

        .priority-badges {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .priority-option {
            display: none;
        }

        .priority-label {
            display: flex;
            align-items: center;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .priority-label.baixa {
            background-color: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .priority-label.media {
            background-color: rgba(245, 158, 11, 0.2);
            color: #f59e0b;
        }

        .priority-label.alta {
            background-color: rgba(239, 68, 68, 0.2);
            color: #ef4444;
        }

        .priority-option:checked + .priority-label {
            border-color: currentColor;
            background-color: rgba(245, 158, 11, 0.1);
        }

        .status-badges {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .status-option {
            display: none;
        }

        .status-label {
            display: flex;
            align-items: center;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .status-label.pendente {
            background-color: rgba(156, 163, 175, 0.2);
            color: #9ca3af;
        }

        .status-label.em-andamento {
            background-color: rgba(59, 130, 246, 0.2);
            color: #3b82f6;
        }

        .status-label.concluida {
            background-color: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .status-option:checked + .status-label {
            border-color: currentColor;
            background-color: rgba(245, 158, 11, 0.1);
        }

        .form-actions {
            display: flex;
            gap: 16px;
            justify-content: flex-end;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid #3a3a3a;
        }

        .btn-secondary {
            background-color: #6b7280;
            color: #ffffff;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-secondary:hover {
            background-color: #4b5563;
            color: #ffffff;
        }

        .btn-primary {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .container-fluid {
            padding: 24px 0;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 16px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn-secondary,
            .btn-primary {
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
                        <h1 class="page-title">Editar Tarefa</h1>
                        <a href="{{ route('tarefas.index') }}" class="back-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Voltar
                        </a>
                    </div>

                    <!-- Form Section -->
                    <div class="form-section">
                        <div class="section-header">
                            <h2 class="section-title">Editar Tarefa</h2>
                            <p class="section-description">Preencha os dados abaixo para editar a tarefa</p>
                        </div>

                        <form class="form-container" id="taskForm">
                            <!-- Nome da Tarefa -->
                            <div class="form-row">
                                <div class="form-group full-width">
                                    <label for="taskName" class="form-label">Nome da Tarefa *</label>
                                    <input 
                                        type="text" 
                                        id="taskName" 
                                        name="taskName" 
                                        class="form-input" 
                                        placeholder="Digite o nome da tarefa" 
                                        required
                                    >
                                </div>
                            </div>

                            <!-- Prioridade e Data -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Prioridade *</label>
                                    <div class="priority-badges">
                                        <input type="radio" id="baixa" name="priority" value="baixa" class="priority-option" required>
                                        <label for="baixa" class="priority-label baixa">Baixa</label>
                                        
                                        <input type="radio" id="media" name="priority" value="media" class="priority-option">
                                        <label for="media" class="priority-label media">Média</label>
                                        
                                        <input type="radio" id="alta" name="priority" value="alta" class="priority-option">
                                        <label for="alta" class="priority-label alta">Alta</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="taskDate" class="form-label">Data *</label>
                                    <input 
                                        type="date" 
                                        id="taskDate" 
                                        name="taskDate" 
                                        class="form-input" 
                                        required
                                    >
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="form-row">
                                <div class="form-group full-width">
                                    <label class="form-label">Status *</label>
                                    <div class="status-badges">
                                        <input type="radio" id="pendente" name="status" value="pendente" class="status-option" checked required>
                                        <label for="pendente" class="status-label pendente">Pendente</label>
                                        
                                        <input type="radio" id="em-andamento" name="status" value="em-andamento" class="status-option">
                                        <label for="em-andamento" class="status-label em-andamento">Em Andamento</label>
                                        
                                        <input type="radio" id="concluida" name="status" value="concluida" class="status-option">
                                        <label for="concluida" class="status-label concluida">Concluída</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Descrição -->
                            <div class="form-row">
                                <div class="form-group full-width">
                                    <label for="taskDescription" class="form-label">Descrição</label>
                                    <textarea 
                                        id="taskDescription" 
                                        name="taskDescription" 
                                        class="form-textarea" 
                                        placeholder="Digite uma descrição detalhada da tarefa (opcional)"
                                    ></textarea>
                                </div>
                            </div>

                            <!-- Ações -->
                            <div class="form-actions">
                                <a href="#" class="btn-secondary">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Cancelar
                                </a>
                                <button type="submit" class="btn-primary">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Salvar Tarefa
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Form submission
        document.getElementById('taskForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Coletar dados do formulário
            const formData = {
                name: document.getElementById('taskName').value,
                priority: document.querySelector('input[name="priority"]:checked')?.value,
                status: document.querySelector('input[name="status"]:checked')?.value,
                date: document.getElementById('taskDate').value,
                description: document.getElementById('taskDescription').value
            };

            // Validação básica
            if (!formData.name.trim()) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro de validação',
                    text: 'Por favor, informe o nome da tarefa',
                    confirmButtonColor: '#f59e0b',
                    background: '#2a2a2a',
                    color: '#ffffff'
                });
                return;
            }

            if (!formData.priority) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro de validação',
                    text: 'Por favor, selecione a prioridade da tarefa',
                    confirmButtonColor: '#f59e0b',
                    background: '#2a2a2a',
                    color: '#ffffff'
                });
                return;
            }

            if (!formData.date) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro de validação',
                    text: 'Por favor, selecione a data da tarefa',
                    confirmButtonColor: '#f59e0b',
                    background: '#2a2a2a',
                    color: '#ffffff'
                });
                return;
            }

            // Mostrar loading
            Swal.fire({
                title: 'Criando tarefa...',
                text: 'Aguarde enquanto salvamos sua tarefa',
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
                    title: 'Tarefa criada com sucesso!',
                    text: 'Sua tarefa foi criada e adicionada à lista',
                    confirmButtonColor: '#22c55e',
                    background: '#2a2a2a',
                    color: '#ffffff'
                }).then(() => {
                    // Aqui você redirecionaria para a lista de tarefas
                    // window.location.href = '/tarefas';
                    console.log('Dados da tarefa:', formData);
                });
            }, 1500);
        });

        // Auto-focus no primeiro campo
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('taskName').focus();
        });
    </script>

</body>
</html>
