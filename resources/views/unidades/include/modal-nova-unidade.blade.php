<!-- Modal Nova Unidade -->
<div class="modal fade" id="modalNovaUnidade" tabindex="-1" aria-labelledby="modalNovaUnidadeLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <form>
                    <!-- Cabeçalho -->
                    <div class="modal-nova-unidade-header border-bottom">
                        <div class="d-flex align-items-center mb-2">
                            <span
                                class="d-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success rounded-circle me-3"
                                style="width: 40px; height: 40px; font-size: 1.5rem;">
                                <i class="ri-building-2-line"></i>
                            </span>
                            <div>
                                <h4 class="fw-bold mb-0" id="modalNovaUnidadeLabel">Nova Unidade</h4>
                                <small class="text-muted">Preencha os dados para cadastrar uma nova unidade de
                                    armazenamento.</small>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 pb-0">
                        <!-- Informações da Unidade -->
                        <div class="modal-nova-unidade-section mb-4">
                            <div class="modal-nova-unidade-section-title">
                                <i class="ri-building-4-line text-primary"></i>
                                Informações da Unidade
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Nome *</label>
                                    <input type="text" class="form-control" placeholder="Ex: Box 10" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Dimensões *</label>
                                    <input type="text" class="form-control" placeholder="Ex: 3x4x2.5" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Área (M²) *</label>
                                    <input type="number" min="0" step="any" class="form-control" value="0" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Volume (M³) *</label>
                                    <input type="number" min="0" step="any" class="form-control" value="0" required>
                                </div>
                            </div>
                        </div>

                        <!-- Valores -->
                        <div class="modal-nova-unidade-section mb-4 bg-green">
                            <div class="modal-nova-unidade-section-title">
                                <i class="ri-money-dollar-circle-line text-success"></i>
                                Valores
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Valor Diário (R$) *</label>
                                    <input type="number" min="0" step="any" class="form-control" value="0" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Valor Mensal (R$) *</label>
                                    <input type="number" min="0" step="any" class="form-control" value="0" required>
                                </div>
                            </div>
                        </div>

                        <!-- Detalhes Adicionais -->
                        <div class="modal-nova-unidade-section mb-2">
                            <div class="modal-nova-unidade-section-title">
                                <i class="ri-price-tag-3-line text-secondary"></i>
                                Detalhes Adicionais
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Status *</label>
                                    <select class="form-select" required>
                                        <option>Disponível</option>
                                        <option>Ocupado</option>
                                        <option>Reservado</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Localização *</label>
                                    <input type="text" class="form-control" placeholder="Ex: Bloco A, Piso 1" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Observação</label>
                                    <textarea class="form-control" rows="2"
                                        placeholder="Observações adicionais sobre a unidade..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rodapé -->
                    <div class="modal-nova-unidade-footer">
                        <button type="button" class="btn btn-outline-secondary rounded-3 px-4"
                            data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success rounded-3 px-4 fw-semibold">Criar Unidade</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>