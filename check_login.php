<?php
    function login($userid, $passwd) {
        global $con;
        global $table;
        global $errormsg;

        $userid = $_POST['userid'];
        $passwd = $_POST['passwd'];

        if(!isset($_SESSION['userid'])) {
            $query = "SELECT user_id, user_pw from $table WHERE user_id='$userid'";
            $result = mysql_query($query, $con);

            if(!mysql_num_rows($result)) {
            $errormsg = "존재하지 않는 계정입니다.";
            return 0;
            } else {
            $dbid = mysql_result($result, 0, "user_id");
            $dbpasswd = mysql_result($result, 0, "user_pw");
            if($dbid==$userid AND $dbpasswd == $passwd) {
                session_start();
                $_SESSION['userid'] = $userid;
                return 1;
            } else {
                $errormsg = $userid."님 패스워드가 틀렸습니다";
                return 0;
            }
            }
        } else {
            session_start();
            $_SESSION['userid'] = $userid;
            return 2;
        }
    }

        $table = "user_info";

        $con = mysql_connect('localhost', 'root', 'apmsetup');
        mysql_select_db('haeram_market', $con);
        $login_result = login($userid, $passwd);

        header("Content-Type: text/html; charset=UTF-8");

        if ($login_result == 0) {
            echo "<script type='text/javascript'>alert('".$errormsg."');
                        location.replace('./login.html');
                    </script>";
        } else {
            if ($login_result == 1) {
                echo "<script>location.replace('./index.php');</script>";
            }
            if ($login_result == 2) {
                echo "<script type='text/javascript'>alert('이미 인증된 사용자입니다. 메인 화면으로 돌아갑니다.');
                location.replace('./index.php');
            </script>";
            }
        }
?>
