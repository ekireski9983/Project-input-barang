<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

    .form-group input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
    .form-group input[type="reset"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
    }

  .form-group input[type="reset"]:hover {
   background-color: #45a049;
   }
    
    .form-group .error-message {
      color: #ff0000;
      margin-top: 5px;
    }

    /* Background color */
    body {
      background-color: #8a2be2;
    }
  </style>
</head>
<body>
    <div class="container">
        <h1>login</h1>
        <form action="cek_login.php" method="post" name="login">
            <p>silahkan login dahulu untuk ke menu selanjutnya</p>
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" id="password" name="password" required>
         </div>
        <div class="form-group">
        <input type="submit" value="Login">
        <hr>
        <input type="reset" value="Reset">
      </div>
    </form>
  </div>
</body>
</html>
