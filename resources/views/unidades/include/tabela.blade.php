<div class="row">
    <div class="col-12">
        <div class="card mt-4 shadow-sm table-card-custom">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0 lead-table-custom">
                        <thead class="table-light">
                            <tr>
                                <th>Box</th>
                                <th>Ocupante</th>
                                <th>Dimensões</th>
                                <th>Área (m²)</th>
                                <th>Volume (m³)</th>
                                <th>Valor Diário</th>
                                <th>Valor Mensal</th>
                                <th>Status</th>
                                <th>Localização</th>
                                <th>Observação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Exemplo: Box ocupado -->
                            <tr>
                                <td>Box 010</td>
                                <td>Daniel</td>
                                <td>2.50 × 2.50 × 2.50</td>
                                <td>6.25</td>
                                <td>15.63</td>
                                <td>R$ 50,00</td>
                                <td>R$ 375,00</td>
                                <td>
                                    <span class="badge bg-danger bg-opacity-10 text-danger">Ocupado</span>
                                </td>
                                <td>Setor A - Térreo</td>
                                <td>obs box 010</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesUnidade">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalEditeUnidade"
                                                    data-action="edit">
                                                    <i class="ri-edit-2-line"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalExcluirUnidade"
                                                    data-action="delete">
                                                    <i class="ri-delete-bin-5-line"></i> Excluir
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Exemplo: Box disponível -->
                            <tr>
                                <td>Box 020</td>
                                <td>–</td>
                                <td>3.00 × 3.00 × 2.92</td>
                                <td>9.00</td>
                                <td>26.28</td>
                                <td>R$ 50,00</td>
                                <td>R$ 900,00</td>
                                <td>
                                    <span class="badge bg-success bg-opacity-10 text-success">Disponível</span>
                                </td>
                                <td>Setor A - Térreo</td>
                                <td>BOX DE 9M²</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesUnidade">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalEditeUnidade"
                                                    data-action="edit">
                                                    <i class="ri-edit-2-line"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalExcluirUnidade"
                                                    data-action="delete">
                                                    <i class="ri-delete-bin-5-line"></i> Excluir
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Se precisar de um exemplo com Reservado, basta usar -->
                            <tr>
                                <td>Box 030</td>
                                <td>Mariana</td>
                                <td>2.00 × 2.50 × 3.00</td>
                                <td>5.00</td>
                                <td>15.00</td>
                                <td>R$ 60,00</td>
                                <td>R$ 450,00</td>
                                <td>
                                    <span class="badge bg-warning bg-opacity-10 text-warning">Reservado</span>
                                </td>
                                <td>Setor B - 1º Andar</td>
                                <td>Reserva até 30/07</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesUnidade">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalEditeUnidade"
                                                    data-action="edit">
                                                    <i class="ri-edit-2-line"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalExcluirUnidade"
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
                    <span class="text-muted small">Mostrando 1 a 3 de 3 unidades</span>
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