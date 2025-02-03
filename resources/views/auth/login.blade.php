<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <style>
        body {
            font-family:  sans-serif;
            background-color: #C6E7FF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            align-items: center;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(218, 207, 207, 0.1);
            width: 80%;
            max-width: 800px;
        }

        .image-container {
            flex: 1;
            text-align: center;
            margin-right: 20px; /* Adds spacing between the image and the form */
        }

        .image-container img {
            max-width: 100%;
            border-radius: 8px;
        }

        .login-container {
            flex: 1;
            max-width: 400px;
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #000000;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #000000;
        }

        .form-group input {
            width: 94%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #9bf8f4;
            border: none;
            color: rgb(0, 0, 0);
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #9bf8f4;
        }

        .signup-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #9bf8f4;
            text-decoration: none;
            font-size: 14px;
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="../../../login-and-register-form/img/1.avif" alt="Login Image">
        </div>
        <div class="login-container">
            <h1>Login</h1>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            <a href="{{ route ('register') }}" class="signup-link">Don't have an account? Sign up</a>
        </div>
    </div>
</body>
</html>
