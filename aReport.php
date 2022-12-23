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
<style>
.button {
  display: inline-block;
  padding: 15px 35px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #F1C40F;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #000;
}

.button:hover {background-color: #F1C40F}

.button:active {
  background-color: #F1C40F;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>

<script>
@media print {
  * {
    display: none;
  }
  #printableTable {
    display: block;
  }
}
</script>
<script>
       function printDiv() {
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
	   </script>
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
				
			  <li >
					<a href="viewapp">View Appointment</a>
				</li>
                
			  <li>
					<a href="viewdoctor.php">View Doctor</a>
				</li>
				<li class="active">
					<a href="#">Report</a>
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
		
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
<u  style="color:brown;"><button class="button" onclick="printDiv()">Print</button></u>
 </td>
               </tr>
</table>
<br>

<div id="printableTable">
<div align="center">
    <?php
include("connect.php");	
		// customer table
	    $query = "select * from customer";
		$result = mysqli_query($connection, $query);
		$num=mysqli_num_rows($result);
		
	echo "<h2 align='center'>CUSTOMERS DETAILS</h2></br><table id='new' width=70% >";
		
		echo "<tr>";
		echo "</tr>";
		echo "<tr>";
		echo "<th width = 12%  align=center><v1>Customer Id";
		echo "<th width = 12%  align=center><v1>Customer Name";
		echo "<th width = 12%  align=center><v1>Customer Phone";	
		echo "<th width = 12%  align=center><v1> Customer Email";
        echo "</tr>";
	
			while($row = mysqli_fetch_assoc($result)) {
   $id = $row['customer_id'];
   $fname = $row['customer_first_name']; 
   $lname = $row['customer_last_name']; 
   $phone = $row['customer_phone']; 
   $email = $row['customer_email']; 
			echo "<tr>";
	
			echo "<td align=center>$id</td>";
			echo "<td  align=center>$fname $lname</td>";
			echo "<td align=center>$phone</td>";
			echo "<td  align=center>$email</td>";
			
			
                     echo "</tr>";
   
			
		}
		
		echo  "</table>";
		// end of pet table
?>
</br><br>
<hr>
<?php
	// appointment table
	$query = "select * from appointment";
		$result = mysqli_query($connection, $query);
		$num=mysqli_num_rows($result);
			
	echo "</br></br><h2 align='center'>APPOINTMENT DETILS</h2></br><table  id='new' width=70% >";
		
		echo "<tr>";
		echo "</tr>";
		echo "<tr>";
		echo "<th width = 12%  align=center><v1>appointment Id";
		echo "<th width = 12%  align=center><v1>Customer id";
		echo "<th width = 12%  align=center><v1> Doctor ID";
		echo "<th width = 12%  align=center><v1> Date";
		echo "<th width = 18%  align=center><v1> Time";
		echo "<th width = 12%  align=center><v1> Category";
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
   $pets[] = $Pet_id;// collection of pet id's to get all treatments from treat table 
	
	if($Pet_gender == 1) { $gen = "Male";}
	else { $gen = "Female";}
			echo "<tr>";
	
			echo "<td align=center>$id</td>";
			echo "<td  align=center>$customer_id</td>";
			echo "<td  align=center> $doctor_national_id</td>"; 
			echo "<td align=center>$date</td>";
			echo "<td  align=center>$time</td>";
			echo "<td  align=center> $category</td>"; 
			echo "<td align=center>$Pet_id</td>";
			echo "<td  align=center>$Pet_type</td>";
			echo "<td  align=center> $gen</td>"; 
   " </p>";
                     echo "</tr>";
   
			
		}
		echo "<tr>";
		
		echo "<td colspan='7'></td>";

             echo "</tr>";
		echo  "</table>";
		// end of appointment table
		?>
</br><br>
<hr>
<?php
		// treat table
		
	echo "<h2 align='center'>PET TREATMENTS DETILS</h2></br><table id='new' width=70% >";
				
		echo "<tr>";
		echo "</tr>";
		echo "<tr>";
		echo "<th width = 12%  align=center><v1>Pet Id";
		echo "<th width = 12%  align=center><v1>Doctor id";
		echo "<th width = 12%  align=center><v1>Treat Type";	
		echo "<th width = 12%  align=center><v1>Problem";
		echo "<th width = 12%  align=center><v1>Date";
        echo "</tr>";
		
		$arrlength = count($pets);
		for($x = 0; $x < $arrlength; $x++) {
			//echo $pets[$x];
			//echo "<br>";
		
		$query = "select * from treat where pet_id = $pets[$x];";
		$result = mysqli_query($connection, $query);
		$num=mysqli_num_rows($result);
	
			while($row = mysqli_fetch_assoc($result)) {
   $id = $row['pet_id'];
   $dr_id = $row['doctor_national_id']; 
   $treat_type = $row['Treat_type']; 
   $problem = $row['problem'];
	$date = $row['date'];
			echo "<tr>";
	
			echo "<td align=center>$id</td>";
			echo "<td  align=center>$dr_id</td>";
			echo "<td align=center>$treat_type</td>";
			echo "<td  align=center>$problem</td>";
			echo "<td  align=center> $date</td>"; 
			
                     echo "</tr>";
   
			
		}
		}
		
		echo  "</table>";
		
		//end of treat table
?>
      </div>
	  <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>

	  </div>
</center>
        

	</div>
</body>
</html>