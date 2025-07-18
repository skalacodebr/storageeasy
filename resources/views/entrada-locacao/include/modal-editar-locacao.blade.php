<!-- Modal Nova Locação -->
<div class="modal fade" id="modalEditarLocacao" tabindex="-1" aria-labelledby="modalEditarLocacaoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form>
                <div class="modal-editar-locacao-header border-bottom pb-3 pt-4 px-4">
                    <h4 class="fw-bold mb-1" id="modalEditarLocacaoLabel">Editar Locação</h4>
                    <div class="text-secondary" style="font-size:1rem;">
                        Preencha os dados para editar a locação.
                    </div>
                </div>

                <div class="p-4 pb-0">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Cliente *</label>
                        <select class="form-select select2-novo-cliente" style="width:100%;" required>
                            <option value="">Selecione o cliente</option>
                            <option value="1">João Silva - 123.456.789-00</option>
                            <option value="2">Maria Oliveira - 987.654.321-00</option>
                            <option value="3">Carlos Mendes - 456.789.123-00</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Box *</label>
                        <select class="form-select select2-novo-box" style="width:100%;" required>
                            <option value="">Selecione o box</option>
                            <option value="1">BOX001 - Bloco A, Nível 1</option>
                            <option value="2">BOX015 - Bloco B, Nível 2</option>
                            <option value="3">BOX008 - Bloco A, Nível 3</option>
                        </select>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Data de Início *</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Plano *</label>
                            <select class="form-select" required>
                                <option value="">Selecione o plano</option>
                                <option value="mensal">Mensal</option>
                                <option value="trimestral">Trimestral</option>
                                <option value="semestral">Semestral</option>
                                <option value="anual">Anual</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Forma de Pagamento *</label>
                        <select class="form-select" required>
                            <option value="">Selecione a forma de pagamento</option>
                            <option value="pix">PIX</option>
                            <option value="credito">Cartão de Crédito</option>
                            <option value="boleto">Boleto Bancário</option>
                            <option value="dinheiro">Dinheiro</option>
                            <option value="transferencia">Transferência Bancária</option>
                        </select>
                    </div>
                </div>

                <div class="modal-editar-locacao-footer pt-3 pb-4 px-4">
                    <button type="button" class="btn btn-outline-secondary rounded-3 px-4"
                        data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-dark rounded-3 px-4 fw-semibold">Salvar Locação</button>
                </div>
            </form>
        </div>
    </div>
</div>