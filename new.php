<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
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

</body>
</html>