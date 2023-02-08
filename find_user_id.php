<?php
    include_once("inc/db.php");
    $user_email = $_POST["userEmail"];

    $res = mq("SELECT * FROM user_info WHERE user_email = '$user_email'");
    $user_info = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="ko">
   <?php include("inc/head.php"); ?>
   <!-- body -->
   <body class="main-layout footer_to90 contact_page">
      <?php include("inc/header.php"); ?>
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
      <div id="join-certified" class="join-certified">
         <div class="con_bg">
            <div class="container">
               <div class="col-md-10 offset-md-1">
                  <form id="findUserId" class="main_form" action="find_user_pw.php" method="get">
                    <?php if (isset($user_info['user_id'])) { ?>
                        <p class="description">
                        가입하셨던 아이디 정보입니다. <br>
                        비밀번호를 잊으셨다면, 새로운 비밀번호를 이메일로 발급 받으시겠습니까?
                        </p>
                        <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <input class="joinus" id="userId" placeholder="ID" type="text" name="userId"
                           value="<?php echo $user_info['user_id']; ?>" readonly>
                        </div>
                     </div>
                     <div class="send-div">
                        <div class="col-md-12">
                           <button class="send_btn" type="button" onclick="submit();">OK</button>
                           <button class="send_btn" type="button" style="margin-left: 100px;" onclick="location.href='index.php';">NO</button>
                        </div>
                     </div>
                    <?php } else { ?>
                        <p class="description">
                        해당 이메일로 가입하신 아이디가 없습니다. <br>
                        회원가입 하시겠습니까?
                        </p>
                        <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <input class="joinus" id="userId" placeholder="ID" type="text" name="userId"
                           value="가입하신 아이디가 없습니다." readonly>
                        </div>
                     </div>
                     <div class="send-div">
                        <div class="col-md-12">
                           <button class="send_btn" type="button" onclick="location.href='join-certified.php';">OK</button>
                           <button class="send_btn" type="button" style="margin-left: 100px;" onclick="location.href='index.php';">NO</button>
                        </div>
                     </div>
                    <?php } ?>
                     
                     
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
         // 이메일 유효성 검증 함수
         verifyEmail = function() {
            let regex = new RegExp('[a-z0-9]+@gwnu.ac.kr');
            let email = document.getElementById('userEmail').value;
      
            if (email == '') {
               document.querySelector('.validate_1').style.display = 'none';
               document.querySelector('.validate_2').style.display = 'block';
            } else if (!regex.test(email)) {
               document.querySelector('.validate_1').style.display = 'block';
               document.querySelector('.validate_2').style.display = 'none';
            } else {
               document.getElementById('findUserId').submit();
            }
         }

      </script>
   </body>
</html>

