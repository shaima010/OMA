<?php 
session_start();

if(!isset($_SESSION['ID'])){
	header('Location: skillshome.php');
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
			  <li class="active">
			  
					<a href="#">My DETILS</a>
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
<?php include('display.php');?>


<div id="contents">
		<br />		
        <center>
       <form id="form1" name="form1" method="post"  onsubmit="return validate(this);">
               
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
                  <u  style="color:brown;">My Details</u><br />
               </td>
               </tr>
               <tr>
               <td width="182px">
                User id:
               </td>

               <td>
                <input name="id" type="text" value="<?php echo $id; ?>"><br />
               <font color="red"> <span id="civiliderror"></span></font><br />
               </td>
               
               </tr>
               
               
               <tr>
               <td>
                Name:
               </td>
               <td>
               <input type="text" name="id" id="lastname" value="<?php echo $namef." ".$namel; ?>" ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
               
               
               <tr>
               <td>
               
               <tr>
               <td>
                   Mobile No:
               </td>
               <td>
			   <input name="id" type="text" value="<?php echo $phone; ?>" readonly>
               <br />
               <font color="red"> <span id="passerror"></span></font><br />
               </td>
               </tr>                         

               <tr>
               <td>
               E-mail:
               </td>
               <td>
			    <input type="text" name="mail"  id="cpass" value="<?php echo $email; ?>">
               <br />
               <font color="red"> <span id="cpasserror"></span></font><br />   
               </td>
               </tr>
               
                 <tr>
               <td>
           <tr>
                <td colspan="2">
                  
             <div ></div>
              </td>
               </tr>
              
</table></form>
</center>
        

	</div>


</body>
</html>