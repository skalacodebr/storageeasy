{{-- resources/views/perfil.blade.php --}}
@include('layouts/head-main')

<head>
    <title>Meu Perfil | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <style>
        body {
            background: #f6f8fa;
        }

        .perfil-card {
            background: #fff;
            border-radius: 18px !important;
            min-height: 280px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .perfil-avatar {
            width: 92px;
            height: 92px;
            background: #f1f2f4;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
        }

        .perfil-tabs {
            gap: 1rem;
            border-bottom: 1.7px solid #f2f4f6;
            padding-bottom: 0.4rem;
            padding-left: 0.8rem;
        }

        .perfil-tab {
            background: #fff;
            border-radius: 10px 10px 0 0;
            border: none;
            box-shadow: none;
            color: #9da6af;
            font-weight: 600;
            font-size: 1.04rem;
            padding: 7px 19px 6px 19px;
            transition: color .2s, background .2s;
        }

        .perfil-tab.active,
        .perfil-tab:hover {
            background: #f6f8fa;
            color: #232b36;
            border-bottom: 2.5px solid #25cb6c;
        }

        .perfil-abas {
            border-radius: 18px !important;
            background: #fff;
            min-height: 410px;
        }

        .perfil-input {
            border-radius: 10px;
            font-size: 1.07rem;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .perfil-btn-dark {
            background: #131e2e !important;
            border-radius: 10px !important;
            font-weight: 500;
            color: #fff !important;
            border: none !important;
            transition: background 0.15s;
        }

        .perfil-btn-dark:hover {
            background: #1c2940 !important;
        }

        @media (max-width: 991px) {
            .perfil-card {
                margin-bottom: 18px;
            }
        }

        @media (max-width: 600px) {
            .perfil-abas {
                padding-left: 0.4rem;
                padding-right: 0.4rem;
                border-radius: 10px !important;
            }
        }
    </style>

</head>

<body>
    @include('layouts/body')
    @include('layouts/menu')

    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- Título -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h2 class="fw-bold mb-1" style="font-size:1.6rem;">Meu Perfil</h2>
                            <div class="text-secondary" style="font-size:1.2rem;">
                                Gerencie suas informações pessoais e configurações de segurança
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <!-- Card do Perfil à esquerda -->
                        <div class="col-md-4 col-lg-3">
                            <div class="card perfil-card rounded-4 shadow-sm py-4 px-2 text-center border-0">
                                <div class="perfil-avatar rounded-circle mx-auto mb-3">
                                    <i class="ri-user-3-fill text-secondary"
                                        style="font-size: 3.2rem; opacity:0.18;"></i>
                                </div>
                                <div class="fw-bold perfil-nome" style="font-size:1.5rem;">Administrador</div>
                                <div class="text-secondary perfil-cargo" style="font-size:1.1rem;">Administrador</div>
                            </div>
                        </div>

                        <!-- Aba de Conteúdo (Direita) -->
                        <div class="col-md-8 col-lg-9">
                            <div class="perfil-abas bg-white rounded-4 shadow-sm px-0 py-0">
                                <!-- Tabs -->
                                <div class="perfil-tabs d-flex gap-2 pt-4 ps-4">
                                    <button class="btn perfil-tab active" type="button"
                                        onclick="perfilTab('dados')">Informações Pessoais</button>
                                    <button class="btn perfil-tab" type="button"
                                        onclick="perfilTab('seguranca')">Segurança</button>
                                </div>

                                <!-- Conteúdo das Abas -->
                                <div class="p-4">
                                    <!-- Aba: Informações Pessoais -->
                                    <div id="perfil-aba-dados">
                                        <h4 class="fw-bold mb-1">Informações Pessoais</h4>
                                        <div class="text-secondary mb-4" style="font-size:1.07rem;">
                                            Edite suas informações pessoais abaixo.
                                        </div>
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label class="form-label mb-1">Nome Completo</label>
                                                    <input type="text" class="form-control perfil-input"
                                                        value="Administrador">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label mb-1">Email</label>
                                                    <input type="email" class="form-control perfil-input"
                                                        value="admin@storagefacil.com.br">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label mb-1">Telefone</label>
                                                    <input type="text" class="form-control perfil-input"
                                                        value="(11) 99999-9999">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label mb-1">Cargo</label>
                                                    <input type="text" class="form-control perfil-input"
                                                        value="Administrador">
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label mb-1">Departamento</label>
                                                    <input type="text" class="form-control perfil-input" value="Gestão">
                                                </div>
                                            </div>
                                            <div class="mt-4 d-flex justify-content-end gap-2">
                                                <button class="btn btn-outline-secondary px-4"
                                                    type="button">Cancelar</button>
                                                <button class="btn perfil-btn-dark px-4" type="submit">Salvar
                                                    Alterações</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Aba: Segurança (escondida por padrão) -->
                                    <div id="perfil-aba-seguranca" style="display:none;">
                                        <h4 class="fw-bold mb-1">Segurança</h4>
                                        <div class="text-secondary mb-3" style="font-size:1.07rem;">
                                            Altere sua senha de acesso.
                                        </div>
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label class="form-label mb-1">Senha Atual</label>
                                                    <input type="password" class="form-control perfil-input"
                                                        autocomplete="current-password">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label mb-1">Nova Senha</label>
                                                    <input type="password" class="form-control perfil-input"
                                                        autocomplete="new-password">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label mb-1">Confirmar Nova Senha</label>
                                                    <input type="password" class="form-control perfil-input"
                                                        autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="mt-4 d-flex justify-content-end gap-2">
                                                <button class="btn btn-outline-secondary px-4"
                                                    type="button">Cancelar</button>
                                                <button class="btn perfil-btn-dark px-4" type="submit">Salvar Nova
                                                    Senha</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- ./p-4 -->
                            </div>
                        </div>
                    </div><!-- ./row g-4 -->

                </div>
            </div> {{-- /.page-content --}}
        </div> {{-- /.main-content --}}
    </div> {{-- /#layout-wrapper --}}

    @include('layouts/vendor-scripts')

    <script>
        // Alternância das Abas
        function perfilTab(tab) {
            document.querySelectorAll('.perfil-tab').forEach((b, i) => b.classList.toggle('active', i === (tab === 'dados' ? 0 : 1)));
            document.getElementById('perfil-aba-dados').style.display = (tab === 'dados') ? 'block' : 'none';
            document.getElementById('perfil-aba-seguranca').style.display = (tab === 'seguranca') ? 'block' : 'none';
        }
    </script>
</body>

</html>