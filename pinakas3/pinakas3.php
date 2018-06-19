<!DOCTYPE HTML>
<html>
<head><title>Πίνακας 3</title></head>
<body>

<table border="1" width="50px" height="500px">

<?php

$gs=$_POST['gs'];
$xrwma=$_POST['xrwma'];
$mood=$_POST['mood'];
$sxima=$_POST['sxima'];

if($mood<=34)
	$im="img/sad.png";
else if($mood<=67)
	$im="img/neutral.png";
else
	$im="img/happy.png";

for($i=1;$i<=$gs;$i++)
{
	echo "<t>";
		for($j=1;$j<=$gs;$j++)
		{
			if($sxima=='stauros')
			{
				if($i==($gs+1)/2||$j==($gs+1)/2)
					echo "<td style='background-color:".$xrwma."'><img src='".$im."' width='50px' height='50px'/></td>";
				else
					echo "<td></td>";
			}
			
			else if($sxima=='xiasti')
			{
				if($i==$j||$i+$j==$gs+1)
					echo "<td style='background-color:".$xrwma."'><img src='".$im."' width='50px' height='50px'/></td>";
				else
					echo "<td></td>";
			}
			
			else if($sxima=='perimetrika')
			{
				if($i==1||$j==1||$i==$gs||$j==$gs)
					echo "<td style='background-color:".$xrwma."'><img src='".$im."' width='50px' height='50px'/></td>";
				else
					echo "<td></td>";
			}
			
			else if($sxima=='katw_diagwnios')
			{
				if($i>=$j)
					echo "<td style='background-color:".$xrwma."'><img src='".$im."' width='50px' height='50px'/></td>";
				else
					echo "<td></td>";
			}
			
			else if($sxima=='anw_diagwnios')
			{
				if($i<=$j)
					echo "<td style='background-color:".$xrwma."'><img src='".$im."' width='50px' height='50px'/></td>";
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