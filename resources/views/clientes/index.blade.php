@include('layouts/head-main')

<head>
    <title>Clientes | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')

    <link href="{{ asset('assets/css/pages_new/clientes.css') }}" rel="stylesheet" type="text/css" />

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
                            <h4>Clientes</h4>
                            <p>Gerencie contratos e informações dos clientes</p>
                        </div>
                    </div>

                    @include('clientes.include.header-cards')

                    <div class="row mt-5 mb-3">
                        <div class="col-md-6 d-flex align-items-center gap-2">
                            <div class="input-group search-box-custom">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="ri-search-line"></i>
                                </span>
                                <input type="text" class="form-control border-start-0" placeholder="Buscar produtos...">
                            </div>

                            <select class="form-select">
                                <option selected>Todos os status</option>
                                <option>Ativo</option>
                                <option>Inativo</option>
                                <option>Suspenso</option>
                            </select>

                            <select class="form-select">
                                <option selected>Todos</option>
                                <option>Em dia</option>
                                <option>Atrasado</option>
                                <option>Pendente</option>
                            </select>
                        </div>
                    </div>

                    @include('clientes.include.tabela')

                </div>
            </div>
        </div>
    </div>
    </div>


    @include('layouts/vendor-scripts')


</body>

</html>