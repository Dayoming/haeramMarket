<?php
    session_start();
    include_once("inc/db.php");
    $user_id = $_SESSION['userid'];
    $user_email = $_SESSION['userEmail'];
?>

<!DOCTYPE html>
<html lang="ko">
   <?php include("inc/head.php"); ?>
   <!-- body -->
   <body class="main-layout footer_to90 project_page">
      <?php include("inc/header.php"); ?>
      <!-- end header inner -->
      <!-- end header -->
      <!-- project section -->
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>회원정보 수정</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="project" class="project" style="padding:0;">
        <div class="container">
             <div class="mypage_main">
             <div id="div_wrap" style="padding-bottom: 50px;">
        <form method="post" action="edit_user.php" style="margin-top: 30px;">
            <table class="table" border="0" width="600" style="margin-top: 50px;">
                <th colspan="2">회원정보수정</th>
                <tr>
                    <td>이메일</td>
                    <td class="line"><?php echo $user_email; ?></td>
                <tr>
                    <td>이름</td>
                    <td class="line"><input type="text" name="edit_name" size=50 ></td>
                </tr>
                <tr>
                    <td>학과</td>
                    <td class="line"><input type="text" name="edit_depart" size=50></td>
                </tr>
                <tr>
                    <td>생년월일</td>
                    <td class="line"><input type="date" name="edit_birth" size=50></td>
                </tr>
            </table><br>
            <div class="btn">
                <input type="reset" class="custom_btn" value="취소">
                <input type="submit" class="custom_btn" value="확인">
            </div><br>
        </form>
        <form method="post" action="edit_user_pw.php" style="margin-top: 30px;">
            <table class="table" border="0" width="600" style="margin-top: 50px;">
                <th colspan="2">패스워드수정</th>
                <tr>
                    <td >현재 패스워드</td>
                    <td class="line"><input type="text" name="check_pw" size=50 ></td>
                </tr>
                <tr>
                    <td>변경 패스워드</td>
                    <td class="line"><input type="text" name="edit_pw" size=50></td>
                </tr>
            </table><br>
            <div class="btn">
                <input type="reset" class="custom_btn" value="취소">
                <input type="submit" class="custom_btn" value="확인">
            </div>
        </form>
        <form method="post" action="edit_profile.php" enctype="multipart/form-data" style="margin-top: 30px;">
            <table class="table" border="0" width="600" style="margin-top: 80px;">
                <th colspan="2">프로필사진수정</th>
                <tr>
                    <td >이미지 선택</td>
                    <td class="line"><input type="file" name="imgFile" size=50 ></td>
                </tr>
            </table><br>
            <div class="btn">
                <input type="reset" class="custom_btn" value="취소">
                <input type="submit" class="custom_btn" value="확인">
            </div>

        </form>
    </div>
        </div>
            </div>
        </div>
    </div>
              
               <!-- <div class="col-md-12">
                  <a class="read_more" href="#">See More</a>
               </div> -->
            </div>
            </div>
         </div>
      </div>
      <!-- end project section -->

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

