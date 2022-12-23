<?php 
session_start();

if(!isset($_SESSION['ID'])){
	header('Location: homepge.php');
exit;
}
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
	
			<div class="logo"><a href="adminpage.php"><img src="image/logo.png" alt="LOGO" height="190" width="210"></a>
            </div>
             <ul class="navigation">
			
				<li>
			  
					<a href="addoctor.php">Add Doctor</a>
				</li>
			 <li class="active">
					<a href="#">View Customer</a>
				</li>
				
			  <li>
					<a href="viewapp.php">View Appointment</a>
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
<table bgcolor="#F8F8F8" style="padding:20px;" align="center">
               <tr>
               <td colspan="2" align="center">
<u  style="color:brown;">View Customer</u>
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
		$query3 = "delete from customer where customer_id=$value";
		$result3 = mysqli_query($connection, $query3);
	}
  } 
}
		
	    $query = "select * from customer";
		$result = mysqli_query($connection, $query);
		$num=mysqli_num_rows($result);
		
		$i=0;
	
	echo "<table width=70%>";
		

		echo "<tr>";
		echo "<th width = 12%  align=center><v1>Customer Id";
		echo "<th width = 12%  align=center><v1>Customer Name";
		echo "<th width = 12%  align=center><v1> Username";
		echo "<th width = 20%  align=center><v1> Customer Phone";
		echo "<th width = 12%  align=center><v1> Customer Email";
		echo "<th width = 12% ><h6>All <input type='checkbox' id='ckbCheckAll' />";
        echo "</tr>";
	
			while($row = mysqli_fetch_row($result)) {
					
   $id = $row[0];
   $fname = $row[1]; 
   $lname = $row[2]; 
   $username = $row[3]; 
   $phone = $row[4]; 
   $email = $row[5];
			echo "<tr>";
	
			echo "<td align=center>$id</td>";
			echo "<td  align=center>$fname $lname</td>";
			echo "<td  align=center> $username</td>"; 
			echo "<td align=center>$phone</td>";
			echo "<td  align=center> $email</td>";
			 " <p id='checkBoxes'>";
    echo    "<td align=center>&nbsp;&nbsp;&nbsp;&nbsp;<input name='delete[]' value='$id' type='checkbox' class='checkBoxClass' id='Checkbox1' /></td>";
   " </p>";
                     echo "</tr>";
   
			$i++;
			
		}
		echo "<tr>";
		
		 
					 echo "<td colspan='6'><input type='submit' value='Delete'></td>";

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