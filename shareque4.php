<?php
	include 'header4.php';
?>
<section>
		<div class="middle-que">
			<form action="includefrd/shareans4.php" method="POST" name = "quiz">
				<p class="middle-one">(4) Which mobile <?php session_start(); include 'getusername1.php'; ?> prefer to use?</p>
				<p class="middle-two">
				<input type="radio" name="q4" value="a">  A) Android<br>
				<input type="radio" name="q4" value="b">  B) Iphone<br>
				<input type="radio" name="q4" value="c">  C) Windows</p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer4.php';
?>