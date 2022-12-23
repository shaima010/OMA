<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Clinic of Pets System</title>
	<link rel="stylesheet" href="default.css" type="text/css">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <script type="text/javascript">

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function validate(form)
{
	var valid = true;
	
	
	
	if (document.getElementById("civilid").value=="")
{
//alert("Please Enter Donor Civil ID");
 document.getElementById("civiliderror").innerHTML = "You must Enter National ID.";
valid = false;
}
	else if (!/^[0-9]*$/g.test(document.getElementById("civilid").value)) {
       // alert("Invalid Civil ID.");
        document.getElementById("civiliderror").innerHTML = "Invalid National ID.";
     valid = false;
    }
else if (document.getElementById("civilid").value.length != 8)
	{
	//	alert("Civil ID. should be in 8 digits");
	 document.getElementById("civiliderror").innerHTML = "National ID. should be in 8 digits";
	valid = false;
	}
	
	else{
		document.getElementById("civiliderror").innerHTML = "";
	}
    





	
if (document.getElementById("firstname").value=="")
{
//alert("Please Enter First Name");
document.getElementById("fnameerror").innerHTML = "Please Enter First Name";
valid = false;
}

else if (!/^[A-Za-z_ -]*$/g.test(document.getElementById("firstname").value)) {
        //alert("Invalid FirstName..must contains letters only");
       document.getElementById("fnameerror").innerHTML = "Invalid FirstName..must contains letters only";
        valid = false;
    }
	else{
		document.getElementById("fnameerror").innerHTML = "";
	}
	
	
	
if (document.getElementById("lastname").value=="")
{
//alert("Please Enter First Name");
document.getElementById("lnameerror").innerHTML = "Please Enter Last Name";
valid = false;
}

else if (!/^[A-Za-z_ -]*$/g.test(document.getElementById("lastname").value)) {
        //alert("Invalid FirstName..must contains letters only");
       document.getElementById("lnameerror").innerHTML = "Invalid LastName..must contains letters only";
      valid = false;
    }
	else{
		document.getElementById("lnameerror").innerHTML = "";
	}
	
	
	
	
	
	
	if (document.getElementById("username").value=="")
{
//alert("Please Enter First Name");
document.getElementById("usernameerror").innerHTML = "Please Enter Username";
valid = false;
}


	else{
		document.getElementById("usernameerror").innerHTML = "";
	}
	
	
	
	if (document.getElementById("pass").value=="")
{
//alert("Please Enter Password");
	document.getElementById("passerror").innerHTML = "Please Enter Password";
	
valid = false;
}


else if (document.getElementById("pass").value.length < 6)
	{
		//alert("Password. should be more than 6 digits");
		
			document.getElementById("passerror").innerHTML = "Password. should be more than 6 digits";
	
		valid = false;
	}
	else{
		document.getElementById("passerror").innerHTML = "";
	}
	
	var fpwd=document.getElementById("pass").value;
	var spwd=document.getElementById("cpass").value;
	
	
if (document.getElementById("cpass").value=="")
{
			document.getElementById("cpasserror").innerHTML = "Please Retype your Password";

//alert("Please Retype your Password");
valid = false;
}


	else if(fpwd!=spwd){
	//alert("The Passwords you have entered do not match!");
    	document.getElementById("cpasserror").innerHTML = "The Passwords you have entered do not match!";
	
	valid = false;
		
	}
else{
		document.getElementById("cpasserror").innerHTML = "";
	}
	
	
	
if (document.getElementById("phone").value=="")
{
//alert("Please Enter Your phone.");
	document.getElementById("phoneerror").innerHTML = "Please Enter Your phone.";
	
valid = false;
}
else if (!/^[0-9]*$/g.test(document.getElementById("phone").value)) {
       // alert("Invalid Phone NO.");
       document.getElementById("phoneerror").innerHTML = "Invalid Phone NO.";
	
       valid = false;
    }
else if (document.getElementById("phone").value.length != 8)
	{
		//alert("Phone NO. should be in 8 digits");
		document.getElementById("phoneerror").innerHTML = "Phone NO. should be in 8 digits";
	
        valid = false;
	}
    else{
		document.getElementById("phoneerror").innerHTML = "";
	}
	
	
	
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
     
	
	if (document.getElementById("email").value=="")
{
//alert("Please Enter  E-mail Address");
		document.getElementById("emailerror").innerHTML = "Please Enter  E-mail Address";
	
valid = false;
}

 else if(!email.value.match(mailformat))  
       {  
          // alert("You have entered an invalid email address!");
		   document.getElementById("emailerror").innerHTML = "You have entered an invalid email address!";
	 
           valid = false;
       }
	    else{
		document.getElementById("emailerror").innerHTML = "";
	}

	
 return valid;
}




