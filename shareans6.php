
<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once 'dbh.inc.php';
		
		if(!isset($_POST['q6']))
		{
			header('Location: ../shareque6.php');
			exit();
		}
		else
		{
			
			$_SESSION['q6'] = $_POST['q6'];
			
			header('Location: ../shareque7.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../shareque6.php');
		exit();
	}	
?>
