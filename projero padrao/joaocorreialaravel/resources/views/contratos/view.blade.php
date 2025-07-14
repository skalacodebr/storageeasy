@include('layouts/head-main')

<head>
    <title>Detalhes do Contrato</title>

    @include('layouts/head')
    @include('layouts/head-style')

    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .container-fluid {
            padding: 24px;
        }

        /* Header */
        .page-header {
            display: flex;
            align-items: center;
            margin-bottom: 32px;
            gap: 16px;
        }

        .back-btn {
            background-color: transparent;
            border: none;
            color: #ffffff;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background-color: #3a3a3a;
        }

        .page-title {
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        /* Layout Grid */
        .contract-details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
        }

        /* Contract Info Section */
        .contract-info-section {
            background-color: rgba(42, 42, 42, 0.5);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background-color: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        /* Info Fields */
        .info-field {
            margin-bottom: 24px;
        }

        .field-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 16px;
            font-weight: 600;
            color: #f59e0b;
            margin-bottom: 8px;
        }

        .field-value {
            font-size: 16px;
            color: #ffffff;
            margin-left: 24px;
        }

        /* Date Grid */
        .dates-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 24px;
        }

        .date-field {
            margin-bottom: 16px;
        }

        .date-label {
            font-size: 14px;
            color: #888;
            margin-bottom: 4px;
        }

        .date-value {
            font-size: 16px;
            color: #ffffff;
            font-weight: 500;
        }

        /* Action Button */
        .copy-link-btn {
            width: 100%;
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 16px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
            margin-top: 24px;
        }

        .copy-link-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        /* Signatures Section */
        .signatures-section {
            background-color: rgba(42, 42, 42, 0.5);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
        }

        .signature-field {
            margin-bottom: 32px;
        }

        .signature-label {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 16px;
        }

        .signature-placeholder {
            background-color: #2a2a2a;
            border: 2px dashed #4a4a4a;
            border-radius: 8px;
            padding: 40px 20px;
            text-align: center;
            color: #888;
            font-size: 16px;
        }

        .photo-field {
            margin-bottom: 32px;
        }

        .photo-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 16px;
        }

        .photo-placeholder {
            background-color: #2a2a2a;
            border: 2px dashed #4a4a4a;
            border-radius: 8px;
            padding: 40px 20px;
            text-align: center;
            color: #888;
            font-size: 16px;
        }

        /* Alert Box */
        .urgent-alert {
            background-color: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            border-radius: 8px;
            padding: 16px;
            margin-top: 24px;
        }

        .alert-content {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .alert-icon {
            color: #ef4444;
            margin-top: 2px;
        }

        .alert-text {
            color: #ef4444;
            font-size: 14px;
            font-weight: 500;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .contract-details-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .dates-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .page-title {
                font-size: 24px;
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
                        <button class="back-btn" onclick="window.history.back()">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <h1 class="page-title">Detalhes do Contrato</h1>
                    </div>

                    <!-- Contract Details Grid -->
                    <div class="contract-details-grid">
                        
                        <!-- Left Column - Contract Information -->
                        <div class="contract-info-section">
                            <div class="section-header">
                                <h2 class="section-title">Informações do Contrato</h2>
                                <span class="status-badge">Urgente</span>
                            </div>

                            <!-- Event Info -->
                            <div class="info-field">
                                <div class="field-label">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                        <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                        <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Evento
                                </div>
                                <div class="field-value">Show - Cliente</div>
                            </div>

                            <!-- Client Info -->
                            <div class="info-field">
                                <div class="field-label">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Cliente
                                </div>
                                <div class="field-value">Testando</div>
                            </div>

                            <!-- Event Date -->
                            <div class="info-field">
                                <div class="field-label">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                        <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                        <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Data do Evento
                                </div>
                                <div class="field-value">03 de junho de 2025</div>
                            </div>

                            <!-- Dates Grid -->
                            <div class="dates-grid">
                                <div class="date-field">
                                    <div class="date-label">Data de Criação</div>
                                    <div class="date-value">03/06/2025 às 16:41</div>
                                </div>
                                <div class="date-field">
                                    <div class="date-label">Data de Envio</div>
                                    <div class="date-value">04/06/2025 às 09:53</div>
                                </div>
                            </div>

                            <div class="date-field">
                                <div class="date-label">Data de Assinatura</div>
                                <div class="date-value">-</div>
                            </div>

                            <!-- Copy Link Button -->
                            <button class="copy-link-btn" onclick="copySignatureLink()">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Copiar Link de Assinatura
                            </button>
                        </div>

                        <!-- Right Column - Signatures -->
                        <div class="signatures-section">
                            <h2 class="section-title">Assinaturas e Identificação</h2>

                            <!-- Client Signature -->
                            <div class="signature-field">
                                <div class="signature-label">Assinatura do Cliente</div>
                                <div class="signature-placeholder">
                                    Aguardando assinatura do cliente
                                </div>
                            </div>

                            <!-- ID Photo -->
                            <div class="photo-field">
                                <div class="photo-label">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="8.5" cy="8.5" r="1.5" stroke="currentColor" stroke-width="2"/>
                                        <path d="M21 15l-5-5L5 21" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Foto de Identificação
                                </div>
                                <div class="photo-placeholder">
                                    Foto será capturada durante a assinatura
                                </div>
                            </div>

                            <!-- Urgent Alert -->
                            <div class="urgent-alert">
                                <div class="alert-content">
                                    <svg class="alert-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" stroke="currentColor" stroke-width="2"/>
                                        <line x1="12" y1="9" x2="12" y2="13" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="17" r="1" fill="currentColor"/>
                                    </svg>
                                    <div class="alert-text">
                                        Urgente: Evento em menos de uma semana sem contrato assinado
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
        // Function to copy signature link
        function copySignatureLink() {
            // Gera o link de assinatura com token
            const contractId = 1;
            const token = 'abc123def456ghi789jkl012mno345pqr678';
            const signatureUrl = `${window.location.origin}/contratos/assinar/${contractId}/${token}`;
            
            // Copia para a área de transferência
            navigator.clipboard.writeText(signatureUrl).then(function() {
                // Mostra notificação de sucesso
                Swal.fire({
                    title: 'Link Copiado!',
                    html: `O link de assinatura foi copiado para a área de transferência:<br><br><code>${signatureUrl}</code>`,
                    icon: 'success',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup',
                        title: 'swal-dark-title',
                        htmlContainer: 'swal-dark-content',
                        confirmButton: 'swal-confirm-btn'
                    }
                });
            }).catch(function(err) {
                // Fallback para navegadores mais antigos
                const textArea = document.createElement('textarea');
                textArea.value = signatureUrl;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                
                Swal.fire({
                    title: 'Link Copiado!',
                    html: `O link de assinatura foi copiado para a área de transferência:<br><br><code>${signatureUrl}</code>`,
                    icon: 'success',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff',
                    customClass: {
                        popup: 'swal-dark-popup',
                        title: 'swal-dark-title',
                        htmlContainer: 'swal-dark-content',
                        confirmButton: 'swal-confirm-btn'
                    }
                });
            });
        }
    </script>

 </body>
 </html>
