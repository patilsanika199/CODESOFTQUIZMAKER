
<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once 'dbh.inc.php';
		
		if(!isset($_POST['q3']))
		{
			header('Location: ../shareque3.php');
			exit();
		}
		else
		{
			
			$_SESSION['q3'] = $_POST['q3'];
			header('Location: ../shareque4.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../shareque3.php');
		exit();
	}	
?>
