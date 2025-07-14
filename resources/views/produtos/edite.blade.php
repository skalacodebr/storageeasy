@include('layouts/head-main')

<head>
    <title>Editar Produto</title>

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
            font-size: 16px;
            color: #888;
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
            margin: 0 24px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 32px;
        }

        .form-card {
            background-color: rgba(42, 42, 42, 0.5);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 24px;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 1px solid #3a3a3a;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card-icon {
            width: 20px;
            height: 20px;
            color: #f59e0b;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group:last-child {
            margin-bottom: 0;
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

        .form-input, .form-select, .form-textarea {
            width: 100%;
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 12px 16px;
            color: #ffffff;
            font-size: 14px;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .form-input:focus, .form-select:focus, .form-textarea:focus {
            outline: none;
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
        }

        .form-input::placeholder, .form-textarea::placeholder {
            color: #666;
        }

        .form-textarea {
            resize: vertical;
            min-height: 80px;
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
            gap: 16px;
        }

        .currency-input {
            position: relative;
        }

        .currency-symbol {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            font-size: 14px;
            pointer-events: none;
        }

        .currency-input .form-input {
            padding-left: 32px;
        }

        .file-upload {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-input {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .file-upload-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 12px 16px;
            background-color: #1a1a1a;
            border: 2px dashed #3a3a3a;
            border-radius: 8px;
            color: #888;
            font-size: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .file-upload-btn:hover {
            border-color: #f59e0b;
            color: #f59e0b;
        }

        .file-upload-btn.has-file {
            border-color: #22c55e;
            color: #22c55e;
            background-color: rgba(34, 197, 94, 0.1);
        }

        .status-toggle {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .toggle-switch {
            position: relative;
            width: 48px;
            height: 24px;
            background-color: #3a3a3a;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .toggle-switch.active {
            background-color: #22c55e;
        }

        .toggle-slider {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 20px;
            height: 20px;
            background-color: #ffffff;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .toggle-switch.active .toggle-slider {
            transform: translateX(24px);
        }

        .toggle-label {
            font-size: 14px;
            color: #ffffff;
            font-weight: 500;
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

        .form-input.error, .form-select.error, .form-textarea.error {
            border-color: #ef4444;
        }

        .form-input.error:focus, .form-select.error:focus, .form-textarea.error:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
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
            }

            .cards-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .form-card {
                padding: 20px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 12px;
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
                            <h1 class="page-title">Editar Produto</h1>
                            <p class="page-subtitle">Edite as informações do produto</p>
                        </div>
                        <a href="{{ route('produtos.index') }}" class="back-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Voltar
                        </a>
                    </div>

                    <!-- Form Container -->
                    <div class="form-container">
                        <form id="productForm" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Cards Grid -->
                            <div class="cards-grid">
                                
                                <!-- Card 1: Informações do Produto -->
                                <div class="form-card">
                                    <h3 class="card-title">
                                        <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        Informações do Produto
                                    </h3>
                                    
                                    <div class="form-group">
                                        <label for="nome" class="form-label required">Nome</label>
                                        <input 
                                            type="text" 
                                            id="nome" 
                                            name="nome" 
                                            class="form-input" 
                                            placeholder="Digite o nome do produto"
                                            required
                                        >
                                        <div class="error-message" id="nome-error"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="descricao" class="form-label">Descrição</label>
                                        <textarea 
                                            id="descricao" 
                                            name="descricao" 
                                            class="form-textarea" 
                                            placeholder="Descreva o produto (opcional)"
                                            rows="3"
                                        ></textarea>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="codigo" class="form-label required">Código</label>
                                            <input 
                                                type="text" 
                                                id="codigo" 
                                                name="codigo" 
                                                class="form-input" 
                                                placeholder="Ex: PROD001"
                                                required
                                            >
                                            <div class="error-message" id="codigo-error"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="categoria" class="form-label required">Categoria</label>
                                            <select 
                                                id="categoria" 
                                                name="categoria" 
                                                class="form-select" 
                                                required
                                            >
                                                <option value="">Selecione uma categoria</option>
                                                <option value="equipamentos">Equipamentos</option>
                                                <option value="acessorios">Acessórios</option>
                                                <option value="consumiveis">Consumíveis</option>
                                                <option value="decoracao">Decoração</option>
                                                <option value="iluminacao">Iluminação</option>
                                                <option value="som">Som</option>
                                                <option value="outros">Outros</option>
                                            </select>
                                            <div class="error-message" id="categoria-error"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2: Preços e Fornecimento -->
                                <div class="form-card">
                                    <h3 class="card-title">
                                        <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        Preços e Fornecimento
                                    </h3>
                                    
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="preco" class="form-label required">Preço</label>
                                            <div class="currency-input">
                                                <span class="currency-symbol">R$</span>
                                                <input 
                                                    type="text" 
                                                    id="preco" 
                                                    name="preco" 
                                                    class="form-input" 
                                                    placeholder="0,00"
                                                    required
                                                >
                                            </div>
                                            <div class="error-message" id="preco-error"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="custo" class="form-label">Custo</label>
                                            <div class="currency-input">
                                                <span class="currency-symbol">R$</span>
                                                <input 
                                                    type="text" 
                                                    id="custo" 
                                                    name="custo" 
                                                    class="form-input" 
                                                    placeholder="0,00"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="unidade" class="form-label required">Unidade</label>
                                            <select 
                                                id="unidade" 
                                                name="unidade" 
                                                class="form-select" 
                                                required
                                            >
                                                <option value="">Selecione</option>
                                                <option value="un">Unidade</option>
                                                <option value="kg">Quilograma</option>
                                                <option value="g">Grama</option>
                                                <option value="l">Litro</option>
                                                <option value="ml">Mililitro</option>
                                                <option value="m">Metro</option>
                                                <option value="cm">Centímetro</option>
                                                <option value="m2">Metro²</option>
                                                <option value="m3">Metro³</option>
                                                <option value="cx">Caixa</option>
                                                <option value="pct">Pacote</option>
                                            </select>
                                            <div class="error-message" id="unidade-error"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="fornecedor" class="form-label">Fornecedor</label>
                                            <select 
                                                id="fornecedor" 
                                                name="fornecedor" 
                                                class="form-select"
                                            >
                                                <option value="">Selecione um fornecedor</option>
                                                <option value="1">Som & Luz Eventos</option>
                                                <option value="2">Iluminação Total</option>
                                                <option value="3">Decorações Festivas</option>
                                                <option value="4">Buffet Gourmet</option>
                                                <option value="5">Transporte Seguro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3: Estoque -->
                                <div class="form-card">
                                    <h3 class="card-title">
                                        <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" stroke="currentColor" stroke-width="2"/>
                                            <polyline points="3.27,6.96 12,12.01 20.73,6.96" stroke="currentColor" stroke-width="2"/>
                                            <line x1="12" y1="22.08" x2="12" y2="12" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        Estoque
                                    </h3>
                                    
                                    <div class="form-group">
                                        <label for="quantidade" class="form-label required">Quantidade</label>
                                        <input 
                                            type="number" 
                                            id="quantidade" 
                                            name="quantidade" 
                                            class="form-input" 
                                            placeholder="0"
                                            min="0"
                                            step="1"
                                            required
                                        >
                                        <div class="error-message" id="quantidade-error"></div>
                                    </div>
                                </div>

                                <!-- Card 4: Configurações -->
                                <div class="form-card">
                                    <h3 class="card-title">
                                        <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        Configurações
                                    </h3>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div class="status-toggle">
                                            <div class="toggle-switch active" id="statusToggle" onclick="toggleStatus()">
                                                <div class="toggle-slider"></div>
                                            </div>
                                            <span class="toggle-label" id="statusLabel">Ativo</span>
                                            <input type="hidden" id="status" name="status" value="1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="imagem" class="form-label">Imagem do Produto</label>
                                        <div class="file-upload">
                                            <input 
                                                type="file" 
                                                id="imagem" 
                                                name="imagem" 
                                                class="file-input" 
                                                accept="image/*"
                                                onchange="handleFileUpload(this)"
                                            >
                                            <div class="file-upload-btn" id="fileUploadBtn">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M17 8l-5-5-5 5M12 3v12" stroke="currentColor" stroke-width="2"/>
                                                </svg>
                                                Clique para selecionar uma imagem
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Form Actions -->
                            <div class="form-actions">
                                <a href="{{ route('produtos.index') }}" class="btn btn-secondary">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary" id="submitBtn">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="17,21 17,13 7,13 7,21" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="7,3 7,8 15,8" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Salvar Produto
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
        // Toggle status function
        function toggleStatus() {
            const toggle = document.getElementById('statusToggle');
            const label = document.getElementById('statusLabel');
            const input = document.getElementById('status');
            
            toggle.classList.toggle('active');
            
            if (toggle.classList.contains('active')) {
                label.textContent = 'Ativo';
                input.value = '1';
            } else {
                label.textContent = 'Inativo';
                input.value = '0';
            }
        }

        // Handle file upload
        function handleFileUpload(input) {
            const btn = document.getElementById('fileUploadBtn');
            
            if (input.files && input.files[0]) {
                const fileName = input.files[0].name;
                btn.innerHTML = `
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 12l2 2 4-4M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    ${fileName}
                `;
                btn.classList.add('has-file');
            } else {
                btn.innerHTML = `
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M17 8l-5-5-5 5M12 3v12" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Clique para selecionar uma imagem
                `;
                btn.classList.remove('has-file');
            }
        }

        // Format currency inputs
        function formatCurrency(input) {
            let value = input.value.replace(/\D/g, '');
            value = (value / 100).toFixed(2);
            value = value.replace('.', ',');
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            input.value = value;
        }

        // Add currency formatting to price inputs
        document.getElementById('preco').addEventListener('input', function() {
            formatCurrency(this);
        });

        document.getElementById('custo').addEventListener('input', function() {
            formatCurrency(this);
        });

        // Form validation
        function validateForm() {
            let isValid = true;
            const requiredFields = ['nome', 'codigo', 'categoria', 'preco', 'unidade', 'quantidade'];
            
            requiredFields.forEach(field => {
                const input = document.getElementById(field);
                const errorDiv = document.getElementById(field + '-error');
                
                if (!input.value.trim()) {
                    input.classList.add('error');
                    errorDiv.textContent = 'Este campo é obrigatório';
                    errorDiv.style.display = 'block';
                    isValid = false;
                } else {
                    input.classList.remove('error');
                    errorDiv.style.display = 'none';
                }
            });
            
            return isValid;
        }

        // Form submission
        document.getElementById('productForm').addEventListener('submit', function(e) {
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

                // Simulate form submission
                setTimeout(() => {
                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'Produto criado com sucesso.',
                        icon: 'success',
                        confirmButtonColor: '#22c55e',
                        confirmButtonText: 'OK',
                        background: '#2a2a2a',
                        color: '#ffffff'
                    }).then(() => {
                        // window.location.href = "{{ route('produtos.index') }}";
                        // For now, just reset the form
                        this.reset();
                        document.getElementById('statusToggle').classList.add('active');
                        document.getElementById('statusLabel').textContent = 'Ativo';
                        document.getElementById('status').value = '1';
                        handleFileUpload(document.getElementById('imagem'));
                        
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = `
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" stroke="currentColor" stroke-width="2"/>
                                <polyline points="17,21 17,13 7,13 7,21" stroke="currentColor" stroke-width="2"/>
                                <polyline points="7,3 7,8 15,8" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            Salvar Produto
                        `;
                    });
                }, 1500);
            }
        });

        // Remove error styling on input
        document.querySelectorAll('.form-input, .form-select, .form-textarea').forEach(input => {
            input.addEventListener('input', function() {
                if (this.classList.contains('error')) {
                    this.classList.remove('error');
                    const errorDiv = document.getElementById(this.id + '-error');
                    if (errorDiv) {
                        errorDiv.style.display = 'none';
                    }
                }
            });
        });
    </script>

</body>
</html>
