<?php include('server.php')
?>
<!DOCTYPE html >
<html  lang="en">
<head>
    <title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="header">
  <h1>Seminar Hall Booking</h1>
</div>
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="register.php">SignUp</a>  
   <a href="login.php">User Login</a>
</div>
</head>
<body>
<div class="input-group">
<?php

    $login_form = <<<EOD
<form name="login" id="login" method="POST" action="check_login.php">
<p><label for="username">Please Enter Username: </label><input type="text" size="100" name="username" id="username" value="" /></p>
<p><label for="password">Please Enter Password: </label><input type="password" size="40" name="password" id="password" value="" /></p>
<p><input type="submit" name="submit" id="submit" value="Submit"/> <input type="reset" name="reset" id="reset" value="reset"/></p>
</form>
EOD;
$msg = $_GET['msg'];  //GET the message
if($msg!='') echo '<p>'.$msg.'</p>'; //If message is set echo it
echo "<h1>Admin LOGIN</h1>";
echo $login_form;
?>
</div>
</body>
</html>