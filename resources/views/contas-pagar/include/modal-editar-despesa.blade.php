<!-- Modal Nova Despesa -->
<div class="modal fade" id="modalEditarDespesa" tabindex="-1" aria-labelledby="modalEditarDespesaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <form>
                    <!-- Cabeçalho -->
                    <div class="modal-nova-despesa-header border-bottom pb-3">
                        <h4 class="fw-bold mb-1" id="modalEditarDespesaLabel">Editar Despesa</h4>
                        <div class="text-secondary" style="font-size: 1rem;">
                            Edite uma despesa existente. Preencha todos os campos obrigatórios.
                        </div>
                    </div>

                    <div class="p-4 pb-0">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Descrição *</label>
                            <input type="text" class="form-control" placeholder="Ex: Aluguel do galpão" required>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Valor *</label>
                                <input type="number" class="form-control" placeholder="0,00" min="0" step="0.01"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Vencimento *</label>
                                <input type="date" class="form-control" placeholder="dd/mm/aaaa" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Categoria *</label>
                            <select class="form-select" required>
                                <option selected disabled>Selecione uma categoria</option>
                                <option>Aluguel</option>
                                <option>Energia</option>
                                <option>Água</option>
                                <option>Internet</option>
                                <option>Manutenção</option>
                                <option>Salários</option>
                                <option>Impostos</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label fw-semibold">Observações</label>
                            <textarea class="form-control" rows="2"
                                placeholder="Informações adicionais (opcional)"></textarea>
                        </div>
                    </div>

                    <!-- Rodapé -->
                    <div class="modal-nova-despesa-footer pt-3 pb-4 px-4">
                        <button type="button" class="btn btn-outline-secondary rounded-3 px-4"
                            data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-dark rounded-3 px-4 fw-semibold">Salvar Despesa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>