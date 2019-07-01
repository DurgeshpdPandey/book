<html>
<head>
  <title>User Home</title>   
    <link rel="stylesheet" href="style.css" type="text/css">  
    
</head>
         <?php
          include 'server.php';
         if(isset($_GET['eno']))
        {
            $id=$_GET['eno'];
                if(isset($_POST['submit']))
                {
                    $name   = $_POST['name'];
                    $email      = $_POST['email'];
                    $password   = $_POST['password'];
                  
                    $query3     = mysqli_query("UPDATE tbl_staffs
                                              SET name='$name', email='$email', password='$password', WHERE eno='$eno'");

                    if ($query3)
                        { echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'user_list.php';</script>"; }
                    else
                        { echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'user_list.php';</script>"; }
                }

    $query1=mysqli_query("SELECT * FROM users WHERE eno='$eno'");
    $query2=mysqli_fetch_array($db,$query1); 
		}

         ?>

<body  style="background-color: #b3ffb3">
    <header>    	
        	<div class="header">
  <h1>Seminar Hall Booking</h1>
</div>
<div class="topnav">
  <a href="index1.php">Home</a>   
  <a href="bookHall.php">Book Hall</a> 
  <a href="updateProfile.php">Update Profile</a>
  <a href="logout.php">Logout</a>
   <?php if (isset($_SESSION['eno']));?>
  <p ><a>Welcome:- <strong><?php echo $_SESSION['eno'];?></strong></a></p>
  </div>                 
    </header>    
                     
                
            

    
    <div class="header">
        <h3>Change Profile Information</h3>
		</div>
        <form  action="change.php" method="post">
            
<div class="input-group">
<label>Name</label>
 <input type="text" name="name" value="<?php echo $name; ?>"/>
 </div>
<div class="input-group">
<label>Email</label>
<input type="email" name="email" value="<?php echo $email; ?>"/></div>
<div class="input-group">
<label>Password</label>
  <input type="password" name="password" /></div>                  
 <div class="input-group">
 <label>Mobile</label>
  <input type="number" name="mobile" /></div>                  
 
<tr><input type="submit"   title="Click To Update"  name="register" value="Change" align="center" /></p></td></tr>


</form>
 </style>
    <br><br><br><br><br><br><br><br><br><br>

    </section>
	
   
</body>
</html>
