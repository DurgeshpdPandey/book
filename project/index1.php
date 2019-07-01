<!DOCTYPE html>
<html>
<head>
<?php include ('server.php') ?>
<title>Welcome</title>
<meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
    box-sizing: border-box;
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
</head>
<body  style="background-color: #b3ffb3;">

<div class="header">
  <h1>Seminar Hall Booking</h1>
</div>
<div class="topnav">
  <a href="index1.php">Home</a>   
  <a href="bookHall.php">Book Hall</a> 
  <a href="updateProfile.php">Update Profile</a>
  <a href="logout.php">Logout</a>
  <?php if (isset($_SESSION['eno'])) { 
?>
  <p style=" text-align: right" ><a >Welcome:- <strong><?php echo $_SESSION['eno'];}?></strong></a></p>
  <div class="topnav-right">
     <a href="#" >Contact Us</a>
   </div>
</div> 
<div class="container">
  <img src="bhu1.jpg" alt="BHU" style="width:100%;">
    <div class="content">
<center>
   <p style="font-size:180% " >Welcome to the Banaras Hindu University Seminar Hall Booking Website.</p>
</center>
     </div>
</div>

</body>

</html>