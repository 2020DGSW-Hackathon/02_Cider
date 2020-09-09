<?php include_once('../lib/lib.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Sign.css" />
    <title>로그인</title>
</head>
<body>
<div class="wrap">
    <div class="Sign-img">
        <img src="../assets/images/Coworking.png">
    </div>
    <div class="inputs">
        <form method="post" action="../backend/login_check.php">
            <div class="login_ment">사이다에 로그인 해주세요!</div>
            <div>
                <div class="id">ID :</div>      
                <input
                    type="text"
                    class="input"
                    name="id"
                    placeholder="아이디를 입력하세요"
                />
            </div>
            <div>
                <div class="pw">PW :</div>
                <input
                    type="password"
                    class="input"
                    name="password"
                    placeholder="비밀번호를 입력하세요"
                />
            </div>
            <input
                type="submit"
                class="input submit_button"
                value="로그인"
            />
            <div class="signUp">
                <a href="./register.php">회원가입 할래요!</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>