<!-- Modal Registrar Nova Atividade -->
<div class="modal fade" id="modalDetalheAtividade" tabindex="-1" aria-labelledby="modalDetalheAtividade" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-0">
                <form>
                    <div class="p-4 p-md-5">
                        <!-- Título e Subtítulo -->
                        <div class="mb-4">
                            <h5 class="fw-bold mb-1">Registrar Nova Atividade para Lead</h5>
                            <div class="text-muted" style="font-size:1.04em;">
                                Registre uma nova interação com o lead.
                            </div>
                        </div>

                        <!-- Nome do Lead -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Lead *</label>
                            <input type="text" class="form-control input-disabled-custom" value="João Silva" disabled>
                        </div>

                        <!-- Linha: Tipo, Data, Horário -->
                        <div class="row g-2 mb-3">
                            <div class="col-md-5">
                                <label class="form-label fw-semibold">Tipo de Atividade *</label>
                                <select class="form-select">
                                    <option selected disabled>Selecione o tipo</option>
                                    <option>Ligação</option>
                                    <option>Email</option>
                                    <option>WhatsApp</option>
                                    <option>Visita</option>
                                    <option>Outro</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Data *</label>
                                <div class="input-group">
                                    <input type="date" class="form-control">
                                    <span class="input-group-text bg-white"><i class="ri-calendar-line"></i></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Horário *</label>
                                <div class="input-group">
                                    <input type="time" class="form-control">
                                    <span class="input-group-text bg-white"><i class="ri-time-line"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- Descrição -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Descrição *</label>
                            <textarea class="form-control" rows="2" placeholder="Descreva a atividade"></textarea>
                        </div>

                        <!-- Resultado -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Resultado</label>
                            <textarea class="form-control" rows="2" placeholder="Resultado da interação"></textarea>
                        </div>

                        <!-- Linha: Próximo Follow-up e Status -->
                        <div class="row g-2 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Próximo Follow-up</label>
                                <div class="input-group">
                                    <input type="datetime-local" class="form-control">
                                    <span class="input-group-text bg-white"><i class="ri-calendar-line"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Atualizar Status do Lead</label>
                                <select class="form-select">
                                    <option selected>Manter status atual</option>
                                    <option>Novo</option>
                                    <option>Em Andamento</option>
                                    <option>Convertido</option>
                                    <option>Perdido</option>
                                </select>
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-outline-secondary px-4"
                                data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-dark px-4">Salvar Atividade</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>