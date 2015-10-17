<?php
ini_set('display_errors', 'On');
$dsn = "mysql:dbname=guestbook2;host=127.0.0.1;charset=utf8";
// what happend to this port vs ip
$dsn = "mysql:dbname=guestbook2;port=8889;charset=utf8";
$user = "root";
$password = "root";

$dbp = new PDO($dsn, $user, $password);
$dbp->exec("SET CHARACTER SET uft8");
$dbp->exec("SET NAMES uft8");