@include('layouts/head-main')

<head>
    <title>Recuperar Senha | Storage Fácil</title>
    @include('layouts/head')
    @include('layouts/head-style')
    

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
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
        </div>
        
        <div class="form-group">
            <label>Senha</label>
            <div class="password-container">
                <input type="password" class="form-control" name="password" id="password" placeholder="Senha" required>
                <button type="button" class="password-toggle" onclick="togglePassword()">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <button type="submit" class="btn-login">Recuperar Senha</button>
        
        <p class="subtitle">Voltar para <a href="{{ route('login') }}" style="color: #fff; text-decoration: none;">Login</a></p>
    </form>
</div>

@include('layouts/vendor-scripts')

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
