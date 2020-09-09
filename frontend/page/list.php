<?php include_once('../lib/lib.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $rows = fetchAll("SELECT * FROM question");

    foreach ($rows as $row) {
        ?>
        <a href="./read.php?idx=<?php echo $row->idx ?>">
            <div>
                <h2><?= $row->title ?></h2>
                <h4><?= $row->tag ?></h4>
                <h4><?= $row->username ?></h4>
            </div>
        </a>
        <?php
    }
    ?>

</body>
</html>