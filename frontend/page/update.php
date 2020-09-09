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
</head>
<body>

<form method="post" action="../lib/server.php">
    <input type="hidden" name="action" value="update">
    <input type="text" name="idx" value="<?=$idx?>">
    <input type="text" name="title" value="<?=$data['title']?>">
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
    <input type="text" name="contents" value="<?=$data['contents']?>">

    <button type="submit">Complete</button>
</form>
</body>
</html>