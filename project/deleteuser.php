<?php
	include 'server.php';
			
	if(isset($_POST['delete']))
	{
		$eno=$_POST['eno'];
		
			$sql1 = "DELETE from users where eno = '$eno'";
			$result = mysqli_query($db,$sql1);
			
		
			if($result)
		      {	
                             echo "<script>alert('File is Deleted Successfully');window.location='admin_index.php';</script>";    
			}
			else
			{
                             echo "<script>alert('Error');window.location='admin_index.php';</script>";    
			}
			if (empty($eno)) {
  	array_push($errors, "eno is required");
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
    	
                            <a href="admin_index.php" >View User</a>
                             <a href="addhall.php">Add Hall</a>			    
                             <a href="logout.php">Logout</a>
							
  <p style="font-align:right" ><a >Welcome:- admin</a></p>

                        
        </div>
		<?php include('errors.php'); ?>
		<form name="my_form" method="post" action="deleteuser.php">
       Enrollment No: <input type="text" name="eno" placeholder="eno"><br />
    <input type="submit" name="delete" value="Delete" />
</form>
        
    </header>
	</body>
	</html>
	
	
	