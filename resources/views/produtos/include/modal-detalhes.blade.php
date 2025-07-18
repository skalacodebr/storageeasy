<!-- Modal Detalhes do Produto -->
<div class="modal fade" id="modalDetalhesProduto" tabindex="-1" aria-labelledby="modalDetalhesProdutoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-0">
                <div class="p-0 p-md-4">

                    <!-- Cabeçalho -->
                    <div class="d-flex align-items-center mb-1 px-md-2 pt-3 pb-1 pb-md-3">
                        <span class="bg-light d-flex align-items-center justify-content-center me-3 icon-product-modal">
                            <i class="ri-box-line"></i>
                        </span>
                        <div>
                            <h5 class="fw-bold mb-0" id="modalDetalhesProdutoLabel">Detalhes do Produto</h5>
                            <small class="text-muted">Informações detalhadas sobre o produto</small>
                        </div>
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"
                            aria-label="Fechar"></button>
                    </div>
                    <hr class="my-0 mb-3">

                    <!-- Bloco superior -->
                    <div class="row g-3 px-md-2">
                        <div class="col-md-3">
                            <div class="product-img-modal mx-auto"></div>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-column flex-md-row gap-3 mb-2">
                                <div>
                                    <h5 class="mb-0 fw-bold">Cadeado Reforçado</h5>
                                    <small class="text-muted">Código: <b>CAD001</b></small>
                                </div>
                                <div class="d-flex gap-2 ms-md-auto">
                                    <div class="metric-card-mini">
                                        <span class="text-muted small">Preço</span>
                                        <div>
                                            <i class="ri-money-dollar-circle-line me-1"></i>
                                            <b>R$ 45,90</b>
                                        </div>
                                    </div>
                                    <div class="metric-card-mini metric-card-mini-green">
                                        <span class="text-muted small">Estoque Atual</span>
                                        <div>
                                            <i class="ri-box-3-line me-1"></i>
                                            <b>32</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-produto-modal mb-2">
                                <label class="form-label fw-semibold mb-1">Descrição</label>
                                <div class="bg-light rounded-3 px-3 py-2 small">
                                    Cadeado de alta segurança para proteção extra
                                </div>
                            </div>
                            <div class="row g-2 small">
                                <div class="col-md-6">
                                    <span class="text-muted">Fornecedor</span><br>
                                    SecureLock
                                </div>
                                <div class="col-md-6">
                                    <span class="text-muted">Data de Cadastro</span><br>
                                    29/02/2024
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Abas -->
                    <ul class="nav nav-tabs nav-tabs-produto mt-4 px-md-2" id="tabProduto" role="tablist">
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link active w-100" id="tab-movimentacoes" data-bs-toggle="tab"
                                data-bs-target="#movimentacoes" type="button" role="tab" aria-controls="movimentacoes"
                                aria-selected="true">
                                Movimentações
                            </button>
                        </li>
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link w-100" id="tab-vendas" data-bs-toggle="tab" data-bs-target="#vendas"
                                type="button" role="tab" aria-controls="vendas" aria-selected="false">
                                Vendas
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content bg-transparent px-md-2 px-0 pb-2 pt-3" id="tabProdutoContent">
                        <!-- Movimentações -->
                        <div class="tab-pane fade show active" id="movimentacoes" role="tabpanel"
                            aria-labelledby="tab-movimentacoes">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="card card-metric-info card-metric-blue">
                                        <div class="small text-muted mb-1">
                                            <i class="ri-box-3-line me-1"></i> Estoque Atual
                                        </div>
                                        <div class="fw-bold fs-5 text-primary">32 <span
                                                class="fs-6 fw-normal">unidades</span></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-metric-info card-metric-yellow">
                                        <div class="small text-muted mb-1">
                                            <i class="ri-alert-line me-1"></i> Estoque Mínimo
                                        </div>
                                        <div class="fw-bold fs-5 text-warning">10 <span
                                                class="fs-6 fw-normal">unidades</span></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-metric-info card-metric-green">
                                        <div class="small text-muted mb-1">
                                            <i class="ri-money-dollar-circle-line me-1"></i> Valor em Estoque
                                        </div>
                                        <div class="fw-bold fs-5 text-success">R$ 1.468,80</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-body p-3">
                                    <label class="form-label fw-semibold mb-1">Histórico de Movimentações</label>
                                    <div class="text-muted text-center py-3">Nenhuma movimentação registrada</div>
                                </div>
                            </div>
                        </div>
                        <!-- Vendas -->
                        <div class="tab-pane fade" id="vendas" role="tabpanel" aria-labelledby="tab-vendas">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="card card-metric-info card-metric-green">
                                        <div class="small text-muted mb-1">
                                            <i class="ri-money-dollar-circle-line me-1"></i> Total Vendido
                                        </div>
                                        <div class="fw-bold fs-5 text-success">R$ 0,00</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-metric-info card-metric-blue">
                                        <div class="small text-muted mb-1">
                                            <i class="ri-box-3-line me-1"></i> Unidades Vendidas
                                        </div>
                                        <div class="fw-bold fs-5 text-primary">0</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-metric-info card-metric-purple">
                                        <div class="small text-muted mb-1">
                                            <i class="ri-calendar-line me-1"></i> Última Venda
                                        </div>
                                        <div class="fw-bold fs-6 text-purple">Sem vendas</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-body p-3">
                                    <label class="form-label fw-semibold mb-1">Histórico de Vendas</label>
                                    <div class="text-muted text-center py-3">Nenhuma venda registrada</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim conteúdo abas -->
                </div>
            </div>
        </div>
    </div>
</div>