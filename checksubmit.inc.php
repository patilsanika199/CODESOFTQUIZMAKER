<?php
	
	session_start();
	if(isset($_POST['submit'])) //if user click the submit run if part
	{	
		include_once '../dbh.inc.php'; //include database

		$_SESSION['name'] = mysqli_real_escape_string($conn,$_POST['name']); //take the value of name

		if(empty($_SESSION['name'])) //if input box is empty
		{
			header('Location: ../signup.php');
			exit();
		}
		else
		{	
			header('Location: ../que1.php');
			exit();
		}
	}
	else
	{
		header("Location: ./signup.php");
		exit();
	}
?>