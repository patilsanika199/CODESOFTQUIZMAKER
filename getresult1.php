<?php
	include 'header4.php';
	include 'includefrd/finalresult.php';
	$sql = "INSERT INTO sharefrdsfinal(fname,fq1,fq2,fq3,fq4,fq5,result,uid) VALUES ('{$_SESSION['name']}','{$_SESSION['q1']}','{$_SESSION['q2']}','{$_SESSION['q3']}','{$_SESSION['q4']}','{$_SESSION['q5']}','{$_SESSION['fscore']}','{$_SESSION['id']}');";
			mysqli_query($conn,$sql);
?>
<section>
		
		<div class="rslt">
			<p>Your score is : <b><?php echo $_SESSION['fscore']; ?></b> out of 10</p>
			<p><?php frd(); ?></p>

            <form action="../index.php" method="POST">
				<button class="btn" type="submit" name="submit" value="submit">Create your Quiz</button>
			</form>
		</div>
</section>
<?php
	include 'footer4.php';
?>