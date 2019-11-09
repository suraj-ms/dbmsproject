<html>
<head>
  <title>LOGIN And Registration </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="login-box">
<div class="row">
  <div class="col-md-6 login-left">
    <br>
    <h2>Login Here</h2>
    <form action="validation.php" method="post">
        <div class="form-group">
          <lable>Username</lable><br>
          <input type="text" name="user" class="form-controle" required>
        </div>
        <div class="form-group">
          <lable>Password</lable><br>
          <input type="password" name="password" class="form-controle" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
  </div>
  <div class="col-md-6 login-right">
    <h2>Register Here</h2>
    <form action="registration.php" method="post">
        <div class="form-group">
          <lable>Username</lable><br>
          <input type="text" name="user" class="form-controle" required>
        </div>
        <div class="form-group">
          <lable>Password</lable><br>
          <input type="password" name="password" class="form-controle" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
</div>
</div>
</div>
</body>
</html>
