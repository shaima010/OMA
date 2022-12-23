<?php
session_start();
$dr_id = $_SESSION['ID'];
?>
<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
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
<?php include('treatmenu.php');?>
<div id="contents">
		<br />		
       
	
   <form action="#" method="post" enctype="multipart/form-data">
<table align="center">	


<tr>

	</form>
	
	<td><button class="button" onclick="printDiv()">Print</button></td>
	</tr>
</table>	
<div id="printableTable">
<div align="center">
		<?php
		
include("connect.php");
if (isset($_POST['search'])) {

	$pet = $_POST['petid'];
			$query = "select * from pet where petid = $pet;";
		$result = mysqli_query($connection, $query);
		$num=mysqli_num_rows($result);
		if($num > 0){
		// treat table
			
	echo "<h2 align='center'>PET DETILS</h2></br><table id='new' width=70% >";
				
		echo "<tr>";
		echo "</tr>";
		echo "<tr>";
		echo "<th width = 12%  align=center><v1>Pet Id";
		echo "<th width = 12%  align=center><v1>Customer id";
		echo "<th width = 12%  align=center><v1>Pet Type";	
		echo "<th width = 12%  align=center><v1>Gender";
        echo "</tr>";
		
		
	
			while($row = mysqli_fetch_assoc($result)) {
   $cid = $row['customer_id'];
   $pet_type = $row['pet_type']; 
   $gender = $row['pet_gender'];
			echo "<tr>";
	
			echo "<td align=center>$pet</td>";
			echo "<td  align=center>$cid</td>";
			echo "<td align=center>$pet_type</td>";
			echo "<td  align=center>$gender</td>";
			
                     echo "</tr>";
   
			
		}
		
		echo  "</table>";
		}else{
				echo "<script language='javascript'>";
				echo "alert('PET NOT Found')";
				echo "</script>";
			}
		?>
</br><br>
<hr>
<?php
	// appointment table
	$query2 = "select * from appointment where Pet_id = $pet";
		$result2 = mysqli_query($connection, $query2);
		$num2=mysqli_num_rows($result2);
			if($num2 > 0){
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
	
			while($row2 = mysqli_fetch_assoc($result2)) {
					
   $id = $row2['appointmentId'];
   $customer_id = $row2['customer_id']; 
   $doctor_national_id = $row2['doctor_national_id']; 
   $date = $row2['date']; 
   $time = $row2['time']; 
   $category = $row2['category']; 
   $Pet_id = $row2['Pet_id']; 
   $Pet_type = $row2['Pet_type']; 
   $Pet_gender = $row2['Pet_gender']; 
	
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
		echo  "</table>";
		// end of appointment table
			}else{
				echo "<script language='javascript'>";
				echo "alert('PET APPOINTMENT NOT Found')";
				echo "</script>";
			}

}
		//end of treat table
?>

</br><br>
<hr>
<?php

echo "<form method='post' name='form1'>";
		$query = "SELECT * FROM doctor JOIN treat ON (treat.doctor_national_id = doctor.doctor_namtional_id)";
		$result = mysqli_query($connection, $query);
		$num=mysqli_num_rows($result);
		
		echo "<h2 align='center'>PET TREATMENTS DETILS</h2></br><table id='new' width=70% >";
	
		echo "<tr>";
		echo "<th width = 16%  align=center><v1>Doctor ID";
		echo "<th width = 12%  align=center><v1>Pet ID";
		echo "<th width = 18%  align=center><v1> Treat Type";
		echo "<th width = 20%  align=center><v1> Problem";
		echo "<th width = 20%  align=center><v1> Date";
        echo "</tr>";
	
			while($row = mysqli_fetch_assoc($result)) {
					
					$Pet_id = $row['pet_id']; //
					   $Pet_type = $row['Treat_type']; //
					   $date = $row['date']; 
					   $problem = $row['problem']; 
					   

			echo "<tr>";
			echo "<td align=center>$dr_id</td>";
			echo "<td align=center>$Pet_id</td>";
			echo "<td  align=center>$Pet_type</td>";
			echo "<td align=center>$problem</td>";
			echo "<td align=center>$date</td>";
            echo "</tr>";
				
		}
		
		echo  "</table>";
		echo "</form>";
"</br>";
	
?>
 </div>
	  <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>

	  </div>
</body>
</html>