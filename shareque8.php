<?php
	include 'header4.php';
?>
<section>
		<div class="middle-que">
			<form action="includefrd/shareans8.php" method="POST" name = "quiz">
				<p class="middle-one">(8) If <?php session_start(); include 'getusername1.php'; ?> have to leave one person from his/her best friend and boy friend/girl friend in any serious situation then whom will he/she leave? </p>
				<p class="middle-two">
				<input type="radio" name="q8" value="a">  A) Best friend<br>
				<input type="radio" name="q8" value="b">  B) Boy friend/Girl friend<br>
</p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer4.php';
?>