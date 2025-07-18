<!-- Modal Movimentação de Estoque -->
<div class="modal fade" id="modalMovimentarEstoque" tabindex="-1" aria-labelledby="modalMovimentarEstoqueLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-0">
                <form>
                    <div class="p-0 p-md-4">

                        <!-- Título -->
                        <div class="d-flex align-items-center mb-1 pt-3 pb-1 pb-md-3">
                            <div>
                                <h5 class="fw-bold mb-1" id="modalMovimentarEstoqueLabel">Movimentação de Estoque</h5>
                                <small class="text-muted">Registre entrada ou saída de estoque para Caixa de Papelão
                                    Grande.</small>
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

                        <!-- Tipo de Movimentação -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold mb-2">Tipo de Movimentação</label>
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn btn-mov-estoque w-100 btn-mov-entrada active"
                                        id="btnEntrada">
                                        <i class="ri-add-line me-1"></i> Entrada
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-mov-estoque w-100 btn-mov-saida" id="btnSaida">
                                        <i class="ri-subtract-line me-1"></i> Saída
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Quantidade -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold mb-1">Quantidade</label>
                            <input type="number" class="form-control" value="1" min="1" id="quantidadeEstoque">
                        </div>

                        <!-- Motivo -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold mb-1">Motivo</label>
                            <input type="text" class="form-control"
                                placeholder="Motivo da entrada (ex: compra, devolução)" id="motivoEstoque">
                        </div>

                        <!-- Estoque após movimentação -->
                        <div class="card card-estoque-after mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="text-muted small mb-1">Estoque após movimentação</div>
                                    <div class="fw-bold fs-5">9 <span class="fs-6 fw-normal">unidades</span></div>
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
                                style="background: #172655; border: none;">Registrar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>