<!DOCTYPE html>
<html>
<head>
  <title>New User SignUp</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #d9d9d9;
      color: #333;
    }
    .signup-card {
      max-width: 500px;
      margin: 60px auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 10px;
      border: 4px solid rgba(0, 0, 0, 0.16);
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
    }
    .signup-card h2 {
      margin-bottom: 24px;
      font-size: 28px;
      font-weight: 600;
      text-align: center;
      color: #009999;
    }
    .signup-card input[type="text"],
    .signup-card input[type="password"],
    .signup-card input[type="email"],
    .signup-card input[type="date"],
    .signup-card input[type="tel"] {
      width: 90%;
      padding: 12px 16px;
      margin: 10px auto;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
      transition: border-color 0.3s;
      display: block;
    }
    .signup-card input:focus {
      border-color: #009999;
      outline: none;
    }
    .signup-card button {
      width: 100%;
      padding: 14px;
      background-color: #009999;
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
    }
    .signup-card button:hover {
      background-color: #007777;
    }
  </style>
</head>
<body>
  <div class="signup-card">
    <h2>New User SignUp</h2>
    <form action="user_signed_up.php" method="post">
      <input type="text" name="name" placeholder="Enter Name" required>
      <input type="tel" name="phone" placeholder="Enter Phone Number" pattern="[0-9]{10}" required>
      <input type="password" name="password" placeholder="Enter Password" required>
      <input type="email" name="email" placeholder="Enter Email" required>
      <input type="text" name="idproof" placeholder="Enter ID Proof" required>
      <input type="date" name="dob" required>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
