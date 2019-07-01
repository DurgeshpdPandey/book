<!DOCTYPE html>
<html lang="en">
<head>
  <title>BHU</title>
<link rel="stylesheet" type="text/css" href="style.css">
 <div class="header">
   

    
    <script src="../js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="../js/cufon-yui.js" type="text/javascript"></script>
    <script src="../js/cufon-replace.js" type="text/javascript"></script> 
    <script src="../js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="../js/FF-cash.js" type="text/javascript"></script>  



                   <h1>Seminar Hall Booking</h1>
                     </div>
                       <div class="topnav">
                              <a href="index1.php">Home</a>
                              <a href="addSeminar.php" class="active">ADD SEMINAR DETAILS</a>
                              <a href="logout.php">LOGOUT</a>
                         
        </div>
		</head>
        <body style="background-color: #b3ffb3">

   <div class="header">
            
            	<h3>VIEW SEMINAR DETAILS</h3>
              
			  </div>
                <script type="text/javascript"> 
function confirmdelete()
{ 
 return confirm("Are you sure you want to delete?");  
} 
</script>

             <form method='post' name='form' id='form' action='delete_Seminar.php' onsubmit='return confirmdelete();'>
            <table width="1050px" border="1" style="background-color: pink; ">
            <?php 
            include 'server.php';
     $s = mysql_query("select * from add_holl");
     $i=mysql_query($s,"INSERT INTO add_holl (hall_name,to_date,from_date,created_date)
             VALUES ('Seminar Complex','14/12/2018','15/12/2018',' ')"); 
			 mysql_close($s);
			  if($s)
    {
        $fcout=mysql_num_fields($s);
        //echo $fcout;
      echo "<th><input type='submit' value='DELETE SEMINAR' name='delete' style='color:white;background-color:black;font-size:10px; width:80px';></th>";
        for($i=0;$i<$fcout;$i++)
        {
            $fname=mysql_field_name($s, $i);
            if($fname=='id')
            {
            }
            else
            echo "<th style='color:red' align='center'>$fname</th>";
        }
        while($row= mysql_fetch_array($s))
        {
          $id1=$row['id'];
            echo "<tr style='color:blue'; align='center'><td style='color:blue'>&nbsp;&nbsp;&nbsp;
          <input type='checkbox' name='checkbox[]' id='checkbox[]' value=$id1></td>";
            echo "<td>".$row['hall_name']."</td>";
            echo "<td>".$row['to_date']."</td>";
            echo "<td>".$row['from_date']."</td>";
            echo "<td>".$row['created_date']."</td>";
        }
    }
    echo "</form>";
            ?>
            </table>
            
			 	<div class="input-group">
                <center>
<h3><b style="color:red;">ADD SEMINAR DETAILS</b></h3>

<table >
<div class="input-group">
<label>Seminar Hall Name</label>
<input type="text" name="holl_name"required="true" maxlength="20"  title="Enter seminar Name" />
</div>
<div class="input-group">
<label>To Date</label>
<input type="date" name="to_date" required="true"  title="To Date"/>
</div>
<div class="input-group">
<label>From Date</label>
<input type="date" name="from_date" required="true"   title="From Date" />
</div>
<tr><td><p class="button-style">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset"  id="x"   name="" value="RESET" align="center" class="cls1" title="Click TO Reset Value" /></p></td>
    <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"  id="x"   name="ADD" value="SUBMIT" align="center" class="cls1" title="Click TO Register Acc" /></p></td></tr>

</table>
</form>
           </center>                
            </div>    
            </div>
        </div>
    <br><br><br><br><br><br><br><br><br><br>
    </section>
	
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
