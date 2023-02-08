<?php
$code = rand(100000, 999999);
$userEmail = $_POST['userEmail'];

$to = $userEmail;
$subject = "해람마켓 회원가입 인증 코드 발송";
$contents = "Code : ".$code;
$headers = "From: webmaster@localhost\r\n";
$title = "=?utf-8?B?".base64_encode($subject)."?=\n";
mail($to, $title, $contents, $headers);
header("Content-Type: text/html; charset=UTF-8");

?>

<!DOCTYPE html>
<html lang="ko">
   <?php include("inc/head.php"); ?>
   <!-- body -->
   <body class="main-layout footer_to90 contact_page">
      <?php include("inc/header.php") ?>
      <!-- end header -->
      <!-- banner -->
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Join</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section -->
      <div id="join-email-send" class="join-certified">
         <div class="con_bg">
            <div class="container">
               <div class="col-md-10 offset-md-1">
                  <form id="joinEmailSend" class="main_form" action="./join.php" method="post">
                    <p class="description">
                        발송된 코드를 입력해주세요.
                    </p>
                     <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <input class="joinus" id="code" placeholder="Code" type="text" name="code">
                           <?php echo "<input type='hidden' name='userEmail' value='".$userEmail."'>"; ?>
                        </div>
                     </div>
                     <div class="send-div">
                        <div class="col-md-12">
                           <button class="send_btn" type="button" onclick="verifyCode();">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>INFORMATION </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>MY ACCOUNT </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>ABOUT  </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>CONTACTS  </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
         verifyCode = function() {
            let code = document.getElementById('code').value;
            <?echo "let serverCode = ".$code.";" ?>

            if (code != serverCode) {
               alert("코드가 일치하지 않습니다.");
            } else {
               document.getElementById('joinEmailSend').submit();
            }
         }

      </script>
   </body>
</html>

