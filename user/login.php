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
  // $query = $dbp->query($sql);
  // $rows = mysql_num_rows($query);
  
  $error = $sql;
}