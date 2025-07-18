<div class="row">
    <div class="col-12">
        <div class="card mt-4 shadow-sm table-card-custom">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0 lead-table-custom">
                        <thead class="table-light">
                            <tr>
                                <th>Status</th>
                                <th>Contrato / Cliente</th>
                                <th>Criação</th>
                                <th>Início</th>
                                <th>Fim</th>
                                <th>Reajuste</th>
                                <th>Plano</th>
                                <th>Seguro</th>
                                <th>Valor Box</th>
                                <th>Valor Total</th>
                                <th>Vencimento</th>
                                <th>Pagamento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Exemplo 1: Vigente, Em dia -->
                            <tr>
                                <td>
                                    <span class="badge bg-success bg-opacity-10 text-success">VIGENTE</span>
                                </td>
                                <td>
                                    <a href="#" class="fw-semibold text-decoration-none">#00240</a><br>
                                    André Cabral de Melo<br>
                                    <small class="text-muted">Box(es): 105</small>
                                </td>
                                <td>27/02/2025</td>
                                <td>23/02/2025</td>
                                <td>23/03/2025</td>
                                <td>27/02/2026</td>
                                <td>
                                    <span class="badge bg-primary bg-opacity-10 text-primary">MENSAL</span>
                                </td>
                                <td>R$ 11,96</td>
                                <td>R$ 138,82</td>
                                <td>R$ 150,78</td>
                                <td>Dia 10</td>
                                <td>
                                    <span class="badge bg-success bg-opacity-10 text-success">Em dia</span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesContrato">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Exemplo 2: Inativo, Suspenso -->
                            <tr>
                                <td>
                                    <span class="badge bg-secondary bg-opacity-10 text-secondary">INATIVO</span>
                                </td>
                                <td>
                                    <a href="#" class="fw-semibold text-decoration-none">#00239</a><br>
                                    Marcio Lima Medeiros<br>
                                    <small class="text-muted">Box(es): 50</small>
                                </td>
                                <td>20/02/2025</td>
                                <td>20/02/2025</td>
                                <td>20/03/2025</td>
                                <td>20/02/2026</td>
                                <td>
                                    <span class="badge bg-primary bg-opacity-10 text-primary">MENSAL</span>
                                </td>
                                <td>R$ 11,96</td>
                                <td>R$ 188,04</td>
                                <td>R$ 200,00</td>
                                <td>Dia 5</td>
                                <td>
                                    <span class="badge bg-warning bg-opacity-10 text-warning">Suspenso</span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesContrato">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Exemplo 3: Suspenso, Atrasado -->
                            <tr>
                                <td>
                                    <span class="badge bg-warning bg-opacity-10 text-warning">SUSPENSO</span>
                                </td>
                                <td>
                                    <a href="#" class="fw-semibold text-decoration-none">#00238</a><br>
                                    Dorian Wagner<br>
                                    <small class="text-muted">Box(es): 19</small>
                                </td>
                                <td>19/02/2025</td>
                                <td>19/02/2025</td>
                                <td>19/03/2025</td>
                                <td>19/02/2026</td>
                                <td>
                                    <span class="badge bg-primary bg-opacity-10 text-primary">MENSAL</span>
                                </td>
                                <td>R$ 11,96</td>
                                <td>R$ 438,04</td>
                                <td>R$ 450,00</td>
                                <td>Dia 15</td>
                                <td>
                                    <span class="badge bg-danger bg-opacity-10 text-danger">Atrasado</span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 table-action" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill" style="font-size: 22px;"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end action-dropdown-custom shadow">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2"
                                                    data-bs-toggle="modal" data-bs-target="#modalDetalhesContrato">
                                                    <i class="ri-search-line"></i> Ver Detalhes
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>