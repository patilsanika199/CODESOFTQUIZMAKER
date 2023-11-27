\<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once 'dbh.inc.php';
		
		if(!isset($_POST['q1']))
		{
	
			header('Location: ../shareque1.php');
			exit();
		}
		else
		{
			
			$_SESSION['q1'] = $_POST['q1'];
			header('Location: ../shareque2.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../shareque1.php');
		exit();
	}	
?>
