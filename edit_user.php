<?php
    include_once("inc/db.php");
    session_start();
    $user_id = $_SESSION['userid'];
    $user_name = $_POST["edit_name"];
    $user_depart = $_POST["edit_depart"];
    $user_birth = $_POST["edit_birth"];

    $root = 'login.php';

    //입력된 값이 있을 경우에만 사용자 정보 갱신
    if($user_name||$user_depart||$user_birth){
        if($user_name){
            $sql = mq("UPDATE user_info SET user_name = '$user_name' WHERE user_id = '$user_id'");
        }
        if($user_depart){
            $sql = mq("UPDATE user_info SET user_depart = '$user_depart' WHERE user_id = '$user_id'");
        }
        if($user_birth){
            $sql = mq("UPDATE user_info SET user_birth = '$user_birth' WHERE user_id = '$user_id'");
        }
    echo "<script>alert('회원정보가 변경되었습니다.');</script>";
    echo("<script>location.replace('mypage.php');</script>"); 

    }else{
        echo "<script>alert('내용을 입력해주십시오');</script>";
        echo("<script>location.replace('edit_user_info.php');</script>"); 
    }
?>