<?php
	include "inc/db.php";
    session_start();

    $bno = $_GET['idx'];
    $userid = $_SESSION['userid'];
    
    if($bno && $_POST['content']){
        if(!isset($userid)) {
            echo "<script>alert('댓글 작성 기능은 로그인 후 이용하실 수 있습니다.');
            location.href='login.php';</script>";
        } else {
            $sql = mq("insert into reply(con_num,name,content) values('".$bno."','".$userid."','".$_POST['content']."')");
            echo "<script>alert('댓글이 작성되었습니다.'); 
            location.href='read.php?idx=$bno';</script>";
        }
    } else {
        echo "<script>alert('내용을 입력해주세요.');
        history.back();</script>";
    }
	
?>