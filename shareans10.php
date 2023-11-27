<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		include_once 'dbh.inc.php';
		
		if(!isset($_POST['q10']))
		{
			header('Location: ../shareque10.php');
			exit();
		}
		else
		{	
			
			$_SESSION['q10'] = $_POST['q10'];
			$sql = "INSERT INTO sharefrds(fname,fq1,fq2,fq3,fq4,fq5,fq6,fq7,fq8,fq9,fq10,uid) VALUES ('{$_SESSION['name']}','{$_SESSION['q1']}','{$_SESSION['q2']}','{$_SESSION['q3']}','{$_SESSION['q4']}','{$_SESSION['q5']}','{$_SESSION['q6']}','{$_SESSION['q7']}','{$_SESSION['q8']}','{$_SESSION['q9']}','{$_SESSION['q10']}','{$_SESSION['id']}');";
			mysqli_query($conn,$sql);
			
    		$_SESSION['last_id'] = mysqli_insert_id($conn);
			header('Location: ../showmeresult.php');
			exit();
		}
	}
	else 
	{
		header('Location: ../shareque10.php');
		exit();
	}	
?>
