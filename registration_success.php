<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Registration Successful</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom, #2C1A1A, #4A1C1A, #B56551, #F2C0B1);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .success-box {
      background: #fff;
      padding: 40px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    .success-box h2 {
      color: #4A1C1A;
      margin-bottom: 20px;
    }

    .success-box p {
      margin-bottom: 30px;
      font-size: 18px;
      color: #333;
    }

    .success-box a {
      display: inline-block;
      background: #B56551;
      color: #fff;
      text-decoration: none;
      padding: 12px 25px;
      border-radius: 5px;
      transition: background 0.3s ease;
      font-size: 16px;
    }

    .success-box a:hover {
      background: #4A1C1A;
    }
  </style>
</head>
<body>
  <div class="success-box">
    <h2>✅ Registration Successful!</h2>
    <p>Your account has been created successfully.</p>
    <a href="student_login.php">Go to Login</a>
  </div>
</body>
</html>
