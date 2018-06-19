<!DOCTYPE HTML>
<html>

<head>
<title>Function strpos</title>
<style>
img {
	width: 100px;
	height: 100px;
}
</style>
</head>

<body>
<?php

$name=$_POST['name'];
$epwnymo=$_POST['epwnymo'];
$email=$_POST['email'];

echo "Your name is <strong>".$name." ".$epwnymo."</strong> and your email is <strong>".$email."</strong> .";

if (strpos($email, 'gmail')==true)
	echo "</br><img src='img/gmail.png'/>";
else if (strpos($email, 'yahoo')==true)
	echo "</br><img src='img/yahoo.png'/>";
else if(strpos($email, 'hotmail')==true)
	echo "</br><img src='img/hotmail.png'/>";
else if(strpos($email, 'mailinator')==true)
	echo "</br>You can not use this email!!";
else
	echo "</br>Wrong email!!";

?>
</body>
</html>