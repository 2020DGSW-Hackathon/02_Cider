<?php include_once('../lib/lib.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 글쓰기 </title>
</head>
<body>
<form method="post" action="../lib/server.php">
    <input type="hidden" name="action" value="question">
    <h1><?= $_SESSION['username'] ?></h1>
    <p><?=$_SESSION['userinfo']['grade']?> <?=$_SESSION['userinfo']['class']?> <?=$_SESSION['userinfo']['number']?></p>
    <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
    <input type="hidden" name="grade" value="<?= $_SESSION['userinfo']['grade'] ?>">
    <input type="hidden" name="class" value="<?= $_SESSION['userinfo']['class'] ?>">
    <input type="hidden" name="number" value="<?= $_SESSION['userinfo']['number'] ?>">
    <input type="text" name="title" placeholder="제목을 작성해 주세요"  required><br>
    <select name="tag">
    <?php
    $rows = fetchAll("SELECT * FROM tag");

    foreach ($rows as $row) {
        ?>
        <option value="<?= $row->tag ?>"><?= $row->tag ?></option>
        <?php
    }
    ?>
    </select>
    <br>
    <input type="text" name="contents">
    <button type="submit">Complete</button>
</form>
</body>
</html>