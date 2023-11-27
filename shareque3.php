<?php
	include 'header4.php';
?>
<section>
		<div class="middle-que">
			<form action="includefrd/shareans3.php" method="POST" name = "quiz">
				<p class="middle-one">(3) What is the more important for <?php session_start(); include 'getusername1.php'; ?>?</p>
				<p class="middle-two">
				<input type="radio" name="q3" value="a">  A) Money<br>
				<input type="radio" name="q3" value="b">  B) Happiness<br>
			
				</p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer4.php';
?>