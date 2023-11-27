<?php
	include 'header2.php';
?>
<section>
		<div class="middle-que">
			<form action="includeuser/getans5.php" method="POST" name = "quiz">
				<p class="middle-one">(5) What is the more preferable for you?</p>
				<p class="middle-two">
				<input type="radio" name="q5" value="a">  A) Love before career<br>
				<input type="radio" name="q5" value="b">  B) Career before love<br>
				<input type="radio" name="q5" value="c">  C) Love and career simultaneously<br>
				</p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer2.php';
?>