<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once '../dbh.inc.php';
		
		if(!isset($_POST['q4']))
		{
			header('Location: ../que4.php');
			exit();
		}
		else
		{
			
			$_SESSION['q4'] = $_POST['q4'];
			header('Location: ../que5.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../que4.php');
		exit();
	}	
?>
