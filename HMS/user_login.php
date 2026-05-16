<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body {
            background: #e9eff5;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background: white;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
            width: 320px;
            text-align: center;
        }
        .login-box h2 {
            margin-bottom: 25px;
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }
        .input-field {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
        }
        .input-field:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 5px rgba(74,144,226,0.5);
        }
        .btn-login {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background: #4a90e2;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-login:hover {
            background: #357ABD;
        }
        .register-link {
            margin-top: 18px;
            font-size: 14px;
            color: #555;
        }
        .register-link a {
            color: #4a90e2;
            text-decoration: none;
            font-weight: bold;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="user_logged_in.php" method="post">
            <input class="input-field" type="text" name="phone" placeholder="Phone No" required>
            <input class="input-field" type="password" name="password" placeholder="Password" required>
            <button class="btn-login" type="submit">Login</button>
        </form>
        <div class="register-link">
            Don’t have an account? <a href="user_register.php">Register</a>
        </div>
    </div>
</body>
</html>
