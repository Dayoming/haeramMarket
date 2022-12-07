<?

function check_join($userEmail, $userid, $userPw, $userName, $userDepart, $userBirth) {
        global $con;
        global $table;
        global $errormsg;

        $userEmail = $_POST['userEmail'];
        $userid = $_POST['userid'];
        $userpw = $_POST['userPw'];
        $userName = $_POST['userName'];
        $userDepart = $_POST['userDepart'];
        $userBirth = $_POST['userBirth'];

        $query = "INSERT INTO user_info(user_email, user_id, user_pw, user_name, user_depart,
        user_birth) VALUES('$userEmail', '$userid', '$userpw', '$userName', '$userDepart', '$userBirth')";
        
        $result = mysql_query($query, $con);

        if ($result == false) {
            $errormsg = "회원가입에 실패했습니다. 다시 시도해주세요.";
            return false;
        } else {
            return true;
        }
}

        $table = "user_info";

        $con = mysql_connect('localhost', 'root', 'apmsetup');
        mysql_select_db('haeram_market', $con);
        $join_result = check_join($userEmail, $userid, $userPw, $userName, $userDepart, $userBirth);

        header("Content-Type: text/html; charset=UTF-8");

        if ($join_result == false) {
            echo "<script type='text/javascript'>alert('".$errormsg."');
            location.replace('./join-certified.php');</script>";
        } else {
            echo "<script type='text/javascript'>alert('회원가입을 완료했습니다. 로그인 해주세요.');
            location.replace('./login.html');";
        }
?>