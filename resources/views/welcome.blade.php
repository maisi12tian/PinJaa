<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            width: 800px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .login-section {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .login-section h2 {
            color: #161515;
            text-align: center;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #ff9800;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-button:hover {
            background-color: #e65100;
        }
        .social-login {
            text-align: center;
            margin-top: 10px;
        }
        .image-section {
            width: 50%;
            background-color: #e3f2fd;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }
        .image-section img {
            width: 80%;
        }
        .login-link {
            text-align: center;
            margin-top: 10px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="login-section">
            <h2>Selamat Datang!</h2>
            <form id="loginForm" action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            <div class="login-link">
                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar Sekarang</a></p>
            </div>
        </div>
        <div class="image-section">
            <img src="{{ asset('assets/logo.png') }}" alt="Illustration">
        </div>
    </div>
</body>
</html>