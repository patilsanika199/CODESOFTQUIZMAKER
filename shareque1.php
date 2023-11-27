<?php
	include 'header4.php';
?>
<section>
		<div class="middle-que">
			<form action="includefrd/shareans1.php" method="POST" name = "quiz">
				<p class="middle-one">(1) What is <?php session_start(); include 'getusername1.php'; ?> like to do most?</p>
				<p class="middle-two"><input type="radio" name="q1" value="a" >  A)Studying<br>
				<input type="radio" name="q1" value="b">  B)Exercise<br>
				<input type="radio" name="q1" value="c">  C)Watching TV<br>
				<input type="radio" name="q1" value="d">  D)Spending time with mobile<br></p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer4.php';
?>