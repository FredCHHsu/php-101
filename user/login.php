<?php 
session_start();
$error = '';
if ( empty($_POST['name']) || empty($_POST['password'])  ) {
  $error = "name or password can't be blank";
} else {
  $name = $_POST['name'];
  $password = $_POST['password'];

  require '../database.php';
  $sql = "SELECT * from users where name='$name' AND password='$password'";
  $query = $dbp->query($sql);
  $user = $query->fetchAll();
  $rowCount = count($user);
  
  if ( $rowCount == 1 ) {
    $_SESSION['login_user']= $name;
    header('location: ../');
  } else {
    $error = "wrong user or password";
  }
}