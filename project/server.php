<html>
<?php
session_start();
//error_reporting(0);
//
$eno = "";
$name = "";
$email    = "";
$errors = array();
$user="";
$pass="";
$col_name='';
$hal_name='';
$gender = "";



$db = mysqli_connect('localhost', 'root', '', 'registration');
if($db->connect_error)
{
    die("connection failed:".$db->connect_errror);
}

if (isset($_POST['users']))
    {
    $eno = mysqli_real_escape_string ($db,$_POST['eno']);  
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string ($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $mobile=    mysqli_real_escape_string($db, $_POST['mobile']);
    $gender=    mysqli_real_escape_string($db, $_POST['gender']);
    $dob=       mysqli_real_escape_string($db, $_POST['dob']);   
	$dep_name=  mysqli_real_escape_string($db, $_POST['dept']);
    $user_type= mysqli_real_escape_string($db, $_POST['user_type']);
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($eno)) { array_push($errors, "Enrollment No. is required"); }
 
  if (empty($name)) { array_push($errors, "Name is required"); }
  else{
        /* @var $_POST type */
        $name = ($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $errors = "Only letters and white space allowed"; 
  }
  }
  if (empty($email))
      {    
      
      array_push($errors, "Email is required");
      } 
  else {
    $email = ($_POST["email"]);
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors = "Invalid email format"; 
    }
  }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");}
	 if (empty($mobile)) { array_push($errors, "Mobile No. is required"); }
	 if (empty($gender)) { array_push($errors, "Gender is required"); }
	 if (empty($dob)) { array_push($errors, "DOB is required"); }	 
	  if (empty($dep_name)) { array_push($errors, "Department Name is required"); }
	   if (empty($user_type)) { array_push($errors, "User Type is required"); }  
       

  $user_check_query = "SELECT * FROM users WHERE eno='$eno' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);  
  if ($user) { // if user exists
    if ($user['eno'] === $eno) {
      array_push($errors, "Enrollment number already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (eno,name,email,password,mobile,gender,dob,dept,user_type) VALUES ('".$eno."', '".$name."', '".$email."', '".$password."', '".$mobile."', '".$gender."', '".$dob."', '".$dep_name."', '".$user_type."')";
  	$data=mysqli_query($db, $query);
	if($data)
	{
		echo "data inserted";
	
  	 $_SESSION['eno'] = $eno;
    	$_SESSION['success'] = "You are now logged in";
  	 header('location: index.php');
    }
	else{
		echo"error to insert";
	}
  }
}

//LOGIN USER
 
if  (isset($_POST['login_user'])) {
  $eno =      mysqli_real_escape_string($db, $_POST['eno']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($eno)) {
  	array_push($errors, "eno is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE eno='$eno' AND password='$password' ";
  	$results = mysqli_query($db, $query);
  	if (($results) == 1)
		{
  	     $_SESSION['eno'] = $eno;
  	     $_SESSION['success'] = "You are now logged in";  	 
	    header('location: index1.php');
  	    }	
	else{
  		array_push($errors, "Wrong username/password combination");
            }
   }
}
?>
</html>