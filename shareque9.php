<?php
	include 'header4.php';
?>
<section>
		<div class="middle-que">
			<form action="includefrd/shareans9.php" method="POST" name = "quiz">
				<p class="middle-one">(9) What is the more important for <?php session_start(); include 'getusername1.php'; ?>?</p>
				<p class="middle-two">
				<input type="radio" name="q9" value="a">  A) Inner peace<br>
				<input type="radio" name="q9" value="b">  B) Outer peace<br>
</p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer4.php';
?>