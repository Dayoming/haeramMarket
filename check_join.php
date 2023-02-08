<?
header("Content-Type: text/html; charset=UTF-8");
function check_join($userEmail, $userid, $userPw, $userName, $userDepart, $userBirth) {
        global $con;
        global $table;
        global $errormsg;

        $userEmail = $_POST['userEmail'];
        $userid = $_POST['userId'];
        $userpw = $_POST['userPw'];
        $userName = $_POST['userName'];
        $userDepart = $_POST['userDepart'];
        $userBirth = $_POST['userBirth'];

        $query = "INSERT INTO user_info(user_email, user_id, user_pw, user_name, user_depart,
        user_birth, user_profile) VALUES('$userEmail', '$userid', '$userpw', '$userName', '$userDepart', '$userBirth', 'images/profile_default.png')";
        
        $result = mysql_query($query, $con);

        if ($result) {
            return 1;
        } else {
            $errormsg = "회원가입에 실패했습니다. 다시 시도해주세요.";
            return 0;
        }
}

        $table = "user_info";

        $con = mysql_connect('localhost', 'root', 'apmsetup');
        mysql_select_db('haeram_market', $con);
        $join_result = check_join($userEmail, $userid, $userPw, $userName, $userDepart, $userBirth);

        if ($join_result == 0) {
            echo "<script type='text/javascript'>alert('".$errormsg."');
            location.replace('./join-certified.php');</script>";
        } else {
            echo "<script type='text/javascript'>alert('회원가입을 완료했습니다. 로그인 해주세요.');
            location.replace('./login.php');</script>";
        }
?>