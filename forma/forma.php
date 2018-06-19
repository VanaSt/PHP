<!DOCTYPE HTML>
<html>

<head>
<title>
Δεδομένα Φόρμας
</title>
</head>

<body>
<?php
$onoma=$_POST['onoma'];
$epwnymo=$_POST['epwnymo'];
$email=$_POST['email'];
$date=$_POST['date'];
$arithmos=$_POST['arithmos'];
$xrwma=$_POST['xrwma'];
echo "<p> Γειά σου <strong>".$onoma." ".$epwnymo."</strong>.</p>";
echo"<p> Η ημερομηνία γέννησής σου είναι <strong>".$date."</strong>";
if($date<='1986-04-19')
	echo " Είσαι πάνω από 30 ετών.</p>";
else
	echo " Είσαι κάτω από 30 ετών.</p>";
echo "<p>Το email σου είναι <strong>".$email."</strong></p>";
echo "<p>Το αγαπημένο σου χρώμα είναι το ".$xrwma."</p>";
echo "<p>Ο αγαπημένος σου αριθμός είναι <strong>";
if($arithmos%2==0)
	echo "<a style='color:red;'>";
else
	echo "<a style='color:green; font-size:28px;'>";
echo $arithmos."</a></strong></p>";

?>
</body>

</html>
