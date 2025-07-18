@include('layouts/head-main')

<head>
    <title>Unidades | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')

    <link href="{{ asset('assets/css/pages_new/unidades.css') }}" rel="stylesheet" type="text/css" />

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
                            <h4>Unidades</h4>
                            <p>Gerencie suas unidades de armazenamento</p>
                        </div>
                    </div>

                    @include('unidades.include.header-cards')

                    <div class="row mt-5 mb-3">
                        <div class="col-md-6">
                            <div class="input-group search-box-custom">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="ri-search-line"></i>
                                </span>
                                <input type="text" class="form-control border-start-0" placeholder="Buscar produtos...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Todos os status</option>
                                <option>Disponível</option>
                                <option>Ocupado</option>
                                <option>Reservado</option>
                            </select>
                        </div>

                        <div class="col-md-3 d-flex justify-content-end align-items-center">
                            <button class="btn btn-success d-flex align-items-center gap-2 px-4 py-2 fw-semibold rounded-3" data-bs-toggle="modal" data-bs-target="#modalNovaUnidade">
                                <i class="ri-add-line" style="font-size: 1.1rem;"></i>
                                Nova Unidade
                            </button>
                        </div>
                    </div>

                    @include('unidades.include.tabela')


                </div>
            </div>
        </div>
    </div>

    @include('unidades.include.modal-nova-unidade')
    @include('unidades.include.modal-detalhes')
    @include('unidades.include.modal-edite')
    @include('unidades.include.modal-excluir')

    @include('layouts/vendor-scripts')

    <!-- Antes do </body> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>




</body>

</html>