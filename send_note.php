<?php
    include_once("inc/db.php");
    session_start();
    header("Content-Type: text/html; charset=UTF-8");
    $send_id = $_SESSION['userid'];

    $recv_id = $_POST['recv_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $note_chk = 0;
    $send_date = date("Ymd");

    //수신자가 존재하는 아이디인지 확인
    $chk = mq("SELECT user_id FROM user_info WHERE user_id = '$recv_id'");
    $res = mysqli_fetch_array($chk);

    if(!empty($res)||$res == true){
        //수신 테이블에 내용 저장
        $recv_sql = "INSERT INTO recv_note VALUES ('', '$recv_id', '$send_id', '$title', '$content',
            $send_date, $note_chk)";

        //송신 테이블에 내용 저장
        $send_sql = "INSERT INTO send_note VALUES ('','$recv_id', '$send_id', '$title', '$content', 
            $send_date, $note_chk)";

        mq($recv_sql);
        mq($send_sql);

        echo("<script>location.replace('note_send.php');</script>");
        echo "<script>history.back(2);</script>"; 

    }
    else{
        echo "<script>alert('존재하지 않는 수신자입니다.');</script>";
        echo "<script>history.back();</script>"; 
    }

?>