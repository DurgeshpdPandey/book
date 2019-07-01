<?php include('server.php');
?>
<html>
<head>
<title>Login Page</title>
<div class="header">
  <h1>Seminar Hall Booking</h1>
</div>
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="register.php">SignUp</a>  
  <a href="admin_login.php">Admin Login</a>
</div>

  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body  style="background-color: #b3ffb3;">

  <div class="header">
  	<h2>User Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
         
  		<label>Username</label>
  		<input type="number" name="eno">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>&nbsp;&nbsp;&nbsp;<button type="reset" class="btn" name="reset_user">Reset</button>
  	</div>
	
	
	 
  	<p>
  		Not yet a member? <a href="register.php" class="btn">Sign up</a>
  	</p>
  </form>
  
</body>
</html>