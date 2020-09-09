<?php include_once('../lib/lib.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="page-title">Register</h1>
<form method="post" action="../backend/login_check.php">
<label>Id(Email)</label>
<input type="text" name="id">
<label>Password</label>
<input type="password" name="password">
<button type="submit" class="page-btn">Login</button>
</from>
</body>
</html>