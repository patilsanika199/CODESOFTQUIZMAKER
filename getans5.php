<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once '../dbh.inc.php';
		
		if(!isset($_POST['q5']))
		{
			header('Location: ../que5.php');
			exit();
		}
		else
		{
			
			$_SESSION['q5'] = $_POST['q5'];
			header('Location: ../que6.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../que5.php');
		exit();
	}	
?>
