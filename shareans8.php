
<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once 'dbh.inc.php';
		
		if(!isset($_POST['q8']))
		{
			header('Location: ../shareque8.php');
			exit();
		}
		else
		{
			
			$_SESSION['q8'] = $_POST['q8'];
			
			header('Location: ../shareque9.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../shareque8.php');
		exit();
	}	
?>
