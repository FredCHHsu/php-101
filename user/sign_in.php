<?php
ini_set('display_errors', 'On');
include 'login.php';
// if(isset($_SESSION['login_user'])){
//   header("location: ../");
// }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
<body>
  <div class="col-md-6 col-md-offset-3">
    <h1>login</h1>
    <p><?php echo $error ?></p>
    <form action="" method="post">
      <div class="input-group">
        <span class="input-group-addon">user name</span>
        <input type="text" name="name" class="form-control" placeholder="name">
      </div>
      <div class="input-group">
        <span class="input-group-addon">password</span>
        <input type="password" name="password" class="form-control" placeholder="password">
      </div>
      <input type="submit" value="login" class='btn btn-lg btn-default'>
    </form>
  </div>
</body>
</html>