<?php
   session_start();
   include ("inc/db.php");
?>
<!DOCTYPE html>
<html lang="ko">
   <?php include("inc/head.php");
     /* 검색 변수 */
  $catagory = $_GET['catgo'];
  $search_con = $_GET['search']; ?>
   <!-- body -->
   <body class="main-layout footer_to90 project_page">
      <?php include("inc/header.php"); ?>
      <!-- end header inner -->
      <!-- end header -->
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>판매게시판</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <ul class="nav nav-pills nav-fill category_ul">
         <li class="nav-item li_active">
            <a class="nav-link" href="sale_category1.php">교자재</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="sale_category2.php">기자재</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="sale_category3.php">식권</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="sale_category4.php">생활용품</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="sale_category5.php">기타</a>
         </li>
         </ul>
      <?php if(isset($_SESSION['userid'])) {
                  echo "<div class='write_btn_div'><button class='write_btn' type='button' onclick='location.href=\"writer.php\"'>글쓰기</button></div>";
               } ?>
      <!-- project section -->
      <div id="project" class="project" style="padding:0;">
         <div class="container">
            <div class="sale_main">
            <ul class="cards">
            <?php
          $sql2 = mq("select * from board where $catagory like '%$search_con%' and ps = '1' order by idx desc");
          while($board = $sql2->fetch_array()){
           
          $title=$board["title"]; 
            if(strlen($title)>30)
              { 
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
            $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
            $rep_count = mysqli_num_rows($sql3);
        ?>
               <li>
                  <a href="read.php?idx=<?php echo $board['idx']; ?>" class="card">
                  <?php 
                    if(!$board['image']){
                        echo "<img src='images/no-camera.png' class='card__image' alt=''></img>";
                    } else{
                        echo "<img src='image/$board[image]' class='card__image' alt=''></img>"; 
                    }
                ?>
                     <div class="card__overlay">
                     <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <img class="card__thumb" src="images/profile_default.png" alt="" />
                        <div class="card__header-text">
                           <h3 class="card__title"><?php echo $title; ?></h3>            
                           <span class="card__status"><?php echo $board['date']; ?></span>
                        </div>
                     </div>
                     <p class="card__description"><?php echo $board['content']; ?></p>
                     </div>
                  </a>      
               </li>
         <?php } ?>
               </ul>
            </div>
            <div id="search_box2" class="search_box">
               <form action="sale_search_result.php" method="get">
               <select id="select-box1" name="catgo">
               <option value="title">제목</option>
               <option value="name">글쓴이</option>
               <option value="content">내용</option>
               </select>
               <input type="text" name="search" size="40" required="required"/> <button class="search_btn">검색</button>
            </form>
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

