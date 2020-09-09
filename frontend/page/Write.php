<?php include_once('../lib/lib.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Write.css">
    <title> 글쓰기 </title>
</head>
<body>
<form method="post" action="../lib/server.php">
    <input type="hidden" name="action" value="question">
        <div class="Write">
        <input class="Write-title" name="title" placeholder="제목을 입력해주세요.">
            <div class="Write-category">
            <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
            <input type="hidden" name="grade" value="<?= $_SESSION['userinfo']['grade'] ?>">
            <input type="hidden" name="class" value="<?= $_SESSION['userinfo']['class'] ?>">
            <input type="hidden" name="number" value="<?= $_SESSION['userinfo']['number'] ?>">
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
            </div>
        <input class="textarea" name="contents" placeholder="내용을 입력해주세요."></input> <br>    
        <button type="submit">작성</button>
        <a href="./list.php"><button>취소</button></a>
        </div>
</body>
</html>