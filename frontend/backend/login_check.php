<?php
session_start();
$id = $_POST['id'];
$PW = $_POST['password'];
$sql = mysqli_connect("localhost", "root", "","cider_users");

$check="SELECT * FROM users WHERE id = '$id'";
$result = $sql->query($check);
if($result->num_rows==1){
    $row=$result->fetch_array(MYSQLI_ASSOC);
    if($row['password'] == $PW){
        $_SESSION['userid']=$id;
        $_SESSION['username'] = $row['username'];
        $_SESSION['userinfo'] = $row;
        if (isset($_SESSION['userid']))
        {
            echo " 
                <script>alert('{$_SESSION['username']}님 환영합니다.'); 
                location.href='../index.php';</script>
                ";
        }
        else
        {
            echo "저장 실패";
        }
    }
    else {
        echo " <script>alert('아이디, 비밀번호를 확인해주세요'); location.href=' ./loginpage.php';</script>";
    }
}
else {
     echo "<script>alert('아이디, 비밀번호를 확인해주세요'); location.href=' ./loginpage.php'; </script>";
}