</script>
</head>
<body>
<div id="header">
	  <div class="clearfix">
			<div class="logo"><a href="homepge.php"><img src="image/logo.png" alt="LOGO" height="190" width="210"></a>

			</div>
			<ul class="navigation">
			  <li>
					<a href="homepge.php">Home</a>
				</li>
			  <li>
					<a href="login.php">Login</a>
				</li>
			 
			 
			  <li class="active">
					<a href="#">Registeration</a>
				</li>
                
                <li>
					<a href="about.php">About Us</a>
				</li>
			 
			</ul>
		</div>
	</div>
<div id="contents">
		<br />		
        <center>
       <form id="form1" name="form1" method="post"  onsubmit="return validate(this);">
               
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
                  <h2>Registeration FORM</h2><br />
               </td>
               </tr>
               <tr>
               <td width="182px">
                National ID: 
               </td>
               
               <td>
               <input type="text" name="civilid" id="civilid" ><br />
               <font color="red"> <span id="civiliderror"></span></font><br />
               </td>
               
               </tr>
               
               
                <tr>
               <td width="182px">
                First Name: 
               </td>
               
               <td>
               <input type="text" name="firstname" id="firstname"><br />
               <font color="red"> <span id="fnameerror"></span></font><br />
               </td>
               
               </tr>
               
               
               
               <tr>
               <td>
                Last Name: 
               </td>
               <td>
               <input type="text" name="lastname" id="lastname"  ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
               
               
               <tr>
               <td>
                   Username: 
               </td>
               <td>
               <input type="text" name="username" id="username"  ><br />
               <font color="red"> <span id="usernameerror"></span></font><br />
               </td>
               </tr>
               
               
               <tr>
               <td>
                    Password:
               </td>
               <td>
               <input type="password" name="pass" id="pass"  ><br />
               <font color="red"> <span id="passerror"></span></font><br />
               </td>
               </tr>
               
               <tr>
               <td>
               Confirm Password:
               </td>
               <td>
               <input type="password" name="cpass" id="cpass"  ><br />
               <font color="red"> <span id="cpasserror"></span></font><br />
               </td>
               </tr>
               
                 <tr>
               <td>
               Phone NO.:
               </td>
               <td>
               <input type="text" onkeypress="return isNumber(event)" name="phone" id="phone" required><br />
               <font color="red"> <span id="phoneerror"></span></font><br />
               </td>
               </tr>
               
                 <tr>
               <td>
                  E-mail:
               </td>
               <td>
                <input type="email" name="email" id="email"  required><br />
                <font color="red"> <span id="emailerror"></span></font><br />
               </td>
               </tr>
              
           
           <tr>
                <td colspan="2">
                  
             <div class="g-recaptcha" data-sitekey="6LeU0UYUAAAAAIdktFTjj3Gh1KOffKcZAu_-tm8w"></div>
              </td>
               </tr>
              
                <tr>
                <td>
               
                 <input type="submit" name="submit" id="submit" class="button" value="Submit"  onClick="return validate(this);" />

</td>

        <td>
               
                 <input type="reset" name="reset" id="reset"  />

</td>
</tr>
</table>

</form>
</center>
        

	</div>

<?php include('footer.php');?>

<?php

if(isset($_POST['submit']))
{
 include('connect.php');

	
	$cid = $_POST["civilid"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$username = $_POST["username"];
	$pass = $_POST["pass"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	
$password = md5($pass);
$query=mysqli_query($connection,"select * from  customer") or die(mysql_error());
while($row = mysqli_fetch_assoc($query)) {
					
    $dbcID = $row["customer_id"];
	$dbusername = $row["customer_username"];
	$dbphone = $row["customer_phone"];
	$dbemail = $row["customer_email"];
	}
 if(isset($_POST['g-recaptcha-response']))
          $captcha=$_POST['g-recaptcha-response'];

        if(!$captcha){
         // echo '<h2>Please check the the captcha form.</h2>';
		  	$message = "Please check the the captcha form";
echo "<script type='text/javascript'>alert('$message');</script>";
          //exit;
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeU0UYUAAAAAEj5McdQy6FnX5BV-8zQtF_oU9j6&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
        //  echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }
        else
        {
   if(strcmp($cid,$dbcID) == 0)
   {
 	$message = "Civil ID used before..Try Again";
	echo "<script type='text/javascript'>alert('$message');</script>"; 
  }
  
  elseif(strcmp($username,$dbusername) == 0)
   {
 	$message = "Username used before..Try Again";
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
	   
	
$q="insert into customer (customer_id,customer_first_name,customer_last_name,customer_username,customer_phone,customer_email,customer_password) values ('$cid','$firstname','$lastname','$username','$phone','$email','$password')";
mysqli_query($connection,$q);
//echo $ED;
echo '<script type="text/javascript">'; 
echo 'alert("Registered Successfully .. ");'; 
echo '</script>';
	
   }
 }
}
?>

</body>
</html>