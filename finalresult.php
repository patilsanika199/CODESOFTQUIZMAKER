<?php
	include_once 'dbh.inc.php';
	session_start();
	$id = $_SESSION['id'];
	$id2 = $_SESSION['last_id'];

	$sql = "SELECT q1,q2,q3,q4,q5,q6,q7,q8,q9,q10 FROM names WHERE id = $id;";
	$table1 = mysqli_query($conn,$sql);
	$sql2 = "SELECT fq1,fq2,fq3,fq4,fq5,fq6,fq7,fq8,fq9,fq10 FROM sharefrds WHERE fid = $id2;";
	$table2 = mysqli_query($conn,$sql2);


	$resultcheck = mysqli_num_rows($table1);
	if($resultcheck > 0)
	{
		while($row = mysqli_fetch_assoc($table1))
		{
			$q1 = $row['q1'];
			$q2 = $row['q2'];
			$q3 = $row['q3'];
			$q4 = $row['q4'];
			$q5 = $row['q5'];
			$q6 = $row['q6'];
			$q7 = $row['q7'];
			$q8 = $row['q8'];
			$q9 = $row['q9'];
			$q10 = $row['q10'];

			$q =array($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10);
		}
	}

	$resultcheck2 = mysqli_num_rows($table2);
	if($resultcheck2 > 0)
	{
		while($row2 = mysqli_fetch_assoc($table2))
		{
			$fq1 = $row2['fq1'];
			$fq2 = $row2['fq2'];
			$fq3 = $row2['fq3'];
			$fq4 = $row2['fq4'];
			$fq5 = $row2['fq5'];
			$fq6 = $row2['fq6'];
			$fq7 = $row2['fq7'];
			$fq8 = $row2['fq8'];
			$fq9 = $row2['fq9'];
			$fq10 = $row2['fq10'];

			$fq =array($fq1,$fq2,$fq3,$fq4,$fq5,$fq6,$fq7,$fq8,$fq9,$fq10);
		}
	}

	$_score=0;
	for($i=1;$i<=10;$i++)
	{
		if ($q[$i-1] == $fq[$i-1])
		{
	
			$_score++;
		}

	}
	$_SESSION['fscore']=$_score;
	
		



	function frd()
	{
		if($_SESSION['fscore']>7)
		{
			echo "Ohh Yeahh.! You are Best Friends.";
		}
		elseif ($_SESSION['fscore'] >4 && $_SESSION['fscore'] <8) {

			echo "Yeah You are Good Friends.";
		}
		elseif ($_SESSION['fscore'] >2 && $_SESSION['fscore'] <5)
		{
			echo "Oops.! You are just normal Friends.";
		}
		else
		{
			echo "Oops.! You are not a Friends.";
		}
	}


?>
