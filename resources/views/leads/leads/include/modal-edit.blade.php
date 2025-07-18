<!-- Modal Novo Lead -->
<div class="modal fade" id="modalNovoLead" tabindex="-1" aria-labelledby="modalNovoLeadLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-0 ">
                <div class="p-4 p-md-5">

                    <!-- Cabeçalho -->
                    <div class="d-flex align-items-center mb-2">
                        <span
                            class="d-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-circle me-3"
                            style="width:48px; height:48px; font-size:2rem;">
                            <i class="ri-user-add-line"></i>
                        </span>
                        <div>
                            <h4 class="fw-bold mb-0" id="modalNovoLeadLabel">Novo Lead</h4>
                            <small class="text-muted">Preencha as informações do novo lead. Campos marcados com <span
                                    class="text-danger">*</span> são obrigatórios.</small>
                        </div>
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"
                            aria-label="Fechar"></button>
                    </div>

                    <!-- Informações Básicas -->
                    <div class=" rounded-3 p-4 mb-4 shadow-none border-0" style="background:#f9fafb !important;">
                        <div class="fw-semibold text-secondary mb-3">Informações Básicas</div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold" for="leadNome">Nome Completo <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="leadNome"
                                placeholder="Nome do lead">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold" for="leadEmail">Email <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text "><i class="ri-mail-line"></i></span>
                                <input type="email" class="form-control form-control-lg" id="leadEmail"
                                    placeholder="email@exemplo.com">
                            </div>
                        </div>
                        <div>
                            <label class="form-label fw-semibold" for="leadTelefone">Telefone <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text "><i class="ri-phone-line"></i></span>
                                <input type="text" class="form-control form-control-lg" id="leadTelefone"
                                    placeholder="(00) 00000-0000">
                            </div>
                        </div>
                    </div>

                    <!-- Localização -->
                    <div class=" rounded-3 p-4 mb-3 shadow-none border-0" style="background:#f9fafb !important;">
                        <div class="fw-semibold text-secondary mb-3">Localização</div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold" for="leadCEP">CEP <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text "><i class="ri-map-pin-line"></i></span>
                                    <input type="text" class="form-control form-control-lg" id="leadCEP"
                                        placeholder="00000-000">
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <label class="form-label fw-semibold" for="leadLogradouro">Logradouro <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="leadLogradouro"
                                    placeholder="Rua, Avenida, etc">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold" for="leadNumero">Número <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="leadNumero"
                                    placeholder="Número">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold" for="leadComplemento">Complemento</label>
                                <input type="text" class="form-control form-control-lg" id="leadComplemento"
                                    placeholder="Apto, Sala, etc">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold" for="leadBairro">Bairro <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="leadBairro"
                                    placeholder="Bairro">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold" for="leadCidade">Cidade <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="leadCidade"
                                    placeholder="Cidade">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold" for="leadEstado">Estado <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="leadEstado"
                                    placeholder="Estado">
                            </div>
                            <div class="col-12 mb-0">
                                <label class="form-label fw-semibold" for="leadEmpresa">Empresa</label>
                                <div class="input-group">
                                    <span class="input-group-text "><i class="ri-building-line"></i></span>
                                    <input type="text" class="form-control form-control-lg" id="leadEmpresa"
                                        placeholder="Nome da empresa">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Informações Comerciais -->
                    <div class=" rounded-3 p-4 mb-3 shadow-none border-0" style="background:#f9fafb !important;">
                        <div class="fw-semibold text-secondary mb-3">Informações Comerciais</div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label fw-semibold" for="leadInteresse">Interesse <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text "><i class="ri-money-dollar-circle-line"></i></span>
                                    <select class="form-select form-select-lg" id="leadInteresse">
                                        <option value="">Selecione o interesse</option>
                                        <option>Box Pequeno</option>
                                        <option>Box Médio</option>
                                        <option>Box Grande</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label fw-semibold" for="leadOrigem">Origem <span
                                        class="text-danger">*</span></label>
                                <select class="form-select form-select-lg" id="leadOrigem">
                                    <option value="">Selecione a origem</option>
                                    <option>Site</option>
                                    <option>Indicação</option>
                                    <option>Email</option>
                                    <option>Ligação</option>
                                    <option>Instagram</option>
                                    <option>WhatsApp</option>
                                    <option>Outro</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label fw-semibold" for="leadStatus">Status <span
                                        class="text-danger">*</span></label>
                                <select class="form-select form-select-lg" id="leadStatus">
                                    <option value="">Selecione o status</option>
                                    <option>Novo</option>
                                    <option>Em Andamento</option>
                                    <option>Convertido</option>
                                    <option>Perdido</option>
                                </select>
                            </div>
                            <div class="col-12 mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="favoritarLead">
                                    <label class="form-check-label" for="favoritarLead">Favoritar Lead</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Observações -->
                    <div class=" rounded-3 p-4 mb-3 shadow-none border-0" style="background:#f9fafb !important;">
                        <div class="mb-2 fw-semibold text-secondary">Observações</div>
                        <textarea class="form-control" rows="3" placeholder="Observações sobre o lead"></textarea>
                    </div>

                    <!-- Botões -->
                    <div class="text-end mt-4">
                        <button type="button" class="btn btn-outline-secondary me-2"
                            data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary px-4">Salvar Lead</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>