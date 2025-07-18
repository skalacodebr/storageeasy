@include('layouts/head-main')

<head>
    <title>Contas a Pagar | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')

    <link href="{{ asset('assets/css/pages_new/contas-pagar.css') }}" rel="stylesheet" type="text/css" />

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
                            <h4>Contas a Pagar</h4>
                            <p>Gerencie todas as despesas e contas a pagar</p>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-9">
                            <div class="date-nav d-flex justify-content-start align-items-center">
                                <div style="background-color: #ececec;border-color: #f6f6f6;">
                                    <button type="button" class="btn btn-light date-nav-prev me-2">
                                        <i class="ri-arrow-left-s-line"></i>
                                    </button>
                                    <span class="h5 mb-0 date-nav-display"></span>
                                    <button type="button" class="btn btn-light date-nav-next ms-2">
                                        <i class="ri-arrow-right-s-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex justify-content-end align-items-center">
                            <button
                                class="btn btn-primary d-flex align-items-center gap-2 px-4 py-2 fw-semibold rounded-3" data-bs-toggle="modal" data-bs-target="#modalNovaDespesa">
                                <i class="ri-add-line" style="font-size: 1.1rem;"></i>
                                Nova Conta
                            </button>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-md-12 d-flex align-items-center gap-2">

                            <div class="d-flex flex-column w-100">
                                <label for="" class="form-label">Categorias</label>
                                <select class="form-select">
                                    <option selected>Todas as categorias</option>
                                    <option>Aluguel</option>
                                    <option>Energia</option>
                                    <option>Água</option>
                                    <option>Internet</option>
                                    <option>Manutenção</option>
                                    <option>Salários</option>
                                    <option>Impostos</option>
                                    <option>Outros</option>
                                </select>
                            </div>


                            <div class="d-flex flex-column w-100">
                                <label for="" class="form-label">Status</label>
                                <select class="form-select">
                                    <option selected>Todos os status</option>
                                    <option>Pago</option>
                                    <option>Pendente</option>
                                    <option>Atrasado</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    @include('contas-pagar.include.header-cards')

                    @include('contas-pagar.include.tabela')

                </div>
            </div>
        </div>
    </div>

    @include('contas-pagar.include.modal-nova-despesa')
    @include('contas-pagar.include.modal-editar-despesa')
    @include('contas-pagar.include.modal-excluir-despesa')
    @include('contas-pagar.include.modal-detalhes-despesa')


    @include('layouts/vendor-scripts')

    <script>
        $(function () {
            // 1. Array de meses em MAIÚSCULAS
            const meses = [
                "JANEIRO", "FEVEREIRO", "MARÇO", "ABRIL",
                "MAIO", "JUNHO", "JULHO", "AGOSTO",
                "SETEMBRO", "OUTUBRO", "NOVEMBRO", "DEZEMBRO"
            ];

            // 2. Inicializa com data atual
            let mesAtual = new Date().getMonth();
            let anoAtual = new Date().getFullYear();

            // 3. Função que atualiza o texto de exibição
            function atualizarDisplay() {
                $('.date-nav-display')
                    .text(meses[mesAtual] + ' ' + anoAtual);
            }

            // 4. Exibe inicialmente
            atualizarDisplay();

            // 5. Clique “anterior”
            $('.date-nav-prev').on('click', function () {
                mesAtual--;
                if (mesAtual < 0) {
                    mesAtual = 11;
                    anoAtual--;
                }
                atualizarDisplay();
            });

            // 6. Clique “próximo”
            $('.date-nav-next').on('click', function () {
                mesAtual++;
                if (mesAtual > 11) {
                    mesAtual = 0;
                    anoAtual++;
                }
                atualizarDisplay();
            });
        });
    </script>

</body>

</html>