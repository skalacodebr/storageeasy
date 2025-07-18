@include('layouts/head-main')

<head>
    <title>Produtos | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')

    <link href="{{ asset('assets/css/pages_new/produtos.css') }}" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



</head>

<body>
    @include('layouts/body')
    @include('layouts/menu')

    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    {{-- Título e subtítulo --}}
                    <div class="row mb-3 page-title mb-5">
                        <div class="col-md-8">
                            <h4>Gerenciamento de Produtos</h4>
                            <p>Gerencie seu inventário, registre vendas e acompanhe o estoque</p>
                        </div>
                        <div class="col-md-4 d-flex justify-content-end align-items-center  ">
                            <button
                                class="btn btn-primary d-flex align-items-center gap-2 px-4 py-2 fw-semibold rounded-3"
                                data-bs-toggle="modal" data-bs-target="#modalNovoProduto">
                                <i class="ri-add-line" style="font-size: 1.1rem;"></i>
                                Novo Produto
                            </button>
                        </div>
                    </div>

                    @include('produtos.include.header-cards')

                    <div class="row my-4">
                        <div class="col-md-6">
                            <div class="input-group search-box-custom">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="ri-search-line"></i>
                                </span>
                                <input type="text" class="form-control border-start-0" placeholder="Buscar produtos...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select category-select-custom">
                                <option selected>Todas as categorias</option>
                                <option>Categoria 1</option>
                                <option>Categoria 2</option>
                                <option>Categoria 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end align-items-center">
                            <div class="nav-switch-custom">
                                <button class="switch-tab active">Lista</button>
                                <button class="switch-tab">Cards</button>
                                <button class="switch-tab">Vendas</button>
                            </div>

                        </div>
                    </div>

                    <div style="display: block;">
                        @include('produtos.include.tabela')
                    </div>
                    <div style="display: none;">
                        @include('produtos.include.cards')
                    </div>
                    <div style="display: none;">
                        @include('produtos.include.vendas')
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('produtos.include.modal-detalhes')
    @include('produtos.include.modal-registrar-venda')
    @include('produtos.include.modal-movimentar-estoque')
    @include('produtos.include.novo-produto')
    @include('produtos.include.modal-editar-produto')
    @include('produtos.include.modal-excluir-produto')

    @include('layouts/vendor-scripts')

    <!-- Antes do </body> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>



        $(document).ready(function () {
            $('.js-select2-clientes').select2({
                dropdownParent: $('#modalRegistrarVenda'), // Para funcionar dentro do modal!
                placeholder: "Selecione o cliente...",
                width: '100%'
            });

            $('#inputImagemProduto').on('change', function () {
                const file = this.files[0];
                const $preview = $('#previewImagemProduto');

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        $preview.attr('src', e.target.result);
                    };
                    reader.readAsDataURL(file);
                } else {
                    $preview.attr('src', 'https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg');
                }
            });
        });

    </script>

    <!-- Supondo que o jQuery já foi importado antes deste trecho -->
    <script>
        $(function () {
            // 1. Captura todos os botões de switch dentro da nav
            var $tabs = $('.nav-switch-custom .switch-tab');

            $tabs.on('click', function () {
                // 2. Remove a classe 'active' de todos e adiciona ao clicado
                $tabs.removeClass('active');
                $(this).addClass('active');

                // 3. Descobre o índice do botão clicado dentro do conjunto
                var index = $tabs.index(this);

                // 4. Encontra a <div class="row"> que contém os botões
                var $navRow = $('.nav-switch-custom').closest('.row');

                // 5. Pega todas as <div> logo após essa row, oculta todas
                $navRow.nextAll('div').hide()
                    // e exibe apenas a que tem o mesmo índice do botão
                    .eq(index).show();
            });
        });
    </script>


</body>

</html>