@include('layouts/head-main')

<head>
    <title>Cadastro | Storage Fácil</title>
    @include('layouts/head')
    @include('layouts/head-style')

    <style>
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 2s ease-in-out;
        }

        #bg1 {
            background-image: url('/assets/images/storage-new-1.png');
            opacity: 1;
        }

        #bg2 {
            background-image: url('/assets/images/storage-new-2.png');
        }

        #bg3 {
            background-image: url('/assets/images/storage-new-3.png');
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.37);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.37);

            padding: 32px;

            text-align: center;
            width: 100%;
            max-width: 500px;

        }

        .logo {
            margin-bottom: 25px;
        }

        .logo img {
            width: 160px;
            height: auto;
        }

        h2 {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            color: #fff;
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px 12px 35px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            color: #333;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .form-group {
            position: relative;
        }

        .form-group i {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            font-size: 16px;
        }

        .password-container {
            position: relative;
            width: 100%;
        }

        .password-toggle {
            position: absolute;
            right: 45px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            display: flex;
            align-items: center;
            background: none;
            border: none;
            padding: 0;
        }

        .password-toggle i {
            font-size: 18px;
        }

        .form-control::placeholder {
            color: #666;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 1);
            border-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: #3B82F6;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            margin: 20px 0;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: #2563EB;
        }
    </style>
</head>

@include('layouts/body')

<div class="background-container">
    <div class="background-image" id="bg1"></div>
    <div class="background-image" id="bg2"></div>
    <div class="background-image" id="bg3"></div>
</div>

<div class="login-container">
    <div class="logo">
        <img src="{{ asset('assets/images/logo-storagefacil.png') }}" alt="Storage Fácil">
    </div>

    <h2>Cadastre-se</h2>
    <p class="subtitle">Digite suas credenciais para continuar</p>

    <form id="register-form" method="POST" action="{{ route('register.post') }}">
        @csrf

        <!-- Nome completo -->
        <div class="form-group">
            <i class="fas fa-user"></i>
            <input type="text" class="form-control" name="name" placeholder="Nome completo" required>
        </div>

        <!-- E-mail -->
        <div class="form-group">
            <i class="fas fa-envelope"></i>
            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
        </div>

        <!-- Telefone -->
        <div class="form-group">
            <i class="fas fa-phone"></i>
            <input type="tel" class="form-control" name="phone" placeholder="(11) 99999-9999" required>
        </div>

        <!-- Senha -->
        <div class="form-group">
            <div class="password-container">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" name="password" id="password" placeholder="Senha" required>
                <button type="button" class="password-toggle" onclick="togglePassword('password')">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <!-- Confirmação de senha -->
        <div class="form-group">
            <div class="password-container">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                    placeholder="Confirme sua senha" required>
                <button type="button" class="password-toggle" onclick="togglePassword('password_confirmation')">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <button type="submit" class="btn-login">Cadastrar</button>

        <p class="subtitle">
            Já tem uma conta?
            <a href="{{ route('login') }}" style="color: #fff; text-decoration: none;">Entrar</a>
        </p>
    </form>
</div>

@include('layouts/vendor-scripts')

<script>
    $(function () {
        $('#register-form').on('submit', function (e) {
            e.preventDefault();

            var $form = $(this),
                $button = $form.find('button[type="submit"]'),
                originalText = $button.html();

            // 1) Desabilita botão e mostra loader
            $button.prop('disabled', true)
                .html('<i class="fas fa-spinner fa-spin"></i> Salvando...');

            // 2) Remove erros antigos
            $form.find('.error-text').remove();

            // 3) Envia AJAX
            $.ajax({
                url: $form.attr('action'),
                method: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                success: function (res) {
                    // redireciona se sucesso
                    if (res.success) {
                        window.location.href = res.redirect;
                    }
                },
                error: function (xhr) {
                    var status = xhr.status,
                        resp = xhr.responseJSON;

                    // tratamento de 422 (validação) e 409 (e-mail duplicado)
                    if ((status === 422 || status === 409) && resp.errors) {
                        $.each(resp.errors, function (field, msgs) {
                            var $inp = $form.find('[name="' + field + '"]'),
                                $err = $('<div class="error-text text-danger small mt-1"></div>');
                            $err.text(msgs[0]);
                            $inp.after($err);
                        });
                    } else {
                        alert('Erro inesperado. Tente novamente.');
                    }

                    // 4) Reabilita botão e restaura texto
                    $button.prop('disabled', false).html(originalText);
                }
            });
        });
    });

    // Função de mostrar/ocultar senha
    function togglePassword(id) {
        var inp = document.getElementById(id);
        inp.type = inp.type === 'password' ? 'text' : 'password';
    }
</script>

<script>
    function togglePassword(inputId) {
        const passwordInput = document.getElementById(inputId);
        const toggleButton = passwordInput.nextElementSibling.querySelector('i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleButton.classList.remove('fa-eye');
            toggleButton.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleButton.classList.remove('fa-eye-slash');
            toggleButton.classList.add('fa-eye');
        }
    }

    // Máscara para o telefone
    document.querySelector('input[name="phone"]').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 11) value = value.slice(0, 11);

        if (value.length > 2) {
            value = '(' + value.slice(0, 2) + ') ' + value.slice(2);
        }
        if (value.length > 9) {
            value = value.slice(0, 10) + '-' + value.slice(10);
        }

        e.target.value = value;
    });

    // Animação de fundo
    let currentBg = 1;
    const totalBgs = 3;
    const transitionTime = 8000; // 8 segundos para cada imagem

    function changeBackground() {
        const currentElement = document.getElementById(`bg${currentBg}`);
        const nextBg = currentBg === totalBgs ? 1 : currentBg + 1;
        const nextElement = document.getElementById(`bg${nextBg}`);

        currentElement.style.opacity = '0';
        nextElement.style.opacity = '1';

        currentBg = nextBg;
    }

    setInterval(changeBackground, transitionTime);
</script>

</body>