<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="css/loginpage.css">
</head>
<body>

<div class="login-form">
<form action="./login.php" method="post" class="login">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input  name="uname" id="uname" type="text" placeholder="Username"  class="login-field" autocomplete="nope">
      </div>
      <div class="input-field">
      <input type="password" name="pass" id="pass" placeholder="Pasword" class="login-field" autocomplete="new-password">
      </div>
    </div>
    <div class="action">
      <button><a href="./signup.php">Register</a></button>
      <button type="submit" name="login">Signin</button>
    </div>
  </form>
</div>

  <script  src="./script.js"></script>

</body>
</html>

