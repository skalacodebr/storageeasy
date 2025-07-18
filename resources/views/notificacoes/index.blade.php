{{-- resources/views/perfil.blade.php --}}
@include('layouts/head-main')

<head>
    <title>Notificações | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <style>
        .bg-purple {
            background-color: #9252d6 !important;
        }

        .page-title h4 {
            font-weight: 700;
            font-size: 1.3rem;
        }

        .page-title p {
            margin-bottom: 0;
            color: #6c757d;
        }


        .text-purple {
            color: #282f36 !important;
        }


        .card {
            border-radius: 12px !important;
        }

        .badge {
            font-size: 0.85em;
            padding: 4px 10px;
            border-radius: 1em;
        }

        .shadow-sm {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }

        body {
            background: #f8fafc;
        }

        .nav-tabs .nav-link.active {
            color: #fff !important;
            background-color: #282f36 !important;
            border-color: #282f36 #282f36 #fff;
        }

        .nav-tabs .nav-link {
            color: #282f36 !important;
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

                    <div class="row mb-4">
                        <div class="col-12 page-title">
                            <h4>Notificações</h4>
                            <p>Gerencie seus alertas e notificações de clientes</p>
                        </div>
                    </div>

                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs mb-4" id="profileTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="inadimplentes-tab" data-bs-toggle="tab"
                                data-bs-target="#inadimplentes" type="button" role="tab" aria-controls="inadimplentes"
                                aria-selected="true">
                                <i class="ri-error-warning-line"></i> Inadimplentes
                                <span class="badge bg-danger ms-1">2</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contratos-tab" data-bs-toggle="tab" data-bs-target="#contratos"
                                type="button" role="tab" aria-controls="contratos" aria-selected="false">
                                <i class="ri-file-list-3-line"></i> Contratos Pendentes
                                <span class="badge bg-warning text-dark ms-1">2</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="manutencoes-tab" data-bs-toggle="tab"
                                data-bs-target="#manutencoes" type="button" role="tab" aria-controls="manutencoes"
                                aria-selected="false">
                                <i class="ri-tools-line"></i> Manutenções
                                <span class="badge bg-primary ms-1">2</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="oportunidades-tab" data-bs-toggle="tab"
                                data-bs-target="#oportunidades" type="button" role="tab" aria-controls="oportunidades"
                                aria-selected="false">
                                <i class="ri-lightbulb-flash-line"></i> Oportunidades
                                <span class="badge bg-purple text-white ms-1">2</span>
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="profileTabsContent">
                        <!-- Inadimplentes -->
                        <div class="tab-pane fade show active" id="inadimplentes" role="tabpanel"
                            aria-labelledby="inadimplentes-tab">
                            <div class="card border-danger mb-4 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="ri-error-warning-line text-danger fs-4 me-2"></i>
                                        <span class="fw-bold text-danger">Cliente João Silva está inadimplente</span>
                                        <span class="badge bg-warning text-dark ms-2">Nova</span>
                                    </div>
                                    <div class="text-muted mb-2" style="font-size: 0.98rem;">
                                        <i class="ri-time-line"></i> 08 de janeiro, 10:30 — Pagamento em atraso há 15
                                        dias
                                    </div>
                                    <div class="p-3 rounded bg-light mb-3">
                                        <div>Cliente: <strong>João Silva</strong></div>
                                        <div>Contrato: <strong>CTR-2024-001</strong></div>
                                        <div>Em atraso desde: <strong>23/12/2024</strong></div>
                                        <div class="text-danger mt-2">Valor pendente: <strong>R$ 450,00</strong></div>
                                    </div>
                                    <div class="d-flex gap-2">

                                        <button class="btn btn-dark btn-sm"><i class="ri-send-plane-line"></i> Enviar
                                            lembrete</button>
                                        <button class="btn btn-outline-danger btn-sm"><i class="ri-delete-bin-line"></i>
                                            Excluir</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contratos Pendentes -->
                        <div class="tab-pane fade" id="contratos" role="tabpanel" aria-labelledby="contratos-tab">
                            <div class="card border-warning mb-4 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="ri-file-list-3-line text-warning fs-4 me-2"></i>
                                        <span class="fw-bold text-warning">Contrato pendente de assinatura</span>
                                        <span class="badge bg-warning text-dark ms-2">Novo</span>
                                    </div>
                                    <div class="text-muted mb-2"><i class="ri-time-line"></i> 10 de janeiro, 11:45</div>
                                    <div class="p-3 rounded bg-light mb-3">
                                        <div>Cliente: <strong>Maria Souza</strong></div>
                                        <div>Contrato: <strong>CTR-2024-002</strong></div>
                                        <div>Desde: <strong>10/01/2025</strong></div>
                                    </div>
                                    <div class="d-flex gap-2">

                                        <button class="btn btn-dark btn-sm"><i class="ri-send-plane-line"></i> Enviar
                                            lembrete</button>
                                        <button class="btn btn-outline-danger btn-sm"><i class="ri-delete-bin-line"></i>
                                            Excluir</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Manutenções -->
                        <div class="tab-pane fade" id="manutencoes" role="tabpanel" aria-labelledby="manutencoes-tab">
                            <div class="card border-primary mb-4 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="ri-tools-line text-primary fs-4 me-2"></i>
                                        <span class="fw-bold text-primary">Agendamento de manutenção</span>
                                        <span class="badge bg-primary ms-2">Nova</span>
                                    </div>
                                    <div class="text-muted mb-2"><i class="ri-time-line"></i> 09 de janeiro, 16:20</div>
                                    <div class="p-3 rounded bg-light mb-3">
                                        <div>Cliente: <strong>Eduardo Farias</strong></div>
                                        <div>Box: <strong>BX-105</strong></div>
                                        <div>Agendada para: <strong>12/01/2025</strong></div>
                                    </div>
                                    <div class="d-flex gap-2">

                                        <button class="btn btn-dark btn-sm"><i class="ri-send-plane-line"></i> Notificar
                                            cliente</button>
                                        <button class="btn btn-outline-danger btn-sm"><i class="ri-delete-bin-line"></i>
                                            Excluir</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Oportunidades -->
                        <div class="tab-pane fade" id="oportunidades" role="tabpanel"
                            aria-labelledby="oportunidades-tab">
                            <div class="card border-purple mb-4 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="ri-lightbulb-flash-line text-purple fs-4 me-2"></i>
                                        <span class="fw-bold text-purple">Nova oportunidade comercial</span>
                                        <span class="badge bg-purple text-white ms-2">Nova</span>
                                    </div>
                                    <div class="text-muted mb-2"><i class="ri-time-line"></i> 11 de janeiro, 09:10</div>
                                    <div class="p-3 rounded bg-light mb-3">
                                        <div>Contato: <strong>Julia Carvalho</strong></div>
                                        <div>Oportunidade: <strong>Aluguel de Box Premium</strong></div>
                                        <div>Valor potencial: <strong>R$ 1.500,00</strong></div>
                                    </div>
                                    <div class="d-flex gap-2">

                                        <button class="btn btn-dark btn-sm"><i class="ri-send-plane-line"></i> Registrar
                                            ação</button>
                                        <button class="btn btn-outline-danger btn-sm"><i class="ri-delete-bin-line"></i>
                                            Excluir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Tab Content -->

                </div>
            </div> {{-- /.page-content --}}
        </div> {{-- /.main-content --}}
    </div> {{-- /#layout-wrapper --}}

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @include('layouts/vendor-scripts')

</body>

</html>