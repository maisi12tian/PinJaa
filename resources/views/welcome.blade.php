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
        .social-login img {
            width: 30px;
            margin: 0 10px;
            cursor: pointer;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="login-section">
            <h2>Welcome Back!</h2>
            <p>Simplify your workflow and boost your productivity.</p>
            <form id="loginForm">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" required>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            <div class="social-login">
                <p>or continue with</p>
                <img src="google-icon.png" alt="Google">
                <img src="facebook-icon.png" alt="Facebook">
                <img src="apple-icon.png" alt="Apple">
            </div>
        </div>
        <div class="image-section">
            <img src="{{asset('assets/logo.png')}}" alt="Illustration">
            <p>Make your work easier and organized with our App</p>
        </div>
    </div>
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;
            
            if (username === "admin" && password === "1234") {
                alert("Login berhasil!");
            } else {
                alert("Username atau password salah!");
            }
        });
    </script>
</body>
</html>
