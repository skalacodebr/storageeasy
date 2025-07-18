{{-- resources/views/leads.blade.php --}}
@include('layouts/head-main')

<head>
    <title>Leads | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')
    {{-- CSS específico desta página --}}

    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <link href="{{ asset('assets/css/pages_new/leads.css') }}" rel="stylesheet" />
</head>

<body>
    @include('layouts/body')
    @include('layouts/menu')

    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    {{-- Título e subtítulo --}}
                    <div class="row mb-3 page-title">
                        <div class="col-12">
                            <h4>Gestão de Relacionamento com Clientes</h4>
                            <p>Gerencie leads, atividades, campanhas e muito mais</p>
                        </div>
                    </div>
                     {{-- Navegação de abas + botão --}}
                    <div class="row mb-4 align-items-center">
                        <div class="col-auto pe-0">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link " href="{{ route('leads.index') }}">Leads</a></li>
                                <li class="nav-item"><a class="nav-link active" href="{{ route('leads.atividades') }}">Atividades</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('leads.calendario') }}">Calendário</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('leads.campanhas') }}">Campanhas</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('leads.dashboard') }}">Dashboard</a></li>
                            </ul>
                        </div>
                        <div class="col text-end">
                            <button type="button" class="btn btn-primary btn-novo-lead" data-bs-toggle="modal" data-bs-target="#modalNovaAtividade">+ Nova Atividade</button>
                        </div>
                    </div>


                    @include('leads.atividades.include.tabela')
                </div>
            </div>
        </div>
    </div>

    @include('leads.atividades.include.nova-atividade')
    @include('leads.atividades.include.detalhe-atividade')
    @include('leads.atividades.include.editar-atividade')
    @include('leads.atividades.include.excluir-atividade')

    @include('layouts/vendor-scripts')
</body>

</html>