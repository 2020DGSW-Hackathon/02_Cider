<?php include_once('../lib/lib.php'); ?>
<?php
    $idx = $_GET['idx'] ?? null;
    $data = array("username"=>"","grade"=>"","class"=>"","number"=>"", "title"=>"","tag"=>"","contents"=>"");
    if( $idx ) $data = readBook($idx);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/Write.css">

</head>
<body>

<form method="post" action="../lib/server.php">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="idx" value="<?=$idx?>">
        <div class="Write">
        <input class="Write-title" type="text" name="title">
            <div class="Write-category">
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
        <input class="textarea" type="text" name="contents"></input> <br>    
        <button type="submit">작성</button>
        <a href="./list.php"><button>취소</button></a>
</div>
</form>
</body>
</html>