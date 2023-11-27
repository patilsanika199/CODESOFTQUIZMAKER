<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once '../dbh.inc.php';
		
		if(!isset($_POST['q3']))
		{
			header('Location: ../que3.php');
			exit();
		}
		else
		{
			
			$_SESSION['q3'] = $_POST['q3'];
			header('Location: ../que4.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../que3.php');
		exit();
	}	
?>
