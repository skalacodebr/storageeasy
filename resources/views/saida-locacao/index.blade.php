{{-- resources/views/leads.blade.php --}}
@include('layouts/head-main')

<head>
    <title>Saída de Locações | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')
    {{-- CSS específico desta página --}}

    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{ asset('assets/css/pages_new/saida-locacao.css') }}" rel="stylesheet" />
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
                            <h4>Saída de Locações</h4>
                            <p class="text-secondary">Gerencie o processo de saída de locações dos boxes</p>
                        </div>
                        <div class="col-md-8">
                            <ul class="locacao-stepper d-flex justify-content-md-end align-items-center mb-0">
                                <li class="active">
                                    <i class="ri-map-pin-line"></i>
                                    <span>Selecione o Box</span>
                                </li>
                                <li>
                                    <i class="ri-user-line"></i>
                                    <span>Dados do Cliente</span>
                                </li>
                                <li>
                                    <i class="ri-file-list-3-line"></i>
                                    <span>Documentos</span>
                                </li>
                                <li>
                                    <i class="ri-money-dollar-circle-line"></i>
                                    <span>Financeiro</span>
                                </li>
                                <li>
                                    <i class="ri-money-dollar-circle-line"></i>
                                    <span>Finalização</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div style="display:none">
                        @include('saida-locacao.include.tabela')
                    </div>
                    <div style="display:none">
                        @include('saida-locacao.include.dados-clientes')
                    </div>
                    <div style="display:none">
                        @include('saida-locacao.include.documentos')
                    </div>
                    <div style="display:none">
                        @include('saida-locacao.include.financeiro')
                    </div>
                    <div style="display:block">
                        @include('saida-locacao.include.finalizacao')
                    </div>
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
                            <button class="btn btn-primary btn-step-proximo px-4 py-2" style="display:block">
                                Próximo <i class="ri-arrow-right-line ms-2"></i>
                            </button>
                            <button class="btn btn-primary btn-step-proximo px-4 py-2" style="display:none">
                                Finalizar 
                            </button>
                        </div>
                    </div>
                </div>
            </div> {{-- /.page-content --}}
        </div> {{-- /.main-content --}}
    </div> {{-- /#layout-wrapper --}}



    @include('layouts/vendor-scripts')

    <script>
        $(function () {
            var $stepsContainer = $('.page-content .container-fluid').first();
            var $steps = $stepsContainer.children('div[style]').toArray();
            var totalSteps = $steps.length;
            var $stepperItems = $('.locacao-stepper li');
            var $btnPrev = $('.btn-step-anterior');
            var $btnNext = $('.btn-step-proximo').eq(0);
            var $btnFinish = $('.btn-step-proximo').eq(1);

            var current = 0;

            function showStep(index) {
                // mostra só o passo atual
                $steps.forEach(function (el, i) {
                    $(el)[i === index ? 'show' : 'hide']();
                });

                // marca todos os steps até o current
                $stepperItems.each(function (i) {
                    $(this).toggleClass('active', i <= index);
                });

                // controla botões
                $btnPrev.toggle(index > 0);
                if (index === totalSteps - 1) {
                    $btnNext.hide();
                    $btnFinish.show();
                } else {
                    $btnNext.show();
                    $btnFinish.hide();
                }
            }

            // inicializa
            $btnFinish.hide();
            showStep(current);

            $btnNext.on('click', function () {
                if (current < totalSteps - 1) {
                    current++;
                    showStep(current);
                }
            });
            $btnPrev.on('click', function () {
                if (current > 0) {
                    current--;
                    showStep(current);
                }
            });
            $btnFinish.on('click', function () {
                // ação de finalizar
                alert('Finalizando passo ' + (current + 1));
            });
        });
    </script>



</body>

</html>