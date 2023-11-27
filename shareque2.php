<?php
	include 'header4.php';
?>
<section>
		<div class="middle-que">
			<form action="includefrd/shareans2.php" method="POST" name = "quiz">
				<p class="middle-one">(2)How is the <?php session_start(); include 'getusername1.php'; ?>'s nature ?</p>
				<p class="middle-two"><input type="radio" name="q2" value="a" >  A) Aggressive<br>
				<input type="radio" name="q2" value="b">  B) Calm<br>
				<input type="radio" name="q2" value="c">  C) Helping<br>
				<input type="radio" name="q2" value="d">  D) Bad<br></p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer4.php';
?>