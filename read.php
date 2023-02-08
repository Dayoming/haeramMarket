<?php
   session_start();
   include ("inc/db.php");
   $userid = $_SESSION['userid'];
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
         <div class="container">
         <?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
		$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read" class="board_read">
	<h2><?php echo $board['title']; ?></h2>
		<div id="user_info">
         <?php echo $board['name']; ?> <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?>
         <div id="bo_line"></div>
      </div>
      <hr>
			<div id="bo_content">
            <p>구매 희망 장소 : <?php echo $board['place']; ?></p>
				<?php echo nl2br("$board[content]"); ?>
			</div>
			<div class="viewStory">
			<?php 
                    if(!$board['image']){

                    } else { ?>
                        <br><img src="<?php echo 'image/'.$board['image']; ?>"></img>;
                   <?php }
                ?>
            </div>
            </div>
			</div>
			<center>가격 : <?php echo $board['price']; ?></center>
	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser" class="container bo_ser">
		<ul>
			<li><a href="javascript:history.back();">목록으로</a></li>
         <?php if ($userid == $board['name']) { ?>
            <li><a href="modify.php?idx=<?php echo $board['idx']; ?>">수정</a></li>
            <li><a href="delete.php?idx=<?php echo $board['idx']; ?>">삭제</a></li>
         <?php } ?>
		</ul>
	</div>
</div>
<!--- 댓글 불러오기 -->
<div class="container reply_view">
	<h3>댓글목록</h3>
   <hr>
		<?php
			$sql3 = mq("select * from reply where con_num='".$bno."' order by idx desc");
			while($reply = $sql3->fetch_array()){ 
		?>
		<div class="dap_lo">
			<div><b><?php echo $reply['name'];?></b></div>
			<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<div class="rep_me rep_menu">
			<!-- 댓글 삭제 -->
         <?php if ($userid == $reply['name']) { ?>
			<div class='dat_delete'>
				<form action="reply_delete_ok.php" method="post">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
			 		<input type="submit" class="dat_delete_bt" value="삭제"></p>
				 </form>
             <button class="dat_edit_bt" onclick="toggleModify(<?php echo $reply['idx']?>);">수정</a>
			</div>
         <?php } ?>
         <!-- <button class="dat_delete_bt" href="#">삭제</a> -->
			</div>
			<!-- 댓글 수정 폼 dialog -->
			<div id="modifyDap<?php echo $reply['idx']?>" class="dap_ins" style="display: none;">
				<form method="post" action="reply_modify_ok.php">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
					<textarea name="content" class="dap_edit_t"><?php echo $reply['content']; ?></textarea>
					<input type="submit" value="수정" class="re_mo_bt">
				</form>
			</div>
		</div>
	<?php } ?>

	<!--- 댓글 입력 폼 -->
	<div class="dap_ins">
		<form action="reply_ok.php?idx=<?php echo $bno; ?>" method="post">
			<div style="margin-top:10px; ">
				<textarea name="content" class="reply_content" id="re_content" ></textarea>
				<button id="rep_bt" class="re_bt" onclick="location.href='reply_ok.php';">작성</button>
			</div>
		</form>
	</div>
</div><!--- 댓글 불러오기 끝 -->
<div id="foot_box"></div>
</div>
        </div>
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

      <script>
         function toggleModify(i) {
            if (document.getElementById('modifyDap' + i).style.display === 'none') {
               document.getElementById('modifyDap' + i).style.display = 'block';
            } else {
               document.getElementById('modifyDap' + i).style.display = 'none';
            }
         }
      </script>
   </body>
</html>

