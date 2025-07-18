<!-- Modal Ver Detalhes da Locação -->
<div class="modal fade" id="modalDetalhesLocacao" tabindex="-1" aria-labelledby="modalDetalhesLocacaoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- Cabeçalho -->
                <div class="modal-detalhes-locacao-header border-bottom pb-3 pt-4 px-4">
                    <h4 class="fw-bold mb-1" id="modalDetalhesLocacaoLabel">Detalhes da Locação</h4>
                    <div class="text-secondary" style="font-size:1rem;">
                        Veja todos os dados da locação.
                    </div>
                </div>

                <div class="p-4 pb-0">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Cliente</label>
                        <input type="text" class="form-control" value="João Silva - 123.456.789-00" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Box</label>
                        <input type="text" class="form-control" value="BOX001 - Bloco A, Nível 1" readonly>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Data de Início</label>
                            <input type="text" class="form-control" value="14/01/2024" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Plano</label>
                            <input type="text" class="form-control" value="Mensal" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Forma de Pagamento</label>
                        <input type="text" class="form-control" value="PIX" readonly>
                    </div>
                </div>

                <!-- Rodapé -->
                <div class="modal-detalhes-locacao-footer pt-3 pb-4 px-4">
                    <button type="button" class="btn btn-outline-secondary rounded-3 px-4"
                        data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>