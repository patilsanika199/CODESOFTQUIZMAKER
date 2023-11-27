<?php
	include 'header3.php';
?>
	<section>
		
		<div class="link">
			<p><b><u>Copy and Share the link with your Friends</u></b></p>
            <?php
                session_start();
                // $_SESSION['uid']  = $_SESSION['last_id1'];
                $link='localhost/myquiz/<br>friend/frdname<br>.php?id='.$_SESSION['last_id1'];
                echo "<span>$link</span>";
            ?>
            <form action="showme.php" method="POST">
				<button class="btn" type="submit" name="submit" value="submit">View Results</button>
			</form>
		</div>
	</section>
<?php
// session_start();
		// $_SESSION['uid']  = $_SESSION['last_id1'];
?>
<?php
	include 'footer3.php';
?>
