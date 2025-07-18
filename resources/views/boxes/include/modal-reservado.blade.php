<!-- Modal Reservar Box -->
<div class="modal fade" id="modalReservarBox" tabindex="-1" aria-labelledby="modalReservarBoxLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-0">
                <div class="p-4 p-md-5">

                    <!-- Título e subtítulo -->
                    <div class="d-flex align-items-center mb-1">
                        <span
                            class="d-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-circle me-3"
                            style="width:40px; height:40px; font-size:1.7rem;">
                            <i class="ri-calendar-event-line"></i>
                        </span>
                        <div>
                            <h4 class="fw-bold mb-0" id="modalReservarBoxLabel">Reservar Box</h4>
                            <div class="text-muted" style="font-size: 1rem;">Preencha os dados para reservar o box</div>
                        </div>
                    </div>

                    <!-- Grid principal -->
                    <div class="row mt-4 gy-4">
                        <!-- Dados do Box -->
                        <div class="col-md-5">
                            <div class="border rounded-4 p-4 h-100">
                                <div class="fw-semibold mb-3">
                                    <i class="ri-lock-2-line me-2"></i>Dados do Box
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Código</label>
                                    <input type="text" class="form-control" value="020" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Localização</label>
                                    <input type="text" class="form-control" value="Setor A - Térreo" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Dimensões</label>
                                    <input type="text" class="form-control" value="3.00m x 3.00m x 2.92m" readonly>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Área</label>
                                        <input type="text" class="form-control" value="9.00 m²" readonly>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Volume</label>
                                        <input type="text" class="form-control" value="26.28 m³" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Valor Diário</label>
                                        <input type="text" class="form-control" value="R$ 50.00" readonly>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <label class="form-label">Valor Mensal</label>
                                        <input type="text" class="form-control" value="R$ 900.00" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dados do Cliente -->
                        <div class="col-md-7">
                            <div class="border rounded-4 p-4 h-100">
                                <div class="fw-semibold mb-3">
                                    <i class="ri-user-3-line me-2"></i>Dados do Cliente
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Buscar cliente cadastrado</label>
                                    <select class="form-select" id="selectCliente" style="width:100%;">
                                        <option value="">Digite para pesquisar...</option>
                                        <option value="1">Carlos Mendes</option>
                                        <option value="2">Ana Paula</option>
                                        <option value="3">Roberto Almeida</option>
                                        <option value="4">Juliana Lima</option>
                                        <option value="5">Fernanda Costa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dados da Reserva -->
                    <div class="border rounded-4 mt-4 p-4">
                        <div class="fw-semibold mb-3">
                            <i class="ri-calendar-check-line me-2"></i>Dados da Reserva
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Data de Início</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="ri-calendar-line"></i></span>
                                    <input type="date" class="form-control" value="2025-07-15">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Data de Fim</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="ri-calendar-line"></i></span>
                                    <input type="date" class="form-control" value="2025-08-14">
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <label class="form-label">Observações</label>
                                <input type="text" class="form-control" placeholder="Observações sobre a reserva">
                            </div>
                        </div>
                    </div>

                    <!-- Botões -->
                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button type="button" class="btn btn-outline-secondary px-4"
                            data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary px-4"
                            style="background: #A0B3FF; border: none;">Confirmar Reserva</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>