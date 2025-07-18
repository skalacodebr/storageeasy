<div class="row">
    <div class="col-12">
        <div class="card mt-4 shadow-sm table-card-custom">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0 lead-table-custom">
                        <thead class="table-light">
                            <tr>
                                <th>Imagem</th>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Preço</th>
                                <th>Estoque</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product-img-thumb"></div>
                                </td>
                                <td><span class="fw-semibold">CAD001</span></td>
                                <td>Cadeado Reforçado</td>
                                <td><span
                                        class="badge bg-primary bg-opacity-10 text-primary fw-semibold px-3">Segurança</span>
                                </td>
                                <td>R$ 45,90</td>
                                <td>
                                    <span class="badge bg-success bg-opacity-10 text-success px-3">32</span>
                                </td>
                                <td>
                                    <!-- Dropdown de ações -->
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalDetalhesProduto"><i
                                                        class="ri-search-line"></i> Ver Detalhes</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalEditarProduto"><i
                                                        class="ri-edit-line"></i> Editar</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-success"
                                                    data-bs-toggle="modal" data-bs-target="#modalRegistrarVenda"><i class="ri-shopping-cart-2-line"></i> Registrar Venda</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-primary"
                                                    data-bs-toggle="modal" data-bs-target="#modalMovimentarEstoque"><i class="ri-exchange-dollar-line"></i> Movimentar
                                                    Estoque</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalExcluirProduto"><i class="ri-delete-bin-5-line"></i> Excluir</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>

                </div>

                <!-- Paginação -->
                <div class="d-flex justify-content-between align-items-center px-3 py-3">
                    <span class="text-muted small">Mostrando 1 a 6 de 6 leads</span>
                    <nav>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled"><span class="page-link">&lt;</span></li>
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <li class="page-item"><span class="page-link">&gt;</span></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>