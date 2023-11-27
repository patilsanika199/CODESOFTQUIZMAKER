<?php
			include 'dbh.inc.php';
			$username=$_SESSION['id'];

			$sql = "SELECT name FROM names WHERE id = $username;";
			$table1 = mysqli_query($conn,$sql);
	
			$resultcheck = mysqli_num_rows($table1);
			if($resultcheck > 0)
			{
				while($row = mysqli_fetch_assoc($table1))
				{
					$_SESSION['uname'] = $row['name'];
					echo "<span>Here You are giving Friendship Quiz for </span>"."<b><span>".$_SESSION['uname']."</span></b>";
				}
			}
			else
			{
				header('Location: frdname.php?id='.$_SESSION["last_id1"]);
			}
		
			
			

		?>