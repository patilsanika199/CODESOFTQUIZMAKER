<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once '../dbh.inc.php';
		
		if(!isset($_POST['q9']))
		{
			header('Location: ../que9.php');
			exit();
		}
		else
		{
			
			$_SESSION['q9'] = $_POST['q9'];
			header('Location: ../que10.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../que9.php');
		exit();
	}	
?>
