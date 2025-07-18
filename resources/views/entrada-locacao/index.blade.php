{{-- resources/views/leads.blade.php --}}
@include('layouts/head-main')

<head>
    <title>Entrada de Locações | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')
    {{-- CSS específico desta página --}}

    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{ asset('assets/css/pages_new/entrada-locacao.css') }}" rel="stylesheet" />
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
                            <h4>Entrada de Locações</h4>
                            <p>Gerencie locações e cadastre novas</p>
                        </div>
                    </div>

                    @include('entrada-locacao.include.header-cards')


                    <div class="row my-4">
                        <div class="col-md-6">
                            <div class="input-group search-box-custom">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="ri-search-line"></i>
                                </span>
                                <input type="text" class="form-control border-start-0" placeholder="Buscar locações...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select category-select-custom">
                                <option selected>Todos os Status</option>
                                <option value="ativa">Ativa</option>
                                <option value="vencida">Vencida</option>
                                <option value="cancelada">Cancelada</option>
                            </select>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end align-items-center">
                            <button
                                class="btn btn-primary d-flex align-items-center gap-2 px-4 py-2 fw-semibold rounded-3"
                                data-bs-toggle="modal" data-bs-target="#modalNovaLocacao">
                                <i class="ri-add-line"></i>
                                Nova Locação
                            </button>
                        </div>
                    </div>

                    @include('entrada-locacao.include.tabela')


                </div>
            </div> {{-- /.page-content --}}
        </div> {{-- /.main-content --}}
    </div> {{-- /#layout-wrapper --}}

    @include('entrada-locacao.include.modal-nova-locacao')
    @include('entrada-locacao.include.modal-detalhes-locacao')
    @include('entrada-locacao.include.modal-editar-locacao')
    @include('entrada-locacao.include.modal-excluir-locacao')


    @include('layouts/vendor-scripts')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        $(document).ready(function () {
            $('.select2-novo-cliente, .select2-novo-box').select2({
                dropdownParent: $('#modalNovaLocacao')
            });
        });
    </script>
</body>

</html>