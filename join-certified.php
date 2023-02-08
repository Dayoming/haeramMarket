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
                  <form id="joinCertified" class="main_form" action="./join_email_send.php" method="post">
                    <p class="description">
                        학교 메일을 입력해주세요. <br>Send 버튼을 누르면 해당 이메일로 6자리 코드를 보내드립니다.
                    </p>
                    <div class="validate_1" style="margin: 0 auto; display: none;">
                           <p style="color: red;">이메일 형식이 옳지 않거나 강릉원주대학교 웹 메일이 아닙니다.</p>
                        </div>
                        <div class="validate_2" style="margin: 0 auto; display: none;">
                           <p style="color: red;">이메일을 입력해주세요.</p>
                        </div>
                     <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <input class="joinus" id="userEmail" placeholder="Email" type="email" name="userEmail">
                        </div>
                     </div>
                     <div class="send-div">
                        <div class="col-md-12">
                           <button class="send_btn" type="button" onclick="verifyEmail();">Send</button>
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
               document.getElementById('joinCertified').submit();
            }
         }

      </script>
   </body>
</html>

