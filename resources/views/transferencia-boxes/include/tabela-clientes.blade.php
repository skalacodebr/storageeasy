<div class="row mb-4">
    <div class="col-12">
        <div class="card mt-4 shadow-sm table-card-custom">
            <div class="card-body p-0">

                <!-- Cabeçalho -->
                <div class="px-4 pt-4 pb-2">
                    <h4 class="fw-bold mb-1">Selecione o Cliente</h4>
                    <div class="text-secondary" style="font-size: 1rem;">
                        Escolha o cliente que deseja transferir de box
                    </div>
                </div>

                <!-- Busca -->
                <div class="px-4 mb-3">
                    <div class="input-group search-client">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="ri-search-line"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" placeholder="Buscar cliente…">
                    </div>
                </div>

                <!-- Lista de Clientes -->
                <div class="px-4 pb-3">
                    <div class="list-group client-list">
                        <!-- Item selecionado -->
                        <button type="button" class="list-group-item list-group-item-action client-item selected">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <i class="ri-user-line me-2 icon-user"></i>
                                    <div>
                                        <div class="fw-semibold">João Silva</div>
                                        <div class="text-secondary small">joao.silva@email.com</div>
                                        <div class="text-secondary small">(11) 98765‑4321</div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <div class="fw-semibold">BOX001</div>
                                    <div class="text-secondary small">Contrato: Mensal</div>
                                    <div class="text-success fw-semibold">R$ 900,00/mês</div>
                                </div>
                            </div>
                        </button>
                        <!-- Itens não selecionados -->
                        <button type="button" class="list-group-item list-group-item-action client-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <i class="ri-user-line me-2 icon-user"></i>
                                    <div>
                                        <div class="fw-semibold">Maria Santos</div>
                                        <div class="text-secondary small">maria.santos@email.com</div>
                                        <div class="text-secondary small">(11) 91234‑5678</div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <div class="fw-semibold">BOX002</div>
                                    <div class="text-secondary small">Contrato: Mensal</div>
                                    <div class="text-success fw-semibold">R$ 625,00/mês</div>
                                </div>
                            </div>
                        </button>
                        <button type="button" class="list-group-item list-group-item-action client-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <i class="ri-user-line me-2 icon-user"></i>
                                    <div>
                                        <div class="fw-semibold">Carlos Oliveira</div>
                                        <div class="text-secondary small">carlos.oliveira@email.com</div>
                                        <div class="text-secondary small">(11) 97777‑8888</div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <div class="fw-semibold">BOX003</div>
                                    <div class="text-secondary small">Contrato: Mensal</div>
                                    <div class="text-success fw-semibold">R$ 300,00/mês</div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Paginação -->
                <div class="d-flex justify-content-between align-items-center px-3 py-3">
                    <span class="text-muted small">Mostrando 1 a 3 de 3 clientes</span>
                    <nav>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled"><span class="page-link">&lt;</span></li>
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <li class="page-item disabled"><span class="page-link">&gt;</span></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>