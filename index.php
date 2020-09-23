<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <title>todo</title>
</head>
<body style="background-color: black;color: white;">
    <h1>とどApp</h1>
    <h2>とど作成</h2>
    <form class="create" method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
        <label for="title">タスク名</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="タスク名" required>
        <br><br>
        <label for="due_date">期　　限</label>
        <input type="text" class="form-control" name="due_date" id="due_date" required>
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
        <br>
        <input class="btn btn-primary"  type="submit" name="btn" value="とどを作成する">
    </form>

<?php


?>