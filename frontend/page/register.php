<?php include_once("../lib/lib.php")?>
<?php
    if (isset($_POST['action'])) {
        include_once('../lib/server.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <h1 class="page-title">Register</h1>

    <form method="post" action="">
        <input type="hidden" name="action" value="register">
        <h1 class="page-title">username</h1>
        <input type="text" name="username" required>

        <h1 class="page-title">id</h1>
        <input type="text" name="id" required>

        <h1 class="page-title">password</h1>
        <input type="text" name="password" required>

        <h1 class="page-title">grade</h1>
        <input type="number" name="grade" required>

        <h1 class="page-title">class</h1>
        <input type="number" name="class" required>

        <h1 class="page-title">number</h1>
        <input type="number" name="number" required>
        <button type="submit">complet</button>

    </form>
</body>
</html>