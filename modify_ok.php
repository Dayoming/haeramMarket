<?php
include "inc/db.php";

$bno = $_GET['idx'];
$username = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$price = $_POST['price'];
$place = $_POST['place'];

$sql = mq("UPDATE board SET name='".$username."',title='".$title."',content='".$content."', price='".$price."', place='".$place."' where idx='".$bno."'"); ?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=/read.php?idx=<?php echo $bno; ?>">