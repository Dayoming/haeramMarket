<?php
    include ("inc/db.php");
    /* 검색 변수 */
    $user_id = $_GET['userId'];
    $res = mq("SELECT * FROM user_info WHERE user_id = '$user_id'");
    $user_info = mysqli_fetch_array($res);

    // 비밀번호 랜덤 문자열 생성
    $new_password = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 6);

    // 비밀번호 변경
    $sql = mq("UPDATE user_info SET user_pw = '$new_password' WHERE user_id = '$user_id'");

    $to = $user_info['user_email'];
    $subject = "해람마켓 임시 비밀번호 발급";
    $contents = "New Password : ".$new_password;
    $headers = "From: webmaster@localhost\r\n";
    $title_encode = "=?utf-8?B?".base64_encode($title)."?=\n";
    mail($to, $subject, $contents, $headers);

    header("Content-Type: text/html; charset=UTF-8");

    echo "<script>alert('임시 비밀번호가 발급되었습니다. 로그인 후 마이페이지에서 비밀번호를 바꾸실 수 있습니다.');</script>";
    echo("<script>location.replace('/login.php');</script>"); 
?>