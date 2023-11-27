<?php
	include 'header2.php';
?>
<section>
		<div class="middle-que">
			<form action="includeuser/getans6.php" method="POST" name = "quiz">
				<p class="middle-one">(6) Which type of movies do you like to watch?</p>
				<p class="middle-two">
				<input type="radio" name="q6" value="a">  A) Action<br>
				<input type="radio" name="q6" value="b">  B) Romantic<br>
				<input type="radio" name="q6" value="c">  C) Inspirational<br>	
				<input type="radio" name="q6" value="d">  D) Comedy<br>
				</p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer2.php';
?>