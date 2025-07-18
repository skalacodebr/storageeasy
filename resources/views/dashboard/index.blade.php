@include('layouts/head-main')

<head>
    <title>Dashboard | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')

    <link href="{{ asset('assets/css/pages_new/dashboard.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Plugins CSS -->
    <link href="{{ asset('assets/libs/apexcharts/apexcharts.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts/body')
    @include('layouts/menu')
    
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Cabeçalho -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded">
                                                    <i class="fas fa-building font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="mb-0">Matriz - Centro SP</h4>
                                            <p class="text-muted mb-0">14 de julho de 2025</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <button class="btn btn-light me-2">
                                        <i class="fas fa-print me-1"></i> Imprimir
                                    </button>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-download me-1"></i> Exportar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cards Principais -->
                    <div class="row mb-4">
                        <!-- Card Contratos Ativos -->
                        <div class="col-xl-3 col-md-6">
                            <div class="metric-card">
                                <div class="metric-title">CONTRATOS ATIVOS</div>
                                <div class="metric-value">89</div>
                                <div class="metric-progress">
                                    <div class="metric-progress-bar blue" style="width: 75%"></div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="metric-change positive">
                                        <div class="metric-change-icon positive">
                                            <i class="fas fa-arrow-up"></i>
                                        </div>
                                        +12%
                                    </div>
                                    <div class="metric-period">vs mês anterior</div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Boxes Alugados -->
                        <div class="col-xl-3 col-md-6">
                            <div class="metric-card">
                                <div class="metric-title">BOXES ALUGADOS</div>
                                <div class="metric-value">156</div>
                                <div class="metric-progress">
                                    <div class="metric-progress-bar green" style="width: 85%"></div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="metric-change positive">
                                        <div class="metric-change-icon positive">
                                            <i class="fas fa-arrow-up"></i>
                                        </div>
                                        +8%
                                    </div>
                                    <div class="metric-period">vs mês anterior</div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Assinaturas Pendentes -->
                        <div class="col-xl-3 col-md-6">
                            <div class="metric-card">
                                <div class="metric-title">ASSINATURAS PENDENTES</div>
                                <div class="metric-value">23</div>
                                <div class="metric-progress">
                                    <div class="metric-progress-bar orange" style="width: 45%"></div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="metric-change negative">
                                        <div class="metric-change-icon negative">
                                            <i class="fas fa-arrow-down"></i>
                                        </div>
                                        -5%
                                    </div>
                                    <div class="metric-period">vs mês anterior</div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Seguros Ativos -->
                        <div class="col-xl-3 col-md-6">
                            <div class="metric-card">
                                <div class="metric-title">SEGUROS ATIVOS</div>
                                <div class="metric-value">R$ 45.890</div>
                                <div class="metric-progress">
                                    <div class="metric-progress-bar purple" style="width: 90%"></div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="metric-change positive">
                                        <div class="metric-change-icon positive">
                                            <i class="fas fa-arrow-up"></i>
                                        </div>
                                        +15%
                                    </div>
                                    <div class="metric-period">vs mês anterior</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gráficos -->
                    <div class="row mb-4">
                        <!-- Inadimplência por Categoria -->
                        <div class="col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h5 class="card-title mb-0 flex-grow-1">Inadimplência por Categoria</h5>
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs">
                                                <span class="avatar-title bg-soft-warning rounded">
                                                    <i class="fas fa-exclamation-triangle text-warning"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="delinquency-list">
                                        <!-- PF Homem -->
                                        <li class="delinquency-item">
                                            <div class="delinquency-header">
                                                <div class="delinquency-category">
                                                    <span class="delinquency-dot blue"></span>
                                                    PF Homem
                                                </div>
                                                <div class="delinquency-percentage">45%</div>
                                            </div>
                                            <div class="delinquency-subtitle">12 clientes inadimplentes</div>
                                            <div class="delinquency-progress">
                                                <div class="delinquency-progress-bar blue" style="width: 45%"></div>
                                            </div>
                                        </li>

                                        <!-- PF Mulher -->
                                        <li class="delinquency-item">
                                            <div class="delinquency-header">
                                                <div class="delinquency-category">
                                                    <span class="delinquency-dot pink"></span>
                                                    PF Mulher
                                                </div>
                                                <div class="delinquency-percentage">30%</div>
                                            </div>
                                            <div class="delinquency-subtitle">8 clientes inadimplentes</div>
                                            <div class="delinquency-progress">
                                                <div class="delinquency-progress-bar pink" style="width: 30%"></div>
                                            </div>
                                        </li>

                                        <!-- PJ -->
                                        <li class="delinquency-item">
                                            <div class="delinquency-header">
                                                <div class="delinquency-category">
                                                    <span class="delinquency-dot purple"></span>
                                                    PJ
                                                </div>
                                                <div class="delinquency-percentage">25%</div>
                                            </div>
                                            <div class="delinquency-subtitle">7 clientes inadimplentes</div>
                                            <div class="delinquency-progress">
                                                <div class="delinquency-progress-bar purple" style="width: 25%"></div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="delinquency-alert">
                                        <div class="delinquency-alert-content">
                                            <i class="fas fa-exclamation-triangle delinquency-alert-icon"></i>
                                            <div class="delinquency-alert-text">
                                                <strong>Total: 27 clientes inadimplentes</strong>
                                                <p>Representa 12% do total de clientes ativos</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Taxa de Conversão CRM -->
                        <div class="col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h5 class="card-title mb-0 flex-grow-1">Taxa de Conversão CRM</h5>
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs">
                                                <span class="avatar-title bg-soft-success rounded">
                                                    <i class="fas fa-chart-line text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="conversion-rate">
                                                <div class="conversion-chart"></div>
                                                <h2>67%</h2>
                                                <p>Taxa média de conversão</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="leads-card success">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <div class="leads-label">Leads convertidos</div>
                                                        <div class="leads-number">139</div>
                                                    </div>
                                                    <div class="leads-icon up">
                                                        <i class="fas fa-arrow-up"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="leads-card danger">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <div class="leads-label">Leads perdidos</div>
                                                        <div class="leads-number">68</div>
                                                    </div>
                                                    <div class="leads-icon down">
                                                        <i class="fas fa-arrow-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="performance-container">
                                        <div class="performance-label">
                                            <div class="performance-text">Performance</div>
                                            <div class="performance-status">Excelente</div>
                                        </div>
                                        <div class="performance-bar">
                                            <div class="performance-progress"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                         <!-- Origem dos Leads -->
                         <div class="row mb-4">
                        <div class="col-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="leads-origin">
                                        <div class="leads-origin-header">
                                            <div class="leads-origin-title">
                                                <div class="leads-origin-icon">
                                                    <i class="fas fa-chart-line"></i>
                                                </div>
                                                <span class="leads-origin-text">Origem dos Leads</span>
                                            </div>
                                            <div class="leads-origin-total">
                                                Total: 139 leads
                                            </div>
                                        </div>

                                        <div class="leads-origin-grid">
                                            <!-- Google Ads -->
                                            <div class="leads-origin-card">
                                                <div class="leads-origin-number blue">45</div>
                                                <div class="leads-origin-source">Google Ads</div>
                                                <div class="leads-origin-conversion">Conversão:</div>
                                                <div class="leads-origin-progress">
                                                    <div class="leads-origin-progress-bar blue" style="width: 12.5%"></div>
                                                </div>
                                                <div class="leads-origin-rate">12.5%</div>
                                            </div>

                                            <!-- Facebook -->
                                            <div class="leads-origin-card">
                                                <div class="leads-origin-number light-blue">32</div>
                                                <div class="leads-origin-source">Facebook</div>
                                                <div class="leads-origin-conversion">Conversão:</div>
                                                <div class="leads-origin-progress">
                                                    <div class="leads-origin-progress-bar light-blue" style="width: 8.7%"></div>
                                                </div>
                                                <div class="leads-origin-rate">8.7%</div>
                                            </div>

                                            <!-- Instagram -->
                                            <div class="leads-origin-card">
                                                <div class="leads-origin-number pink">28</div>
                                                <div class="leads-origin-source">Instagram</div>
                                                <div class="leads-origin-conversion">Conversão:</div>
                                                <div class="leads-origin-progress">
                                                    <div class="leads-origin-progress-bar pink" style="width: 15.2%"></div>
                                                </div>
                                                <div class="leads-origin-rate">15.2%</div>
                                            </div>

                                            <!-- Indicação -->
                                            <div class="leads-origin-card">
                                                <div class="leads-origin-number green">19</div>
                                                <div class="leads-origin-source">Indicação</div>
                                                <div class="leads-origin-conversion">Conversão:</div>
                                                <div class="leads-origin-progress">
                                                    <div class="leads-origin-progress-bar green" style="width: 25.8%"></div>
                                                </div>
                                                <div class="leads-origin-rate">25.8%</div>
                                            </div>

                                            <!-- Site Direto -->
                                            <div class="leads-origin-card">
                                                <div class="leads-origin-number purple">15</div>
                                                <div class="leads-origin-source">Site Direto</div>
                                                <div class="leads-origin-conversion">Conversão:</div>
                                                <div class="leads-origin-progress">
                                                    <div class="leads-origin-progress-bar purple" style="width: 18.3%"></div>
                                                </div>
                                                <div class="leads-origin-rate">18.3%</div>
                                            </div>
                                        </div>

                                        <div class="leads-origin-footer">
                                            <div class="leads-origin-average">
                                                <div class="leads-origin-average-icon">
                                                    <i class="fas fa-chart-pie"></i>
                                                </div>
                                                <div class="leads-origin-average-text">
                                                    Taxa média de conversão: <span class="leads-origin-average-value">16.1%</span>
                                                </div>
                                            </div>
                                            <a href="#" class="leads-origin-report">
                                                <span>Relatório detalhado</span>
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Faturamento vs Custo e Demografia -->
                    <div class="row mb-4">
                        <!-- Faturamento vs Custo -->
                        <div class="col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="revenue-cost">
                                        <div class="revenue-cost-header">
                                            <div class="revenue-cost-icon">
                                                <i class="fas fa-dollar-sign"></i>
                                            </div>
                                            <h5 class="revenue-cost-title">Faturamento vs Custo</h5>
                                        </div>

                                        <!-- Faturamento Total -->
                                        <div class="revenue-item success">
                                            <div class="revenue-label">Faturamento Total</div>
                                            <div class="revenue-value">
                                                R$ 234.890
                                                <div class="revenue-change positive">
                                                    <i class="fas fa-arrow-up"></i>
                                                    +18%
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Custo Operacional -->
                                        <div class="revenue-item danger">
                                            <div class="revenue-label">Custo Operacional</div>
                                            <div class="revenue-value">
                                                R$ 89.340
                                                <div class="revenue-change negative">
                                                    <i class="fas fa-arrow-down"></i>
                                                    -5%
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Lucro Líquido -->
                                        <div class="revenue-item light">
                                            <div class="revenue-value">
                                                R$ 145.550
                                                <div class="revenue-margin">
                                                    Margem 62%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Demografia dos Clientes -->
                        <div class="col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="demographics">
                                        <div class="demographics-header">
                                            <div class="demographics-title">
                                                <div class="demographics-icon">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <span class="demographics-text">Demografia dos Clientes</span>
                                            </div>
                                            <div class="demographics-total">234 clientes</div>
                                        </div>

                                        <div class="demographics-average">
                                            <div class="demographics-number">42</div>
                                            <div class="demographics-label">Idade Média</div>
                                            <div class="demographics-sublabel">Clientes Pessoa Física</div>
                                        </div>

                                        <div class="age-groups">
                                            <!-- 25-35 anos -->
                                            <div class="age-group blue">
                                                <div class="age-number">25</div>
                                                <div class="age-percentage">28%</div>
                                                <div class="age-range">25-35 anos</div>
                                            </div>

                                            <!-- 36-50 anos -->
                                            <div class="age-group light-blue">
                                                <div class="age-number">42</div>
                                                <div class="age-percentage">45%</div>
                                                <div class="age-range">36-50 anos</div>
                                            </div>

                                            <!-- 50+ anos -->
                                            <div class="age-group purple">
                                                <div class="age-number">55</div>
                                                <div class="age-percentage">27%</div>
                                                <div class="age-range">50+ anos</div>
                                            </div>
                                        </div>

                                        <div class="demographics-insight">
                                            <div class="demographics-insight-icon">
                                                <i class="fas fa-bullseye"></i>
                                            </div>
                                            <div class="demographics-insight-text">
                                                <div class="demographics-insight-title">Faixa etária predominante: 36-50 anos</div>
                                                <div class="demographics-insight-subtitle">Perfil ideal para produtos premium</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bairros-atendidos">
    <div class="header">
        <div class="icon">
            <i class="bx bx-map-pin"></i>
        </div>
        <div class="title">
            <h2>Bairros Atendidos</h2>
            <p>Distribuição geográfica dos clientes</p>
        </div>
        <div class="text-end">
            <div class="total">137</div>
            <div class="total-label">clientes totais</div>
        </div>
    </div>

    <div class="bairros-grid">
        <!-- Centro -->
        <div class="bairro-item">
            <div class="bairro-icon">
                <i class="bx bx-map-pin"></i>
            </div>
            <div class="bairro-nome">Centro</div>
            <div class="bairro-valor">34</div>
            <div class="bairro-percentual">25% do total</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <!-- Jardins -->
        <div class="bairro-item">
            <div class="bairro-icon">
                <i class="bx bx-map-pin"></i>
            </div>
            <div class="bairro-nome">Jardins</div>
            <div class="bairro-valor">28</div>
            <div class="bairro-percentual">20% do total</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <!-- Vila Madalena -->
        <div class="bairro-item">
            <div class="bairro-icon">
                <i class="bx bx-map-pin"></i>
            </div>
            <div class="bairro-nome">Vila Madalena</div>
            <div class="bairro-valor">22</div>
            <div class="bairro-percentual">16% do total</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <!-- Pinheiros -->
        <div class="bairro-item">
            <div class="bairro-icon">
                <i class="bx bx-map-pin"></i>
            </div>
            <div class="bairro-nome">Pinheiros</div>
            <div class="bairro-valor">18</div>
            <div class="bairro-percentual">13% do total</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 13%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <!-- Outros -->
        <div class="bairro-item">
            <div class="bairro-icon">
                <i class="bx bx-map-pin"></i>
            </div>
            <div class="bairro-nome">Outros</div>
            <div class="bairro-valor">35</div>
            <div class="bairro-percentual">26% do total</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="cobertura-info">
        <div class="icon">
            <i class="bx bx-map-pin"></i>
        </div>
        <div class="content">
            <h3>Cobertura: <span>5 bairros principais</span></h3>
            <p>Concentração de 74% dos clientes ativos</p>
        </div>
        <div class="status">
            <div class="dot"></div>
            <span>Ativo</span>
        </div>
    </div>
