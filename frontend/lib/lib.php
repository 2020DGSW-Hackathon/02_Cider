<?php
    session_start();
    $login = false;
    $loginid = isset($_SESSION['userid']) ? $_SESSION['userid'] : "";
    $loginname = isset($_SESSION['username']) ? $_SESSION['username'] : "";
    if( $loginid && $loginname ) $login = true;

    $db = new PDO("mysql:host=127.0.0.1;dbname=cider_users;charset=utf8","root","");

    //board 에서 받은 "완료"를 경고창으로 띄워줌
    function alert ($name ,$str) {
        echo " <script>alert('{$name}{$str}')</script>";
    }

    //페이지 이동
    function move ($str = false) {
        echo "<script>";
        echo $str ? "location.replace('{$str}')" : "history.back();";
        echo "</script>";
        exit;
    }

    //조건 검사 + 경고창 및 페이지 이동
    function access($bool, $msg, $url = false){
        if (!$bool) {
            alert($msg);
            move($url);
        }
    }

    function println ($ele) {
        echo "<p>{$ele}</p>";
    }

    function print_pre ($ele) {
        echo "<pre>";
        print_r($ele);
        echo "</pre>";
    }

    //쿼리문 실행
    function query ($sql, $arr = []) {
        global $db;
        $res = null;

        if (count($arr)) {
            $res = $db->prepare($sql);
            $res->execute($arr);
        } else {
            $res = $db->query($sql); //arr 를 쿼리문에 넣는다? 바인딩한다?
        }

        $db = null;

        if($res){
            //정상 실행시 결과 반환
            return $res;
        } else {
            println($sql);
            exit;
        }
    }

    function readBook($idx) {
        global $db;
        $idx = $idx ? (int)$idx : 0;
        $data = array("idx"=>0,"username"=>"","grade"=>"","class"=>"","number"=>"", "title"=>"","tag"=>"","contents"=>"");
        if( $idx ) {
            $sql = "SELECT * FROM meet WHERE idx={$idx}";
            if( $res = $db->query($sql) ) {
                $data = $res->fetch(PDO::FETCH_ASSOC);
            }
        }
        return $data;
    }

    //단일
    function fetch ($sql) {
        return query($sql)->fetch(PDO::FETCH_OBJ);
    }

    //다중
    function fetchAll ($sql) {
        return query($sql)->fetchAll(PDO::FETCH_OBJ);
    }
?>