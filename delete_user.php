<?php
    header("Content-Type: text/html; charset=UTF-8");
    include_once("inc/db.php");

    session_start();
    $user_id = $_SESSION['userid'];

    //확인창에서 탈퇴여부 묻고 확인 누를 시 호출

    $sql = mq("DELETE FROM user_info WHERE user_id = '$user_id'");
    echo "<script>alert('회원정보가 삭제되었습니다. 로그인 페이지로 이동합니다.');</script>";

    //로그인 페이지로 이동
    sleep(5);

    unset($_SESSION["userid"]);
    unset($_SESSION["userName"]);

    echo("<script>location.replace('../login.php');</script>"); 
?>