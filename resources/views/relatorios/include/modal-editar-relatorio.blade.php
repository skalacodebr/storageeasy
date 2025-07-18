<div class="modal fade" id="modalEditarRelatorio" tabindex="-1" aria-labelledby="modalEditarRelatorioLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-relatorio">
            <div class="modal-relatorio-header modal-header border-0 pb-0">
                <div>
                    <h4 class="modal-relatorio-title modal-title" id="modalEditarRelatorioLabel">Editar Relatório
                    </h4>
                    <div class="modal-relatorio-subtitle text-muted">
                        Configure os detalhes para a geração automática do seu relatório.
                    </div>
                </div>
                <button type="button" class="btn-close modal-relatorio-close ms-2" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <form>
                    <div class="modal-relatorio-field mb-3 row align-items-center">
                        <label class="col-12 modal-relatorio-label mb-1" for="relatorioNome">Nome</label>
                        <div class="col-12">
                            <input type="text" class="form-control form-control-lg modal-relatorio-input"
                                id="relatorioNome" placeholder="Ex: Relatório de Vendas Mensal">
                        </div>
                    </div>
                    <div class="modal-relatorio-field mb-3 row align-items-center">
                        <label class="col-12 modal-relatorio-label mb-1" for="relatorioTipo">Tipo</label>
                        <div class="col-12">
                            <select class="form-select form-select-lg modal-relatorio-select" id="relatorioTipo">
                                <option>Locações</option>
                                <option>Inadimplência</option>
                                <option>Movimento Financeiro</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-relatorio-field mb-3 row align-items-center">
                        <label class="col-12 modal-relatorio-label mb-1" for="relatorioFrequencia">Frequência</label>
                        <div class="col-12">
                            <select class="form-select form-select-lg modal-relatorio-select" id="relatorioFrequencia">
                                <option>Mensal</option>
                                <option>Semanal</option>
                                <option>Diário</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-relatorio-field mb-2 row align-items-center">
                        <label class="col-12 modal-relatorio-label mb-1"
                            for="relatorioDestinatarios">Destinatários</label>
                        <div class="col-12">
                            <textarea class="form-control form-control-lg modal-relatorio-textarea"
                                id="relatorioDestinatarios" rows="3"
                                placeholder="Emails separados por vírgula. Ex: email1@example.com, email2@example.com"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-relatorio-footer modal-footer border-0 pt-0">
                <button type="button" class="btn btn-outline-secondary modal-relatorio-btn-outline btn-lg px-4"
                    data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn modal-relatorio-btn-dark btn-lg px-4">Salvar</button>
            </div>
        </div>
    </div>
</div>