<?php 
include ('server.php');
session_start();
           $name=$_POST['name'];//$_FILES           
           $email=$_POST['email'];
           $password=$_POST['password'];
           $mobile=$_POST['mobile'];           
            

            
    //$c=ocilogon("cryptonite", "cryptonite", $db);
$sql="
UPDATE users SET 'name'='$name','email'='$email',
'password'='$password','mobile'='$mobile',
 WHERE '$email'='{$_SESSION['email']}'";
$s = mysqli_query($db,$sql);
    
                if($s == 0)
    {
                 echo "<script>alert('$name! Your Information successfully! Chnage ');window.location='updateProfile.php';</script>";
              
    }
    else
    {
             echo "<script>alert('$name! Your Information NOT! Change ');window.location='updateProfile.php';</script>";
     
        }
        ?>