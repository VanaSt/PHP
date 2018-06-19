<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<content charset="utf-8">
</head>

<body>
<?php

$name=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$date=$_POST['bdate'];
$number=$_POST['fnumber'];
$color=$_POST['fcolor'];

echo "<p>Το όνομα σου είναι <strong>".$name." ".$lname."</strong>.</p>";
echo "<p>Το email σου είναι <strong>".$email."</strong>.</p>";
echo "<p>Γεννήθηκες στις <strong>".$date."</strong>";
	if($date>'1988-05-22')
		echo " και είσαι πάνω απο 30 χρονών.</p>";
	else if($date<'1988-05-22')
		echo " και είσαι κάτω από 30 χρονών.</p>";
	else 
		echo " και είσαι ακριβώς 30 χρονών, Χρόνια σου Πολλά!!</p>";
echo "<p>Ο αγαπημένος σου αριθμός είναι ο ";
	if($number%2==0)
		echo "<a style='color:red; font-size:22px;'>";
	else
		echo "<a style='color:green; font-size:26px;'>";
echo "<strong>".$number."</strong>.</p>";

?>
</body>

</html>