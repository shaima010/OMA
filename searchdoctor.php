<?php 
session_start();

if(!isset($_SESSION['ID'])){
	header('Location: homepge.php');
exit;
}
?>	
<!DOCTYPE HTML>

<html>
<head><meta charset="UTF-8">
	<title>Clinic of Pets System</title>
	<link rel="stylesheet" href="default.css" type="text/css">
	</head>
<body>
	<div id="header">
	
			<div class="logo"><a href="customerpage.php"><img src="image/logo.png" alt="LOGO" height="190" width="210"></a>
            </div>
             <ul class="navigation">
			  <li >
			  
					<a href="customerpage.php">My DETILS</a>
				</li>
			  
			 
			 
			  <li>
					<a href="viewbook.php">VIEW Appointment</a>
				</li>
                
               
			  <li class="active">
					<a href="#">SEARCH DOCTOR</a>
				</li>
				<li>
					<a href="addpet.php">ADD PET</a>
				</li>
				<li>
					<a href="viewpet.php">VIEW PET</a>
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
       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="Post">
               
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
                  <u  style="color:brown;">Search Doctor</u><br />
               </td>
               </tr>
               <tr>
               <td width="182px">
			   
               Search By:
               </td>
               
               <td>
			   <select id="category" name="category" required>
			   <option value="All">All</option>
<?php 
include('connect.php');
$sql = mysqli_query($connection, "SELECT DISTINCT * FROM doctor");
while ($rowlist=mysqli_fetch_row($sql)){
echo "<option value='".$rowlist[6]."'>" . $rowlist[6] . "</option>";
$i++;
}
?>
</select> <br />
               <font color="red"> <span id="civiliderror"></span></font><br />
               </td>
               
               </tr>
               
           <tr>
                <td colspan="2">
                  
             <div class="g-recaptcha" data-sitekey="6LeU0UYUAAAAAIdktFTjj3Gh1KOffKcZAu_-tm8w"></div>
              </td>
               </tr>
                <tr>
                <td>
                <input type="submit" id="search" name="search" value="Search">
</td>
</tr>
</table></form>

<div align="center">
      
<?php
if(isset($_POST['search'])){
	
		$category = $_POST['category'];
		if($category != "All"){
		$query = "select * from doctor where category = '$category'";
		$result = mysqli_query($connection, $query);
		
		$i=0;
	
	echo "<table width=70% >";
		

		echo "<tr>";
		echo "<th width = 12%  align=center><v1>Doctor Name";
		echo "<th width = 12%  align=center><v1>Doctor Phone";
		echo "<th width = 12%  align=center><v1> Doctor Email";
		echo "<th width = 12%  align=center><v1> Doctor Category";
		echo "<th width = 12%  align=center><v1> Choose Doctor";
        echo "</tr>";
	
			while($row = mysqli_fetch_assoc($result)) {
					
   $fname = $row['doctor_first_name'];
   $lname = $row['doctor_last_name']; 
   $phone = $row['doctor_phone']; 
   $email = $row['doctor_email']; 
   $cat = $row['category'];
	$id = $row['doctor_namtional_id'];
   
			echo "<tr>";
			echo "<td align=center>$fname $lname</td>";
			echo "<td  align=center>$phone</td>";
			echo "<td  align=center> $email</td>";
			echo "<td  align=center> $cat</td>";
			echo "<td  align=center> <a href='newapp.php?id=$id'>select</a></td>";
            echo "</tr>";
   
			$i++;
			
		}
		echo  "</table>";
		echo "</form>";
		"</br>";
		}
	if($category == "All"){
		$query = "select * from doctor";
		$result = mysqli_query($connection, $query);
		
		$i=0;
	
	echo "<table width=70% >";
		

		echo "<tr>";
		echo "<th width = 12%  align=center><v1>Doctor Name";
		echo "<th width = 12%  align=center><v1>Doctor Phone";
		echo "<th width = 12%  align=center><v1> Doctor Email";
		echo "<th width = 12%  align=center><v1> Doctor Category";
		echo "<th width = 12%  align=center><v1> Choose Doctor";
        echo "</tr>";
	
			while($row = mysqli_fetch_assoc($result)) {
					
   $fname = $row['doctor_first_name'];
   $lname = $row['doctor_last_name']; 
   $phone = $row['doctor_phone']; 
   $email = $row['doctor_email']; 
   $cat = $row['category']; 
   $id = $row['doctor_namtional_id'];
   
			echo "<tr>";
			echo "<td align=center>$fname $lname</td>";
			echo "<td  align=center>$phone</td>";
			echo "<td  align=center> $email</td>";
			echo "<td  align=center> $cat</td>";	
			echo "<td  align=center> <a href='newapp.php?id=$id'>select</a></td>";
            echo "</tr>";
   
			$i++;
			
		}
		echo  "</table>";
"</br>";
	}
}else{

	    $query = "select * from doctor";
		$result = mysqli_query($connection, $query);
		
		$i=0;
	
	echo "<table width=70% >";
		

		echo "<tr>";
		echo "<th width = 12%  align=center><v1>Doctor Name";
		echo "<th width = 12%  align=center><v1>Doctor Phone";
		echo "<th width = 12%  align=center><v1> Doctor Email";
		echo "<th width = 12%  align=center><v1> Doctor Category";
		echo "<th width = 12%  align=center><v1> Choose Doctor";
        echo "</tr>";
	
			while($row = mysqli_fetch_assoc($result)) {
					
   $fname = $row['doctor_first_name'];
   $lname = $row['doctor_last_name']; 
   $phone = $row['doctor_phone']; 
   $email = $row['doctor_email']; 
   $cat = $row['category']; 
   $id = $row['doctor_namtional_id'];
   
			echo "<tr>";
			echo "<td align=center>$fname $lname</td>";
			echo "<td  align=center>$phone</td>";
			echo "<td  align=center> $email</td>";
			echo "<td  align=center> $cat</td>";
			echo "<td  align=center> <a href='newapp.php?id=$id'>select</a></td>";
            echo "</tr>";
   
			$i++;
			
		}
		echo  "</table>";
"</br>";
}
?>
      </div>
</center>
        

	</div>

</body>
</html>