<!-- loader  -->
<div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_midil">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-4">
                        <ul class="conta_icon d_none1">
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <a class="logo" href="/index.php"><img src="images/logo.png" alt="#"/></a>
                     </div>
                     <div class="col-md-4">
                        <ul class="right_icon d_none1">
                           <? if (!isset($_SESSION['userid'])) {
                              echo "<a href='./login.php' class='order'>Login</a>";
                           } else {
                              echo "<a href='./logout.php' class='order'>Logout</a>"; 
                           } ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="./index.php">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="purchase_board.php">Purchase</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="sale_board.php">Sale</a>
                                 </li>
                                 <? if (isset($_SESSION['userid'])) {
                                    echo "<li class='nav-item'>
                                    <a class='nav-link' href='mypage.php'>MyPage</a></li>";
                                 } ?>
                                 
                                 <!-- <li class="nav-item">
                                    <a class="nav-link" href="fashion.html">Fashion</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="news.html">News</a>
                                 </li> -->
                                 <!-- <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                 </li> -->
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->