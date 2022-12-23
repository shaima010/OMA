<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Clinic of Pets System</title>
	<link rel="stylesheet" href="default.css" type="text/css">
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
                  <u  style="color:brown;">My Details</u><br />
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
                Name:
               </td>
               <td>
               <input type="text" name="id" id="lastname"  ><br />
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
			   <input name="id" type="text">
               <br />
               <font color="red"> <span id="passerror"></span></font><br />
               </td>
               </tr>
               
               <tr>
               <td>
               E-mail:
               </td>
               <td>
			    <input type="text" name="mail"  id="cpass" >
               <br />
               <font color="red"> <span id="cpasserror"></span></font><br />   
               </td>
               </tr>
               
			   <tr>
               <td>
               Category:
               </td>
               <td>
			    <input type="text" name="mail"  id="cpass" >
               <br />
               <font color="red"> <span id="cpasserror"></span></font><br />   
               </td>
               </tr>
			   
                 <tr>
               <td>
           <tr>
                <td colspan="2">
                  
             <div class="g-recaptcha" data-sitekey="6LeU0UYUAAAAAIdktFTjj3Gh1KOffKcZAu_-tm8w"></div>
              </td>
               </tr>
              
</table></form>
</center>
        

	</div>


</body>
</html>