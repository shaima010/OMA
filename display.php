<?php
$id=$_SESSION['ID'];
include"connect.php";

$dis=mysqli_query($connection,"select * from customer where customer_id='$id'");
while ($row=mysqli_fetch_row($dis)){
$idd=$row[0];
$namef=$row[1];
$namel=$row[2];
$phone=$row[4];
$email=$row[5];
//echo $namef."   ".$namel."    ".$id."    ".$email."    ".$phone;
}
?>
