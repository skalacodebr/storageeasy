<!-- Modal Detalhes do Lead -->
<div class="modal fade" id="modalDetalheLead" tabindex="-1" aria-labelledby="modalDetalheLeadLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-0 ">
                <div class="p-4 p-md-5">

                    <!-- Topo: Avatar, Nome, Chips, Fechar -->
                    <div class="d-flex align-items-center mb-3">
                        <!-- Avatar -->
                        <div class="rounded-circle bg-primary bg-opacity-10 text-primary fw-bold d-flex align-items-center justify-content-center me-3"
                            style="width:56px;height:56px;font-size:1.5rem;">
                            JS
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="fw-bold fs-5">João Silva</span>
                                <i class="ri-star-fill text-warning" style="font-size:1.1rem"></i>
                            </div>
                            <span class="badge rounded-pill bg-warning text-dark me-2" style="font-size:.9em;">Em
                                Andamento</span>
                            <span class="badge rounded-pill  text-primary border border-primary"
                                style="font-size:.9em;">Site</span>
                        </div>
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"
                            aria-label="Fechar"></button>
                    </div>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs mb-4">
                        <li class="nav-item w-50">
                            <a class="nav-link active text-center fw-semibold" data-bs-toggle="tab"
                                href="#tab-infos">Informações</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link text-center fw-semibold" data-bs-toggle="tab"
                                href="#tab-historico">Histórico de Atividades</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Tab Informações -->
                        <div class="tab-pane fade show active" id="tab-infos">
                            <div class="row g-3">

                                <!-- Contato -->
                                <div class="col-md-6">
                                    <div class=" rounded-3 p-3 h-100" style="background:#f9fafb !important;">
                                        <div class="fw-semibold text-secondary mb-2" style="font-size:0.95rem;">Contato
                                        </div>
                                        <div class="mb-1 text-primary-emphasis">
                                            <i class="ri-mail-line me-1"></i> joao.silva@email.com
                                        </div>
                                        <div class="mb-0 text-primary-emphasis">
                                            <i class="ri-phone-line me-1"></i> (11) 98765-4321
                                        </div>
                                    </div>
                                </div>
                                <!-- Interesse -->
                                <div class="col-md-6">
                                    <div class=" rounded-3 p-3 h-100" style="background:#f9fafb !important;">
                                        <div class="fw-semibold text-secondary mb-2" style="font-size:0.95rem;">
                                            Interesse</div>
                                        <div class="text-success fs-6 mb-0">
                                            <i class="ri-money-dollar-circle-line me-1"></i> Box Pequeno
                                        </div>
                                    </div>
                                </div>
                                <!-- Localização -->
                                <div class="col-md-6">
                                    <div class=" rounded-3 p-3 h-100" style="background:#f9fafb !important;">
                                        <div class="fw-semibold text-secondary mb-2" style="font-size:0.95rem;">
                                            Localização</div>
                                        <div class="mb-1 text-primary-emphasis">
                                            <i class="ri-map-pin-line me-1"></i> São Paulo, SP
                                        </div>
                                        <div class="mb-0 text-primary-emphasis">
                                            <i class="ri-building-line me-1"></i> Silva &amp; Cia
                                        </div>
                                    </div>
                                </div>
                                <!-- Próximo Contato -->
                                <div class="col-md-6">
                                    <div class=" rounded-3 p-3 h-100" style="background:#f9fafb !important;">
                                        <div class="fw-semibold text-secondary mb-2" style="font-size:0.95rem;">Próximo
                                            Contato</div>
                                        <div class="text-primary fs-6 mb-0">
                                            <i class="ri-calendar-line me-1"></i> 19/01/2024
                                        </div>
                                    </div>
                                </div>
                                <!-- Observações -->
                                <div class="col-12">
                                    <div class=" rounded-3 p-3" style="background:#f9fafb !important;">
                                        <div class="fw-semibold text-secondary mb-2" style="font-size:0.95rem;">
                                            Observações</div>
                                        <div>Cliente interessado em alugar um box pequeno para guardar móveis durante
                                            reforma.</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Tab Histórico de Atividades -->
                        <div class="tab-pane fade" id="tab-historico">
                            <div class="atividade-lead-box mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="d-flex align-items-center gap-2">
                                        <span
                                            class="atividade-icone rounded-circle bg-primary bg-opacity-10 text-primary">
                                            <i class="ri-phone-line"></i>
                                        </span>
                                        <span class="fw-semibold text-primary">Ligação</span>
                                    </div>
                                    <span class="atividade-data">15/01/2024 14:30</span>
                                </div>
                                <div class="atividade-descricao text-dark mb-1">Ligação inicial para apresentar os
                                    serviços</div>
                                <div class="atividade-resultado-box mb-1">
                                    <div class="atividade-resultado-label">Resultado</div>
                                    <div class="atividade-resultado-text">Cliente interessado, solicitou mais
                                        informações por email</div>
                                </div>
                                <div class="atividade-followup text-primary">
                                    <i class="ri-calendar-line"></i>
                                    Próximo follow-up: 20/01/2024 10:00
                                </div>
                            </div>
                            <!-- Atividade 2 -->
                            <div class="atividade-lead-box mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="d-flex align-items-center gap-2">
                                        <span
                                            class="atividade-icone rounded-circle bg-warning bg-opacity-25 text-warning">
                                            <i class="ri-mail-line"></i>
                                        </span>
                                        <span class="fw-semibold text-warning">Email</span>
                                    </div>
                                    <span class="atividade-data">15/01/2024 15:45</span>
                                </div>
                                <div class="atividade-descricao text-dark mb-1">Email com catálogo de serviços e tabela
                                    de preços</div>
                                <div class="atividade-resultado-box mb-1">
                                    <div class="atividade-resultado-label">Resultado</div>
                                    <div class="atividade-resultado-text">Email enviado, aguardando resposta</div>
                                </div>
                                <div class="atividade-followup text-primary">
                                    <i class="ri-calendar-line"></i>
                                    Próximo follow-up: 18/01/2024 14:00
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>