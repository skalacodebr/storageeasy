<div class="row">
    <div class="col-12">
        <div class="card mt-4 shadow-sm table-card-custom">
            <div class="card-body p-0">

                <!-- Título -->
                <div class="d-flex justify-content-between align-items-center px-3 py-3">
                    <h5 class="card-title">Relatórios Programados</h5>
                    <button class="btn btn-sm btn-primary px-4" data-bs-toggle="modal" data-bs-target="#modalNovoRelatorio">
                        <i class="ri-add-line me-2"></i>Novo Relatório
                    </button>
                </div>

                <!-- Tabela de Relatórios Programados -->
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0 lead-table-custom">
                        <thead class="table-light">
                            <tr>
                                <th>Relatório</th>
                                <th>Frequência</th>
                                <th>Próxima Execução</th>
                                <th>Destinatários</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Locações</td>
                                <td>Mensal</td>
                                <td>01/05/2025</td>
                                <td>admin@storagefacil.com</td>
                                <td>
                                    <span class="badge bg-success bg-opacity-10 text-success px-2">Ativo</span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalDetalhesRelatorio">
                                                    <i class="ri-eye-line"></i> Visualizar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalEditarRelatorio">
                                                    <i class="ri-edit-line"></i> Editar Programação
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                    data-bs-toggle="modal" data-bs-target="#modalConfirmarStatus">
                                                    <i class="ri-power-line"></i> Desativar
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
                    <span class="text-muted small">Mostrando 1 a 3 de 5 relatórios programados</span>
                    <nav>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled"><span class="page-link">&lt;</span></li>
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <li class="page-item"><span class="page-link">2</span></li>
                            <li class="page-item"><span class="page-link">&gt;</span></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>