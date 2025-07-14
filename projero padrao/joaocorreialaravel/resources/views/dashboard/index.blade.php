@include('layouts/head-main')

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    @include('layouts/head')
    @include('layouts/head-style')

    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .main-content {
            background-color: #1a1a1a;
            margin-left: 280px;
            padding: 20px;
        }

        .dashboard-title {
            color: #ffffff;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .nav-tabs-custom .nav-item .nav-link::after {
    content: "";
    background: #f59e0b;
    height: 1px;
    position: absolute;
    width: 100%;
    left: 0;
    bottom: -1px;
    -webkit-transition: all 250ms ease 0s;
    transition: all 250ms ease 0s;
    -webkit-transform: scale(0);
    transform: scale(0);
}



        .stats-card {
            background-color:rgba(42, 42, 42, 0);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin-bottom: 20px;
        }

        .stats-card .icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .stats-card .title {
            display: flex;
            align-items: center;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .stats-card .subtitle {
            color: #888;
            font-size: 12px;
            margin-bottom: 12px;
        }

        .stats-card .value {
            color: #ffffff;
            font-size: 22px;
            font-weight: 700;
            margin: 0;
        }

        .stats-card.clients .icon { color: #3b82f6; }
        .stats-card.shows .icon { color: #10b981; }
        .stats-card.revenue .icon { color: #8b5cf6; }
        .stats-card.occupation .icon { color: #f59e0b; }

        .nav-tabs-custom {
            border: none;
            margin-bottom: 30px;
        }

        .nav-tabs-custom .nav-link {
            background: transparent;
            border: none;
            color: #888;
            padding: 12px 0;
            margin-right: 40px;
            border-bottom: 2px solid transparent;
            font-weight: 500;
        }

        .nav-tabs-custom .nav-link.active {
            color: #f59e0b !important;
            border-bottom-color: #f59e0b;
            background: transparent;
        }

        .upcoming-shows-section {
            background-color:rgba(42, 42, 42, 0);
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
            display: flex;
            align-items: center;
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
        }

        .section-title .icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .view-all-link {
            color: #f59e0b;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        .view-all-link:hover {
            color: #fbbf24;
        }

        .show-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
            border-bottom: 1px solid #3a3a3a;
        }

        .show-item:last-child {
            border-bottom: none;
        }

        .show-info {
            flex: 1;
        }

        .show-title {
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .show-details {
            display: flex;
            gap: 16px;
            color: #888;
            font-size: 14px;
        }

        .show-detail {
            display: flex;
            align-items: center;
        }

        .show-detail svg {
            width: 16px;
            height: 16px;
            margin-right: 4px;
        }

        .status-badge {
            background-color: #059669;
            color: #ffffff;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .tab-content {
            margin-top: 20px;
        }

        .tab-pane {
            display: none;
        }

        .tab-pane.active {
            display: block;
        }

        .chart-container {
            background-color:rgba(42, 42, 42, 0);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
        }

        .chart-legend {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            justify-content: center;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #888;
        }

        .legend-color {
            width: 20px;
            height: 3px;
            border-radius: 2px;
        }

        .legend-color.shows {
            background-color: #10b981;
        }

        .legend-color.revenue {
            background-color: #3b82f6;
        }

        .empty-state {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 300px;
            text-align: center;
        }

        .empty-state-content {
            max-width: 400px;
        }

        .empty-message {
            color: #888;
            font-size: 16px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .create-route-link {
            color: #f59e0b;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            padding: 8px 16px;
            border: 1px solid #f59e0b;
            border-radius: 6px;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .create-route-link:hover {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .map-filters {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .filter-select {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 14px;
            min-width: 150px;
        }

        .filter-select:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .reset-filters-btn {
            background-color: transparent;
            border: 1px solid #666;
            color: #666;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .reset-filters-btn:hover {
            border-color: #f59e0b;
            color: #f59e0b;
        }

        .map-container {
            margin: 20px 0;
        }

        .map-legend {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid #3a3a3a;
        }

        .map-legend .legend-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #888;
        }

        .legend-marker {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .legend-marker.confirmed {
            background-color: #10b981;
        }

        .legend-marker.pending {
            background-color: #f59e0b;
        }

        .legend-marker.cancelled {
            background-color: #ef4444;
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
                    
                    <!-- Dashboard Title -->
                    <h1 class="dashboard-title">Dashboard</h1>
                    
                    <!-- Statistics Cards -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="stats-card clients">
                                <div class="title">
                                    <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" fill="none"/>
                                        <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2" fill="none"/>
                                    </svg>
                                    Total de Clientes
                                </div>
                                <div class="subtitle">Clientes cadastrados</div>
                                <div class="value">4</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6">
                            <div class="stats-card shows">
                                <div class="title">
                                    <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2" fill="none"/>
                                        <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                        <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                        <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Shows do Mês
                                </div>
                                <div class="subtitle">Shows agendados</div>
                                <div class="value">6</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6">
                            <div class="stats-card revenue">
                                <div class="title">
                                    <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 3v18h18" stroke="currentColor" stroke-width="2" fill="none"/>
                                        <path d="m19 9-5 5-4-4-3 3" stroke="currentColor" stroke-width="2" fill="none"/>
                                    </svg>
                                    Faturamento Previsto
                                </div>
                                <div class="subtitle">Mês atual</div>
                                <div class="value">R$ 48.659,99</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6">
                            <div class="stats-card occupation">
                                <div class="title">
                                    <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2" fill="none"/>
                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                                    </svg>
                                    Taxa de Ocupação
                                </div>
                                <div class="subtitle">Shows / dias no mês</div>
                                <div class="value">20.0%</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation Tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-tab="proximos-eventos">Próximos Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-tab="desempenho-mensal">Desempenho Mensal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-tab="shows-estado">Shows por Estado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-tab="mapa-eventos">Mapa de Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-tab="roteiros">Roteiros</a>
                        </li>
                    </ul>
                    
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- Próximos Eventos Tab -->
                        <div class="tab-pane active" id="proximos-eventos">
                            <div class="upcoming-shows-section">
                                <div class="section-header">
                                    <div class="section-title">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 18V5l12-2v13" stroke="currentColor" stroke-width="2" fill="none"/>
                                            <circle cx="6" cy="18" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
                                            <circle cx="18" cy="16" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
                                        </svg>
                                        Próximos Shows
                                    </div>
                                    <a href="#" class="view-all-link">Ver todos</a>
                                </div>
                                
                                <div class="shows-list">
                                    <div class="show-item">
                                        <div class="show-info">
                                            <div class="show-title">Show - Cliente</div>
                                            <div class="show-details">
                                                <div class="show-detail">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2" fill="none"/>
                                                        <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                                        <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                                        <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    16/06/2025
                                                </div>
                                                <div class="show-detail">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                                                        <polyline points="12,6 12,12 16,14" stroke="currentColor" stroke-width="2" fill="none"/>
                                                    </svg>
                                                    13:00
                                                </div>
                                                <div class="show-detail">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2" fill="none"/>
                                                        <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
                                                    </svg>
                                                    CLIP
                                                </div>
                                            </div>
                                        </div>
                                        <div class="status-badge">Confirmado</div>
                                    </div>
                                    
                                    <div class="show-item">
                                        <div class="show-info">
                                            <div class="show-title">Show - Cliente</div>
                                            <div class="show-details">
                                                <div class="show-detail">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2" fill="none"/>
                                                        <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                                        <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                                        <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    18/06/2025
                                                </div>
                                                <div class="show-detail">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                                                        <polyline points="12,6 12,12 16,14" stroke="currentColor" stroke-width="2" fill="none"/>
                                                    </svg>
                                                    16:00
                                                </div>
                                                <div class="show-detail">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2" fill="none"/>
                                                        <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
                                                    </svg>
                                                    Casa teste
                                                </div>
                                            </div>
                                        </div>
                                        <div class="status-badge">Confirmado</div>
                                    </div>
                                    
                                    <div class="show-item">
                                        <div class="show-info">
                                            <div class="show-title">Show - Cliente</div>
                                            <div class="show-details">
                                                <div class="show-detail">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2" fill="none"/>
                                                        <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                                        <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                                        <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                    02/07/2025
                                                </div>
                                                <div class="show-detail">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                                                        <polyline points="12,6 12,12 16,14" stroke="currentColor" stroke-width="2" fill="none"/>
                                                    </svg>
                                                    19:00
                                                </div>
                                                <div class="show-detail">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2" fill="none"/>
                                                        <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
                                                    </svg>
                                                    Casa teste
                                                </div>
                                            </div>
                                        </div>
                                        <div class="status-badge">Confirmado</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Desempenho Mensal Tab -->
                        <div class="tab-pane" id="desempenho-mensal">
                            <div class="chart-container">
                                <div class="section-header">
                                    <div class="section-title">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 3v18h18" stroke="currentColor" stroke-width="2" fill="none"/>
                                            <path d="m19 9-5 5-4-4-3 3" stroke="currentColor" stroke-width="2" fill="none"/>
                                        </svg>
                                        Desempenho Mensal
                                    </div>
                                </div>
                                
                                <div class="chart-legend">
                                    <div class="legend-item">
                                        <div class="legend-color shows"></div>
                                        <span>Shows</span>
                                    </div>
                                    <div class="legend-item">
                                        <div class="legend-color revenue"></div>
                                        <span>Faturamento</span>
                                    </div>
                                </div>
                                
                                <canvas id="performanceChart" width="400" height="200"></canvas>
                            </div>
                        </div>

                        <!-- Shows por Estado Tab -->
                        <div class="tab-pane" id="shows-estado">
                            <div class="chart-container">
                                <div class="section-header">
                                    <div class="section-title">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2" fill="none"/>
                                            <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
                                        </svg>
                                        Shows por Estado
                                    </div>
                                </div>
                                
                                <canvas id="stateChart" width="400" height="200"></canvas>
                            </div>
                        </div>

                        <!-- Mapa de Eventos Tab -->
                        <div class="tab-pane" id="mapa-eventos">
                            <div class="chart-container">
                                <div class="section-header">
                                    <div class="section-title">
                                        Mapa de Eventos
                                    </div>
                                    <div class="map-filters">
                                        <select id="statusFilter" class="filter-select">
                                            <option value="all">Todos os Status</option>
                                            <option value="confirmado">Confirmado</option>
                                            <option value="pendente">Pendente</option>
                                            <option value="cancelado">Cancelado</option>
                                        </select>
                                        <select id="monthFilter" class="filter-select">
                                            <option value="all">Todos os Meses</option>
                                            <option value="2025-01">Janeiro 2025</option>
                                            <option value="2025-02">Fevereiro 2025</option>
                                            <option value="2025-03">Março 2025</option>
                                            <option value="2025-04">Abril 2025</option>
                                            <option value="2025-05">Maio 2025</option>
                                            <option value="2025-06">Junho 2025</option>
                                        </select>
                                        <button id="resetFilters" class="reset-filters-btn">Limpar Filtros</button>
                                    </div>
                                </div>
                                
                                <div class="map-container">
                                    <div id="eventsMap" style="height: 500px; width: 100%; border-radius: 8px;"></div>
                                </div>
                                
                                <div class="map-legend">
                                    <div class="legend-item">
                                        <div class="legend-marker confirmed"></div>
                                        <span>Confirmado</span>
                                    </div>
                                    <div class="legend-item">
                                        <div class="legend-marker pending"></div>
                                        <span>Pendente</span>
                                    </div>
                                    <div class="legend-item">
                                        <div class="legend-marker cancelled"></div>
                                        <span>Cancelado</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Roteiros Tab -->
                        <div class="tab-pane" id="roteiros">
                            <div class="chart-container">
                                <div class="section-header">
                                    <div class="section-title">
                                        Próximos Roteiros
                                    </div>
                                    <a href="#" class="view-all-link">Ver todos</a>
                                </div>
                                
                                <div class="empty-state">
                                    <div class="empty-state-content">
                                        <p class="empty-message">Nenhum roteiro próximo</p>
                                        <a href="#" class="create-route-link">Criar novo roteiro</a>
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

    <script>
        // Tab functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabLinks = document.querySelectorAll('.nav-tabs-custom .nav-link');
            const tabPanes = document.querySelectorAll('.tab-pane');

            tabLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all tabs and panes
                    tabLinks.forEach(l => l.classList.remove('active'));
                    tabPanes.forEach(p => p.classList.remove('active'));
                    
                    // Add active class to clicked tab
                    this.classList.add('active');
                    
                    // Show corresponding pane
                    const targetTab = this.getAttribute('data-tab');
                    const targetPane = document.getElementById(targetTab);
                    if (targetPane) {
                        targetPane.classList.add('active');
                        
                        // Initialize chart if switching to performance tab
                        if (targetTab === 'desempenho-mensal') {
                            initPerformanceChart();
                        }
                        
                        // Initialize chart if switching to shows por estado tab
                        if (targetTab === 'shows-estado') {
                            initStateChart();
                        }
                        
                        // Initialize map if switching to mapa-eventos tab
                        if (targetTab === 'mapa-eventos') {
                            initEventsMap();
                        }
                    }
                });
            });

            // Initialize performance chart
            function initPerformanceChart() {
                const ctx = document.getElementById('performanceChart');
                
                // Destroy existing chart if it exists
                if (window.performanceChart instanceof Chart) {
                    window.performanceChart.destroy();
                }

                window.performanceChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Jan/2025', 'Fev/2025', 'Mar/2025', 'Abr/2025', 'Mai/2025', 'Jun/2025'],
                        datasets: [{
                            label: 'Shows',
                            data: [0, 0, 0, 0, 1, 4],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.1)',
                            tension: 0.4,
                            yAxisID: 'y'
                        }, {
                            label: 'Faturamento',
                            data: [0, 0, 0, 0, 8000, 35000],
                            borderColor: '#3b82f6',
                            backgroundColor: 'rgba(59, 130, 246, 0.1)',
                            tension: 0.4,
                            yAxisID: 'y1'
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        interaction: {
                            mode: 'index',
                            intersect: false,
                        },
                        scales: {
                            x: {
                                display: true,
                                grid: {
                                    color: '#3a3a3a'
                                },
                                ticks: {
                                    color: '#888'
                                }
                            },
                            y: {
                                type: 'linear',
                                display: true,
                                position: 'left',
                                title: {
                                    display: true,
                                    text: 'Quantidade de Shows',
                                    color: '#888'
                                },
                                grid: {
                                    color: '#3a3a3a'
                                },
                                ticks: {
                                    color: '#888',
                                    beginAtZero: true,
                                    max: 4
                                }
                            },
                            y1: {
                                type: 'linear',
                                display: true,
                                position: 'right',
                                title: {
                                    display: true,
                                    text: 'Faturamento (R$)',
                                    color: '#888'
                                },
                                grid: {
                                    drawOnChartArea: false,
                                },
                                ticks: {
                                    color: '#888',
                                    beginAtZero: true,
                                    max: 35000,
                                    callback: function(value, index, values) {
                                        return 'R$ ' + value.toLocaleString('pt-BR', { minimumFractionDigits: 2 });
                                    }
                                }
                            }
                        }
                    }
                });
            }

            // Initialize state chart
            function initStateChart() {
                const ctx = document.getElementById('stateChart');
                
                // Destroy existing chart if it exists
                if (window.stateChart instanceof Chart) {
                    window.stateChart.destroy();
                }

                window.stateChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Não especificado'],
                        datasets: [{
                            label: 'Shows',
                            data: [10],
                            backgroundColor: '#10b981',
                            borderColor: '#10b981',
                            borderWidth: 0,
                            borderRadius: 4
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            x: {
                                display: true,
                                grid: {
                                    color: '#3a3a3a'
                                },
                                ticks: {
                                    color: '#888'
                                }
                            },
                            y: {
                                display: true,
                                grid: {
                                    color: '#3a3a3a'
                                },
                                ticks: {
                                    color: '#888',
                                    beginAtZero: true,
                                    max: 10,
                                    stepSize: 1
                                }
                            }
                        }
                    }
                });
            }

            // Sample events data
            const eventsData = [
                {
                    id: 1,
                    title: "Show - Cliente A",
                    date: "2025-01-15",
                    status: "confirmado",
                    lat: -23.5505,
                    lng: -46.6333,
                    location: "São Paulo, SP",
                    venue: "Teatro Municipal"
                },
                {
                    id: 2,
                    title: "Show - Cliente B",
                    date: "2025-02-20",
                    status: "pendente",
                    lat: -22.9068,
                    lng: -43.1729,
                    location: "Rio de Janeiro, RJ",
                    venue: "Theatro Municipal"
                },
                {
                    id: 3,
                    title: "Show - Cliente C",
                    date: "2025-03-10",
                    status: "confirmado",
                    lat: -19.9191,
                    lng: -43.9386,
                    location: "Belo Horizonte, MG",
                    venue: "Palácio das Artes"
                },
                {
                    id: 4,
                    title: "Show - Cliente D",
                    date: "2025-04-05",
                    status: "cancelado",
                    lat: -25.4284,
                    lng: -49.2733,
                    location: "Curitiba, PR",
                    venue: "Teatro Guaíra"
                },
                {
                    id: 5,
                    title: "Show - Cliente E",
                    date: "2025-05-18",
                    status: "confirmado",
                    lat: -30.0346,
                    lng: -51.2177,
                    location: "Porto Alegre, RS",
                    venue: "Casa da Cultura"
                }
            ];

            let eventsMap;
            let markersLayer;

            // Initialize events map
            function initEventsMap() {
                if (eventsMap) {
                    eventsMap.remove();
                }

                // Initialize map centered on Brazil
                eventsMap = L.map('eventsMap').setView([-15.7942, -47.8822], 4);

                // Add tile layer
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(eventsMap);

                // Create markers layer group
                markersLayer = L.layerGroup().addTo(eventsMap);

                // Add markers for all events
                updateMapMarkers();

                // Setup filters
                setupMapFilters();
            }

            function updateMapMarkers(filteredEvents = eventsData) {
                // Clear existing markers
                markersLayer.clearLayers();

                filteredEvents.forEach(event => {
                    const markerColor = getMarkerColor(event.status);
                    
                    // Create custom icon
                    const customIcon = L.divIcon({
                        className: 'custom-marker',
                        html: `<div style="background-color: ${markerColor}; width: 20px; height: 20px; border-radius: 50%; border: 3px solid white; box-shadow: 0 2px 4px rgba(0,0,0,0.3);"></div>`,
                        iconSize: [20, 20],
                        iconAnchor: [10, 10]
                    });

                    const marker = L.marker([event.lat, event.lng], { icon: customIcon })
                        .bindPopup(`
                            <div style="color: #333; font-family: Arial, sans-serif;">
                                <h4 style="margin: 0 0 8px 0; color: #1a1a1a;">${event.title}</h4>
                                <p style="margin: 4px 0;"><strong>Data:</strong> ${formatDate(event.date)}</p>
                                <p style="margin: 4px 0;"><strong>Local:</strong> ${event.venue}</p>
                                <p style="margin: 4px 0;"><strong>Cidade:</strong> ${event.location}</p>
                                <p style="margin: 4px 0;"><strong>Status:</strong> 
                                    <span style="color: ${markerColor}; font-weight: bold;">${event.status.charAt(0).toUpperCase() + event.status.slice(1)}</span>
                                </p>
                            </div>
                        `);

                    markersLayer.addLayer(marker);
                });
            }

            function getMarkerColor(status) {
                switch(status) {
                    case 'confirmado': return '#10b981';
                    case 'pendente': return '#f59e0b';
                    case 'cancelado': return '#ef4444';
                    default: return '#6b7280';
                }
            }

            function formatDate(dateString) {
                const date = new Date(dateString);
                return date.toLocaleDateString('pt-BR');
            }

            function setupMapFilters() {
                const statusFilter = document.getElementById('statusFilter');
                const monthFilter = document.getElementById('monthFilter');
                const resetButton = document.getElementById('resetFilters');

                function applyFilters() {
                    let filteredEvents = eventsData;

                    // Filter by status
                    if (statusFilter.value !== 'all') {
                        filteredEvents = filteredEvents.filter(event => event.status === statusFilter.value);
                    }

                    // Filter by month
                    if (monthFilter.value !== 'all') {
                        filteredEvents = filteredEvents.filter(event => event.date.startsWith(monthFilter.value));
                    }

                    updateMapMarkers(filteredEvents);
                }

                statusFilter.addEventListener('change', applyFilters);
                monthFilter.addEventListener('change', applyFilters);

                resetButton.addEventListener('click', function() {
                    statusFilter.value = 'all';
                    monthFilter.value = 'all';
                    updateMapMarkers();
                });
            }
        });
    </script>
</body>
</html>
