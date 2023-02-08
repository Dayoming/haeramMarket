<?php
   session_start();
   include ("inc/db.php");
?>
<!DOCTYPE html>
<html lang="ko">
<?php include("inc/head.php"); ?>
   <!-- body -->
   <body class="main-layout">
      <?php include("inc/header.php"); ?>
      <!-- end header inner -->
      <!-- end header -->
      <!-- project section -->
      <div id="project" class="project">
         <div class="container write_main">
         <form action="write_ok.php" method="post" enctype="multipart/form-data">
                <h1 style="margin-bottom: 10px;">게시글을 선택해 주세요.</h1>
                <select name="PS">
                             <option value="1">판매글</option>
                             <option value="2">구매글</option>
                            </select>
                    <div class="wi_line"></div>
                    <div id="in_title">
                        <input type="text" class="write_input" name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                        <input type="text" class="write_input" name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" value="<?php echo $_SESSION['userid']; ?>" readonly></input>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                    <h1 style="margin-top: 10px; margin-bottom: 10px;">카테고리를 선택해 주세요.</h1>
                        <select name="catgo">
                             <option value="1">교자재</option>
                             <option value="2">기자재</option>
                             <option value="3">식권</option>
                             <option value="4">생활용품</option>
                             <option value="5">기타</option>
                            </select>
                    </div>
                    <div id="in_place">
                        <input type="text" class="write_input" name="place" id="place"  placeholder="판매/구매 희망장소" required />  
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <input type="text" class="write_input" name="content" id="ucontent" placeholder="내용" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                        <input type="text" class="write_input" name="price" id="uprice" rows="1" cols="55" placeholder="판매가격" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <td>제품 사진 : </td>
                    <input type="file" name="image">
                    <div class="bt_se">
                        <button type="submit" class="custom_btn">글 작성</button>
                    </div>
                </form>
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

