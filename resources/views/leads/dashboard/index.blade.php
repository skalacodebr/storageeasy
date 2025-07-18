{{-- resources/views/leads.blade.php --}}
@include('layouts/head-main')

<head>
    <title>Campanhas | Storage Easy</title>
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
                                <li class="nav-item"><a class="nav-link " href="{{ route('leads.index') }}">Leads</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('leads.atividades') }}">Atividades</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('leads.calendario') }}">Calendário</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('leads.campanhas') }}">Campanhas</a></li>
                                <li class="nav-item"><a class="nav-link active"
                                        href="{{ route('leads.dashboard') }}">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            @include('leads.dashboard.include.cards')
                        </div>
                    </div>

                    <div class="row g-4 mb-4">
                        <div class="col-md-12">
                            @include('leads.dashboard.include.graficos')
                        </div>
                    </div>

                    <div class="row g-4 mb-4">
                        <div class="col-md-12">
                            @include('leads.dashboard.include.atividades')
                        </div>
                    </div>

                    <div class="row g-4 mb-4">
                        <div class="col-md-12">
                            @include('leads.dashboard.include.performance')
                        </div>
                    </div>

                    

                

                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')
</body>

</html>