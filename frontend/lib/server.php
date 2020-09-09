<?php
include_once('lib.php');
extract($_POST);
$sql = "";
$url = "/";
$execArr = [];

switch ($action){
    case 'register' :
      $sql = "
      INSERT INTO users SET
      username = ? ,
      id = ? ,
      password = ? ,
      grade = ? ,
      class = ? ,
      number = ? ;
    ";
      $execArr = [$username, $id, $password, $grade, $class, $number];
      $url = "login.php";
      alert($username, "님 회원가입이 완료되었습니다.");
      break; 
        
    case 'question' :
      $sql = "
      INSERT INTO question SET
      username = ? ,
      grade = ? ,
      class = ? ,
      number = ? ,
      title = ?,
      tag = ? ,
      contents = ?;
      ";
      $execArr = [
        $username, 
        $grade, 
        $class, 
        $number, 
        $title, 
        $tag,
        $contents
      ];
      $url = "../index.php";
      break;

      case 'update' :
        $sql = "
        UPDATE question SET
        title = ?,
        tag = ? ,
        contents = ?
        WHERE idx = ?                                                                                                                                                                                                              
        ";
        $execArr = [
          $title, 
          $tag,
          $contents,
          $idx
        ];
        $url = "../index.php";
        break;

      case 'delete' :
        $sql = "DELETE FROM question WHERE idx = ?";
        $execArr = [$idx];
        $url = "../page/list.php";
        break;

}
$res = query($sql, $execArr);
move($url);

exit; 