<div class="row g-3 mb-3">

    <!-- Documentos -->
    <div class="col-12">
        <div class="card border-0 box-saida-card mb-3">
            <div class="card-body pb-1">
                <div class="d-flex align-items-center mb-3 gap-2">
                    <i class="ri-file-list-3-line text-primary" style="font-size: 1.5rem;"></i>
                    <div>
                        <span class="fw-semibold">Documentos</span>
                        <div class="text-muted small">Verifique os documentos necessários para a saída</div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0 box-doc-table">
                        <thead class="table-light">
                            <tr>
                                <th>Status</th>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Data</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span
                                        class="badge bg-success bg-opacity-10 text-success fw-semibold px-3">Verificado</span>
                                </td>
                                <td>Contrato Original</td>
                                <td>Contrato de locação assinado</td>
                                <td>15/01/2024</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <span
                                        class="badge bg-warning bg-opacity-10 text-warning fw-semibold px-3">Pendente</span>
                                </td>
                                <td>Termo de Vistoria</td>
                                <td>Vistoria de saída do box</td>
                                <td>09/06/2025</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Condições do Box -->
    <div class="col-12">
        <div class="card border-0 box-saida-card mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3 gap-2">
                    <i class="ri-home-gear-line text-primary" style="font-size: 1.5rem;"></i>
                    <div>
                        <span class="fw-semibold">Condições do Box</span>
                        <div class="text-muted small">Avalie as condições do box para a saída</div>
                    </div>
                </div>
                <!-- Estado Geral do Box -->
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <div
                            class="border rounded-3 p-4 text-center bg-success bg-opacity-10 box-condicao-opt box-condicao-ativo">
                            <i class="ri-thumb-up-line text-success mb-2" style="font-size: 2rem;"></i>
                            <div class="fw-semibold">Ótimo</div>
                            <div class="text-muted small">Sem danos</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded-3 p-4 text-center bg-warning bg-opacity-10 box-condicao-opt">
                            <i class="ri-thumb-up-line text-warning mb-2" style="font-size: 2rem;"></i>
                            <div class="fw-semibold">Bom</div>
                            <div class="text-muted small">Desgaste normal</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded-3 p-4 text-center bg-danger bg-opacity-10 box-condicao-opt">
                            <i class="ri-thumb-down-line text-danger mb-2" style="font-size: 2rem;"></i>
                            <div class="fw-semibold">Ruim</div>
                            <div class="text-muted small">Danos visíveis</div>
                        </div>
                    </div>
                </div>
                <!-- Observações -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Observações</label>
                    <textarea class="form-control" rows="2"
                        placeholder="Descreva as condições do box, danos encontrados ou outras observações relevantes..."></textarea>
                </div>
                <!-- Checklist -->
                <div>
                    <div class="fw-semibold mb-2">Checklist de Vistoria</div>
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="form-check box-checklist">
                                <input class="form-check-input" type="checkbox" id="parede_ok">
                                <label class="form-check-label" for="parede_ok">
                                    Paredes em bom estado
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check box-checklist">
                                <input class="form-check-input" type="checkbox" id="piso_ok">
                                <label class="form-check-label" for="piso_ok">
                                    Piso sem danos
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check box-checklist">
                                <input class="form-check-input" type="checkbox" id="porta_ok">
                                <label class="form-check-label" for="porta_ok">
                                    Porta e fechadura funcionando
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check box-checklist">
                                <input class="form-check-input" type="checkbox" id="luz_ok">
                                <label class="form-check-label" for="luz_ok">
                                    Iluminação funcionando
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>