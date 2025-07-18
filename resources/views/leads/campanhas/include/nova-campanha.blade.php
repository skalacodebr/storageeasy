<!-- Modal Criar Nova Campanha -->
<div class="modal fade" id="modalNovaCampanha" tabindex="-1" aria-labelledby="modalNovaCampanhaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content p-2 px-md-3 py-md-2" style="border-radius: 18px; max-width:540px; margin:auto;">
      <div class="modal-header border-0 pb-0">
        <div>
          <h5 class="modal-title fw-bold" id="modalNovaCampanhaLabel">Criar Nova Campanha</h5>
          <div class="text-muted" style="font-size:15px;">
            Configure uma nova campanha de marketing.
          </div>
        </div>
        <button type="button" class="btn-close ms-2" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body pt-2">
        <form>
          <!-- Nome da Campanha -->
          <div class="mb-3">
            <label for="campanhaNome" class="form-label mb-1">Nome da Campanha *</label>
            <input type="text" class="form-control" id="campanhaNome" placeholder="Ex: Black Friday 2024" required>
          </div>
          <!-- Descrição -->
          <div class="mb-3">
            <label for="campanhaDescricao" class="form-label mb-1">Descrição *</label>
            <textarea class="form-control" id="campanhaDescricao" placeholder="Descreva a campanha" rows="2" required></textarea>
          </div>
          <!-- Data e Método de Envio (lado a lado) -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="campanhaData" class="form-label mb-1">Data de Envio *</label>
              <div class="input-group">
                <input type="text" class="form-control" id="campanhaData" placeholder="dd/mm/aaaa" required>
                <span class="input-group-text bg-white"><i class="ri-calendar-line"></i></span>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="campanhaMetodo" class="form-label mb-1">Método de Envio *</label>
              <select class="form-select" id="campanhaMetodo" required>
                <option value="" selected>Selecione o método</option>
                <option value="email">Email</option>
                <option value="whatsapp">WhatsApp</option>
                <option value="ambos">Email e WhatsApp</option>
              </select>
            </div>
          </div>
          <!-- Público-Alvo -->
          <div class="mb-3">
            <label for="campanhaPublico" class="form-label mb-1">Público-Alvo *</label>
            <select class="form-select" id="campanhaPublico" required>
              <option value="" selected>Selecione o público</option>
              <option value="todos">Todos os Clientes</option>
              <option value="ativos">Clientes Ativos</option>
              <option value="inativos">Clientes Inativos</option>
            </select>
          </div>
          <!-- Editor de Conteúdo -->
          <div class="mb-1">
            <label for="campanhaConteudo" class="form-label mb-1">Conteúdo da Campanha</label>
            <textarea class="form-control" id="campanhaConteudo" rows="2" placeholder="O editor de conteúdo será implementado aqui." readonly style="background:#f6fafd; color:#89a; font-size:15px;"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer border-0 pt-0 pb-3">
        <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-dark px-4 fw-semibold">Criar Campanha</button>
      </div>
    </div>
  </div>
</div>
