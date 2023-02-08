<?php
    session_start();
    include_once("inc/db.php");
    $user_id = $_SESSION['userid'];

    //현재 비밀번호, 변경할 비밀번호 입력받음
    $check_pw = $_POST["check_pw"];
    $edit_pw = $_POST["edit_pw"];

    $sql = "SELECT user_pw FROM user_info WHERE user_id = '$user_id'";
    $user_pw = mq($sql);
 
    if($user_pw == $check_pw){
        echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
        echo "<script>location.replace('edit_user_info.php');</script>";
    }
    else{
        $sql = mq("UPDATE user_info SET user_pw = '$edit_pw' WHERE user_id = '$user_id'");
        echo "<script>alert('비밀번호가 변경되었습니다.');</script>";
        echo "<script>location.replace('edit_user_info.php');</script>";
    }
?>