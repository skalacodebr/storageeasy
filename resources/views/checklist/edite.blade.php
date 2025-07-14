@include('layouts/head-main')

<head>
    <title>Editar Checklist</title>

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
            max-width: 1000px;
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

        /* Toggle Switch */
        .toggle-container {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 32px;
        }

        .toggle-switch {
            position: relative;
            width: 60px;
            height: 30px;
            background-color: #f59e0b;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .toggle-switch.inactive {
            background-color: #6b7280;
        }

        .toggle-knob {
            position: absolute;
            top: 3px;
            left: 3px;
            width: 24px;
            height: 24px;
            background-color: #ffffff;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .toggle-switch.inactive .toggle-knob {
            left: 33px;
        }

        .toggle-label {
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
        }

        /* Checklist Items */
        .checklist-section {
            margin-top: 32px;
        }

        .checklist-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .checklist-title {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
        }

        .add-item-btn {
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

        .add-item-btn:hover {
            background-color: #d97706;
        }

        .checklist-items {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .checklist-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            background-color: rgba(42, 42, 42, 0.3);
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 16px;
            transition: all 0.3s ease;
        }

        .checklist-item:hover {
            border-color: #f59e0b;
        }

        .item-input {
            flex: 1;
            background-color: transparent;
            border: none;
            color: #ffffff;
            font-size: 14px;
            outline: none;
        }

        .item-input::placeholder {
            color: #666;
        }

        .remove-item-btn {
            background: none;
            border: none;
            color: #ef4444;
            cursor: pointer;
            padding: 4px;
            border-radius: 4px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .remove-item-btn:hover {
            background-color: rgba(239, 68, 68, 0.1);
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

            .checklist-header {
                flex-direction: column;
                gap: 16px;
                align-items: stretch;
            }

            .add-item-btn {
                justify-content: center;
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
                        <h1 class="page-title">Editar Template de Checklist</h1>
                        <a href="{{ route('checklist.index') }}" class="back-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Voltar
                        </a>
                    </div>

                    <!-- Form Section -->
                    <div class="form-section">
                        <div class="section-header">
                            <h2 class="section-title">Editar Template</h2>
                        </div>

                        <form class="form-container" id="checklistForm">
                            <!-- Título -->
                            <div class="form-row">
                                <div class="form-group full-width">
                                    <label for="checklistTitle" class="form-label">Título</label>
                                    <input 
                                        type="text" 
                                        id="checklistTitle" 
                                        name="checklistTitle" 
                                        class="form-input" 
                                        placeholder="" 
                                        required
                                    >
                                </div>
                            </div>

                            <!-- Descrição -->
                            <div class="form-row">
                                <div class="form-group full-width">
                                    <label for="checklistDescription" class="form-label">Descrição</label>
                                    <textarea 
                                        id="checklistDescription" 
                                        name="checklistDescription" 
                                        class="form-textarea" 
                                        placeholder=""
                                    ></textarea>
                                </div>
                            </div>

                            <!-- Toggle Ativo -->
                            <div class="toggle-container">
                                <div class="toggle-switch" id="activeToggle">
                                    <div class="toggle-knob"></div>
                                </div>
                                <span class="toggle-label">Ativo</span>
                                <input type="hidden" id="isActive" name="isActive" value="true">
                            </div>

                            <!-- Itens do Checklist -->
                            <div class="checklist-section">
                                <div class="checklist-header">
                                    <h3 class="checklist-title">Itens do Checklist</h3>
                                    <button type="button" class="add-item-btn" id="addItemBtn">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                        Adicionar Item
                                    </button>
                                </div>

                                <div class="checklist-items" id="checklistItems">
                                    <!-- Item inicial -->
                                    <div class="checklist-item">
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
                                    </div>
                                </div>
                            </div>

                            <!-- Ações -->
                            <div class="form-actions">
                                <a href="#" class="btn-secondary">Cancelar</a>
                                <button type="submit" class="btn-primary">
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
