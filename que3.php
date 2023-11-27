<?php
	include 'header2.php';
?>
<section>
		<div class="middle-que">
			<form action="includeuser/getans3.php" method="POST" name = "quiz">
				<p class="middle-one">(3) What is the more important for you?</p>
				<p class="middle-two">
				<input type="radio" name="q3" value="a">  A) Money<br>
				<input type="radio" name="q3" value="b">  B) Happiness<br>
			
				</p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer2.php';
?>