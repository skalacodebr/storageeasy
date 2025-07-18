<div class="row g-4 mb-3">

    <!-- Resumo Financeiro -->
    <div class="col-lg-6">
        <div class="card border-0 res-financeiro-card h-100 mb-3">
            <div class="card-body pb-0">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <i class="ri-money-dollar-circle-line text-primary" style="font-size: 1.5rem;"></i>
                    <div>
                        <span class="fw-semibold">Resumo Financeiro</span>
                        <div class="text-muted small">Valores pagos e pendentes</div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <!-- Total Pago -->
                    <div
                        class="rounded-3 p-3 d-flex justify-content-between align-items-center resfin-card resfin-green">
                        <div>
                            <div class="small text-muted">Total Pago</div>
                            <div class="fw-bold text-success" style="font-size: 2rem;">R$ 1125.00</div>
                        </div>
                        <span class="bg-success bg-opacity-10 d-flex align-items-center justify-content-center"
                            style="width:36px; height:36px; border-radius:50%;">
                            <i class="ri-money-dollar-circle-line text-success" style="font-size:1.4rem;"></i>
                        </span>
                    </div>
                    <!-- Valor Pendente -->
                    <div class="rounded-3 p-3 d-flex justify-content-between align-items-center resfin-card resfin-red">
                        <div>
                            <div class="small text-muted">Valor Pendente</div>
                            <div class="fw-bold text-danger" style="font-size: 2rem;">R$ 125.00</div>
                        </div>
                        <span class="bg-danger bg-opacity-10 d-flex align-items-center justify-content-center"
                            style="width:36px; height:36px; border-radius:50%;">
                            <i class="ri-error-warning-line text-danger" style="font-size:1.4rem;"></i>
                        </span>
                    </div>
                    <!-- Caução/Depósito -->
                    <div
                        class="rounded-3 p-3 d-flex justify-content-between align-items-center resfin-card resfin-blue">
                        <div>
                            <div class="small text-muted">Caução/Depósito</div>
                            <div class="fw-bold text-primary" style="font-size: 1.7rem;">R$ 200.00</div>
                        </div>
                        <span class="bg-primary bg-opacity-10 d-flex align-items-center justify-content-center"
                            style="width:36px; height:36px; border-radius:50%;">
                            <i class="ri-wallet-3-line text-primary" style="font-size:1.4rem;"></i>
                        </span>
                    </div>
                    <!-- Valor a Ressarcir -->
                    <div
                        class="rounded-3 p-3 d-flex justify-content-between align-items-center resfin-card resfin-purple">
                        <div>
                            <div class="small text-muted">Valor a Ressarcir</div>
                            <div class="fw-bold" style="color:#9932CC; font-size:1.7rem;">R$ 200.00</div>
                        </div>
                        <span class="bg-purple bg-opacity-10 d-flex align-items-center justify-content-center"
                            style="width:36px; height:36px; border-radius:50%; background:#f3ebfc !important;">
                            <i class="ri-refresh-line" style="color:#9932CC; font-size:1.4rem;"></i>
                        </span>
                    </div>
                    <!-- Saldo Final -->
                    <div
                        class="rounded-3 p-3 d-flex justify-content-between align-items-center resfin-card resfin-final">
                        <div>
                            <div class="small text-muted">Saldo Final</div>
                            <div class="fw-bold" style="font-size: 1.7rem;">R$ 75.00 <span
                                    class="fw-normal small ms-1 text-muted">a pagar</span></div>
                        </div>
                        <span class="bg-secondary bg-opacity-10 d-flex align-items-center justify-content-center"
                            style="width:36px; height:36px; border-radius:50%;">
                            <i class="ri-calculator-line text-secondary" style="font-size:1.4rem;"></i>
                        </span>
                    </div>

                    <!-- Pagamento Pendente -->
                    <div class="alert alert-warning d-flex align-items-center mt-3 py-3 px-4 rounded-3 resfin-alert"
                        style="background: #fffbe8;">
                        <i class="ri-error-warning-line me-3" style="font-size:1.7rem; color:#e7a92e;"></i>
                        <div class="flex-grow-1">
                            <div class="fw-semibold">Pagamento Pendente</div>
                            <div class="small">
                                Existe um valor pendente de <span class="fw-bold">R$ 75.00</span> que precisa ser pago
                                pelo cliente
                                antes de finalizar a saída.
                            </div>
                        </div>
                        <button class="btn btn-warning fw-semibold px-4 ms-3" style="border-radius: 8px;">
                            <i class="ri-money-dollar-circle-line me-1"></i> Registrar Pagamento
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Histórico de Pagamentos -->
    <div class="col-lg-6">
        <div class="card border-0 res-financeiro-card h-100">
            <div class="card-body pb-1">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <i class="ri-file-list-3-line text-primary" style="font-size: 1.5rem;"></i>
                    <div>
                        <span class="fw-semibold">Histórico de Pagamentos</span>
                        <div class="text-muted small">Últimos pagamentos realizados</div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0 resfin-table">
                        <thead class="table-light">
                            <tr>
                                <th>Data</th>
                                <th>Valor</th>
                                <th>Método</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15/01/2025</td>
                                <td><span class="fw-semibold">R$ 375.00</span></td>
                                <td>Cartão de Crédito</td>
                                <td><span
                                        class="badge bg-success bg-opacity-10 text-success fw-semibold px-3">Pago</span>
                                </td>
                            </tr>
                            <tr>
                                <td>15/02/2025</td>
                                <td><span class="fw-semibold">R$ 375.00</span></td>
                                <td>Boleto</td>
                                <td><span
                                        class="badge bg-success bg-opacity-10 text-success fw-semibold px-3">Pago</span>
                                </td>
                            </tr>
                            <tr>
                                <td>15/03/2025</td>
                                <td><span class="fw-semibold">R$ 375.00</span></td>
                                <td>Pix</td>
                                <td><span
                                        class="badge bg-success bg-opacity-10 text-success fw-semibold px-3">Pago</span>
                                </td>
                            </tr>
                            <tr>
                                <td>15/04/2025</td>
                                <td><span class="fw-semibold">R$ 375.00</span></td>
                                <td>Boleto</td>
                                <td><span
                                        class="badge bg-warning bg-opacity-10 text-warning fw-semibold px-3">Pendente</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>