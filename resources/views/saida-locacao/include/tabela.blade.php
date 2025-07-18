<div class="row">
    <div class="col-12">
        <div class="card mt-4 shadow-sm table-card-custom">
            <div class="card-body p-0">
                <!-- Título e subtítulo -->
                <div class="px-4 pt-4 pb-2">
                    <h4 class="fw-bold mb-1">Selecione o Box para Saída</h4>
                    <div class="text-secondary" style="font-size: 1rem;">
                        Escolha o box que será desocupado
                    </div>
                </div>
                <!-- Campo de busca -->
                <div class="px-4 mb-2">
                    <div class="input-group search-saida-box">
                        <span class="input-group-text bg-white border-end-0"><i class="ri-search-line"></i></span>
                        <input type="text" class="form-control border-start-0"
                            placeholder="Buscar por código do box, nome do cliente ou número do contrato...">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0 lead-table-custom">
                        <thead class="table-light">
                            <tr>
                                <th>Box</th>
                                <th>Localização</th>
                                <th>Cliente</th>
                                <th>Contrato</th>
                                <th>Desde</th>
                                <th>Valor Mensal</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A101</td>
                                <td>Setor A - Térreo</td>
                                <td>João Silva</td>
                                <td>#00240</td>
                                <td>15/01/2025</td>
                                <td>R$ 375.00</td>
                                <td><button class="btn btn-primary btn-sm">Selecionar</button></td>
                            </tr>
                            <tr>
                                <td>B202</td>
                                <td>Setor B - Primeiro Andar</td>
                                <td>Maria Oliveira</td>
                                <td>#00239</td>
                                <td>05/02/2025</td>
                                <td>R$ 350.00</td>
                                <td><button class="btn btn-primary btn-sm">Selecionar</button></td>
                            </tr>
                            <tr>
                                <td>C301</td>
                                <td>Setor C - Segundo Andar</td>
                                <td>Carlos Mendes</td>
                                <td>#00238</td>
                                <td>10/12/2024</td>
                                <td>R$ 425.00</td>
                                <td><button class="btn btn-primary btn-sm">Selecionar</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Paginação -->
                <div class="d-flex justify-content-between align-items-center px-3 py-3">
                    <span class="text-muted small">Mostrando 1 a 3 de 3 registros</span>
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