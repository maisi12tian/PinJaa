<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .register-section {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .register-section h2 {
            color: #ff9800;
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
        .register-button {
            width: 100%;
            padding: 10px;
            background-color: #ff9800;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .register-button:hover {
            background-color: #e65100;
        }
        .login-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img src="{{asset('assets/logo.png')}}" alt="Illustration">
        </div>
        <div class="register-section">
            <h2>Register</h2>
                <form action="{{ url('/register') }}" method="POST">
                @csrf
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-group">
                    <label for="fullname">Nama Lengkap</label>
                    <input type="text" name="fullname" required>
                </div>
                <div class="input-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" required>
                </div>
                <div class="input-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" name="phone" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="register-button">Daftar</button>
            </form>            
            <div class="login-link">
                <p>Sudah punya akun? <a href="login.html">Masuk</a></p>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("registerForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Registrasi berhasil!");
        });
    </script>
</body>
</html>