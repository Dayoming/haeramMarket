<?php
session_start();

header("Content-Type: text/html; charset=UTF-8");

unset($_SESSION["userid"]);

echo "<script type=\"text/javascript\">
        alert(\"로그아웃 되었습니다.\");
        location.href=\"./index.php\";
    </script>";
?>