</div>

<div class="tempo-medio-container">
    <div class="tempo-header">
        <h2>Tempo Médio de Locação</h2>
        <div class="header-icon">
            <i class="bx bx-time"></i>
        </div>
    </div>

    <div class="tempo-grid">
        <!-- Box Pequeno -->
        <div class="tempo-card">
            <div class="card-icon">
                <i class="bx bx-box"></i>
            </div>
            <div class="card-boxes">45 boxes</div>
            <div class="card-tipo">Pequeno (1-3m²)</div>
            <div class="card-tempo">8.5 meses</div>
            <div class="card-label">tempo médio</div>
        </div>

        <!-- Box Médio -->
        <div class="tempo-card">
            <div class="card-icon">
                <i class="bx bx-box"></i>
            </div>
            <div class="card-boxes">67 boxes</div>
            <div class="card-tipo">Médio (4-8m²)</div>
            <div class="card-tempo">12.2 meses</div>
            <div class="card-label">tempo médio</div>
        </div>

        <!-- Box Grande -->
        <div class="tempo-card">
            <div class="card-icon">
                <i class="bx bx-box"></i>
            </div>
            <div class="card-boxes">32 boxes</div>
            <div class="card-tipo">Grande (9-15m²)</div>
            <div class="card-tempo">18.7 meses</div>
            <div class="card-label">tempo médio</div>
        </div>

        <!-- Box Extra Grande -->
        <div class="tempo-card">
            <div class="card-icon">
                <i class="bx bx-box"></i>
            </div>
            <div class="card-boxes">12 boxes</div>
            <div class="card-tipo">Extra Grande (+15m²)</div>
            <div class="card-tempo">24.3 meses</div>
            <div class="card-label">tempo médio</div>
        </div>
    </div>

    <div class="tempo-footer">
        <div class="footer-info">
            <span class="footer-title">Tempo Médio Geral</span>
            <span class="footer-value">14.2 meses</span>
        </div>
        <div class="footer-info">
            <span class="footer-title">Total de Boxes</span>
            <span class="footer-value">156</span>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <!-- ApexCharts via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.41.0/dist/apexcharts.min.js"></script>

    <!-- Dashboard Init -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gráfico de Taxa de Conversão
            var conversionOptions = {
                series: [67],
                chart: {
                    type: 'radialBar',
                    height: 180,
                    sparkline: {
                        enabled: true
                    }
                },
                plotOptions: {
                    radialBar: {
                        startAngle: -90,
                        endAngle: 90,
                        hollow: {
                            size: '75%',
                            position: 'front'
                        },
                        track: {
                            background: '#e7e7e7',
                            strokeWidth: '97%',
                            opacity: 0.2,
                            margin: 5
                        },
                        dataLabels: {
                            name: {
                                show: false
                            },
                            value: {
                                offsetY: -2,
                                fontSize: '22px',
                                show: false
                            }
                        }
                    }
                },
                fill: {
                    type: 'solid',
                    colors: ['#34c38f']
                },
                stroke: {
                    lineCap: 'round',
                    width: 2
                }
            };
            new ApexCharts(document.querySelector('.conversion-chart'), conversionOptions).render();

            // Gráfico de Inadimplência
            var inadimplenciaOptions = {
                series: [{
                    name: 'Inadimplentes',
                    data: [45, 30, 25]
                }],
                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                        barHeight: '40%',
                        borderRadius: 5
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function(val) {
                        return val + '%';
                    }
                },
                xaxis: {
                    categories: ['PF Homem (12)', 'PF Mulher (8)', 'PJ (7)'],
                    labels: {
                        formatter: function(val) {
                            return val + '%';
                        }
                    }
                },
                colors: ['#556ee6', '#f46a6a', '#34c38f'],
                grid: {
                    borderColor: '#f1f1f1'
                }
            };
            new ApexCharts(document.querySelector('.inadimplencia-chart'), inadimplenciaOptions).render();
        });
    </script>
</body>
</html>
