<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="left">
      <div class="img">
        <img src="../../assests/Welcome.png" alt="welcome-art">
      </div>
    </div>
    <div class="login-form-div">
      <form action="#" class="login-form">
        <h2 class="create-acc-h2">Login Account</h2>
        <button class="google-sign-btn">Login with Google</button>
        <p>- OR -</p>
        <input type="text" id="email" class="input-email" name="email" autofocus="false" placeholder="Email Address" required>
        <input type="password" id="passowrd" class="input-passwor" name="passowrd" autofocus="false" placeholder="Password" required> 
        <input type="submit" value="Login Account" class="create-acc-btn" autofocus="false">
      </form>
      <a href="./signup.html" class="create-acc-ref">create Account</a>
    </div>
  </div>
</body>
</html>