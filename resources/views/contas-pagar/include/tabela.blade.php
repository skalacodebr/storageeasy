<div class="row">
    <div class="col-12">
        <div class="card mt-4 shadow-sm table-card-custom">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0 lead-table-custom">
                        <thead class="table-light">
                            <tr>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th>Vencimento</th>
                                <th>Categoria</th>
                                <th>Observações</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Exemplo 1 -->
                            <tr>
                                <td>Aluguel do galpão</td>
                                <td>R$ 2.500,00</td>
                                <td>10/07/2025</td>
                                <td>Aluguel</td>
                                <td>Pagamento mensal referente ao galpão principal.</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesDespesa">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalEditarDespesa"
                                                    data-action="edit">
                                                    <i class="ri-edit-2-line"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalExcluirDespesa"
                                                    data-action="delete">
                                                    <i class="ri-delete-bin-5-line"></i> Excluir
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Exemplo 2 -->
                            <tr>
                                <td>Conta de Energia</td>
                                <td>R$ 678,30</td>
                                <td>12/07/2025</td>
                                <td>Energia</td>
                                <td>Energia referente ao mês anterior.</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesDespesa">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalEditarDespesa"
                                                    data-action="edit">
                                                    <i class="ri-edit-2-line"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalExcluirDespesa"
                                                    data-action="delete">
                                                    <i class="ri-delete-bin-5-line"></i> Excluir
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Exemplo 3 -->
                            <tr>
                                <td>Serviço de Internet</td>
                                <td>R$ 120,00</td>
                                <td>15/07/2025</td>
                                <td>Internet</td>
                                <td>Plano fibra óptica 500mbps.</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesDespesa">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalEditarDespesa"
                                                    data-action="edit">
                                                    <i class="ri-edit-2-line"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalExcluirDespesa"
                                                    data-action="delete">
                                                    <i class="ri-delete-bin-5-line"></i> Excluir
                                                </a>
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
                    <span class="text-muted small">Mostrando 1 a 3 de 3 despesas</span>
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