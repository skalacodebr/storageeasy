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
                                <li class="nav-item"><a class="nav-link active" href="{{ route('leads.index') }}">Leads</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('leads.atividades') }}">Atividades</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('leads.calendario') }}">Calendário</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('leads.campanhas') }}">Campanhas</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('leads.dashboard') }}">Dashboard</a></li>
                            </ul>
                        </div>
                        <div class="col text-end">
                            <button type="button" class="btn btn-primary btn-novo-lead" data-bs-toggle="modal" data-bs-target="#modalNovoLead">+ Novo Lead</button>
                        </div>
                    </div>

                    @include('leads.leads.include.cards')

                    {{-- Filtro e busca --}}
                    <div class="row mt-4">
                        <div class="col-md-3 mb-2">
                            <input type="text" class="form-control" placeholder="Buscar leads...">
                        </div>
                        <div class="col-md-2 mb-2">
                            <select class="form-select select-status-custom">
                            <option value="">Todos os Status</option>
                            <option value="novo">Novo</option>
                            <option value="andamento">Em Andamento</option>
                            <option value="convertido">Convertido</option>
                            <option value="perdido">Perdido</option>
                            </select>
                        </div>
                    </div>


                    @include('leads.leads.include.tabela')

                </div>
            </div> {{-- /.page-content --}}
        </div> {{-- /.main-content --}}
    </div> {{-- /#layout-wrapper --}}


 

@include('leads.leads.include.modal-create')
@include('leads.leads.include.modal-detalhes')
@include('leads.leads.include.modal-edit')
@include('leads.leads.include.modal-atividade')
@include('leads.leads.include.modal-orcamento')
@include('leads.leads.include.modal-excluir')

    @include('layouts/vendor-scripts')
</body>

</html>