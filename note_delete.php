<?php
    include_once("inc/db.php");

    //쪽지 삭제하기 버튼 누를 경우 호출
    $note_idx = $_POST['note_idx'];
    $note_box = $_POST['note_box'];

    if($note_box == 1){
        $sql = mq("DELETE * FROM send_note WHERE note_idx = $note_idx");
        echo "<script>alert('쪽지가 삭제되었습니다.');</script>"; 
    }
    else if($note_box = $_POST['note_box']){
        $sql = mq("DELETE * FROM recv_note WHERE note_idx = $note_idx");
        echo "<script>alert('쪽지가 삭제되었습니다.');</script>";
    }
?>