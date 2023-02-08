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
                     <h2>Login</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section -->
      <div id="login" class="login">
         <div class="con_bg">
            <div class="container">
               <div class="col-md-10 offset-md-1">
                  <form id="login" class="main_form" action="check_login.php" method="post">
                     <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <input class="loginus" placeholder="ID" type="text" name="userid"> 
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <input class="loginus" placeholder="Password" type="password" name="passwd" style="margin-bottom: 10px;"> 
                           <p class="find-link">
                              <a href="/find_user_page.php">아이디/비밀번호 찾기</a>
                           </p>
                        </div>
                     </div>
                     <div class="send-div">
                        <div class="col-md-12">
                           <button class="send_btn" type="submit">Send</button>
                           <button class="send_btn" type="button" style="margin-left: 100px;" onclick="location.href='./join-certified.php';">Join</button>
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
   </body>
</html>

