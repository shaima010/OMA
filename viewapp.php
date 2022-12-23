<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF-8">
	<title>Clinic of Pets System</title>
	<link rel="stylesheet" href="default.css" type="text/css">
	</head>
<body>
<div id="header">
	
			<div class="logo"><a href="adminpage.php"><img src="image/logo.png" alt="LOGO" height="190" width="210"></a>
            </div>
             <ul class="navigation">
			
				<li>
			  
					<a href="addoctor.php">Add Doctor</a>
				</li>
			 <li>
					<a href="viewcustomer.php">View Customer</a>
				</li>
				
			  <li class="active">
					<a href="#">View Appointment</a>
				</li>
                
			  <li>
					<a href="viewdoctor.php">View Doctor</a>
				</li>
				<li>
					<a href="aReport.php">Report</a>
				</li>
				  <li>
					<a href="logout.php">LOGOUT</a>
				</li>
			</ul>
			 <div class="clearfix">
		</div>
		</div>
<div id="contents">
		<br />		
        <center>
       <form id="form1" name="form1" method="post"  onsubmit="return validate(this);">
               
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
<u  style="color:brown;">View Appointment</u>
 </td>
               </tr>
</table>
<div id="contents">
		<br />		
        <center>
                      
               <table bgcolor="#F8F8F8" style="padding:20px;">
               
</table>

<div align="center">
      
<?php
include("connect.php");
echo "<form method='post' name='form1'>";
		
	    $query = "select * from appointment";
		$result = mysqli_query($connection, $query);
		$num=mysqli_num_rows($result);
		
		$i=0;
	
	echo "<table width=70% >";
		

		echo "<tr>";
		echo "<th width = 12%  align=center><v1>appointment Id";
		echo "<th width = 12%  align=center><v1>Customer id";
		echo "<th width = 12%  align=center><v1> Doctor ID";
		echo "<th width = 12%  align=center><v1> Date";
		echo "<th width = 12%  align=center><v1> Time";
		echo "<th width = 20%  align=center><v1> Category";
		echo "<th width = 12%  align=center><v1> Pet id";
		echo "<th width = 12%  align=center><v1> Pet Type";
		echo "<th width = 12%  align=center><v1> Pet Gender";
        echo "</tr>";
	
			while($row = mysqli_fetch_assoc($result)) {
					
   $id = $row['appointmentId'];
   $customer_id = $row['customer_id']; 
   $doctor_national_id = $row['doctor_national_id']; 
   $date = $row['date']; 
   $time = $row['time']; 
   $category = $row['category']; 
   $Pet_id = $row['Pet_id']; 
   $Pet_type = $row['Pet_type']; 
   $Pet_gender = $row['Pet_gender']; 

			echo "<tr>";
	
			echo "<td align=center>$id</td>";
			echo "<td  align=center>$customer_id</td>";
			echo "<td  align=center> $doctor_national_id</td>"; 
			echo "<td align=center>$date</td>";
			echo "<td  align=center>$time</td>";
			echo "<td  align=center> $category</td>"; 
			echo "<td align=center>$Pet_id</td>";
			echo "<td  align=center>$Pet_type</td>";
			echo "<td  align=center> $Pet_gender</td>"; 
			
                     echo "</tr>";
   
			$i++;
			
		}
		
		echo  "</table>";
		echo "</form>";
"</br>";
	
?>
      </div> 
</form>
</center>
        

	</div>
</body>
</html>