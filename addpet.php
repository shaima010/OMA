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
	
			<div class="logo"><a href="customerpage.php"><img src="image/logo.png" alt="LOGO" height="190" width="210"></a>
            </div>
             <ul class="navigation">
			  <li >
			  
					<a href="customerpage.php">My DETILS</a>
				</li>
			  
			 
			 
			  <li>
					<a href="viewbook.php">VIEW Appointment</a>
				</li>
                
               
			  <li>
					<a href="searchdoctor.php">SEARCH DOCTOR</a>
				</li>
				<li class="active">
					<a href="#">ADD PET</a>
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
       <form id="form1" name="form1" method="post"  onsubmit="return validate(this);">
               
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
                  <u  style="color:brown;">Add Pet</u><br />
               </td>
               </tr>
               <tr>
               <td width="182px">
                customer id:
               </td>
               
               <td>
                <input name="id" type="text" value="<?php echo $_SESSION['ID']; ?>" readonly><br />
               <font color="red"> <span id="civiliderror"></span></font><br />
               </td>
               
               </tr>
               
               
               <tr>
               <td>
                Pet id:
               </td>
               <td>
               <input type="text" name="petId" id="petId"  ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
			   <tr>
               <td>
                Pet name:
               </td>
               <td>
               <input type="text" name="petname" id="petname"  ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
			   
			   <tr>
               <td>
                Pet Type:
               </td>
               <td>
               <input type="text" name="pettype" id="pettype"  ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
               <tr>
               <td>
                Pet Gender:
               </td>
               <td>
			   <select name="gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
 
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
               
                 <input type="submit" name="save" id="save" class="button" value="save"  onClick="return validate(this);" />
                
</td>

        <td>
               
                 <input type="reset" name="reset" id="reset"  />

</td>
</tr>
</table></form>
</center>
        

	</div>
<?php
if(isset($_POST['save']))
{
 include('connect.php');
 $customer_id = $_SESSION['ID'];
	$petId = $_POST["petId"];
	$pname = $_POST["petname"];
	$ptype = $_POST["pettype"];
	$gender = $_POST["gender"];
	
  $sql="select * from pet where petId =$petId";
	$result = mysqli_query($connection,$sql);
	$row = mysqli_num_rows($result);
	if($row>0){
		echo '<script type="text/javascript">'; 
		echo 'alert("This PEt already registered .. ");'; 
		echo '</script>';
	}
	else{
		$q="insert into pet (petId,customer_id,pet_name,pet_type,pet_gender) values ($petId,$customer_id,'$pname','$ptype','$gender')";
		mysqli_query($connection,$q) or die(mysqli_error($connection));
		echo '<script type="text/javascript">'; 
		echo 'alert("Registered Successfully .. ");'; 
		echo '</script>';
	}
   }
 
?>


</body>
</html>