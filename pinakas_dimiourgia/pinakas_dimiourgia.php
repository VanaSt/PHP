<!DOCTYPE HTML>
<html>
<head>
	<title>Δημιουργία πίνακα</title>
	<style type="text/css">
	</style>	
</head>
<body>

<?php

$gr=$_POST['gr'];
$st=$_POST['st'];
$bor=$_POST['bor'];
$color=$_POST['color'];
$width=$_POST['width'];
$height=$_POST['height'];


echo "<table style='background-color:".$color."; border:".$bor."px solid black; width:".$width."px; height:".$height."px;'>";

for($i=1;$i<=$gr;$i++){
	echo "<tr>";
		for($j=1;$j<=$st;$j++)
		{
			echo "<td style='border:".$bor."px solid black;'></td>";
		}
		echo "</tr>";
}
echo "</table>";
?> 

</body>
</html>