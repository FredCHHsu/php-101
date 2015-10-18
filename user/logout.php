<?php 
ini_set('display_errors', 'On');
session_start();
if ( session_destroy() ){
  header("location: ../index.php");
} else {
  echo "something wrong!";
}

?>