<!DOCTYPE HTML>
<html>

<head>
<title>ΔΗΜΙΟΥΡΓΙΑ ΠΙΝΑΚΑ</title>
</head>

<body>
<table border="1" width="400px" height="400px">

<?php

$gs=$_POST['gs'];
$xrwma=$_POST['xrwma'];
$mood=$_POST['mood'];
$sxima=$_POST['sxima'];

/*
if ($mood=="happy")
	echo "<img src='img/happy.png'/>";
else if ($mood=="sad")
	echo "<img src='img/sad.png'/>";
else
	echo "<img src='img/neutral.png'/>";
*/


for ($i=1;$i<=$gs;$i++)
{
	echo "<tr>";
		
		for ($j=1;$j<=$gs;$j++)
		{
			if($sxima=="stauros")
			{
				if(($i==($gs+1)/2)||($j==($gs+1)/2))
					echo "<td style='background-color:".$xrwma."';><img src='img/".$mood.".png' height='50px' width='50px'/></td>";
				else
					echo "<td></td>";
			}
		
			else if($sxima=="perimetrika")
			{
				if($i==1||$j==1||$i==$gs||$j==$gs)
					echo "<td style='background-color:".$xrwma."';><img src='img/".$mood.".png' height='50px' width='50px'/></td>";
				else
					echo "<td></td>";
			}
		
			else
			{
				if($i==$j||$i+$j==$gs+1)
					echo "<td style='background-color:".$xrwma."';><img src='img/".$mood.".png' height='50px' width='50px'/></td>";
				else
					echo "<td></td>";
			}
		}
		
	echo "</tr>";
}
?>

</table>
</body>

</html>