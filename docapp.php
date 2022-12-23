<?php
session_start();
$dr_id = $_SESSION['ID'];
?>
<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF-8">
	<title>Clinic of Pets System</title>
	<link rel="stylesheet" href="default.css" type="text/css">
	<style>
#new {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
	align:center;
}

#new td, #new th {
    border: 1px solid #ddd;
    padding: 8px;
	align:center;
}

#new tr:nth-child(even){background-color: #f2f2f2; align:center;}

#new tr:hover {background-color: #ddd; align:center;}

#new th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #F1C40F;
    color: white;
	align:center;
}
</style>
	</head>
<body>
<?php include('treatmenu.php');?>
<div id="contents">
		<br />		
        <center>
       <form id="form1" name="form1" method="post"  onsubmit="return validate(this);">
               
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
<u  style="color:brown;">My Appointment</u>
 </td>
               </tr>
</table>
</form>
<div align="center">
      
<?php
include("connect.php");
echo "<form method='post' name='form1' onSubmit='return checkDelete()'>";
		
	    $query = "select * from appointment where doctor_national_id = $dr_id";
		$result = mysqli_query($connection, $query);
		$num=mysqli_num_rows($result);
		
		$i=0;
	?>
	
<table id="new">
	<?php

		echo "<tr>";
		echo "<th width = 16%  align=center><v1>appointment Id";
		echo "<th width = 12%  align=center><v1>Customer id";
		echo "<th width = 18%  align=center><v1> Date";
		echo "<th width = 20%  align=center><v1> Time";
		echo "<th width = 20%  align=center><v1> Category";
		echo "<th width = 12%  align=center><v1> Pet id";
		echo "<th width = 12%  align=center><v1> Pet Type";
		echo "<th width = 12%  align=center><v1> Pet Gender";
		echo "<th width = 12%  align=center><v1> Choose";
        echo "</tr>";
	
			while($row = mysqli_fetch_assoc($result)) {
					
   $apid = $row['appointmentId'];
   $customer_id = $row['customer_id']; 
   $date = $row['date']; 
   $time = $row['time']; 
   $category = $row['category']; 
   $Pet_id = $row['Pet_id']; 
   $Pet_type = $row['Pet_type']; 
   $Pet_gender = $row['Pet_gender']; 
   if($Pet_gender == 1) {$gen = "Male";}
   else {$gen = "Female";}

			echo "<tr>";
	
			echo "<td align=center>$apid</td>";
			echo "<td  align=center>$customer_id</td>";
			echo "<td align=center>$date</td>";
			echo "<td  align=center>$time</td>";
			echo "<td  align=center> $category</td>"; 
			echo "<td align=center>$Pet_id</td>";
			echo "<td  align=center>$Pet_type</td>";
			echo "<td  align=center> $gen</td>"; 
			echo "<td  align=center> <a href='addtreat.php?petid=$Pet_id&dr_id=$dr_id'>Treat</a></td>";
            echo "</tr>";
					
			$i++;
			
		}
		
		echo  "</table>";
		echo "</form>";
"</br>";
	
?>
      </div>
</center>
        

	</div>
	
</body>
</html>