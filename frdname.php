<?php
	session_start();
	$_SESSION['id']=$_GET['id'];
	include 'header4.php';
?>
	<section>

		<div class="middle">
			<?php
				include 'getusername.php';
			?>
				<form action="includefrd/validatefrd.php" method="POST">
				<p class="middle-two">Enter Your Name</p>
				<input type="text" name="name"><br><br>
				<p id="note"></p>
				<button type="submit" name="submit" value="submit">Submit</button><br>
				</form>
				 <form action="showme.php" method="POST">
				<button class="btn" type="submit" name="submit" value="submit">View Results</button>
			</form>
		</div>
	</section>
<?php
	include 'footer4.php';
?>
