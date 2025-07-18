<div class="row mb-4">
    <div class="col-12">
        <!-- Título -->
        <div class="px-4 pt-4 pb-2">
            <h4 class="fw-bold mb-1">Cálculo da Diferença</h4>
            <div class="text-secondary" style="font-size: 1rem;">
                Resumo financeiro da transferência
            </div>
        </div>

        <!-- Card Cliente e Box Selecionado -->
        <div class="card box-selected-card mx-4 mb-4">
            <div class="card-body px-4 py-3">
                <div class="d-flex align-items-center mb-3">
                    <i class="ri-user-3-line text-primary me-2 fs-5"></i>
                    <span class="fw-bold" style="font-size:1.28rem;">Cliente e Box Selecionado</span>
                </div>
                <hr class="mt-0 mb-3" style="border-color: #e3efff;">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="bg-blue-label p-4 rounded-3 h-100">
                            <div class="text-secondary mb-1">Cliente</div>
                            <div class="fw-bold fs-5 mb-1">Carlos Oliveira</div>
                            <div class="text-secondary small mb-1">carlos.oliveira@email.com</div>
                            <div class="text-secondary small">(11) 97777-8888</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light p-4 rounded-3 h-100">
                            <div class="text-secondary mb-1">Box Atual</div>
                            <div class="fw-bold fs-5 mb-1">BOX003</div>
                            <div class="text-secondary small mb-1">Setor B - Primeiro Andar</div>
                            <div class="text-dark fw-semibold">R$ 300.00/mês</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Detalhes Financeiros -->
        <div class="card detalhes-financeiros-card mx-4 mb-4">
            <div class="card-body px-4 py-3">
                <div class="d-flex align-items-center mb-3">
                    <i class="ri-money-dollar-circle-line text-success me-2 fs-5"></i>
                    <span class="fw-bold" style="font-size:1.18rem;">Detalhes Financeiros</span>
                </div>
                <hr class="mt-0 mb-3" style="border-color: #c6f5d4;">
                <div class="row g-4">
                    <!-- Box Atual -->
                    <div class="col-lg-6">
                        <div class="bg-light p-4 rounded-3 h-100">
                            <div class="text-secondary mb-1">Box Atual</div>
                            <div class="text-secondary small mb-1">Valor Mensal:</div>
                            <div class="fw-semibold mb-1">BOX003</div>
                            <div class="fw-bold fs-5">R$ 300.00</div>
                        </div>
                    </div>
                    <!-- Novo Box -->
                    <div class="col-lg-6">
                        <div class="bg-blue-label p-4 rounded-3 h-100">
                            <div class="text-secondary mb-1">Novo Box</div>
                            <div class="text-secondary small mb-1">Valor Mensal:</div>
                            <div class="fw-semibold mb-1">Box1</div>
                            <div class="fw-bold fs-5 text-primary">R$ 900.00</div>
                        </div>
                    </div>
                </div>
                <!-- Diferença -->
                <div
                    class="bg-danger-subtle diff-finance mt-4 p-4 rounded-3 d-flex align-items-center justify-content-between">
                    <div>
                        <div class="fw-bold mb-1" style="font-size:1.12rem;">Diferença no Valor Mensal</div>
                        <div class="d-flex align-items-center text-danger fw-semibold" style="font-size:1.07rem;">
                            <i class="ri-error-warning-line me-2"></i>
                            Será necessário um ajuste contratual para o novo valor
                        </div>
                    </div>
                    <div class="fw-bold text-danger fs-4">+R$ 600.00</div>
                </div>
            </div>
        </div>

        <!-- Card Observações -->
        <div class="card obs-card mx-4 mb-4">
            <div class="card-body px-4 py-4">
                <h4 class="fw-bold mb-3">Observações Adicionais</h4>
                <hr class="mt-0 mb-3" style="border-color: #e3efff;">
                <textarea class="form-control obs-textarea" rows="4"
                    placeholder="Adicione observações sobre a transferência..."></textarea>
            </div>
        </div>
    </div>
</div>