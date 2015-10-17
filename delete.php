<?php
require 'database.php';

if (isset($_POST['id']) != '') {
    $sql = "DELETE FROM messages  WHERE id = ?";
    $statement = $dbp->prepare($sql);
    $result = $statement->execute([$_POST['id']]);
    if (!$result) {
        var_dump($statement->errorInfo());
        die('Something Wrong');
    } else {
        header('location: ./');
        return;
    }
}

?>
