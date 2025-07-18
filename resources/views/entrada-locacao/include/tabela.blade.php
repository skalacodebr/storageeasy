<div class="row">
    <div class="col-12">
        <div class="card mt-4 shadow-sm table-card-custom">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0 lead-table-custom">
                        <thead class="table-light">
                            <tr>
                                <th>Status</th>
                                <th>Cliente</th>
                                <th>Box</th>
                                <th>Período</th>
                                <th>Valor Mensal</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Exemplo: Ativa -->
                            <tr>
                                <td>
                                    <span class="badge bg-success bg-opacity-10 text-success">Ativa</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar-soft-blue">JS</span>
                                        <div>
                                            <div class="fw-semibold">João Silva</div>
                                            <small class="text-muted">123.456.789‑00</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fw-semibold">BOX001</div>
                                    <small class="text-muted">Bloco A, Nível 1</small>
                                </td>
                                <td>
                                    <div class="fw-semibold">Início: 14/01/2024</div>
                                    <div class="text-muted small">Venc: 14/02/2024</div>
                                </td>
                                <td>
                                    <div class="fw-semibold">R$ 350,00</div>
                                    <div class="text-muted small">Venc: 14/02/2024</div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size:22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesLocacao">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalEditarLocacao">
                                                    <i class="ri-edit-2-line"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalExcluirLocacao">
                                                    <i class="ri-delete-bin-5-line"></i> Excluir
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Exemplo: Vencida -->
                            <tr>
                                <td>
                                    <span class="badge bg-danger bg-opacity-10 text-danger">Vencida</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar-soft-blue">MO</span>
                                        <div>
                                            <div class="fw-semibold">Maria Oliveira</div>
                                            <small class="text-muted">987.654.321‑00</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fw-semibold">BOX015</div>
                                    <small class="text-muted">Bloco B, Nível 2</small>
                                </td>
                                <td>
                                    <div class="fw-semibold">Início: 31/01/2024</div>
                                    <div class="text-muted small">Venc: 29/02/2024</div>
                                </td>
                                <td>
                                    <div class="fw-semibold">R$ 600,00</div>
                                    <div class="text-muted small">Venc: 29/02/2024</div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size:22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesLocacao">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalEditarLocacao">
                                                    <i class="ri-edit-2-line"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalExcluirLocacao">
                                                    <i class="ri-delete-bin-5-line"></i> Excluir
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Exemplo: Cancelada -->
                            <tr>
                                <td>
                                    <span class="badge bg-secondary bg-opacity-10 text-secondary">Cancelada</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar-soft-blue">AS</span>
                                        <div>
                                            <div class="fw-semibold">Ana Santos</div>
                                            <small class="text-muted">321.654.987‑00</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fw-semibold">BOX022</div>
                                    <small class="text-muted">Bloco C, Nível 1</small>
                                </td>
                                <td>
                                    <div class="fw-semibold">Início: 30/11/2023</div>
                                    <div class="text-muted small">Venc: 31/12/2023</div>
                                </td>
                                <td>
                                    <div class="fw-semibold">R$ 750,00</div>
                                    <div class="text-muted small">Venc: 31/12/2023</div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size:22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesLocacao">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalEditarLocacao">
                                                    <i class="ri-edit-2-line"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalExcluirLocacao">
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
                    <span class="text-muted small">Mostrando 1 a 3 de 3 locações</span>
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