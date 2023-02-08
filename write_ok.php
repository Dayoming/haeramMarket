<?php

include ("inc/db.php");
session_start();
$user_id = $_SESSION['userid'];
$user_name = $_SESSION['userName'];
$date = date('Y-m-d');
$place = $_POST['place'];

if($_FILES['image']['name']) {
    $imageFullName = strtolower($_FILES['image']['name']);
    $imageNameSlice = explode(".",$imageFullName);
    $imageName = $imageNameSlice[0];
    $imageType = $imageNameSlice[1];
    $image_ext = array('jpg','jpeg','gif','png');
    if(array_search($imageType,$image_ext) === false) {
        errMsg('jpg, jpeg, gif, png 확장자만 가능합니다.');
    }
    $dates = date("mdhis",time());
    $newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
    $dir = "image/";
    move_uploaded_file($_FILES['image']['tmp_name'],$dir.$newImage);
 }

$mqq = mq("alter table board auto_increment =1"); //auto_increment 값 초기화

$sql= mq("insert into board(name,pw,title,content,date,category,price,ps,image,place) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."','".$_POST['catgo']."','".$_POST['price']."','".$_POST['PS']."', '".$newImage."', '".$_POST['place']."')");
echo "<script>alert('글쓰기 완료되었습니다.');</script>";
?>
<meta http-equiv="refresh" content="0 url=/index.php" />