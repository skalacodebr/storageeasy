@include('layouts/head-main')

<head>
    <title>Login</title>
    @include('layouts/head')
    @include('layouts/head-style')
    
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #1a1a1a;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: #2a2a2a;
            border-radius: 20px;
            padding: 40px 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .logo {
            margin-bottom: 30px;
        }

        .logo img {
            width: 120px;
            height: auto;
        }

        h2 {
            color: white;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .subtitle {
            color: #999;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            color: white;
            font-size: 14px;
            margin-bottom: 8px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            background: #3a3a3a;
            border: 1px solid #444;
            border-radius: 8px;
            color: white;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-control::placeholder {
            color: #999;
        }

        .form-control:focus {
            border-color: #ffc107;
            box-shadow: 0 0 5px rgba(255, 193, 7, 0.3);
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: #ffc107;
            color: #000;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin: 20px 0;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: #ffb300;
        }

        .forgot-password {
            margin: 15px 0;
        }

        .forgot-password a {
            color: #ffc107;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .register-link {
            margin-top: 20px;
            color: #999;
            font-size: 14px;
        }

        .register-link a {
            color: #ffc107;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

@include('layouts/body')

<div class="login-container">
    <div class="logo">
        <img src="{{ asset('assets/images/jlc-logo-web.png') }}" alt="JLC Logo">
    </div>
    
    <h2>Login</h2>
    <p class="subtitle">Entre com seu email e senha para acessar o sistema</p>
    
    <form>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="seu@email.com">
        </div>
        
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" placeholder="">
        </div>
        
        <button type="button" class="btn-login">Entrar</button>
        
    
    </form>
    

</div>

@include('layouts/vendor-scripts')

</body>
