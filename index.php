<?php 
require 'database.php';
require 'post.php';

session_start();

$m = new Message($dbp);
$messages = $m->messages;
$returns = $m->returns;

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
    <? if ( isset($_SESSION['login_user']) ): ?>
        <h4>hello! <?= $_SESSION['login_user'] ?></h4>
        <form action="new.php">
            <button class="btn btn-lg btn-info" style="position: fixed; top:0; right:10px; z-index: 100;">
            New Post</button>
        </form>
        <form action="user/logout.php">
            <button class="btn btn-lg btn-default" style="position: fixed; top:50px; right:10px; z-index: 100;">
            Log out</button>
        </form>
    <? else: ?>
        <form action="user/sign_in.php">
            <button class="btn btn-lg btn-info" style="position: fixed; top:0; right:10px; z-index: 100;">
            Login</button>
        </form>
    <? endif?>

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