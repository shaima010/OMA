<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>

	<title>Clinic of Pets System</title>
	<link rel="stylesheet" href="default.css" type="text/css"><script type="text/javascript">





function validate(form)
{
	
	var valid = true;
if (document.getElementById("username").value=="")
{
	 document.getElementById("usernameerror").innerHTML = "Please enter Your Username";
valid = false;

}

else{
		document.getElementById("usernameerror").innerHTML = "";
	}
	
	
if (document.getElementById("password").value=="")
{
	 document.getElementById("passerror").innerHTML = "Please enter Your Password";
valid = false;

}

else if (document.getElementById("password").value.length<6)
	{
		//alert("");
		 document.getElementById("passerror").innerHTML = "Password must contain at least number.6 digits.";
valid = false;
	}
	
	else{
		document.getElementById("passerror").innerHTML = "";
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
			  <li class="active">
					<a href="#">Login</a>
				</li>
			 
			 
			  <li>
					<a href="register.php">Registeration</a>
				</li>
                
                <li>
					<a href="about.php">About Us</a>
				</li>
			 
			</ul>
		</div>
	</div>
<div id="contents">
		<br />	   <br />   <br />	
        <center>
       
           <?php require ("connect.php") ?> 
            <form id="form1" name="form1" method="post"  onsubmit="return validate(this);">

         
              <form name="login">
              
              <table bgcolor="#F8F8F8" style="padding:20px; height:280px;">
              <tr>
              <td colspan="2" align="center">
               <h2>LOGIN FORM</h2><br />
               </td>
              </tr>
              <tr>
              <td align="center">
                <label><b>Username</b></label>
                </td>
                <td>
          
                <input type="text" name="username" id="username" width="48" />
                <br />
                <font color="red"> <span id="usernameerror"></span></font><br />
                </td>
                </tr>
                
                  <tr>
              <td align="center">
                <label><b>Password</b></label>
                 </td>
                <td>
                 <input type="password" name="password" id="password" />
                 <br />
                <font color="red"> <span id="passerror"></span></font><br />
                  
                </td>
                </tr>
                
                 <tr>
                 <td colspan="2" align="center">
             <span class="psw">Forgot <a href="forgetpass.php">password?</a></span>
</td></tr>
                 <tr>
              <td>
              &nbsp;    &nbsp;  <input type="submit" name="login" id="login" value="Login" class="signupbtn2" />
                </td>
                <td>   &nbsp;    &nbsp;    &nbsp; 
                 <input type="reset" name="reset" id="reset"  />
                 </td>
                </tr>
                </table>
                </form>
        </form>
</center>
	</div>
   <br />   <br />   <br />
<?php

 include('footer.php');

if(isset($_POST['login']))//check clicking login button
{
 include('connect.php');
 
 $name=$_POST['username'];
 $pwd=$_POST['password'];
 
  $passwordd = md5($pwd);
  echo $passwordd;
 if(isset($name)&& isset($passwordd))
 {
$query=mysqli_query($connection,"select * from  admin where username='".$name."' and password='".$passwordd."'") or die(mysqli_error());
 $numrow=mysqli_num_rows($query); //count rows number

$query2=mysqli_query($connection,"select * from  doctor where doctor_namtional_id='".$name."' and doctor_password='".$passwordd."'") or die(mysqli_error());
$numrow2=mysqli_num_rows($query2); //count rows number

$query3=mysqli_query($connection,"select * from  customer where customer_username='".$name."' and customer_password='".$passwordd."'") or die(mysqli_error());
$numrow3=mysqli_num_rows($query3); //count rows number

	//admin check login
	if($numrow>0)
	{
		while ($row=mysqli_fetch_row($query))
		{
			$_SESSION['ID'] = $row[0]; // getting data from the first field in doctor table
			echo "<meta http-equiv='refresh' content='0; url=adminpage.php' />";
		}
	}
  
   //doctor check login
   elseif($numrow2>0) //doctor check login
   {
	   while ($row2=mysqli_fetch_row($query2))
		{
			$_SESSION['ID'] = $row2[0]; // getting data from the first field in doctor table
			echo "<meta http-equiv='refresh' content='0; url=doctorpage.php' />";
		}
  }
  
  //customer check login
   elseif($numrow3>0) //doctor check login
   {
	   while ($row3=mysqli_fetch_row($query3))
		{
			$_SESSION['ID'] = $row3[0]; // getting data from the first field in customer table
			echo "<meta http-equiv='refresh' content='0; url=customerpage.php' />";
		}
   }
  
   else 
   {

   $message = "You entered username or password is incorrect";
echo "<script type='text/javascript'>alert('$message');</script>";
	
   }
 }
 
}
?>


</body>
</html>