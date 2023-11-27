<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once '../dbh.inc.php';
		
		if(!isset($_POST['q2']))
		{
			header('Location: ../que2.php');
			exit();
		}
		else
		{
			$_SESSION['q2'] = $_POST['q2'];
			header('Location: ../que3.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../que2.php');
		exit();
	}	
?>
