
<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once 'dbh.inc.php';
		
		if(!isset($_POST['q5']))
		{
			header('Location: ../shareque5.php');
			exit();
		}
		else
		{
			
			$_SESSION['q5'] = $_POST['q5'];
			
			header('Location: ../shareque6.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../shareque5.php');
		exit();
	}	
?>
