<?php
    session_start();
    include_once("inc/db.php");
    $send_id = $_SESSION['userid'];
    $recv_id = $_GET['send_id'];    
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
            #wirte_msg{padding: 0 20px;}
            #note span{display: inline-block;}
            #note .col1 {width: 150px;}
            #note li{border-bottom: solid 1px #dddddd; padding: 12px;}
            #note input {width: 500px; height: 25px;}
            #note textarea {width: 500px; height: 150px;}
            #note #textarea {position: relative; height: 158px;}
            #note #textarea .col1 {position: absolute; top: 10px;}
            #note #textarea .col2 {position: absolute; left: 166px;}
            #note input[type="submit"]{
                margin: 10px 0 30px 700px;
                cursor: pointer;
                width: 70px;}
        </style>
    </head>
    <body>
        <div id="div_wrap">
            <div id="div_top"></div>
            <hr>
            <form action="send_note.php" method="post" name="message_form">
                <div id="note">
                    <ul>
                        <li>
                            <span class="col1">송신자 : </span>
                            <span class="col2"><?php echo $send_id ?></span>
                        </li>
                        <li>
                            <span class="col1">수신자 : </span>
                            <span class="col2"><input type="text" value="<?php echo $recv_id?>" name="recv_id" required></span>
                        </li>
                        <li>
                            <span class="col1">제목 : </span>
                            <span class="col2"><input type="text" name="title" required></span>
                        </li>
                        <li id="textarea">
                            <span class="col1">내용 : </span>
                            <span class="col2"><textarea name="content" required></textarea></span>
                        </li>                                
                    </ul>
                    <input type="submit" value="전송">
            </form>
                </div>
                <button onclick="location.replace('note_recv.php')">수신함</button>
                <button onclick="location.replace('note_send.php')">송신함</button>
        </div> 
    </body>
</html>