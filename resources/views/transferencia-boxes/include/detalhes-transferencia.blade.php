<div class="row mb-4">
    <div class="col-12">
        <!-- Título -->
        <div class="px-4 pt-4 pb-2">
            <h4 class="fw-bold mb-1">Detalhes da Transferência</h4>
            <div class="text-secondary" style="font-size: 1rem;">
                Informe a data e o motivo da transferência
            </div>
        </div>

        <!-- Card Resumo da Transferência -->
        <div class="card transfer-summary-card mx-4 mb-4">
            <div class="card-body px-4 py-3">
                <div class="d-flex align-items-center mb-3">
                    <i class="ri-arrow-right-line text-primary me-2 fs-5"></i>
                    <span class="fw-bold" style="font-size:1.35rem;">Resumo da Transferência</span>
                </div>
                <hr class="mt-0 mb-3" style="border-color: #e3efff;">
                <div class="row g-4">
                    <!-- Box de Origem -->
                    <div class="col-lg-6">
                        <div class="mb-1 d-flex align-items-center text-secondary">
                            <i class="ri-map-pin-line me-2"></i> Box de Origem
                        </div>
                        <div class="bg-light box-transfer-card mb-3">
                            <div class="fw-bold fs-3">BOX003</div>
                            <div class="text-secondary">Setor B - Primeiro Andar</div>
                            <div class="mt-2">Valor atual: <span class="fw-semibold">R$ 300.00/mês</span></div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-4 mb-2 mb-md-0">
                                <div class="text-secondary small">Dimensões</div>
                                <div class="fw-semibold">3.00m × 3.00m × 2.92m</div>
                            </div>
                            <div class="col-md-4 mb-2 mb-md-0">
                                <div class="text-secondary small">Área Total</div>
                                <div class="fw-semibold">9.00 m²</div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-secondary small">Volume Total</div>
                                <div class="fw-semibold">26.28 m³</div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-blue-label text-primary me-1 mb-1">Acesso 24h</span>
                            <span class="badge bg-blue-label text-primary me-1 mb-1">Segurança</span>
                            <span class="badge bg-blue-label text-primary mb-1">Climatizado</span>
                        </div>
                    </div>
                    <!-- Box de Destino -->
                    <div class="col-lg-6">
                        <div class="mb-1 d-flex align-items-center text-primary">
                            <i class="ri-map-pin-line me-2"></i> Box de Destino
                        </div>
                        <div class="bg-blue-transfer box-transfer-card mb-3">
                            <div class="fw-bold fs-3 text-primary">Box1</div>
                            <div class="text-secondary">Setor A - Térreo</div>
                            <div class="mt-2">Novo valor: <span class="fw-semibold text-primary">R$ 900.00/mês</span>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-4 mb-2 mb-md-0">
                                <div class="text-secondary small">Dimensões</div>
                                <div class="fw-semibold">3.00m × 3.00m × 2.92m</div>
                            </div>
                            <div class="col-md-4 mb-2 mb-md-0">
                                <div class="text-secondary small">Área Total</div>
                                <div class="fw-semibold">9.00 m²</div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-secondary small">Volume Total</div>
                                <div class="fw-semibold">26.28 m³</div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-blue-label text-primary me-1 mb-1">Acesso 24h</span>
                            <span class="badge bg-blue-label text-primary me-1 mb-1">Segurança</span>
                            <span class="badge bg-blue-label text-primary mb-1">Climatizado</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Informações da Transferência -->
        <div class="card transfer-info-card mx-4 mb-4">
            <div class="card-body px-4 py-4">
                <div class="d-flex align-items-center mb-3">
                    <i class="ri-check-double-line text-success me-2 fs-5"></i>
                    <span class="fw-bold" style="font-size:1.25rem;">Informações da Transferência</span>
                </div>
                <hr class="mt-0 mb-3" style="border-color: #e3efff;">
                <div class="row g-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="mb-1 fw-semibold" for="dataTransferencia">Data da Transferência</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="ri-calendar-line"></i>
                            </span>
                            <input type="text" id="dataTransferencia" class="form-control border-start-0"
                                placeholder="dd/mm/aaaa">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="mb-1 fw-semibold" for="motivoTransferencia">Motivo da Transferência</label>
                        <select id="motivoTransferencia" class="form-select">
                            <option value="">Selecione o motivo</option>
                            <option value="upgrade">Upgrade</option>
                            <option value="mudança">Mudança de box</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
                </div>
                <!-- Alerta de acréscimo -->
                <div class="alert alert-transfer-acrescimo mt-4 mb-0 d-flex align-items-center" role="alert">
                    <i class="ri-error-warning-line me-2"></i>
                    <span>Haverá um acréscimo de <b>R$ 600.00</b> no valor mensal</span>
                </div>
            </div>
        </div>
    </div>
</div>