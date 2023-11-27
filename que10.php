<?php
	include 'header2.php';
?>
<section>
		<div class="middle-que">
			<form action="includeuser/getans10.php" method="POST" name = "quiz">
				<p class="middle-one">(10) Do you like music?</p>
				<p class="middle-two">
				<input type="radio" name="q10" value="a">  A) Yes<br>
				<input type="radio" name="q10" value="b">  B) No<br>
				<input type="radio" name="q10" value="c">  C) Sometimes<br></p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer2.php';
?>