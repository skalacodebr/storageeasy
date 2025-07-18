@include('layouts/head-main')

<head>
    <title>Boxes | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')

    <link href="{{ asset('assets/css/pages_new/boxes.css') }}" rel="stylesheet" type="text/css" />

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
                        <div class="col-12">
                            <h4>Boxes</h4>
                            <p>Gerencie as reservas de boxes para seus clientes</p>
                        </div>
                    </div>

                    @include('boxes.include.header-cards')

                    <div class="row">
                        <div class="col-12">
                            <div class="filter-bar-boxes p-3">
                                <div class="row g-2 align-items-center">
                                    <!-- Campo de busca -->
                                    <div class="col">
                                        <div class="input-icon-group">
                                            <span class="input-icon"><i class="ri-search-line"></i></span>
                                            <input type="text" class="form-control filter-search-input"
                                                placeholder="Pesquisar boxes por código...">
                                        </div>
                                    </div>

                                    <!-- Select Localizações -->
                                    <div class="col-auto">
                                        <div class="input-icon-group">
                                            <span class="input-icon"><i class="ri-map-pin-line"></i></span>
                                            <select class="form-select filter-select">
                                                <option>Todas as localizações</option>
                                                <option>Unidade Centro</option>
                                                <option>Unidade Norte</option>
                                                <option>Unidade Sul</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Select Tamanhos -->
                                    <div class="col-auto">
                                        <div class="input-icon-group">
                                            <span class="input-icon"><i class="ri-building-4-line"></i></span>
                                            <select class="form-select filter-select">
                                                <option>Todos os tamanhos</option>
                                                <option>Pequeno</option>
                                                <option>Médio</option>
                                                <option>Grande</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Botão Limpar Filtros -->
                                    <div class="col-auto">
                                        <button class="btn btn-light btn-clean-filters">
                                            <i class="ri-filter-line me-1"></i>
                                            Limpar Filtros
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-tabs-container">
                        <div class="box-tabs-row">
                            <button class="tab-boxes disponiveis active">Boxes Disponíveis</button>
                            <button class="tab-boxes reservados">Boxes Reservados</button>
                        </div>
                    </div>

                    <div style="display: block;">
                        @include('boxes.include.tabela-disponiveis')
                    </div>

                    <div style="display: none;">
                        @include('boxes.include.tabela-reservados')
                    </div>


                </div>
            </div>
        </div>
    </div>

    @include('boxes.include.modal-detalhes')
    @include('boxes.include.modal-detalhes-reservado')
    @include('boxes.include.modal-reservado')

    @include('layouts/vendor-scripts')

    <!-- Antes do </body> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <!-- Certifique-se de que o jQuery esteja carregado antes deste script -->
    <script>
        $(document).ready(function () {
            // 1. Seleciona o container das abas
            var $tabsContainer = $('.box-tabs-container');
            // 2. Seleciona todos os botões de aba dentro do container
            var $tabs = $tabsContainer.find('.tab-boxes');
            // 3. Seleciona os dois divs de conteúdo que vêm logo após o container (tabela-disponiveis e tabela-reservados)
            var $contents = $tabsContainer.nextAll('div').slice(0, 2);

            // 4. Adiciona o evento de clique em cada aba
            $tabs.on('click', function () {
                // Índice da aba clicada (0 = primeira, 1 = segunda)
                var idx = $tabs.index(this);

                // 5. Remove a classe active de todas as abas e adiciona na clicada
                $tabs.removeClass('active');
                $(this).addClass('active');

                // 6. Esconde todos os conteúdos e exibe apenas o correspondente ao índice
                $contents.hide().eq(idx).show();
            });
        });

        $(document).ready(function () {
            $('#selectCliente').select2({
                theme: 'bootstrap4', // Usa tema bootstrap
                placeholder: "Digite para pesquisar...",
                allowClear: true,
                width: 'resolve'
            });
        });
    </script>


</body>

</html>