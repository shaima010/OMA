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
	
			<div class="logo"><a href="adminpage.php"><img src="image/logo.png" alt="LOGO" height="190" width="210"></a>
            </div>
             <ul class="navigation">
			 
				<li>
			  
					<a href="addoctor.php">Add Doctor</a>
				</li>
			 <li>
					<a href="viewcustomer.php">View Customer</a>
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



</body>
</html>