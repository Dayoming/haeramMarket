<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="ko">
   <?php include("inc/head.php"); ?>
   <!-- body -->
   <body class="main-layout">
      <?php include("inc/header.php"); ?>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1><span class="blodark"> HaeramMarket</span><br>WEB</h1>
                     <p>for Buying and Selling Used Stuff </p>
                     <a class="read_more" href="/sale_board.php">Shop now</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img">
                     <!-- <figure><img src="images/ban_img.png" alt="#"/></figure> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- six_box section -->
      <div class="six_box">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/machine-learning.png" alt="#"/></i>
                     <span>기자재</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/ticket.png" alt="#"/></i>
                     <span>식권구매/판매</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/daily-tasks.png" alt="#"/></i>
                     <span>생활용품</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/book-stack.png" alt="#"/></i>
                     <span>교자재</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/apple.png" alt="#"/></i>
                     <span>식품</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/paper.png" alt="#"/></i>
                     <span>그 외</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end six_box section -->
     
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

