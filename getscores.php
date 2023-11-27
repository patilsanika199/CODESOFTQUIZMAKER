<?php
			session_start();
			include 'dbh.inc.php';
			$showid = $_SESSION['last_id1'];
		
			

			$sql = "SELECT fname,result FROM sharefrdsfinal WHERE uid = $showid;";
			$table= mysqli_query($conn,$sql);
	
			$resultcheck = mysqli_num_rows($table);
			if($resultcheck > 0)
			{
				while($row = mysqli_fetch_assoc($table))
				{	
					$_SESSION['frdname']=$row['fname'];
					$_SESSION['frdresult']=$row['result'];
					
				

					echo $_SESSION['frdname']."&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;";
					echo $_SESSION['frdresult']."<br>";
				}
			}

?>