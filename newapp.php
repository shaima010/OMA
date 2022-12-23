<?php
	session_start();
	 include('connect.php');
	$dr_id = $_GET['id'];
	$query = "select * from doctor where doctor_namtional_id = '$dr_id'";
	$result = mysqli_query($connection, $query);
	
	while($row = mysqli_fetch_assoc($result)) {
					
   $fname = $row['doctor_first_name'];
   $lname = $row['doctor_last_name']; 
   $cat = $row['category']; 
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
<!-- get drop down list value before submit -->
<script src="http://code.jquery.com/jquery-lastest.min.js"></script>
<script>$(document).ready(function(){
	$('select.category').on('change',function () {
		var decision = $(this).val();
		alert(decision);
		$.ajax({
			type: "POST",
			url: "dropdown.php",
			data: {decision : decision},
			success: function(msg) {
				$('#ali').text(msg);
			}
	})
});
});
</script>
</head>
<body>

<?php include('appmenu.php');?>
<div id="contents">
		<br />		
        <center>
		<div id ="ali"></div>
       <form id="form1" name="form1" action="#" method="post" >
               
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
                  <u  style="color:brown;">New Appointment</u><br />
               </td>
               </tr>
               <tr>
               <td width="182px">
                User id:
               </td>
               
               <td>
                <input id = "userid" name="userid" type="text" value="<?php echo $_SESSION['ID']; ?>" readonly><br />
               <font color="red"> <span id="civiliderror"></span></font><br />
               </td>
               
               </tr>
               
               
               <tr>
               <td>
                Appointment id:
               </td>
               <td>
               <input type="text" name="appid" id="appid"  ><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
               
               
               <tr>
               <td>
                    Category:
               </td>
               <td>
			   <input type="text" name="category" id="category" value="<?php echo $cat; ?>" readonly ><br />

               <br />
               <font color="red"> <span id="usernameerror"></span></font><br />
               </td>
               </tr>
               
               <tr>
               <td>
                   Doctor Name: 
               </td>
               <td>
			   <input type="text" name="drname" id="drname" value="<?php echo $fname." ".$lname; ?>" readonly  ><br />
               <br />
               <font color="red"> <span id="passerror"></span></font><br />
               </td>
               </tr>
               
               <tr>
               <td>
               Date:
               </td>
               <td>
			    <input type="date" name="date"  id="date" >
               <br />
               <font color="red"> <span id="cpasserror"></span></font><br />
               </td>
               </tr>
               
                 <tr>
               <td>
                time:
               </td>
               <td>
			  
<select name="time" id="time" >
<option value="0">sealectTime</option>
  <option value="9:00AM-10:00AM">9:00AM-10:00AM</option>
  <option value="10:00AM-11:00AM">10:00AM-11:00AM</option>
  <option value="11:00AM-12:00PM">11:00AM-12:00PM</option>
  <option value="4:00PM-5:00PM">4:00PM-5:00PM</option>
  <option value="5:00PM-6:00PM">5:00PM-6:00PM</option>
  <option value="6:00PM-7:00PM">6:00PM-7:00PM</option>
  <option value="7:00PM-8:00PM">7:00PM-8:00PM</option>
  <option value="8:00PM-9:00PM">8:00PM-9:00PM</option>
</select>
               <br />
               <font color="red"> <span id="phoneerror"></span></font><br />
               </td>
               </tr>
			   
			   <tr>
               <td>
                   Pet id: 
               </td>
               <td>
			   <input name="ptid" type="text">
               <br />
               <font color="red"> <span id="passerror"></span></font><br />
               </td>
               </tr> 
 <tr>
               <td>
                   Pet Type: 
               </td>
               <td>
			   <input name="pttype" type="text">
               <br />
               <font color="red"> <span id="passerror"></span></font><br />
               </td>
               </tr> 

 <tr>
               <td>
                   Pet Gender: 
               </td>
               <td>
			   <select name="gender" id="gender" >

  <option value="1">Male</option>
  <option value="2">Female</option>
  
</select>
               <br />
               <font color="red"> <span id="passerror"></span></font><br />
               </td>
               </tr>			   
              
           <tr>
                <td colspan="2">
                  
             <div class="g-recaptcha" data-sitekey="6LeU0UYUAAAAAIdktFTjj3Gh1KOffKcZAu_-tm8w"></div>
              </td>
               </tr>
              
                <tr>
                <td>
               
                 <input type="submit" name="save" id="save" class="button" value="save" />

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
 
	$customer_id = $_POST["userid"];
	$appointmentId = $_POST["appid"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$ptid = $_POST["ptid"];
	$pttype = $_POST["pttype"];
	$gender = $_POST["gender"];
	
	$query1=mysqli_query($connection,"select * from  appointment where appointmentId = '$appointmentId'") or die(mysqli_error());
	$num=mysqli_num_rows($query1);
	
	if($num > 0){
		echo '<script type="text/javascript">'; 
	echo 'alert("This appointment Id already taken.. ");'; 
	echo '</script>';
	}
	else{
		$query2=mysqli_query($connection,"select * from  appointment where doctor_national_id = '$dr_id'") or die(mysqli_error());
	$res2=mysqli_num_rows($query2);

	while($row2 = mysqli_fetch_assoc($query2)) {
					
    $dbdate = $row2["date"];
	$dbtime = $row2["time"];
	$doctor_national_id = $row2["doctor_national_id"];
	}
	if((strcmp($date,$dbdate) == 0) && (strcmp($time,$dbtime) == 0)){
		echo '<script type="text/javascript">'; 
		echo 'alert("This time with this doctor is already booked choose another");'; 
		echo '</script>';
	
	}
	  else{
$q="insert into appointment (appointmentId,customer_id,doctor_national_id,date,time,category,Pet_id,Pet_type,Pet_gender) values ('$appointmentId','$customer_id','$dr_id','$date','$time','$cat',$ptid,'$pttype','$gender')";
mysqli_query($connection,$q)or die(mysqli_error($connection));
echo '<script type="text/javascript">'; 
echo 'alert("Booked Successfully .. ");'; 
echo '</script>';
	  }
	  
	}
		}
?>


</body>
</html>