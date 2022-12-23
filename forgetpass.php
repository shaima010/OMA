<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Clinic of Pets System</title>
    <link rel="stylesheet" href="default.css" type="text/css">
</head>

<body>
  
      <?php include('menu1.php');?>
<div id="contents">
		<br />		
        
        <center>
       
       <br /><br /><br /><br />
 
     
      <h2>Forgot Password<h2><br />
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td >&nbsp;&nbsp; Email id:</td><td align='center'><br /><input type='email' name='mail' style="height:34px;width:250px"></td></tr>
<tr><td></td><td align='center'><br /><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{ 
ini_set("SMTP","ssl:smtp.gmail.com" );
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('petsclinic') or die(mysql_error());
 $mail=$_POST['mail'];
 $q=mysql_query("select * from doctor  where doctor_email='".$mail."' ") or die(mysql_error());
 
 $q2=mysql_query("select * from customer  where customer_email='".$mail."' ") or die(mysql_error());
 
 
 
 $p=mysql_affected_rows();
  $res=mysql_fetch_array($q);
  
  $res2=mysql_fetch_array($q2);
   
 if($mail ==''){
	 
	 echo "Please Enter your E-mail!!";
	 
	 
 }
	 else if($res) 
 {
 
 
  
  
  
require 'PHPMailerAutoload.php';

$codescafeMail = new PHPMailer();
$codescafeMail->IsSMTP();
$codescafeMail->Mailer = 'smtp';
$codescafeMail->SMTPAuth = true;
$codescafeMail->Host = 'smtp.gmail.com'; 
$codescafeMail->Port = 465;
$codescafeMail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
// $codescafeMail->Port = 587;
// $codescafeMail->SMTPSecure = 'tls';
$codescafeMail->Username = "petsclinic90@gmail.com";
$codescafeMail->Password = "pets1234";
$codescafeMail->IsHTML(true); // For HTML formatted mails
$codescafeMail->SingleTo = true; 
$codescafeMail->From = "petsclinic90@gmail.com";
$codescafeMail->FromName = "Clinic of Pets System";
$codescafeMail->Subject = "Your password ";
$codescafeMail->Body = "Your password : ".$res['doctor_password'];
$codescafeMail->addAddress($res['doctor_email']);
if(!$codescafeMail->Send()){
echo "Something Wrong! Message was not send!! " . $codescafeMail->ErrorInfo;
}
else{
echo "Message sent succesfully!!";
}
  
  
  
  
  
 
 
 
	 
	 
	 
	 
 }
 
  else if($res2) 
 {
 
 
  
  
  
require 'PHPMailerAutoload.php';

$codescafeMail = new PHPMailer();
$codescafeMail->IsSMTP();
$codescafeMail->Mailer = 'smtp';
$codescafeMail->SMTPAuth = true;
$codescafeMail->Host = 'smtp.gmail.com'; 
$codescafeMail->Port = 465;
$codescafeMail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
// $codescafeMail->Port = 587;
// $codescafeMail->SMTPSecure = 'tls';
$codescafeMail->Username = "petsclinic90@gmail.com";
$codescafeMail->Password = "pets1234";
$codescafeMail->IsHTML(true); // For HTML formatted mails
$codescafeMail->SingleTo = true; 
$codescafeMail->From = "petsclinic90@gmail.com";
$codescafeMail->FromName = "Clinic of Pets System";
$codescafeMail->Subject = "Your password ";
$codescafeMail->Body = "Your password : ".$res2['customer_password'];
$codescafeMail->addAddress($res2['customer_email']);
if(!$codescafeMail->Send()){
echo "Something Wrong! Message was not send!! " . $codescafeMail->ErrorInfo;
}
else{
echo "Message sent succesfully!!";
}
  
  
  
  
  
 
 
 
	 
	 
	 
	 
 }
 
 else
 {
  echo'You entered mail id is not present';
 }
}
?>
          
 
        
    </div>

<?php include('footer.php');?>

    
</body>
</html>
