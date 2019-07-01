<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>     
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
 <div class="header">
   <h1 >Seminar Hall Booking</h1>
</div>
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="register.php">SignUp</a>
  <a href="login.php">User Login</a>
  <a href="admin_login.php">Admin Login</a>
</div>

</head>
<body style="background-color: #b3ffb3">
 
    <div class="header">
  	<h2>Register</h2>
    </div>
	
    <form method="POST" action="register.php">
  	<?php include('errors.php'); ?>
        <div class="input-group">
  	  <label>Enrollment No.</label>
  	  <input type="number" name="eno" value="<?php echo $eno; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	<div class="input-group">
  	  <label>Mobile Number</label>
  	  <input type="number" name="mobile" value="<?php echo $mobile; ?>">
  	</div>
	
  	  <label>Gender</label>
  	  <select name="gender">
                 <option type="checkbox" value="Male" >Male</option>
                 <option type="checkbox" value="Female" >Female</option>
                 <option type="checkbox" value="Others" >Others</option>  
            </select> <br> <br>
			<div class="input-group">
  	  <label>DOB</label>
  	  <input type="Date" name="dob" value="<?php echo $dob; ?>">
  	</div>
	
  	<form action="">
          <label> Department:</label>
            <select name="dept">
                 <option type="checkbox" value="Science" name="science">Science</option>
                 <option type="checkbox" value="Commerce" name="commerce">Commerce</option>
                 <option type="checkbox" value="Arts" name="arts">Arts</option>  
            </select> <br> <br>	
           <label>User Type:</label>
            <select name="user_type">
                <option type="checkbox" value="Student" name="student">Student</option>
              <option type="checkbox" value="Professor" name="Professor">Professor</option>
            </select><br> <br>

      <form method="post" action="mailto:$email@website.com?subject=New Registration Alert &message= New Registration requires your approval">
          <button type="submit" class="btn" name="users">Register</button>&nbsp;&nbsp;&nbsp;<button type="reset" class="btn" name="reset_user">Reset</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php" class="btn">Sign in</a>
  		
  	</p>
  </form>
</body>
</html>