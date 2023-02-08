<?php
    include_once("inc/db.php");
    session_start();
    //사용자가 클릭한 쪽지의 idx
    $note_idx = $_GET[note_idx];
    $note_box = $_GET[note_box];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>note_read</title>
        <style>
            #div_wrap{
                width: 800px; 
                margin: 0 auto;
            }
            #div_top{
                margin-top: 50px;
            }
            #note{padding: 0 20px;}
            #note span{display: inline-block;}
            #note .col1 {width: 150px;}
            #note li{border-bottom: solid 1px #dddddd; padding: 12px;}
            #note textarea {width: 500px; height: 150px;}
            #note #textarea {position: relative; height: 158px;}
            #note #textarea .col1 {position: absolute; top: 10px;}
            #note #textarea .col2 {position: absolute; left: 166px;}
            input[type="submit"]{
                margin: 10px 0 30px 700px;
                cursor: pointer;
                width: 70px;}
        </style>
    </head>
    <body>
        <div id="div_wrap">
            <?php
                //송신함이면
                if($note_box == 1){
                    $res = mq("SELECT * FROM send_note WHERE note_idx = $note_idx");
                }
                //수신함이면
                else if($note_box == 2){
                    $res = mq("SELECT * FROM recv_note WHERE note_idx = $note_idx");
                    $query = mq("UPDATE send_note SET send_chk = '1' where note_idx = $note_idx");
                    $query = mq("UPDATE recv_note SET recv_chk = '1' where note_idx = $note_idx");
                }

                $row = mysqli_fetch_array($res);
            ?>
            <div id="div_top"></div>
            <hr>
                <div id="note">
                    <ul>
                        <li>
                            <span class="col1">송신자 : </span>
                            <span class="col2"><?php echo $row['send_id'];?></span>
                        </li>
                        <li>
                            <span class="col1">수신자 : </span>
                            <span class="col2"><?php echo $row['recv_id'];?></span>
                        </li>
                        <li>
                            <span class="col1">제목 : </span>
                            <span class="col2"><?php echo $row['title'];?></span>
                        </li>
                        <li id="textarea">
                            <span class="col1">내용 : </span>
                            <span class="col2"><textarea name="content" readonly><?php echo $row['content'];?></textarea>
                            </span>
                        </li>                                
                    </ul>
                </div>
                <button onclick="location.replace('note_recv.php')">수신함</button>
                <button onclick="location.replace('note_send.php')">송신함</button>
                <button id="reply" style="visibility:visible"
                    onclick="location.replace('send_note_page.php?send_id=<?php echo $row['send_id']?>')">답신하기</button>
                <form action="delete_note.php" method="POST" >
                    <input type = "hidden" name="note_idx" value =<?php echo $note_idx;?>>
                    <input type = "hidden" name="note_box" value =<?php echo $note_box;?>>
                    <input type="submit" value="쪽지 삭제" onclick="if(!confirm('쪽지를 삭제하시겠습니까?')){
                        return false;}" >
                </form>             
        </div> 
                <script>
                    var chk = "<?php echo $note_box;?>";
                    const reply = document.getElementById('reply');
                    if(chk==1){
                        reply.style.visibility = 'hidden';
                    }
                    else{
                        reply.style.visibility = 'visible';
                    }
                </script>
    </body>
</html>