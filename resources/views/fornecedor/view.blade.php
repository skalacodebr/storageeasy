@include('layouts/head-main')

<head>
    <title>Visualizar Fornecedor</title>

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

        .supplier-name {
            font-size: 18px;
            color: #f59e0b;
            font-weight: 500;
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

        .content-container {
            margin: 0 24px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .info-cards {
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

        .info-item {
            margin-bottom: 16px;
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .info-label {
            font-size: 12px;
            font-weight: 500;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .info-value {
            font-size: 14px;
            color: #ffffff;
            font-weight: 500;
        }

        .info-value.empty {
            color: #666;
            font-style: italic;
        }

        .category-badge {
            display: inline-block;
            background-color: #f59e0b;
            color: #1a1a1a;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
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

        .contact-item {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 16px;
            height: 16px;
            color: #f59e0b;
            flex-shrink: 0;
        }

        .contact-value {
            font-size: 14px;
            color: #ffffff;
        }

        .address-full {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 16px;
            margin-top: 12px;
        }

        .address-text {
            font-size: 14px;
            color: #ffffff;
            line-height: 1.5;
        }

        .actions-container {
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

        .btn-danger {
            background-color: #ef4444;
            color: #ffffff;
            border: 1px solid #ef4444;
        }

        .btn-danger:hover {
            background-color: #dc2626;
            border-color: #dc2626;
        }

        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
                padding: 0 20px;
            }

            .content-container {
                margin: 0 20px;
            }

            .info-cards {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .info-card {
                padding: 20px;
            }

            .actions-container {
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
                            <h1 class="page-title">Visualizar Fornecedor</h1>
                            <div class="supplier-name">TechSound Equipamentos</div>
                        </div>
                        <a href="{{ route('fornecedor.index') }}" class="back-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Voltar
                        </a>
                    </div>

                    <!-- Content Container -->
                    <div class="content-container">
                        
                        <!-- Info Cards -->
                        <div class="info-cards">
                            
                            <!-- Informações Básicas -->
                            <div class="info-card">
                                <h3 class="card-title">
                                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Informações Básicas
                                </h3>
                                
                                <div class="info-item">
                                    <div class="info-label">Nome</div>
                                    <div class="info-value">TechSound Equipamentos</div>
                                </div>
                                
                                <div class="info-item">
                                    <div class="info-label">Categoria</div>
                                    <div class="info-value">
                                        <span class="category-badge">Equipamentos de Som</span>
                                    </div>
                                </div>
                                
                                <div class="info-item">
                                    <div class="info-label">Status</div>
                                    <div class="info-value">
                                        <span class="status-badge active">Ativo</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Contato -->
                            <div class="info-card">
                                <h3 class="card-title">
                                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Contato
                                </h3>
                                
                                <div class="contact-item">
                                    <svg class="contact-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    <div class="contact-value">contato@techsound.com.br</div>
                                </div>
                                
                                <div class="contact-item">
                                    <svg class="contact-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    <div class="contact-value">(11) 99876-5432</div>
                                </div>
                                
                                <div class="contact-item">
                                    <svg class="contact-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    <div class="contact-value">(11) 99876-5432</div>
                                </div>
                            </div>

                        </div>

                        <!-- Endereço -->
                        <div class="info-card">
                            <h3 class="card-title">
                                <svg class="card-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Endereço
                            </h3>
                            
                            <div class="info-item">
                                <div class="info-label">CEP</div>
                                <div class="info-value">01310-100</div>
                            </div>
                            
                            <div class="address-full">
                                <div class="address-text">
                                    <strong>Avenida Paulista, 1578 - Sala 1205</strong><br>
                                    São Paulo - SP<br>
                                    CEP: 01310-100
                                </div>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="actions-container">
                            <a href="{{ route('fornecedor.index') }}" class="btn btn-secondary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Voltar
                            </a>
                            <a href="{{ route('fornecedor.edite', 1) }}" class="btn btn-primary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Editar
                            </a>
                           
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

   

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
    </style>

</body>
</html>
