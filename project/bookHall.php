<?php include ('server.php');
if(isset($_POST['hall_booking']))
{
    extract($_POST);
  
    $query="INSERT INTO holl_booking (eno,col_name,hal_name,idate,odate,email) VALUES('".$eno."','".$col_name."','".$hal_name."','".$idate."','".$odate."','".$email."')";
 
    $result= mysqli_query($db,$query);
        if($result)
            {
            echo "<script>alert('Successfullly ADD!!!!');window.location='index1.php';</script>";   
            }
            else 
          {
            echo "<script>alert('Problem TO ADD');window.location='bookHall.php';</script>";  
       
         }
}
if (empty($email))
      {    
      
      array_push($errors, "Email is required");
      } 
  else {
    $email = ($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors = "Invalid email format"; 
    }
  } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome</title>
<meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">



</head>

<body>

    
    <style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("bhu2.jpg");
  background-color: #cccccc;
  height: 700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  margin-top: 0;
}



/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
</style>   
    
<div class="header">
  <h1>Seminar Hall Booking</h1>
</div>
<div class="topnav">
  <a href="index1.php">Home</a>   
  <a href="bookHall.php">Book Hall</a> 
  <a href="updateProfile.php">Update Profile</a>
  <a href="logout.php">Logout</a>
  <?php  if (isset($_SESSION['eno'])){
  ?>
  <p style="text-align:right" ><a >Welcome:- <strong><?php echo $_SESSION['eno'];}?></strong></a></p>
</div>

<div class="hero-image"> 

    <div class="header"> 
  	<h2>Booking Form</h2>
  
    </div>
  
    <form method="post" action="bookHall.php">

      <div class="input-group">
  	  <label>Enrollment No</label>
  	  <input type="number" name="eno" value="eno">
      </div>
          <div class="input-group">
  	  <label>College Name</label>
  	  <input type="text" name="col_name" value="<?php echo $col_name; ?>">
  	
          </div>
  	
  	  <label>Hall Name:</label><br>
	  <select name="hal_name">
                <option type="checkbox">Seminar</option>
              </select><br>
  	 
  	<div class="input-group">
  	  <label>ChekIn Date:</label>
  	  
                   <input type="datetime-local" name="idate" required="true" </td></tr>

        </div>
        <div class="input-group">
  	  <label>ChekOut Date:</label>
  	  
                   <input type="datetime-local" name="odate" required="true" </td></tr>

        </div>           
  	
		<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  		<button type="submit" class="btn" name="hall_booking">Submit</button>&nbsp;&nbsp;&nbsp;<button type="reset" class="btn" name="reset_user">Reset</button>
		</div>
<center>
</div>
</div>
</div>
  
</center>
</form>

</body>
</html>

