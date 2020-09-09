<?php include_once('../lib/lib.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="delForm" action="../lib/server.php" method="post">
        <input type="hidden" name="action" id="action" value="delete">
        <input type="hidden" name="idx" id="idx" value="<?=$idx?>">
    </form>
    <?php 
        $idx = $_GET['idx'] ?? null;

        $sql = "SELECT * FROM question WHERE idx = '{$idx}'";
        $row = fetch($sql);
    ?>

    <div>
        <h1> <?= $row->title ?> <h1>
        <h4> <?= $row->tag ?> <h4>
        <h4> <?= $row->grade ?> <?= $row->class ?> <?= $row->number ?> <h4> 
        <p> <?= $row->contents ?> </p>   
    </div>

    <a href="./update.php?idx=<?php echo $row->idx?>">a</a>
    <a href="#!" onclick="delread(<?=$idx?>); return false;"> 삭제</a>
    <a href="./list.php"> 목록</a>
</body>
<script>
    const delread = (idx) => {
        if( ! idx ) return;
        if( ! confirm("게시글을 삭제하시겠습니까?") ) return;
        let frm = document.getElementById('delForm');
        document.getElementById('idx').value= idx;
        frm.submit();
    }
</script>
</html>