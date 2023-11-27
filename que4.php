<?php
	include 'header2.php';
?>
<section>
		<div class="middle-que">
			<form action="includeuser/getans4.php" method="POST" name = "quiz">
				<p class="middle-one">(4) Which mobile do you prefer to use?</p>
				<p class="middle-two">
				<input type="radio" name="q4" value="a">  A) Android<br>
				<input type="radio" name="q4" value="b">  B) Iphone<br>
				<input type="radio" name="q4" value="c">  C) Windows</p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer2.php';
?>