<?php

	$petid = $_GET['petid'];
	$dr_id = $_GET['dr_id'];
	

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
<style> 
textarea {
    width: 75%;
    height: 100px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
</style>
</head>
<body>

<?php include('treatmenu.php');?>
<div id="contents">
		<br />		
        <center>
       <form id="form1" name="form1" method="post"  onsubmit="return validate(this);">
               
               <table bgcolor="#F8F8F8" style="padding:20px;">
               <tr>
               <td colspan="2" align="center">
                  <u  style="color:brown;">Add Treatment</u><br />
               </td>
               </tr>
               <tr>
               <td width="182px">
                PET ID:
               </td>
               
               <td>
                <input name="id" type="text" value="<?php echo $petid; ?>"><br />
               <font color="red"> <span id="civiliderror"></span></font><br />
               </td>
                
               </tr>
               
               
               <tr>
               <td>
                Treatment Type:
               </td>
               <td>
               <textarea id="treat_type" name="treat_type" placeholder="Treatment Type..." ></textarea><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
               </td>
               </tr>
               
               <tr>
               <td>
                Problem:
               </td>
               <td>
               <textarea id="problem" name="problem" placeholder="Problem..." ></textarea><br />
               <font color="red"> <span id="lnameerror"></span></font><br />
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
	include("connect.php");
	
	$today = date("Y-m-d");
	
	$treat_type = $_POST["treat_type"];
	$problem = $_POST["problem"];
	
	$query=mysqli_query($connection,"select * from treat where pet_id= $petid and doctor_national_id=$dr_id and date='$today'") or die(mysql_error($connection));
	$numrow=mysqli_num_rows($query);
	if($numrow>0)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("This PET already Treated .. ");'; 
		echo '</script>';
	}else{
	$query2=mysqli_query($connection,"insert into treat(pet_id,doctor_national_id,Treat_type,problem,date) values ($petid,$dr_id,'$treat_type','$problem','$today')") or die(mysql_error($connection));
	echo '<script type="text/javascript">'; 
	echo 'alert("Treated Done .. ");'; 
	echo '</script>';
	}


   }

?>


</body>
</html>