@include('layouts/head-main')

<head>
    <title>Visualizar Produto</title>

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
            color: #f59e0b;
            margin: 0;
        }

        .page-subtitle {
            font-size: 16px;
            color: #888;
        }

        .product-code {
            font-family: 'Courier New', monospace;
            background-color: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            display: inline-block;
            margin-top: 4px;
        }

        .header-actions {
            display: flex;
            gap: 12px;
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
            color: #ffffff;
        }

        .btn-primary {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: 1px solid #f59e0b;
        }

        .btn-primary:hover {
            background-color: #d97706;
            border-color: #d97706;
            color: #1a1a1a;
        }

        .btn-danger {
            background-color: #ef4444;
            color: #ffffff;
            border: 1px solid #ef4444;
        }

        .btn-danger:hover {
            background-color: #dc2626;
            border-color: #dc2626;
            color: #ffffff;
        }

        .content-container {
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

        .info-card {
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

        .info-group {
            margin-bottom: 20px;
        }

        .info-group:last-child {
            margin-bottom: 0;
        }

        .info-label {
            display: block;
            font-size: 12px;
            font-weight: 500;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }

        .info-value {
            font-size: 16px;
            color: #ffffff;
            font-weight: 500;
        }

        .info-value.large {
            font-size: 20px;
            font-weight: 600;
        }

        .info-value.price {
            color: #22c55e;
            font-size: 18px;
            font-weight: 600;
        }

        .info-value.stock {
            font-weight: 600;
        }

        .info-value.stock.low {
            color: #ef4444;
        }

        .info-value.stock.medium {
            color: #f59e0b;
        }

        .info-value.stock.high {
            color: #22c55e;
        }

        .info-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-badge.active {
            background-color: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .status-badge.inactive {
            background-color: rgba(156, 163, 175, 0.2);
            color: #9ca3af;
        }

        .category-badge {
            display: inline-block;
            background-color: rgba(245, 158, 11, 0.2);
            color: #f59e0b;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .description-text {
            color: #cccccc;
            line-height: 1.6;
            font-size: 14px;
        }

        .product-image {
            width: 100%;
            max-width: 200px;
            height: 150px;
            background-color: #2a2a2a;
            border: 2px dashed #3a3a3a;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-size: 14px;
        }

        .image-placeholder {
            text-align: center;
        }

        .image-placeholder svg {
            width: 32px;
            height: 32px;
            margin-bottom: 8px;
            opacity: 0.5;
        }

        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
                padding: 0 20px;
            }

            .header-actions {
                width: 100%;
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .content-container {
                margin: 0 20px;
            }

            .cards-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .info-card {
                padding: 20px;
            }

            .info-row {
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
                        <div class="header-left">
                            <h1 class="page-title">Mesa de Som Digital 24 Canais</h1>
                            <span class="product-code">PROD001</span>
                            <p class="page-subtitle">Informações detalhadas do produto</p>
                        </div>
                        <div class="header-actions">
                            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Voltar
                            </a>
                            <a href="{{ route('produtos.edite', 1) }}" class="btn btn-primary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Editar
                            </a>
                            
                        </div>
                    </div>

                    <!-- Content Container -->
                    <div class="content-container">
                        
                        <!-- Cards Grid -->
                        <div class="cards-grid">
                            
                            <!-- Card 1: Informações Básicas -->
                            <div class="info-card">
                                <h3 class="card-title">
                                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Informações Básicas
                                </h3>
                                
                                <div class="info-group">
                                    <label class="info-label">Nome do Produto</label>
                                    <div class="info-value large">Mesa de Som Digital 24 Canais</div>
                                </div>

                                <div class="info-group">
                                    <label class="info-label">Categoria</label>
                                    <div class="info-value">
                                        <span class="category-badge">Equipamentos</span>
                                    </div>
                                </div>

                                <div class="info-group">
                                    <label class="info-label">Status</label>
                                    <div class="info-value">
                                        <span class="status-badge active">Ativo</span>
                                    </div>
                                </div>

                                <div class="info-group">
                                    <label class="info-label">Descrição</label>
                                    <div class="info-value description-text">
                                        Mesa de som digital profissional com 24 canais, ideal para eventos de médio e grande porte. Possui conectividade USB, Bluetooth e múltiplas saídas auxiliares.
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2: Preços e Fornecimento -->
                            <div class="info-card">
                                <h3 class="card-title">
                                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Preços e Fornecimento
                                </h3>
                                
                                <div class="info-row">
                                    <div class="info-group">
                                        <label class="info-label">Preço de Venda</label>
                                        <div class="info-value price">R$ 2.500,00</div>
                                    </div>

                                    <div class="info-group">
                                        <label class="info-label">Custo</label>
                                        <div class="info-value">R$ 1.800,00</div>
                                    </div>
                                </div>

                                <div class="info-row">
                                    <div class="info-group">
                                        <label class="info-label">Unidade</label>
                                        <div class="info-value">Unidade</div>
                                    </div>

                                    <div class="info-group">
                                        <label class="info-label">Fornecedor</label>
                                        <div class="info-value">Som & Luz Eventos</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3: Estoque -->
                            <div class="info-card">
                                <h3 class="card-title">
                                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="3.27,6.96 12,12.01 20.73,6.96" stroke="currentColor" stroke-width="2"/>
                                        <line x1="12" y1="22.08" x2="12" y2="12" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Controle de Estoque
                                </h3>
                                
                                <div class="info-group">
                                    <label class="info-label">Quantidade Disponível</label>
                                    <div class="info-value stock medium">5 Unidades</div>
                                </div>

                                <div class="info-group">
                                    <label class="info-label">Status do Estoque</label>
                                    <div class="info-value">
                                        <span class="status-badge active">Em Estoque</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4: Imagem do Produto -->
                            <div class="info-card">
                                <h3 class="card-title">
                                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="8.5" cy="8.5" r="1.5" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="21,15 16,10 5,21" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Imagem do Produto
                                </h3>
                                
                                <div class="info-group">
                                    <div class="product-image">
                                        <div class="image-placeholder">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                                <circle cx="8.5" cy="8.5" r="1.5" stroke="currentColor" stroke-width="2"/>
                                                <polyline points="21,15 16,10 5,21" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                            <div>Nenhuma imagem disponível</div>
                                        </div>
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
        // Confirm delete function with SweetAlert2
        function confirmDelete() {
            Swal.fire({
                title: 'Tem certeza?',
                html: 'Você realmente deseja excluir o produto <strong>"Mesa de Som Digital 24 Canais"</strong>?<br><br>Esta ação não pode ser desfeita!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar',
                background: '#2a2a2a',
                color: '#ffffff',
                customClass: {
                    popup: 'swal-dark-popup',
                    title: 'swal-dark-title',
                    htmlContainer: 'swal-dark-content',
                    confirmButton: 'swal-confirm-btn',
                    cancelButton: 'swal-cancel-btn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Mostrar loading
                    Swal.fire({
                        title: 'Excluindo...',
                        html: 'Aguarde enquanto o produto <strong>"Mesa de Som Digital 24 Canais"</strong> é excluído.',
                        icon: 'info',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        background: '#2a2a2a',
                        color: '#ffffff',
                        customClass: {
                            popup: 'swal-dark-popup',
                            title: 'swal-dark-title',
                            htmlContainer: 'swal-dark-content'
                        },
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    // Simular delay e redirecionar
                    setTimeout(() => {
                        Swal.fire({
                            title: 'Excluído!',
                            html: 'O produto <strong>"Mesa de Som Digital 24 Canais"</strong> foi excluído com sucesso.',
                            icon: 'success',
                            confirmButtonColor: '#22c55e',
                            confirmButtonText: 'OK',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            customClass: {
                                popup: 'swal-dark-popup',
                                title: 'swal-dark-title',
                                htmlContainer: 'swal-dark-content',
                                confirmButton: 'swal-success-btn'
                            }
                        }).then(() => {
                            // Redirecionar para a lista de produtos
                            window.location.href = "{{ route('produtos.index') }}";
                        });
                    }, 1500);
                }
            });
        }
    </script>

    <style>
        /* Customização do SweetAlert para tema escuro */
        .swal-dark-popup {
            border: 1px solid #3a3a3a !important;
        }
        
        .swal-dark-title {
            color: #ffffff !important;
        }
        
        .swal-dark-content {
            color: #cccccc !important;
        }
        
        .swal-confirm-btn {
            background-color: #ef4444 !important;
            border: none !important;
        }
        
        .swal-confirm-btn:hover {
            background-color: #dc2626 !important;
        }
        
        .swal-cancel-btn {
            background-color: #6b7280 !important;
            border: none !important;
        }
        
        .swal-cancel-btn:hover {
            background-color: #4b5563 !important;
        }

        .swal-success-btn {
            background-color: #22c55e !important;
            border: none !important;
        }
        
        .swal-success-btn:hover {
            background-color: #16a34a !important;
        }
    </style>

</body>
</html>
