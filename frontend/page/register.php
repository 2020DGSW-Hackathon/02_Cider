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
    <link rel="stylesheet" href="../assets/css/Sign.css" />
    <title>회원가입</title>
</head>
<body>
    <div class="wrap">
        <div class="Sign-img">
            <img src="../assets/images/Coworking.png" />
        </div>
        <div class="inputs2">
            <form method="post" action="" class="register">
                <input type="hidden" name="action" value="register">
                <div class="login_ment">
                    회원가입으로 사이다와 함께 해주세요!
                </div>
                <div>
                    <div class="id">username:</div>
                    <input
                        type="text"
                        name="username"
                        class="input"
                        placeholder="이름을 입력하세요"
                    />
                </div>
                <div>
                    <div class="id">ID:</div>
                    <input
                        type="text"
                        class="input"
                        name="id"
                        placeholder="아이디를 입력하세요"
                    />
                </div>
                <div>
                    <div class="pw">PW:</div>
                    <input
                        type="password"
                        class="input"
                        name="password"
                        placeholder="비밀번호를 입력하세요"
                    />
                </div>
                <div class="grade">
                    학년<input type="text" class="select_school_id " name="grade" />
                    반<input type="text" class="select_school_id" name="class" />
                    번호<input type="text" class="select_school_id" name="number" />
                </div>
                <input
                    type="submit"
                    class="input submit_button"
                    value="회원가입"
                />
                <div class="signUp">
                    <a href="./login.php">로그인 할래요!</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>