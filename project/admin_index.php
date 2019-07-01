<?php include ('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
 <style>
                .clsss
                {
                    background-color: violet;
                    border-radius: 10px;
                    width: 200px;
                }
                

    
 </style> 

    
</head>
<body  style="background-color: #83afaf;">

<div class="header">
  <h1>Seminar Hall Booking</h1>
</div>
<div class="topnav">
    	
                             <a href="admin_index.php" >Home</a>                             
			                 <a href="deleteuser.php">Delete user</a>
							 <a href="viewuser.php">View users</a>
                             <a href="logout.php">Logout</a>
				<?php if (isset($_SESSION['username']));?>
  <p style="font-align: right" ><a >Welcome:- <strong><?php echo $_SESSION['username'];?></strong></a></p>                        
        </div>        
     
	
            <div class="">
            	<center><h3 style="font-size:300% ">Welcome To The Admin Page</h3></center>            
            
            
                         
                
            </div>
        
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
    
	    
</body>
</html>
