  <?php include('server.php')
?>
<?php  if  (isset($_POST['login_admin'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
  	$results = mysqli_query($db, $query);
  	if (($results) == 1)
		{
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	 
	 header('location: admin_index.php');
  	}
	
	
	else{
  		array_push($errors, "Wrong username/password combination");
}
}
}

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
  <a href="login.php">User Login</a>
  <div class="topnav-right">
     <a href="#" >Contact Us</a>
   </div>
  
</div>

  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body  style="background-color: #b3ffb3;">

  <div class="header">
  	<h2>Admin Login</h2>
  </div>
	 
  <form method="post" action="admin_login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
         <label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
        
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_admin">Login</button>&nbsp;&nbsp;&nbsp;<button type="reset" class="btn" name="reset_user">Reset</button>
  	</div>
  </form>
  
</body>

</html>

