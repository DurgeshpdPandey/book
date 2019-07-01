<?php
//session_start();
include 'server.php';
if(isset($_POST['login_user']))        
{
            $username=$_POST['username'];
           $password=$_POST['password'];
           $sql="select * from users where username='$username' and password='$password' AND status='0'";
           $query=mysql_query($sql);
           $row=mysql_fetch_array($query);
           $count=mysql_num_rows($query);
           if($count>0)
           {
               $_SESSION['username']=$row['username'];    
               $_SESSION['email']=$row['email'];
               ?>
<script>window.location='index1.php';</script>
<?php
           }
           else
           {
                        echo "<script>alert('INvalid UserName and Password');window.location='login.php?val=1';</script>";
      
           }
}

elseif(isset($_POST['login_admin']))        
{
            $email=$_POST['email'];
           $password=$_POST['password'];
         if($email=='admin@gmail.com' && $password=='admin')
           {
               ?>
<script>window.location='admin_index.php';</script>
<?php
           }
           else
           {
               echo "<script>alert('INvalid UserName and Password');window.location='Admin.php?val=2';</script>";
      
           }
}
else
{
    header("location:loginS.php?val=2");
}
           
           

?>