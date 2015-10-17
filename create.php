<?php 

require 'database.php';

if (isset($_POST['content']) != '') {
    $sql = "INSERT INTO messages(author, content, parent_id) VALUES(?,?,?)";
    $statement = $dbp->prepare($sql);
    $result = $statement->execute([$_POST['author'], $_POST['content'], ($_POST['parent_id'] ?: null)]);
    if (!$result) {
        var_dump($statement->errorInfo());
        die('Something Wrong');
    } else {
        header('location: ./');
        return;
    }
}

