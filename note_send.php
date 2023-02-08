<?php 
    include_once("inc/db.php");
    session_start();
    $user_id = $_SESSION['userid'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>note_send</title>        
        <style>  
            #div_wrap{
                width: 800px; 
                margin: 0 auto;
            }
            #table{
                width: 100%;
            }
            button{
                margin-top: 10px;
                margin-left: 10px;
                background-color:rgb(224, 224, 224);
                border: 1px solid black;
            }
            a {
                text-decoration: none;
                color: maroon;
                }
            table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            }
            th,
            td {
            padding: 6px 15px;
            }
            th {
            background: #42444e;
            color: #fff;
            text-align: left;
            }
            tr:first-child th:first-child {
            border-top-left-radius: 6px;
            }
            tr:first-child th:last-child {
            border-top-right-radius: 6px;
            }
            td{
                text-overflow: ellipsis;
                overflow: hidden;
                white-space: nowrap; 
                max-width: 130px;
            }
            td {
            border-right: 1px solid #c6c9cc;
            border-bottom: 1px solid #c6c9cc;
            }
            td:first-child {
            border-left: 1px solid #c6c9cc;
            }
            tr:nth-child(even) td {
            background: #eaeaed;
            }
            tr:last-child td:first-child {
            border-bottom-left-radius: 6px;
            }
            tr:last-child td:last-child {
            border-bottom-right-radius: 6px;
            }</style>
    </head>
    <body>
        <div id="div_wrap">
            <table id="table">
                <thead>
                    <tr align=center>
                        <th width="150">수신자</th>
                        <th width="300">제목</th>
                        <th width="600">내용</th>
                        <th width="150">날짜</th>
                        <th width="150">수신여부</th>
                    </tr>
                </thead>
            <?php
                $res = mq("SELECT * FROM send_note WHERE send_id = '$user_id'
                ORDER BY note_idx DESC");

                if(!empty($res)|| $res == true){
                while($row = mysqli_fetch_array($res)){
            ?>
                <tbody>
                    <tr align=center>
                        <td><?php echo $row['recv_id'];?></td>
                        <td><a href="read_note.php?note_idx=<?php echo $row['note_idx']?>&note_box=1"><?php echo $row['title'];?></a></td>
                        <td><?php echo $row['content'];?></td>
                        <td><?php echo $row['send_date'];?></td>
                        <td><?php 
                                if($row['send_chk'] == "0")
                                    echo "읽지않음";
                                else
                                    echo "읽음";?></td>
                <tbody>
            <?php }} ?>
            </table>
            <button onclick="location.href='send_note_page.php'">쪽지쓰기</button>
            <button onclick="location.replace('note_recv.php');">수신함</button>
        </div>
    </body>
</html>