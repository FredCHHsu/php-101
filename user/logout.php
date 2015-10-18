<?php 
ini_set('display_errors', 'On');
session_start();
if ( isset($_SESSION['login_user']) ){
  unset( $_SESSION['login_user'] );
  header("location: ../");
} else {
  echo "something wrong!"
}

?>