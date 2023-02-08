<?php
    include_once("inc/db.php");

    session_start();
    $user_id = $_SESSION['userid'];
    $note_idx = $_POST[note_idx];
    $note_box = $_POST[note_box];

    if($note_box == 1){
        $res = mq("DELETE FROM send_note WHERE note_idx = '$note_idx'");
        echo("<script>location.replace('note_send.php');</script>");
    }
    else if($note_box == 2){
        $res = mq("DELETE FROM recv_note WHERE note_idx = '$note_idx'");
        echo("<script>location.replace('note_recv.php');</script>"); 
    }

?>