<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
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
    .login-card {
      background: white;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
      width: 320px;
      text-align: center;
    }
    .login-card h2 {
      margin-bottom: 25px;
      font-size: 28px;
      font-weight: bold;
      color: #333;
    }
    .login-card input[type="text"],
    .login-card input[type="password"] {
      width: 90%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      outline: none;
      transition: 0.3s;
    }
    .login-card input[type="text"]:focus,
    .login-card input[type="password"]:focus {
      border-color: #4a90e2;
      box-shadow: 0 0 5px rgba(74,144,226,0.5);
    }
    .login-card button {
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
    .login-card button:hover {
      background: #357ABD;
    }
    .login-card .links {
      margin-top: 18px;
      font-size: 14px;
      color: #555;
    }
    .login-card .links a {
      color: #4a90e2;
      text-decoration: none;
      font-weight: bold;
    }
    .login-card .links a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h2>Admin Login</h2>
    <form action="admin_db.php" method="post">
      <input type="text" name="adminid" placeholder="User ID" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
