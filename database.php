<?php
ini_set('display_errors', 'On');
$dsn = "mysql:dbname=guestbook2;host=127.0.0.1;charset=utf8";
// what happend to this port vs ip
$dsn = "mysql:dbname=guestbook2;port=8889;charset=utf8";
$db_user = "root";
$db_password = "root";

$dbp = new PDO($dsn, $db_user, $db_password);
$dbp->exec("SET CHARACTER SET uft8");
$dbp->exec("SET NAMES uft8");