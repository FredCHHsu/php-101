<?php
require 'database.php';

$sql = "SELECT * FROM messages WHERE id = {$_GET['id']} ";
$query = $dbp->query($sql);
$message = $query->fetch();


// $message =
//     [
//         'id' => 3,
//         'title' => '作者58',
//         'content' => '留言內容範例，留言內容範例，留言內容範例.'
//     ];
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
		<form action="update.php?id=<?= $message['id'] ?>" method="post" accept-charset="utf-8" class="form-horizontal">
            <div class="input-group">
                <span class="input-group-addon">標題</span>
                <input type="text" name="title" class="form-control" aria-describedby="basic-addon3" placeholder="<?= $message['title'] ?>">
            </div>
            <div class="input-group">
                <span class="input-group-addon">內容</span>
                <input type="text" name="content" class="form-control" aria-describedby="basic-addon3" placeholder="<?= $message['content'] ?>">
            </div>
            
            <div class="input-group">
                <span class="input-group-addon">回應Ｎ樓</span>
                <input type="text" name="parent_id" class="form-control" aria-describedby="basic-addon3" placehold="<?= $message['parent_id']?>">
            </div>
            <input type="submit" value="update" class="btn btn-default">
		</form>
	</div>

</body>
</html>