<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once '../dbh.inc.php';
		
		if(!isset($_POST['q7']))
		{
			header('Location: ../que7.php');
			exit();
		}
		else
		{
			
			$_SESSION['q7'] = $_POST['q7'];
			header('Location: ../que8.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../que7.php');
		exit();
	}	
?>