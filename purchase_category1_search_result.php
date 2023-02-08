<?php 
    include "inc/db.php";
    session_start();
    $userid = $_SESSION['userid'];
    /* 검색 변수 */
    $catagory = $_GET['catgo'];
    $search_con = $_GET['search'];
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
                     <h2>구매게시판</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <ul class="nav nav-pills nav-fill category_ul">
         <li class="nav-item li_active">
            <a class="nav-link" href="purchase_category1.php">교자재</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="purchase_category2.php">기자재</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="purchase_category3.php">식권</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="purchase_category4.php">생활용품</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="purchase_category5.php">기타</a>
         </li>
         </ul>
      <?php if(isset($_SESSION['userid'])) {
                  echo "<div class='write_btn_div'><button class='write_btn' type='button' onclick='location.href=\"writer.php\"'>글쓰기</button></div>";
               } ?>
      <div id="project" class="project" style="padding:0;">
      <div class="container">
      <div class="purchase_main">
            <table class="table table-hover">
            <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
        </thead>
        <?php
          $sql2 = mq("select * from board where $catagory like '%$search_con%' and category = '1' and ps = '2' order by idx desc");
          while($board = $sql2->fetch_array()){
           
          $title=$board["title"]; 
            if(strlen($title)>30)
              { 
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
            $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
            $rep_count = mysqli_num_rows($sql3);
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['idx']; ?></td>
          <td width="500">
            <?php 
              if($board['lock_post']=="1")
              { ?><a href='ck_read.php?idx=<?php echo $board["idx"];?>'><?php echo $title;
              }else{?>
        <?php
          $boardtime = $board['date']; //$boardtime변수에 board['date']값을 넣음
          $timenow = date("Y-m-d"); //$timenow변수에 현재 시간 Y-M-D를 넣음
          
          ?>
        <!--- END -->
        <a href='read.php?idx=<?php echo $board["idx"]; ?>'><?php echo $title; }?></span><span class="re_ct">[<?php echo $rep_count;?>]<?php echo $img; ?> </span></a></td>
          <td width="120"><?php echo $board['name']; ?></td>
          <td width="100"><?php echo $board['date']; ?></td>
          <td width="100"><?php echo $board['hit']; ?></td>

        </tr>
      </tbody>
      <?php } ?>
    </table>
   </div>
    <!-- 검색 추가 -->
    <div id="search_box2" class="search_box">
      <form action="purchase_category1_search_result.php" method="get">
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
</div>

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

