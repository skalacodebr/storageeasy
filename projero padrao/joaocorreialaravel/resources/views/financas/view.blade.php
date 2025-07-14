@include('layouts/head-main')

<head>
    <title>Visualizar Transação</title>

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

        .transaction-type {
            font-size: 18px;
            font-weight: 600;
            margin-top: 4px;
        }

        .transaction-type.receita {
            color: #22c55e;
        }

        .transaction-type.despesa {
            color: #ef4444;
        }

        .page-subtitle {
            font-size: 16px;
            color: #888;
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
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .transaction-card {
            background-color: rgba(42, 42, 42, 0.5);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 32px;
            margin-bottom: 32px;
        }

        .transaction-card.receita {
            border-left: 4px solid #22c55e;
        }

        .transaction-card.despesa {
            border-left: 4px solid #ef4444;
        }

        .card-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 32px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .transaction-icon {
            width: 28px;
            height: 28px;
        }

        .transaction-icon.receita {
            color: #22c55e;
        }

        .transaction-icon.despesa {
            color: #ef4444;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 24px;
        }

        .info-group {
            margin-bottom: 24px;
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
            margin-bottom: 8px;
        }

        .info-value {
            font-size: 16px;
            color: #ffffff;
            font-weight: 500;
        }

        .info-value.large {
            font-size: 24px;
            font-weight: 700;
        }

        .info-value.price {
            font-size: 28px;
            font-weight: 700;
        }

        .info-value.price.receita {
            color: #22c55e;
        }

        .info-value.price.despesa {
            color: #ef4444;
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

        .category-badge.receita {
            background-color: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .category-badge.despesa {
            background-color: rgba(239, 68, 68, 0.2);
            color: #ef4444;
        }

        .description-text {
            color: #cccccc;
            line-height: 1.6;
            font-size: 16px;
            background-color: rgba(42, 42, 42, 0.3);
            padding: 16px;
            border-radius: 8px;
            border-left: 3px solid #f59e0b;
        }

        .date-display {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 16px;
            color: #ffffff;
        }

        .date-icon {
            color: #f59e0b;
        }

        .roteiro-display {
            background-color: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            display: inline-block;
        }

        .full-width {
            grid-column: 1 / -1;
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

            .transaction-card {
                padding: 24px;
            }

            .info-grid {
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
                            <h1 class="page-title">Pagamento de Equipamentos</h1>
                            <div class="transaction-type despesa">Despesa</div>
                            <p class="page-subtitle">Detalhes da transação financeira</p>
                        </div>
                        <div class="header-actions">
                            <a href="{{ route('financas.index') }}" class="btn btn-secondary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Voltar
                            </a>
                            <a href="{{ route('financas.edite', 1) }}" class="btn btn-primary">
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
                        <div class="transaction-card despesa">
                            <h2 class="card-title">
                                <svg class="transaction-icon despesa" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 11h-4V7a1 1 0 0 0-2 0v4H7a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0v-4h4a1 1 0 0 0 0-2z" fill="currentColor"/>
                                    <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z" fill="currentColor"/>
                                </svg>
                                Transação Financeira
                            </h2>
                            
                            <!-- Valor Principal -->
                            <div class="info-group">
                                <label class="info-label">Valor da Transação</label>
                                <div class="info-value price despesa">- R$ 1.250,00</div>
                            </div>

                            <!-- Grid de Informações -->
                            <div class="info-grid">
                                <div class="info-group">
                                    <label class="info-label">Tipo de Transação</label>
                                    <div class="info-value">
                                        <span class="category-badge despesa">Despesa</span>
                                    </div>
                                </div>

                                <div class="info-group">
                                    <label class="info-label">Data</label>
                                    <div class="date-display">
                                        <svg class="date-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                            <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                            <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                            <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        15 de junho de 2025
                                    </div>
                                </div>

                                <div class="info-group">
                                    <label class="info-label">Categoria</label>
                                    <div class="info-value">Equipamentos</div>
                                </div>

                                <div class="info-group">
                                    <label class="info-label">Roteiro</label>
                                    <div class="info-value">
                                        <span class="roteiro-display">Evento - Casamento</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Descrição -->
                            <div class="info-group full-width">
                                <label class="info-label">Descrição</label>
                                <div class="description-text">
                                    Pagamento para fornecedor Som & Luz Eventos referente ao aluguel de mesa de som digital 24 canais e sistema de iluminação LED para evento de casamento no dia 20/06/2025. Inclui transporte e montagem dos equipamentos.
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
                html: 'Você realmente deseja excluir esta transação <strong>"Pagamento de Equipamentos"</strong>?<br><br>Esta ação não pode ser desfeita!',
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
                        html: 'Aguarde enquanto a transação <strong>"Pagamento de Equipamentos"</strong> é excluída.',
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
                            title: 'Excluída!',
                            html: 'A transação <strong>"Pagamento de Equipamentos"</strong> foi excluída com sucesso.',
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
                            // Redirecionar para a lista de transações
                            window.location.href = "{{ route('financas.index') }}";
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
