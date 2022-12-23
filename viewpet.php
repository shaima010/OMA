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
	</head>
<body>
	<div id="header">
	
			<div class="logo"><a href="customerpage.php"><img src="image/logo.png" alt="LOGO" height="190" width="210"></a>
            </div>
             <ul class="navigation">
			  <li>
			  
					<a href="customerpage.php">My DETILS</a>
				</li>
			  
			 
			 
			  <li>
					<a href="viewbook.php">VIEW Appointment</a>
				</li>
                
               
			  <li>
					<a href="searchdoctor.php">SEARCH DOCTOR</a>
				</li>
				<li>
					<a href="addpet.php">ADD PET</a>
				</li>
				<li class="active">
					<a href="#">VIEW PET</a>
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
       <form id="form1" name="form1" method="post"  onsubmit="return validate(this);">
               
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
<u  style="color:brown;">View My Pet</u>
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
echo "<form method='post' name='form1' onSubmit='return checkDelete()'>";
		
		$customer_id = $_SESSION['ID'];
	    $query = "select * from pet where customer_id = $customer_id";
		$result = mysqli_query($connection, $query);
		$num=mysqli_num_rows($result);
		
		$i=0;
	
	echo "<table width=70% >";
		

		echo "<tr>";
		echo "<th width = 12%  align=center><v1>Pet Id";
		echo "<th width = 12%  align=center><v1>Customer id";
		echo "<th width = 12%  align=center><v1>Pet name";	
		echo "<th width = 12%  align=center><v1> Pet Type";
		echo "<th width = 12%  align=center><v1> Pet Gender";
        echo "</tr>";
	
			while($row = mysqli_fetch_assoc($result)) {
   $id = $row['petid'];
   $Pname = $row['pet_name']; 
   $Pet_type = $row['pet_type']; 
   $Pet_gender = $row['pet_gender']; 

			echo "<tr>";
	
			echo "<td align=center>$id</td>";
			echo "<td  align=center>$customer_id</td>";
			
			echo "<td align=center>$Pname</td>";
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