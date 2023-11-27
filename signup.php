<?php
	include 'header2.php';
?>
	<section>
		<div class="middle">
			<form action="includeuser/checksubmit.inc.php" method="POST">
				<p class="middle-two">Enter Your Name</p>
				<input type="text" name="name"><br>
				<p id="note"></p>
				<button type="submit" name="submit" value="submit">Submit</button>
			</form>
		</div>
	</section>
<?php
	include 'footer2.php';
?>