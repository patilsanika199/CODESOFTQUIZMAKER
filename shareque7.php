<?php
	include 'header4.php';
?>
<section>
		<div class="middle-que">
			<form action="includefrd/shareans7.php" method="POST" name = "quiz">
				<p class="middle-one">(7) Does <?php session_start(); include 'getusername1.php'; ?> is lazy in his/her work?</p>
				<p class="middle-two">
				<input type="radio" name="q7" value="a">  A) Yes<br>
				<input type="radio" name="q7" value="b">  B) No<br>
</p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer4.php';
?>