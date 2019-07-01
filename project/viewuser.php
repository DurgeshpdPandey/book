<?php
	include 'server.php';
			
	if(isset($_POST['view']))
	{
		//$eno=$_POST['eno'];
		
			$sql1 = "select * from users where 1 limit 10 order by name";
			$result=mysqli_fetch_array(mysqli_query($db,$sql1));
			if(($result) == 1){
			echo "eno ".$result['eno']." name ".$result['name']." ";
	}
	}
			
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    </head>
<body  style="background-color: #83afaf;">

<div class="header">
  <h1>Seminar Hall Booking</h1>
</div>
<div class="topnav">
    	
                             <a href="admin_index.php" >Home</a>
                             <a href="addhall.php">Add Hall</a>
			                 <a href="deleteuser.php">Delete user</a>
                             <a href="logout.php">Logout</a>
							 
  <p style="font-align:right" ><a >Welcome:- admin</a></p>

                        
        </div>
		<form name="my_form" method="post" action="viewuser.php">

    <input type="submit" name="view" value="View User" />
</form>
        
    </header>
	</body>
	</html>
	
	
	