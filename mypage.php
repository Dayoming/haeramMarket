<?php
   session_start();
   include ("inc/db.php");
    /* 검색 변수 */
    $user_id = $_SESSION['userid'];
    $res = mq("SELECT * FROM user_info WHERE user_id = '$user_id'");
    $user_info = mysqli_fetch_array($res);
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
                     <h2>마이페이지</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="project" class="project" style="padding:0;">
        <div class="container">
             <div class="mypage_main">
             <div id="div_wrap">
            <div id="div_top">
            </div>
            <div id="div_user">
                <div id="photo">
                    <img src="<?php echo $user_info['user_profile']?>" 
                        onError="this.src='/images/profile_default.png';"
                        width="180px" height="180px">
                </div>
                <div id="user_info">
                    <div id="name">
                        <b><?php echo $user_info['user_name'];?></b><br>
                    </div>
                    <b style="font-size:12px; color:#f3a20d;">&nbsp;Email</b><br>
                    <b>&nbsp;&nbsp;<?php echo $user_info['user_email'];?></b><hr style="width:100%;"><br>                    
                    <b style="font-size:12px; color:#f3a20d;">&nbsp;Dept</b><br>
                    <b>&nbsp;&nbsp;<?php echo $user_info['user_depart'];?></b><hr style="width:100%;"><br>                    
                    <b style="font-size:12px; color:#f3a20d;">&nbsp;Birth</b><br>
                    <b>&nbsp;&nbsp;<?php echo $user_info['user_birth'];?></b><hr style="width:100%;"><br>
                </div>
            </div>
            <div id="div_sale_details">
                <br>
                <div id="table_name"><b>판매/구매내역</b></div><br>
                <table class="table table-bordered" style="text-align: center;">
                    <thead>
                        <tr>
                            <th width="100">번호</th>
                            <th width="400">제목</th>
                            <th width="100">카테고리</th>
                            <th width="100">가격</th>
                            <th width="300">장소</th>
                            <th width="200">등록날짜</th>
                        </tr>
                    </thead>
                    <?php
                        $res = mq("SELECT * FROM board 
                            WHERE name = '$user_id' ORDER BY idx DESC");

                        if(!empty($res)|| $res == true){
                        while($row = mysqli_fetch_array($res)){
                    ?> 
                        <tbody>
                            <tr>
                            <td><?php echo $row['idx'];?></td>
                            <td><?php echo $row['title'];?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo $row['price'];?></td>
                            <td><?php echo $row['place'];?></td>
                            <td><?php echo $row['date'];?></td>
                        </tbody>
                <?php }
                } ?>
                </table>
            </div>
            <div id="div_button">
                <input type="button" class="custom_btn" value="쪽지함" onclick="window.open('note_recv.php', 'Note', 'width=1000, height=1000');">
                <form action="edit_user_info.php" >
                    <input type="submit" class="custom_btn" value="회원정보수정">
                </form>
                <form action="delete_user.php" >
                    <input type="submit" class="custom_btn" value="회원탈퇴" onclick="if(!confirm('정말 탈퇴하시겠습니까?')){
                        return false;}" >
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

