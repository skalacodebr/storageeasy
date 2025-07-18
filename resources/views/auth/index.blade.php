@include('layouts/head-main')

<head>
    <title>Login | Storage Fácil</title>
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
            padding: 12px 15px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            color: #333;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
            box-sizing: border-box;
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

        .checkbox-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0;
            color: #fff;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }

        .forgot-password {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password:hover {
            color: #fff;
        }

        input[type="checkbox"] {
            accent-color: #3B82F6;
        }

        .register-text {
            color: rgba(255, 255, 255, 0.8);
            margin-top: 20px;
        }

        .register-text a {
            color: #fff;
            text-decoration: none;
        }

        .register-text a:hover {
            text-decoration: underline;
        }

        .password-container {
            position: relative;
            width: 100%;
        }

        .password-toggle {
            position: absolute;
            right: 12px;
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

        .password-toggle:hover {
            color: #333;
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

    <h2>Entrar na sua conta</h2>
    <p class="subtitle">Digite suas credenciais para continuar</p>

    <form id="login-form" method="POST" action="{{ route('login.post') }}">
        @csrf

        <!-- E‑mail -->
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
        </div>

        <!-- Senha -->
        <div class="form-group">
            <label>Senha</label>
            <div class="password-container">
                <input type="password" class="form-control" name="password" id="password" placeholder="Senha" required>
                <button type="button" class="password-toggle" onclick="togglePassword('password')">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <div class="checkbox-wrapper">
            <a href="{{ route('forgot-password') }}" class="forgot-password">Esqueceu a senha?</a>
        </div>

        <button type="submit" class="btn-login">Entrar</button>

        <p class="subtitle">
            Não tem uma conta?
            <a href="{{ route('register.index') }}" style="color: #fff; text-decoration: none;">Cadastre‑se</a>
        </p>
    </form>

</div>

@include('layouts/vendor-scripts')


<script>
$(function() {
    $('#login-form').on('submit', function(e) {
        e.preventDefault();

        var $form   = $(this),
            $button = $form.find('button[type="submit"]'),
            originalText = $button.html();

        // 1) loader no botão
        $button.prop('disabled', true)
               .html('<i class="fas fa-spinner fa-spin"></i> Entrando...');

        // 2) limpa erros anteriores
        $form.find('.error-text').remove();

        // 3) chamada AJAX
        $.ajax({
            url:    $form.attr('action'),
            method: 'POST',
            data:   $form.serialize(),
            dataType: 'json',
            success: function(res) {
                if (res.success) {
                    window.location.href = res.redirect;
                }
            },
            error: function(xhr) {
                var status = xhr.status,
                    resp   = xhr.responseJSON;

                if ((status === 422 || status === 401) && resp.errors) {
                    $.each(resp.errors, function(field, msgs) {
                        var $inp = $form.find('[name="'+field+'"]'),
                            $err = $('<div class="error-text text-danger small mt-1"></div>');
                        $err.text(msgs[0]);
                        $inp.after($err);
                    });
                } else {
                    alert('Erro inesperado. Tente novamente.');
                }

                // restaura botão
                $button.prop('disabled', false).html(originalText);
            }
        });
    });
});

// mostrar/ocultar senha
function togglePassword(id) {
    var inp = document.getElementById(id);
    inp.type = inp.type === 'password' ? 'text' : 'password';
}
</script>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleButton = document.querySelector('.password-toggle i');

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