<!-- Modal -->
<div class="modal fade" id="modalDetalhesRelatorio" tabindex="-1" aria-labelledby="modalDetalhesRelatorioLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-detalhes-programacao rounded-4">
            <div class="modal-header border-0 pb-0 modal-detalhes-programacao-header">
                <div>
                    <h5 class="modal-title modal-detalhes-programacao-title fw-bold d-flex align-items-center"
                        id="modalDetalhesRelatorioLabel" style="font-size: 1.18rem;">
                        <i class="ri-calendar-check-line me-2" style="font-size: 1.25rem;"></i>
                        Detalhes do Relatório
                    </h5>
                    <div class="modal-detalhes-programacao-subtitle text-muted" style="font-size: 0.93rem;">
                        Visualize as informações do relatório "Locações".
                    </div>
                </div>
                <button type="button" class="btn-close modal-detalhes-programacao-close ms-2" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3 pb-2">
                <!-- Nome do Relatório -->
                <div class="modal-detalhes-programacao-bloco mb-3">
                    <div class="bg-light p-3 rounded-3 d-flex align-items-center">
                        <i class="ri-file-list-3-line me-2 text-primary" style="font-size: 1.2rem;"></i>
                        <div>
                            <div class="modal-detalhes-programacao-label mb-0 text-secondary"
                                style="font-size: 0.93rem;">Nome do Relatório</div>
                            <div class="fw-semibold" style="font-size: 1.06rem;">Locações</div>
                        </div>
                    </div>
                </div>
                <hr class="mb-3 mt-2">

                <!-- Frequência e Próxima Execução -->
                <div class="row gx-2 mb-2 align-items-center">
                    <div class="col-6 d-flex align-items-center">
                        <i class="ri-repeat-line me-2 text-secondary" style="font-size: 1rem;"></i>
                        <div>
                            <div class="modal-detalhes-programacao-label mb-0 text-secondary"
                                style="font-size: 0.91rem;">Frequência</div>
                            <div class="fw-semibold" style="font-size: 1.01rem;">Mensal</div>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <i class="ri-calendar-event-line me-2 text-secondary" style="font-size: 1rem;"></i>
                        <div>
                            <div class="modal-detalhes-programacao-label mb-0 text-secondary"
                                style="font-size: 0.91rem;">Próxima Execução</div>
                            <div class="fw-semibold" style="font-size: 1.01rem;">01/05/2025</div>
                        </div>
                    </div>
                </div>
                <hr class="mb-3 mt-2">

                <!-- Destinatários -->
                <div class="d-flex align-items-center mb-2">
                    <i class="ri-user-3-line me-2 text-secondary" style="font-size: 1rem;"></i>
                    <div>
                        <div class="modal-detalhes-programacao-label mb-0 text-secondary" style="font-size: 0.91rem;">
                            Destinatários</div>
                        <div class="fw-semibold" style="font-size: 1.01rem;">admin@storagefacil.com</div>
                    </div>
                </div>
                <hr class="mb-3 mt-2">

                <!-- Status -->
                <div class="d-flex align-items-center mb-0">
                    <i class="ri-checkbox-circle-line me-2 text-secondary" style="font-size: 1rem;"></i>
                    <div>
                        <div class="modal-detalhes-programacao-label mb-0 text-secondary" style="font-size: 0.91rem;">
                            Status</div>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success ms-2 px-3"
                        style="font-size: 0.93rem; font-weight:500;">Ativo</span>
                </div>
            </div>
            <div class="modal-footer modal-detalhes-programacao-footer border-0 pt-0 justify-content-between">
                <button type="button" class="btn btn-outline-secondary modal-detalhes-programacao-btn px-4 py-2"
                    data-bs-dismiss="modal" style="font-size:0.99rem;">Fechar</button>
                <button type="button" class="btn btn-outline-secondary modal-detalhes-programacao-btn px-4 py-2"
                    style="font-size:0.99rem;">
                    <i class="ri-printer-line me-1"></i> Imprimir
                </button>
                <button type="button" class="btn modal-detalhes-programacao-btn-dark px-4 py-2"
                    style="font-size:0.99rem;">
                    <i class="ri-download-2-line me-1"></i> Exportar
                </button>
            </div>
        </div>
    </div>
</div>