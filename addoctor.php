<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Clinic of Pets System</title>
	<link rel="stylesheet" href="default.css" type="text/css">

<script type="text/javascript">



function validate(form)
{
	
	
if (document.getElementById("customer_id").value=="")
{
alert("Please Enter customer ID");
return false;
}




if (!/^[0-9]*$/g.test(document.getElementById("customer_id").value)) {
        alert("customer ID contains only number.");
       
        return false;
    }
	
	
function validate(form)
{
	
	
if (document.getElementById("appointmentId").value=="")
{
alert("Please Enter appointment Id");
return false;
}




if (!/^[0-9]*$/g.test(document.getElementById("appointmentId").value)) {
        alert("appointmen ID contains only number.");
       
        return false;
    }
	
	if (document.getElementById("doctor_national_id").value=="")
{
alert("Please Enter appointment Id");
return false;
}




if (!/^[0-9]*$/g.test(document.getElementById("doctor_national_id").value)) {
        alert("doctor ID contains only number.");
       
        return false;
    }

 if (document.getElementById("date").value=="")
{
alert("Please select Date .");
return false;
}

 if (document.getElementById("time").value=="")
{
alert("Please select time .");
return false;
}
if (document.getElementById("category").value=="")
{
alert("Please select the category");
return false;
}


return true;
}


</script>

</head>
<body>

<div id="header">
	
			<div class="logo"><a href="adminpage.php"><img src="image/logo.png" alt="LOGO" height="190" width="210"></a>
            </div>
             <ul class="navigation">
			 
				<li class="active">
			  
					<a href="#">Add Doctor</a>
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
<div id="contents">
		<br />		
        <center>
       <form id="form1" name="form1" method="post"  onsubmit="return validate(this);">
               
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
                  <u  style="color:brown;">Add Doctor</u><br />
               </td>
               </tr>
               <tr>
               <td width="182px">
                Doctor id:
               </td>
               
               <td>
                <input name="id" type="text"><br />
               <font color="red"> <span id="civiliderror"></span></font><br />
               </td>
               
               </tr>
               
               
               <tr>
               <td>
                First Name:
               </td>
               <td>
               <input type="text" name="fname" id="fname"  ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
			   <tr>
               <td>
                Last Name:
               </td>
               <td>
               <input type="text" name="lname" id="lname"  ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
			   
			   <tr>
               <td>
                Phone:
               </td>
               <td>
               <input type="text" name="phone" id="phone"  ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
               
               <tr>
               <td>
                E-mail:
               </td>
               <td>
               <input type="text" name="email" id="email"  ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
			    <tr>
               <td>
                Password:
               </td>
               <td>
               <input type="password" name="password" id="password"  ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
               <tr>
               <td>
                Category:
               </td>
               <td>
			   <select name="category">
  <option value="General Physician">General Physician</option>
  <option value="Bone">Bone</option>
  <option value="Heart">Heart</option>
  <option value="Dentest">Dentest</option>
  <option value="Neurologist">Neurologist</option>
  <option value="Kidney">Kidney</option>
</select>
               <br />
               <font color="red"> <span id="usernameerror"></span></font><br />
               </td>
               </tr>
               
           <tr>
                <td colspan="2">
                  
             <div class="g-recaptcha" data-sitekey="6LeU0UYUAAAAAIdktFTjj3Gh1KOffKcZAu_-tm8w"></div>
              </td>
               </tr>
              
                <tr>
                <td>
               
                 <input type="submit" name="submit" id="submit" class="button" value="save"  onClick="return validate(this);" />

</td>

        <td>
               
                 <input type="reset" name="reset" id="reset"  />

</td>
</tr>
</table></form>
</center>
        

	</div>
<?php
if(isset($_POST['submit']))
{
 include('connect.php');
	$d_id = $_POST["id"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$category = $_POST["category"];
	
	$password = md5($pass);
	$query=mysqli_query($connection,"select * from  doctor") or die(mysql_error());
while($row = mysqli_fetch_row($query)) {
					
    $dbID = $row[0];
	$dbphone = $row[3];
	$dbemail = $row[4];
	}
	
	if(strcmp($d_id,$dbID) == 0)
   {
 	$message = "Civil ID used before..Try Again";
	echo "<script type='text/javascript'>alert('$message');</script>"; 
  }
  
   elseif(strcmp($phone,$dbphone) == 0)
   {
 	$message = "Phone NO. used before..Try Again";
echo "<script type='text/javascript'>alert('$message');</script>";
   
  }
  
  
   elseif(strcmp($email,$dbemail) == 0)
   {
 	$message = "E-mail used before..Try Again";
echo "<script type='text/javascript'>alert('$message');</script>";
   
  }
 
  else
   {

$q="insert into doctor (doctor_namtional_id,doctor_first_name,doctor_last_name,doctor_phone,doctor_email,doctor_password,category) values ('$d_id','$fname','$lname','$phone','$email','$password','$category')";
mysqli_query($connection,$q);
//echo $ED;
echo '<script type="text/javascript">'; 
echo 'alert("Registered Successfully .. ");'; 
echo '</script>';
	
   }
 }
?>


</body>
</html>