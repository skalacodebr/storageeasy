{{-- resources/views/leads.blade.php --}}
@include('layouts/head-main')

<head>
    <title>Transferencia de Boxes | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')
    {{-- CSS específico desta página --}}

    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{ asset('assets/css/pages_new/transferencia-boxes.css') }}" rel="stylesheet" />
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
                            <h4>Transferência de Boxes</h4>
                            <p class="text-secondary">Gerencie a transferência de clientes entre boxes</p>
                        </div>
                    </div>
                </div>

                @include('transferencia-boxes/include/header-card')


                <!-- Passo 1 -->
                <div class="step-content" data-step="1">
                    @include('transferencia-boxes/include/tabela-clientes')
                </div>

                <!-- Passo 2 -->
                <div class="step-content d-none" data-step="2">
                    @include('transferencia-boxes/include/tabela-boxes')
                </div>

                <!-- Passo 3 -->
                <div class="step-content d-none" data-step="3">
                    @include('transferencia-boxes/include/verificar-valores')
                </div>

                <!-- Passo 4 -->
                <div class="step-content d-none" data-step="4">
                    @include('transferencia-boxes/include/detalhes-transferencia')
                </div>

                <!-- Passo 5 -->
                <div class="step-content d-none" data-step="5">
                    @include('transferencia-boxes/include/calculo-diferenca')
                </div>

                <!-- Passo 6 -->
                <div class="step-content d-none" data-step="6">
                    @include('transferencia-boxes/include/finalizacao')
                </div>


                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between mb-4 navegacao-passo-saida">
                        <div class="col-auto">
                            <button class="btn btn-light btn-step-anterior px-4 py-2">
                                <i class="ri-arrow-left-line me-2"></i> Anterior
                            </button>
                        </div>
                        <div class="col"></div>
                        <div class="col-auto">
                            <button class="btn btn-primary btn-step-proximo px-4 py-2">
                                Próximo <i class="ri-arrow-right-line ms-2"></i>
                            </button>
                            <button class="btn btn-success btn-step-finalizar px-4 py-2 d-none">
                                Finalizar <i class="ri-check-line ms-2"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div> {{-- /.page-content --}}
        </div> {{-- /.main-content --}}
    </div> {{-- /#layout-wrapper --}}

    @include('transferencia-boxes/include/modal-finalizado')



    @include('layouts/vendor-scripts')



    <script>
        $(function () {
            var maxStep = $('.step-item').length;      // total de passos (6)
            var current = 1;

            function updateWizard() {
                // 1) Mostrar só o conteúdo do passo atual
                $('.step-content').addClass('d-none');
                $('.step-content[data-step="' + current + '"]').removeClass('d-none');

                // 2) Atualizar o stepper
                // agora: ativa todos os steps até o atual
                $('.step-item').removeClass('active');
                $('.step-item').each(function (i) {
                    if (i < current) $(this).addClass('active');
                });

                // 3) Controlar botões Anterior / Próximo / Finalizar
                if (current === 1) {
                    $('.btn-step-anterior').hide();
                } else {
                    $('.btn-step-anterior').show();
                }

                if (current === maxStep) {
                    $('.btn-step-proximo').addClass('d-none');
                    $('.btn-step-finalizar').removeClass('d-none');
                } else {
                    $('.btn-step-proximo').removeClass('d-none');
                    $('.btn-step-finalizar').addClass('d-none');
                }
            }

            // inicializa
            updateWizard();

            // Avançar
            $('.btn-step-proximo').click(function (e) {
                e.preventDefault();
                if (current < maxStep) {
                    current++;
                    updateWizard();
                }
            });

            // Voltar
            $('.btn-step-anterior').click(function (e) {
                e.preventDefault();
                if (current > 1) {
                    current--;
                    updateWizard();
                }
            });

            // (opcional) Finalizar
            $('.btn-step-finalizar').click(function (e) {
                e.preventDefault();
                // aqui você pode submeter o form ou chamar um AJAX
                $('#modalTransferSuccess').modal('show');
            });
        });
    </script>


</body>

</html>