<div class="row g-3 mb-3">

    <!-- Box Selecionado -->
    <div class="col-lg-4">
        <div class="card border-0 box-saida-card h-100">
            <div class="card-body pb-0">
                <div class="d-flex align-items-center mb-3 gap-2">
                    <i class="ri-database-2-line text-primary" style="font-size: 1.5rem;"></i>
                    <span class="fw-semibold">Box Selecionado</span>
                </div>
                <div class="bg-white rounded-3 p-3 mb-2 border box-saida-box-detalhes">
                    <h2 class="text-primary fw-bold mb-1">A101</h2>
                    <div class="mb-2 text-muted"><i class="ri-map-pin-line"></i> Setor A - Térreo</div>
                    <div class="row mb-3">
                        <div class="col">
                            <div style="font-size: .95rem;">Área:</div>
                            <div class="fw-semibold">6.25 m²</div>
                        </div>
                        <div class="col">
                            <div style="font-size: .95rem;">Volume:</div>
                            <div class="fw-semibold">15.63 m³</div>
                        </div>
                    </div>
                    <div class="fw-semibold text-success" style="font-size: 1.3rem;">R$ 375.00</div>
                    <div class="text-muted" style="font-size: .9rem;">Valor Mensal</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cliente -->
    <div class="col-lg-4">
        <div class="card border-0 box-saida-card h-100">
            <div class="card-body pb-0">
                <div class="d-flex align-items-center mb-3 gap-2">
                    <i class="ri-user-3-line text-primary" style="font-size: 1.5rem;"></i>
                    <span class="fw-semibold">Cliente</span>
                </div>
                <div class="bg-white rounded-3 p-3 border d-flex align-items-center gap-3 box-saida-cliente">
                    <span class="avatar-soft-blue fs-5 fw-semibold d-flex align-items-center justify-content-center"
                        style="width:46px; height:46px; border-radius: 50%; background: #e8f1fe;">JS</span>
                    <div>
                        <div class="fw-semibold mb-0">João Silva</div>
                        <div class="text-muted mb-1" style="font-size: .95rem;">123.456.789-00</div>
                        <div class="d-flex align-items-center gap-2 small text-muted">
                            <span><i class="ri-mail-line"></i> joao.silva@email.com</span>
                            <span><i class="ri-phone-line"></i> (11) 98765-4321</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data de Saída -->
    <div class="col-lg-4">
        <div class="card border-0 box-saida-card h-100">
            <div class="card-body pb-0">
                <div class="d-flex align-items-center mb-3 gap-2">
                    <i class="ri-calendar-check-line text-primary" style="font-size: 1.5rem;"></i>
                    <span class="fw-semibold">Data de Saída</span>
                </div>
                <div class="bg-white rounded-3 p-3 border box-saida-data">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Data de Saída</label>
                        <input type="date" class="form-control" value="2025-06-09">
                    </div>
                    <div>
                        <label class="form-label fw-semibold">Motivo da Saída</label>
                        <select class="form-select">
                            <option selected>Selecione o motivo</option>
                            <option>Fim de contrato</option>
                            <option>Mudança</option>
                            <option>Insatisfação</option>
                            <option>Outros</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Condições do Box -->
<div class="card border-0 box-saida-card mb-3">
    <div class="card-body">
        <div class="fw-semibold mb-2">Condições do Box</div>
        <div class="text-muted mb-3" style="font-size: .97rem;">
            Avalie as condições do box na saída
        </div>
        <div class="mb-3">
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="condicao_box" id="condicao_exce" value="excelente">
                <label class="form-check-label" for="condicao_exce">
                    <span class="fw-semibold">Excelente</span>
                    <div class="text-muted" style="font-weight: 400; font-size:.96rem;">
                        Box em perfeitas condições, sem nenhum dano ou sujeira.
                    </div>
                </label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="condicao_box" id="condicao_bom" value="bom" checked>
                <label class="form-check-label" for="condicao_bom">
                    <span class="fw-semibold">Bom</span>
                    <div class="text-muted" style="font-weight: 400; font-size:.96rem;">
                        Box em boas condições, com desgaste normal pelo uso.
                    </div>
                </label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="condicao_box" id="condicao_regular" value="regular">
                <label class="form-check-label" for="condicao_regular">
                    <span class="fw-semibold">Regular</span>
                    <div class="text-muted" style="font-weight: 400; font-size:.96rem;">
                        Box com alguns danos menores que precisam de atenção.
                    </div>
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="condicao_box" id="condicao_ruim" value="ruim">
                <label class="form-check-label" for="condicao_ruim">
                    <span class="fw-semibold">Ruim</span>
                    <div class="text-muted" style="font-weight: 400; font-size:.96rem;">
                        Box com danos significativos que precisam de reparos.
                    </div>
                </label>
            </div>
        </div>
        <div>
            <label class="form-label fw-semibold">Observações Adicionais</label>
            <textarea class="form-control" rows="3"
                placeholder="Descreva detalhes sobre a condição do box, danos encontrados, etc."></textarea>
        </div>
    </div>
</div>