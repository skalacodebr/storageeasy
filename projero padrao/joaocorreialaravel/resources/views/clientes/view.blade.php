@include('layouts/head-main')

<head>
    <title>Detalhes do Cliente</title>

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

        .header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .back-btn {
            background: none;
            border: none;
            color: #ffffff;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
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

        .header-actions {
            display: flex;
            gap: 12px;
        }

        .action-btn {
            background-color: transparent;
            border: 1px solid #f59e0b;
            color: #f59e0b;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .action-btn:hover {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .action-btn.primary {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .action-btn.primary:hover {
            background-color: #d97706;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin: 0 24px;
        }

        .info-card {
            background-color: rgba(42, 42, 42, 0);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
        }

        .card-title {
            font-size: 20px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .info-item {
            margin-bottom: 16px;
        }

        .info-label {
            color: #888;
            font-size: 14px;
            margin-bottom: 4px;
        }

        .info-value {
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        .location-card {
            background-color: rgba(42, 42, 42, 0);
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 16px;
        }

        .location-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .location-name {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
        }

        .location-capacity {
            background-color: #1a1a1a;
            color: #f59e0b;
            padding: 4px 12px;
            border-radius: 16px;
            font-size: 12px;
            font-weight: 600;
        }

        .location-info {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 16px;
        }

        .location-address {
            color: #888;
            font-size: 14px;
            line-height: 1.5;
        }

        .history-section {
            grid-column: 1 / -1;
            margin-top: 24px;
        }

        .history-card {
            background-color: rgba(42, 42, 42, 0);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin-bottom: 24px;
        }

        .empty-state {
            text-align: center;
            color: #888;
            font-size: 16px;
            padding: 40px 20px;
        }

        .events-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
        }

        .events-table th {
            background-color: transparent;
            color: #888;
            font-weight: 500;
            font-size: 14px;
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #3a3a3a;
        }

        .events-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #3a3a3a;
            color: #ffffff;
            font-size: 14px;
        }

        .events-table tr:hover {
            background-color: rgba(245, 158, 11, 0.05);
        }

        .status-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-confirmed {
            background-color: rgba(16, 185, 129, 0.2);
            color: #10b981;
        }

        .status-pending {
            background-color: rgba(245, 158, 11, 0.2);
            color: #f59e0b;
        }

        .status-cancelled {
            background-color: rgba(239, 68, 68, 0.2);
            color: #ef4444;
        }

        .container-fluid {
            padding: 24px 0;
        }

        .days-available {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }

        .day-badge {
            background-color: #1a1a1a;
            color: #f59e0b;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }

        .transport-info {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }

        .transport-badge {
            background-color: #1a1a1a;
            color: #10b981;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
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
                            <a href="{{ route('clientes.index') }}" class="back-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <h1 class="page-title">Arthur Stein</h1>
                        </div>
                        <div class="header-actions">
                            <a href="{{ route('clientes.edite', 1) }}" class="action-btn primary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Editar
                            </a>
                        </div>
                    </div>

                    <!-- Content Grid -->
                    <div class="content-grid">
                        <!-- Informações do Cliente -->
                        <div class="info-card">
                            <h2 class="card-title">Informações do Cliente</h2>
                            
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Telefone</div>
                                    <div class="info-value">51995244054</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Email</div>
                                    <div class="info-value">dudustein2025@gmail.com</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Documento</div>
                                    <div class="info-value">03910005004</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Região</div>
                                    <div class="info-value">Zona Sul</div>
                                </div>
                                <div class="info-item full-width">
                                    <div class="info-label">Observações</div>
                                    <div class="info-value">teste</div>
                                </div>
                                <div class="info-item full-width">
                                    <div class="info-label">Dias Disponíveis</div>
                                    <div class="days-available">
                                        <span class="day-badge">Segunda</span>
                                        <span class="day-badge">Terça</span>
                                        <span class="day-badge">Quinta</span>
                                        <span class="day-badge">Sexta</span>
                                        <span class="day-badge">Sábado</span>
                                    </div>
                                </div>
                                <div class="info-item full-width">
                                    <div class="info-label">Transporte</div>
                                    <div class="transport-info">
                                        <span class="transport-badge">Precisa de van</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Locais de Evento -->
                        <div class="info-card">
                            <h2 class="card-title">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Locais de Evento
                            </h2>
                            
                            <div class="location-card">
                                <div class="location-header">
                                    <div class="location-name">Casa Stein</div>
                                    <div class="location-capacity">1000 pessoas</div>
                                </div>
                                <div class="location-info">
                                    <div class="location-address">
                                        <strong>Endereço</strong><br>
                                        Rua Mário Carlos Oliva Monteiro, 708, Quintas<br>
                                        Estância Velha, RS - CEP: 93615-670
                                    </div>
                                </div>
                                <div style="margin-top: 12px;">
                                    <div class="info-label">Raio de Exclusividade</div>
                                    <div class="info-value">15 km</div>
                                </div>
                                <div style="margin-top: 12px;">
                                    <div class="info-label">Observações do Local</div>
                                    <div class="info-value">Local amplo com estacionamento próprio e estrutura completa para eventos.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Histórico de Eventos -->
                    <div class="history-section">
                        <div class="history-card">
                            <h2 class="card-title">Histórico de Eventos</h2>
                            
                            <table class="events-table">
                                <thead>
                                    <tr>
                                        <th>Data</th>
                                        <th>Evento</th>
                                        <th>Local</th>
                                        <th>Status</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>15/01/2025</td>
                                        <td>Show de Aniversário</td>
                                        <td>Casa Stein</td>
                                        <td><span class="status-badge status-confirmed">Confirmado</span></td>
                                        <td>R$ 2.500,00</td>
                                    </tr>
                                    <tr>
                                        <td>22/02/2025</td>
                                        <td>Festa de Casamento</td>
                                        <td>Casa Stein</td>
                                        <td><span class="status-badge status-pending">Pendente</span></td>
                                        <td>R$ 3.200,00</td>
                                    </tr>
                                    <tr>
                                        <td>10/03/2025</td>
                                        <td>Evento Corporativo</td>
                                        <td>Casa Stein</td>
                                        <td><span class="status-badge status-cancelled">Cancelado</span></td>
                                        <td>R$ 1.800,00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Histórico de Agendamentos -->
                    <div class="history-section">
                        <div class="history-card">
                            <h2 class="card-title">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Histórico de Agendamentos
                            </h2>
                            
                            <table class="events-table">
                                <thead>
                                    <tr>
                                        <th>Data do Agendamento</th>
                                        <th>Tipo</th>
                                        <th>Descrição</th>
                                        <th>Status</th>
                                        <th>Responsável</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>05/01/2025</td>
                                        <td>Reunião</td>
                                        <td>Planejamento do show de aniversário</td>
                                        <td><span class="status-badge status-confirmed">Realizada</span></td>
                                        <td>João Luiz</td>
                                    </tr>
                                    <tr>
                                        <td>12/01/2025</td>
                                        <td>Visita Técnica</td>
                                        <td>Verificação do local e equipamentos</td>
                                        <td><span class="status-badge status-confirmed">Realizada</span></td>
                                        <td>Equipe Técnica</td>
                                    </tr>
                                    <tr>
                                        <td>20/02/2025</td>
                                        <td>Reunião</td>
                                        <td>Discussão sobre festa de casamento</td>
                                        <td><span class="status-badge status-pending">Agendada</span></td>
                                        <td>João Luiz</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



    @include('layouts/vendor-scripts')

    <script>
        console.log('Cliente details page loaded');
    </script>

</body>
</html>
