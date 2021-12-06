<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="css/loginpage.css">
</head>
<body>

<div class="login-form">
<form action="./register.php" method="post" class="login">
    <h1>Signup</h1>
    <div class="content">
    <div class="input-field">
    <input type="text" name="id" id="id" class="login-field form-control">
    </div>
      <div class="input-field">
        <input  name="nama" id="nama" type="text" placeholder="Nama"  class="login-field" autocomplete="nope">
      </div>
      <div class="input-field">
        <input  name="uname" id="uname" type="text" placeholder="Username"  class="login-field" autocomplete="nope">
      </div>
      <div class="input-field">
      <input type="password" name="pass" id="pass" placeholder="Pasword" class="login-field" autocomplete="new-password">
      </div>
    </div>
    <div class="action">

      <button type="submit" name="signup">Sign in</button>
    </div>
  </form>
</div>

  <script  src="./script.js"></script>

</body>
</html>