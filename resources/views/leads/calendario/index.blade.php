{{-- resources/views/leads.blade.php --}}
@include('layouts/head-main')

<head>
    <title>Calendário | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')
    {{-- CSS específico desta página --}}

    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <link href="{{ asset('assets/css/pages_new/leads.css') }}" rel="stylesheet" />
</head>

<body>
    @include('layouts/body')
    @include('layouts/menu')

    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    {{-- Título e subtítulo --}}
                    <div class="row mb-3 page-title">
                        <div class="col-12">
                            <h4>Gestão de Relacionamento com Clientes</h4>
                            <p>Gerencie leads, atividades, campanhas e muito mais</p>
                        </div>
                    </div>
                    {{-- Navegação de abas + botão --}}
                    <div class="row mb-4 align-items-center">
                        <div class="col-auto pe-0">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link " href="{{ route('leads.index') }}">Leads</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('leads.atividades') }}">Atividades</a></li>
                                <li class="nav-item"><a class="nav-link active"
                                        href="{{ route('leads.calendario') }}">Calendário</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('leads.campanhas') }}">Campanhas</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('leads.dashboard') }}">Dashboard</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="row g-4">

                        <!-- Coluna Principal: Tarefas e Calendário -->
                        <div class="col-lg-9">
                            <!-- Tarefas de Hoje -->
                            <div class="calendar-card mb-4">
                                <div class="calendar-card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="ri-calendar-line calendar-icon me-2 text-primary"></i>
                                        <h5 class="mb-0 fw-semibold">Tarefas de Hoje - 15/07/2025</h5>
                                    </div>
                                    <div class="text-muted mb-4" style="font-size: 15px;">
                                        Compromissos e follow-ups agendados para hoje
                                    </div>
                                    <div class="text-center py-5">
                                        <i class="ri-calendar-check-line calendar-icon text-muted"></i>
                                        <div class="mt-2 mb-3 text-muted" style="font-size: 17px;">Nenhuma tarefa
                                            agendada para hoje.</div>
                                        <button class="calendar-btn btn btn-outline-primary px-4">
                                            <i class="ri-add-line me-1"></i>
                                            Adicionar Nova Tarefa
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Calendário Mensal -->
                            <div class="calendar-card">
                                <div class="calendar-card-body">
                                    <h5 class="mb-2 fw-semibold">Calendário Mensal</h5>
                                    <div class="text-muted mb-4" style="font-size: 15px;">
                                        Visualização de atividades agendadas
                                    </div>
                                    <div class="text-center py-5">
                                        <i class="ri-calendar-event-line calendar-icon text-muted"></i>
                                        <div class="mt-2 mb-1 text-muted" style="font-size: 17px;">
                                            Calendário interativo será implementado aqui
                                        </div>
                                        <div class="text-muted small">
                                            Visualização completa de atividades agendadas
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Coluna Lateral: Compromissos e Estatísticas -->
                        <div class="col-lg-3">
                            <!-- Próximos Compromissos -->
                            <div class="calendar-card mb-4">
                                <div class="calendar-card-body">
                                    <h6 class="fw-semibold mb-1">Próximos Compromissos</h6>
                                    <div class="text-muted small mb-4">
                                        Atividades agendadas para os próximos dias
                                    </div>
                                    <div class="text-center text-muted" style="font-size: 15px;">
                                        Nenhum compromisso agendado
                                    </div>
                                </div>
                            </div>

                            <!-- Estatísticas do Mês -->
                            <div class="calendar-card">
                                <div class="calendar-card-body">
                                    <h6 class="fw-semibold mb-1">Estatísticas do Mês</h6>
                                    <div class="text-muted small mb-4">
                                        Resumo de atividades realizadas
                                    </div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Ligações realizadas</span>
                                            <span class="calendar-fw-bold">24</span>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Emails enviados</span>
                                            <span class="calendar-fw-bold">18</span>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Reuniões agendadas</span>
                                            <span class="calendar-fw-bold">7</span>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Follow-ups pendentes</span>
                                            <span class="calendar-fw-bold calendar-text-warning">12</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')
</body>

</html>