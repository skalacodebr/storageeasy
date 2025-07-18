<!-- Modal Registrar Venda -->
<div class="modal fade" id="modalRegistrarVenda" tabindex="-1" aria-labelledby="modalRegistrarVendaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-0">
                <form>
                    <div class="p-0 p-md-4">

                        <!-- Título -->
                        <div class="d-flex align-items-center mb-1 pt-3 pb-1 pb-md-3">
                            <div>
                                <h5 class="fw-bold mb-1" id="modalRegistrarVendaLabel">Registrar Venda</h5>
                                <small class="text-muted">Informe os dados para registrar uma venda deste
                                    produto.</small>
                            </div>
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"
                                aria-label="Fechar"></button>
                        </div>
                        <hr class="my-0 mb-3">

                        <!-- Produto -->
                        <div class="card card-produto-mov mb-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="small text-muted mb-1">Produto</div>
                                    <div class="fw-semibold">Caixa de Papelão Grande</div>
                                    <div class="text-primary small fw-semibold">Código: CAI001</div>
                                </div>
                                <div class="col-auto text-end">
                                    <div class="text-muted small">Estoque atual</div>
                                    <div class="fw-bold fs-5 text-dark">8 <span class="fs-6 fw-normal">unidades</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Campos da Venda -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold mb-1">Cliente</label>
                            <select class="form-select js-select2-clientes" style="width: 100%;" required>
                                <option value="">Selecione o cliente...</option>
                                <option value="1">João Silva</option>
                                <option value="2">Maria Oliveira</option>
                                <option value="3">Carlos Santos</option>
                                <option value="4">Ana Costa</option>
                                <option value="5">Pedro Souza</option>
                            </select>
                        </div>

                        <div class="row g-2">
                            <div class="col-6">
                                <label class="form-label fw-semibold mb-1">Quantidade</label>
                                <input type="number" class="form-control" min="1" value="1" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label fw-semibold mb-1">Valor Unitário</label>
                                <input type="text" class="form-control" value="R$ 12,50" required>
                            </div>
                        </div>
                        <div class="mb-3 mt-2">
                            <label class="form-label fw-semibold mb-1">Data da Venda</label>
                            <input type="date" class="form-control" value="<?=date('Y-m-d')?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold mb-1">Observações</label>
                            <textarea class="form-control" rows="2"
                                placeholder="Observações da venda (opcional)"></textarea>
                        </div>
                        <div class="card card-estoque-after mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="text-muted small mb-1">Estoque após venda</div>
                                    <div class="fw-bold fs-5">7 <span class="fs-6 fw-normal">unidades</span></div>
                                </div>
                                <div class="icon-estoque-after">
                                    <i class="ri-box-3-line"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Ações -->
                        <div class="d-flex gap-2 justify-content-end pt-1">
                            <button type="button" class="btn btn-outline-secondary rounded-3 px-4"
                                data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary rounded-3 px-4"
                                style="background: #172655; border: none;">Registrar Venda</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>