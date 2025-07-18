<!-- Modal Ver Detalhes da Despesa -->
<div class="modal fade" id="modalDetalhesDespesa" tabindex="-1" aria-labelledby="modalDetalhesDespesaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- Cabeçalho -->
                <div class="modal-detalhes-despesa-header border-bottom pb-3">
                    <h4 class="fw-bold mb-1" id="modalDetalhesDespesaLabel">Detalhes da Despesa</h4>
                    <div class="text-secondary" style="font-size: 1rem;">
                        Veja as informações completas desta despesa.
                    </div>
                </div>

                <div class="p-4 pb-0">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Descrição</label>
                        <input type="text" class="form-control" value="Aluguel do galpão" readonly>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Valor</label>
                            <input type="text" class="form-control" value="R$ 2.500,00" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Vencimento</label>
                            <input type="text" class="form-control" value="10/07/2025" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Categoria</label>
                        <input type="text" class="form-control" value="Aluguel" readonly>
                    </div>
                    <div class="mb-2">
                        <label class="form-label fw-semibold">Observações</label>
                        <textarea class="form-control" rows="2"
                            readonly>Pagamento mensal referente ao galpão principal.</textarea>
                    </div>
                </div>

                <!-- Rodapé -->
                <div class="modal-detalhes-despesa-footer pt-3 pb-4 px-4">
                    <button type="button" class="btn btn-outline-secondary rounded-3 px-4"
                        data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>