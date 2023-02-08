<?php
    $userEmail = $_POST['userEmail'];
    header("Content-Type: text/html; charset=UTF-8");
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
                  <form id="checkJoin" class="main_form" action="./check_join.php" method="post">
                    <p class="description">
                        아래 항목을 빠짐없이 기재해주세요.
                    </p>
                     <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <?php echo "<input class='joinus' id='userEmail' placeholder='userEmail' type='text' name='userEmail' value='".$userEmail."' readonly>"; ?>
                        </div>
                        <div class="col-md-8 col-sm-8">
                           <input class="joinus" id="userId" placeholder="ID" type="text" name="userId">
                        </div>
                        <div class="col-md-8 col-sm-8">
                           <input class="joinus" id="userPw" placeholder="Password" type="password" name="userPw">
                        </div>
                        <div class="col-md-8 col-sm-8">
                           <input class="joinus" id="userName" placeholder="Username" type="text" name="userName">
                        </div>
                        <div class="col-md-8 col-sm-8">
                           <input class="joinus" id="userDepart" placeholder="Depart" type="text" name="userDepart">
                        </div>
                        <div class="col-md-8 col-sm-8">
                           <input class="joinus" id="userBirth" placeholder="Birthday" type="date" name="userBirth">
                        </div>
                     </div>
                     <div class="send-div">
                        <div class="col-md-12">
                           <button class="send_btn" type="submit">Send</button>
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

