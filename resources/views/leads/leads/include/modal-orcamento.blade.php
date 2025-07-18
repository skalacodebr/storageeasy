<!-- Modal Criar Orçamento -->
<div class="modal fade" id="modalCriarOrcamento" tabindex="-1" aria-labelledby="modalCriarOrcamentoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-0">
                <form>
                    <div class="p-4 p-md-5">
                        <!-- Título -->
                        <h3 class="fw-bold mb-1" style="color: #151929;">Criar Orçamento</h3>
                        <div class="text-primary mb-3" style="font-size: 1.07em;">
                            Orçamento para João Silva <span class="text-muted"
                                style="font-size:.98em;">(joao.silva@email.com)</span>
                        </div>
                        <hr class="mb-4 mt-1">

                        <!-- Informações Básicas -->
                        <h6 class="fw-bold mb-2">Informações Básicas</h6>
                        <div class="rounded-3 p-3 mb-4" style="background: #fafbfc; border:1px solid #ececec;">
                            <div class="row g-3 align-items-end">
                                <div class="col-md-4">
                                    <label class="form-label">Data</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control">
                                        <span class="input-group-text bg-white"><i class="ri-calendar-line"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Validade</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control">
                                        <span class="input-group-text bg-white"><i class="ri-calendar-line"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Forma de Pagamento</label>
                                    <select class="form-select">
                                        <option selected disabled>Selecione</option>
                                        <option>Dinheiro</option>
                                        <option>Cartão</option>
                                        <option>PIX</option>
                                        <option>Boleto</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <!-- Adicionar Produtos -->
                        <h6 class="fw-bold mb-2">Adicionar Produtos</h6>
                        <div class="rounded-3 p-3 mb-4" style="background: #fafbfc; border:1px solid #ececec;">
                            <div class="row g-2 align-items-end">
                                <div class="col-md-6">
                                    <label class="form-label">Produto</label>
                                    <select class="form-select">
                                        <option>Caixa de Papelão Grande - R$ 12.50</option>
                                        <option>Caixa de Papelão Pequena - R$ 9.90</option>
                                        <option>Kit Fita Adesiva - R$ 6.00</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Quantidade</label>
                                    <div class="input-group">
                                        <button class="btn btn-outline-light px-2 py-1 border" type="button"><i
                                                class="ri-subtract-line"></i></button>
                                        <input type="number" min="1" value="1" class="form-control text-center"
                                            style="max-width:60px;">
                                        <button class="btn btn-outline-light px-2 py-1 border" type="button"><i
                                                class="ri-add-line"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Desconto (%)</label>
                                    <input type="number" class="form-control text-center" min="0" max="100" value="0">
                                </div>
                                <div class="col-md-2 d-flex align-items-end">
                                    <button type="button" class="btn btn-primary w-100" style="height:38px;"><i
                                            class="ri-add-line"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Itens do Orçamento -->
                        <h6 class="fw-bold mb-2">Itens do Orçamento <span class="text-muted fw-normal fs-6 ms-2">1
                                item</span></h6>
                        <div class="rounded-3 p-2 mb-3" style="background: #fafbfc; border:1px solid #ececec;">
                            <div class="table-responsive">
                                <table class="table table-borderless align-middle mb-0">
                                    <thead>
                                        <tr style="color:#7b7e8c;">
                                            <th>Produto</th>
                                            <th>Valor Unit.</th>
                                            <th>Qtd.</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Caixa de Papelão Grande</td>
                                            <td>R$ 12.50</td>
                                            <td>1</td>
                                            <td class="fw-bold text-dark">R$ 12.50</td>
                                            <td><button class="btn btn-link text-danger p-0"><i
                                                        class="ri-delete-bin-6-line"
                                                        style="font-size:1.1rem"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Resumo Financeiro -->
                        <div class="rounded-3 p-3 mb-4" style="background: #fafbfc; border:1px solid #ececec;">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="text-muted">Subtotal:</span>
                                <span class="fw-normal">R$ 12.50</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted">Desconto Total:</span>
                                <span class="fw-normal text-danger">- R$ 0.00</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="fw-bold" style="font-size:1.1em;">Valor Total:</span>
                                <span class="fw-bold text-dark" style="font-size:1.15em;">R$ 12.50</span>
                            </div>
                        </div>

                        <hr>
                        <!-- Observações e Condições -->
                        <div class="row g-3 mb-4">
                            <h6 class="fw-bold mb-2">Observações e Condições</h6>
                            <div class="col-md-6">
                                <label class="form-label">Observações</label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Observações adicionais..."></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Condições Comerciais</label>
                                <textarea class="form-control"
                                    rows="3">Pagamento em até 30 dias&#10;Entrega em até 7 dias úteis</textarea>
                            </div>
                        </div>

                        <!-- Métodos de Envio -->
                        <h6 class="fw-bold mb-2">Métodos de Envio</h6>
                        <div class="rounded-3 p-3 mb-3" style="background: #fafbfc; border:1px solid #ececec;">
                            <div class="form-check form-check-inline align-middle me-4">
                                <input class="form-check-input" type="checkbox" id="envioEmail" checked>
                                <label class="form-check-label" for="envioEmail">
                                    <i class="ri-mail-line align-bottom"></i> Email <br>
                                    <span class="text-muted" style="font-size:0.96em;">Enviar para
                                        joao.silva@email.com</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline align-middle">
                                <input class="form-check-input" type="checkbox" id="envioWhatsapp">
                                <label class="form-check-label" for="envioWhatsapp">
                                    <i class="ri-whatsapp-line align-bottom"></i> WhatsApp <br>
                                    <span class="text-muted" style="font-size:0.96em;">Enviar para (11)
                                        98765-4321</span>
                                </label>
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="d-flex justify-content-end mt-4 gap-2">
                            <button type="button" class="btn btn-outline-dark px-4">Cancelar</button>
                            <button type="submit" class="btn btn-primary px-4 fw-semibold"><i
                                    class="ri-send-plane-2-line me-1"></i> Enviar Orçamento</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>