<?php 
    include_once("inc/db.php");

    session_start();
    $user_id = $_SESSION['userid'];

    $user_idx = mq("SELECT user_idx FROM user_info WHERE user_id='$user_id'");
    $user_idx = mysqli_fetch_row($user_idx);
    $user_idx = $user_idx[0];
    // 임시로 저장된 정보(tmp_name)
    $tempFile = $_FILES['imgFile']['tmp_name'];
    

    // 파일타입 및 확장자 체크
    $fileTypeExt = explode("/", $_FILES['imgFile']['type']);

    // 파일 타입 
    $fileType = $fileTypeExt[0];

    // 파일 확장자
    $fileExt = $fileTypeExt[1];

    // 확장자 검사
    $extStatus = false;

    switch($fileExt){
        case 'jpeg':
            $extStatus = true;
            break;
        
        default:
            echo "$fileExt";
            echo "<script>alert('jpg 이미지 파일만 호환됩니다.');</script>";
            echo("<script>location.replace('edit_user_info.php');</script>"); 
            exit;
            break;
    }

    if($fileType == 'image'){

        if($extStatus){

            $resFile = "profiles/{$_FILES['imgFile']['name']}";
            // 임시 저장된 파일을 우리가 저장할 디렉토리 및 파일명으로 옮김
            $imageUpload = move_uploaded_file($tempFile, $resFile);
            if($imageUpload == true){
                unlink('profiles/'.$user_idx.'.jpg');
                rename('profiles/'.$_FILES['imgFile']['name'], 'profiles/'.$user_idx.'.jpg');
                $sql = mq("UPDATE user_info SET user_profile = 'profiles/$user_idx.jpg' WHERE user_idx = '$user_idx'");
                echo "<script>alert('프로필사진이 수정되었습니다.');</script>";
                echo("<script>location.replace('mypage.php');</script>"); 
                
            }else{
                echo "<script>alert('프로필사진 수정이 실패했습니다.');</script>";
                echo("<script>location.replace('edit_user_info.php');</script>"); 
            }
        }	
        else {
            echo "파일 확장자는 jpeg 이어야 합니다.";
            exit;
        }	
    }	
    else {
        echo "이미지 파일이 아닙니다.";
        exit;
    }
?>