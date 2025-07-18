{{-- resources/views/leads.blade.php --}}
@include('layouts/head-main')

<head>
    <title>Relatórios | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')
    {{-- CSS específico desta página --}}

    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{ asset('assets/css/pages_new/relatorio.css') }}" rel="stylesheet" />
</head>

<body>
    @include('layouts/body')
    @include('layouts/menu')

    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    {{-- Título, subtítulo e stepper --}}
                    <div class="row mb-4 page-title align-items-center">
                        <div class="col-md-4">
                            <h4>Relatórios</h4>
                            <p class="text-secondary">Gere relatórios detalhados para análise do seu negócio</p>
                        </div>
                    </div>

                    <div class="row align-items-center g-2 filtro-custom-row mb-4">
                        <div class="col-lg">
                            <div class="input-group filtro-input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="ri-search-line"></i>
                                </span>
                                <input type="text" class="form-control border-start-0"
                                    placeholder="Buscar por nome ou descrição..." />
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="input-group filtro-input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="ri-calendar-line"></i>
                                </span>
                                <input type="date" class="form-control border-start-0" placeholder="Data Inicial" />
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="input-group filtro-input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="ri-calendar-line"></i>
                                </span>
                                <input type="date" class="form-control border-start-0" placeholder="Data Final" />
                            </div>
                        </div>
                    </div>


                    @include('relatorios/include/header-card')

                    @include('relatorios/include/tabela-recentes')

                    @include('relatorios/include/tabela-programados')

                </div>
            </div> {{-- /.page-content --}}
        </div> {{-- /.main-content --}}
    </div> {{-- /#layout-wrapper --}}



    @include('relatorios/include/modal-novo-relatorio')
    @include('relatorios/include/modal-editar-relatorio')
    @include('relatorios/include/modal-detalhes-relatorio')
    @include('relatorios/include/modal-ativo-desativo')


    @include('layouts/vendor-scripts')


</body>

</html>