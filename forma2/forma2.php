<-!DOCTYPE HTML>
<html>

<head>
	<title>Φόρμα ξανά!!</title>
	<content charset="utf-8">
</head>

<body>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pwd=$_POST['pwd'];
$country=$_POST['origin'];
$gender=$_POST['sex'];
$bdate=$_POST['bdate'];
$interests=$_POST['interests'];
$fnumber=$_POST['fnumber'];
$fcolor=$_POST['fcolor'];
$comments=$_POST['comments'];


echo "<p>Το όνομα σου είναι <strong>".$fname." ".$lname."</strong> είσαι <strong>".$gender."</strong> και μένεις στη χώρα <strong>".$country.".</strong></p>";
/*
	if(isset($gender)&& $gender=="male")
		echo " άντρας.</p>";
	else
		echo " γυναίκα.</p>";
*/
echo "<p>Ο κωδικός πρόσβασης σου είναι <strong>".$pwd.".</strong></p>";

echo "<p>Γεννήθηκες στις <strong>".$bdate."<strong> ";
	if($bdate<'1986-05-11')
		echo "και είσαι πάνω από 30 χρονών.</p>";
	else if($bdate>'1986-05-11')
		echo "και είσαι κάτω από 30 χρονών.</p>";
	else 
		echo "και είσαι ακριβώς 30 χρονών! Χρόνια πολλά!!</p>";
	
echo "<p>O αγαπημένος σου αριθμός είναι το ";
	if($fnumber%2==0)
		echo "<a style='color:red; font-size:26px;'>";
	else
		echo "<a style='color:green; font-size:30px;'>";
	echo "<strong>".$fnumber.".</strong></p>";
	
if(empty($interests))
	echo "<p><a style='color:black; font-size: 16px;'>Δεν έχεις ενδιαφέροντα?!</p>";
else
{
	echo "<p><a style='color:black; font-size: 16px;'>Ενδιαφέρεσαι για ";
	foreach($interests as $select){
		echo " <strong>".$select."</select></p>";}
}
	
echo "<p style='color:black; font-size:22px;'>Τα σχόλια σας: <strong>".$comments."</strong>.</p>";
	
	
	
echo "<p><body-style='background-color:$fcolor;'></p>";
	
?>
</body>

</html>