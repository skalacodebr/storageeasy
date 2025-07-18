<!-- Modal Novo Produto -->
<div class="modal fade" id="modalEditarProduto" tabindex="-1" aria-labelledby="modalEditarProdutoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <form>
                    <!-- Cabeçalho -->
                    <div class="modal-novo-produto-header border-bottom">
                        <div class="d-flex align-items-center mb-2">
                            <i class="ri-box-3-line text-primary me-2" style="font-size: 1.5rem;"></i>
                            <div>
                                <h4 class="fw-bold mb-0" id="modalEditarProdutoLabel">Editar Produto</h4>
                                <small class="text-muted">Preencha os dados para editar o produto.</small>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 pb-0">
                        <div class="row g-3">
                            <div class="col-md-12 mb-3">
                                <label class="form-label fw-semibold">Imagem do Produto</label>
                                <div class="modal-novo-produto-img-upload ">
                                    

                                    <div class="d-flex align-items-center gap-2 justify-content-center">
                                        <img id="previewImagemProduto" src="https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg"
                                        alt="Preview" class="modal-novo-produto-img-preview mb-2" style="width: 120px; height: 120px;object-fit: cover;">
                                    </div>
                                    <!-- Input sem onchange inline, mas com ID -->
                                    <input id="inputImagemProduto" type="file"
                                        class="form-control modal-novo-produto-img-input" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Código</label>
                                <input type="text" class="form-control" placeholder="Ex: CAD001" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Categoria</label>
                                <select class="form-select" required>
                                    <option selected disabled>Selecione uma categoria</option>
                                    <!-- <option>Segurança</option> etc -->
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Nome do Produto</label>
                                <input type="text" class="form-control" placeholder="Nome do produto" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Descrição</label>
                                <textarea class="form-control" rows="2"
                                    placeholder="Descrição detalhada do produto"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Preço (R$)</label>
                                <input type="number" min="0" step="0.01" class="form-control" value="0,00" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Fornecedor</label>
                                <input type="text" class="form-control" placeholder="Nome do fornecedor">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Estoque Inicial</label>
                                <input type="number" min="0" step="1" class="form-control"
                                    placeholder="Quantidade em estoque" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Estoque Mínimo</label>
                                <input type="number" min="0" step="1" class="form-control"
                                    placeholder="Quantidade mínima">
                            </div>
                        </div>
                    </div>

                    <!-- Rodapé -->
                    <div class="modal-novo-produto-footer">
                        <button type="button" class="btn btn-outline-secondary rounded-3 px-4" data-bs-dismiss="modal">
                            <i class="ri-close-line"></i> Cancelar
                        </button>
                        <button type="submit" class="btn btn-primary rounded-3 px-4 fw-semibold">
                            <i class="ri-save-3-line"></i> Salvar Produto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>