<?php
session_start();
?>
<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF-8">
	<title>Clinic of Pets System</title>
	<link rel="stylesheet" href="default.css" type="text/css">
	
	 <script>
$(document).ready(function () {
   $("#ckbCheckAll").click(function () {
 
    $(".checkBoxClass").prop('checked', $(this).prop('checked'));
});
});
</script>

<!-- Check all checkboxes -->
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure to delete?');
}
</script>

	</head>
<body>
		<div id="header">
	
			<div class="logo"><a href="customerpage.php"><img src="image/logo.png" alt="LOGO" height="190" width="210"></a>
            </div>
             <ul class="navigation">
			  <li>
			  
					<a href="customerpage.php">My DETILS</a>
				</li>
			  
			 
			 
			  <li class="active">
					<a href="#">VIEW Appointment</a>
				</li>
                
               
			  <li>
					<a href="searchdoctor.php">SEARCH DOCTOR</a>
				</li>
				<li>
					<a href="addpet.php">ADD PET</a>
				</li>
				<li>
					<a href="viewpet.php">VIEW PET</a>
				</li>
				<li>
					<a href="cReport.php">REPORT</a>
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
<u  style="color:brown;">Appointment History</u>
 </td>
               </tr>
</table>

<div align="center">
      
<?php
include("connect.php");
echo "<form method='post' name='form1' onSubmit='return checkDelete()'>";
if(isset($_POST['delete'])){
 
  if (is_array($_POST['delete'])) {
    foreach($_POST['delete'] as $value){
		$query3 = "delete from appointment where appointmentId=$value";
		$result3 = mysqli_query($connection, $query3);
	}
  } 
}
		
	    $query = "select * from appointment where customer_id = '".$_SESSION['ID']."'";
		$result = mysqli_query($connection, $query);
		$num=mysqli_num_rows($result);
		
		$i=0;
	
	echo "<table width=70% >";
		

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
		echo "<th width = 24% ><h6>&nbsp;&nbsp;&nbsp;All <input type='checkbox' id='ckbCheckAll' />";
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
			 " <p id='checkBoxes'>";
    echo    "<td align=right><input name='delete[]' value='$id' type='checkbox' class='checkBoxClass' id='Checkbox1' /></td>";
   " </p>";
                     echo "</tr>";
   
			$i++;
			
		}
		echo "<tr>";
		
		 
					 echo "<td colspan='7'><input type='submit' value='Delete'></td>";

             echo "</tr>";
		echo  "</table>";
		echo "</form>";
"</br>";
	
?>
      </div> 
</center>
        

	</div>
</body>
</html>