
<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once 'dbh.inc.php';
		
		if(!isset($_POST['q9']))
		{
			header('Location: ../shareque9.php');
			exit();
		}
		else
		{
			
			$_SESSION['q9'] = $_POST['q9'];
			
			header('Location: ../shareque10.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../shareque9.php');
		exit();
	}	
?>
