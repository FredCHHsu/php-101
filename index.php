<?php 
require 'database.php';

$sql = "SELECT * FROM messages WHERE ( is_deleted = 0  AND parent_id IS NULL )";
$query = $dbp->query($sql);
$messages = $query->fetchAll();

$sql2 = "SELECT * FROM messages WHERE ( is_deleted = 0  AND parent_id IS NOT NULL )";
$query2 = $dbp->query($sql2);
$returns = $query2->fetchAll();

function deleteBtn( $id ){
return <<<HTML
    <form class="form-horizontal" action="delete.php" method="post" style="display: inline">
        <input type="hidden" name="id" value="${id}"/>
        <button type="submit" class="glyphicon glyphicon-remove btn btn-sm btn-danger"></button>
    </form>
HTML;
}

function editBtn( $id ){
return <<<HTML
    <form class="form-horizontal" action="edit.php" method="get" style="display: inline">
        <input type="hidden" name="id" value="${id}"/>
        <button type="submit" class="glyphicon glyphicon-pencil btn btn-sm btn-primary"></button>
    </form>
HTML;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>

<?php 
// $messages = [
//     [
//         'id' => 1,
//         'title' => '標題',
//         'content' => '留言內容範例，留言內容範例，留言內容範例.'
//     ],
//     [
//         'id' => 2,
//         'title' => '標',
//         'content' => '留言內容範例，留言內言內容範例，留言內容範例，留言內容範例.'
//     ],
//     [
//         'id' => 3,
//         'title' => '標題',
//         'content' => '留言容範例，留言內容範例，留言內容範例.'
//     ],
// ];

// $returns = [
//     [
//         'id' => 4,
//         'title' => 'return',
//         'content' => '回爆你',
//         'parent_id' => 1
//     ],
//     [
//         'id' => 5,
//         'title' => 'return',
//         'content' => '爆你',
//         'parent_id' => 1
//     ]
// ];
 ?>
<body>
	<div class="col-md-6 col-md-offset-3">
		<form action="create.php" method="post" accept-charset="utf-8" class="form-horizontal">
            <div class="input-group">
                <span class="input-group-addon">標題</span>
                <input type="text" name="title" class="form-control" aria-describedby="basic-addon3">
            </div>
            <div class="input-group">
                <span class="input-group-addon">內容</span>
                <input type="text" name="content" class="form-control" aria-describedby="basic-addon3">
            </div>
            
            <div class="input-group">
                <span class="input-group-addon">回應Ｎ樓</span>
                <input type="text" name="parent_id" class="form-control" aria-describedby="basic-addon3">
            </div>
            <input type="submit" value="po文" class="btn btn-default">
		</form>
	</div>
	<? foreach ($messages as $message): ?>
	   <div class="col-md-6 col-md-offset-3" style="border-bottom: solid 1px gray">
            <h4> <?= $message['title'] ?> </h4>
            <p> <?= $message['content'] ?> </p>
            <p>by（ <?= $message['id'] ?>樓 ）
                <?= deleteBtn( $message['id'] ) ?>
                <?= editBtn( $message['id'] ) ?>
            </p>
            <? foreach ($returns as $re): ?>
            <? if ( $re['parent_id'] == $message['id']): ?>
                <div class="col-md-6 col-md-offset-6">
                    <h4> <?= $re['title'] ?> </h4>
                    <p> <?= $re['content'] ?></p>
                    <p>回應 <?= $re['parent_id']?> 樓
                        <span class="glyphicon glyphicon-remove btn btn-sm btn-danger"></span>
                        <span class="glyphicon glyphicon-pencil btn btn-sm btn-default"></span>
                    </p>
                </div>
            <? endif ?>
            <? endforeach ?>
	   </div>
	<? endforeach ?>
</body>
</html>