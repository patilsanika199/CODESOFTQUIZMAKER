<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once 'dbh.inc.php';
		
		if(!isset($_POST['q2']))
		{
	
			header('Location: ../shareque2.php');
			exit();
		}
		else
		{
			
			$_SESSION['q2'] = $_POST['q2'];
			header('Location: ../shareque3.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../shareque2.php');
		exit();
	}	
?>
