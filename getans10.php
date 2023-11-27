<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once '../dbh.inc.php';
		
		if(!isset($_POST['q10']))
		{
			header('Location: ../que10.php');
			exit();
		}
		else
		{
			
			$_SESSION['q10'] = $_POST['q10'];
			$sql = "INSERT INTO names(name,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) VALUES ('{$_SESSION['name']}','{$_SESSION['q1']}','{$_SESSION['q2']}','{$_SESSION['q3']}','{$_SESSION['q4']}','{$_SESSION['q5']}','{$_SESSION['q6']}','{$_SESSION['q7']}','{$_SESSION['q8']}','{$_SESSION['q9']}','{$_SESSION['q10']}');";
			mysqli_query($conn,$sql);
			
    		$_SESSION['last_id1'] = mysqli_insert_id($conn);
    		
			header('Location: share.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../que5.php');
		exit();
	}	
?>
