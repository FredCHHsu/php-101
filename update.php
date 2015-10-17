<?php
require 'database.php';

if ( isset($_GET['id']) ) {
    $sql = "UPDATE  messages set content = ?, author = ?, parent_id =? WHERE id = ?";
    $statement = $dbp->prepare($sql);
    $result = $statement->execute( [ $_POST['content'], $_POST['author'], ($_POST['parent_id'] ?: NULL), $_GET['id'] ]);
    if (!$result) {
        var_dump($statement->errorInfo());
        die('Something Wrong');
    } else {
        header('location: ./');
        return;
    }
}