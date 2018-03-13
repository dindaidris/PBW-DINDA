<?php 
if(isset($_POST["sendMessageButton"])){


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$to = 'dindaidris98@gmail.com';

$message = 'From:$name <br/ >' .$message;

$headers .= 'From: <info@yourdomain.com>' . "\r\n";
$headers .= 'Cc: admin@yourdomain.com' . "\r\n";
@mail($to,$email,$phone,$message);
if(@mail)
{
echo "Email sent successfully !!";	
}
}
?>