<!DOCTYPE>
<html>

<head>
<title>flags</title>
</head>

<body>

<?php
$gs=$_POST['gs'];
$stiles=$_POST['stiles'];
$grammes=$_POST['grammes'];
$flag=$_POST['flag'];

echo "<table style='border: 2px solid grey; width: 500px; height: 500px'>";

if($flag=="uk") 
{
	for($i=1;$i<=$gs;$i++)
	{
		echo "<tr>";
		for($j=1;$j<=$gs;$j++)
		{
			if($i==$j||$i+$j==$gs+1||$i==($gs+1)/2||$j==($gs+1)/2)
				echo "<td style='background-color: red';></td>";
				else 
				echo "<td style='background-color: blue';></td>";
		}
	}
}

else if($flag=="italy")
{
	for($i=1;$i<=$grammes;$i++)
	{
		echo "<tr>";
		for($j=1;$j<=$stiles;$j++)
		{
			if($j<=($stiles/3))
				echo "<td style='background-color: green';></td>";
			else if($j>($stiles/3)*2)
				echo "<td style='background-color: white';></td>";
			else
				echo "<td style='background-color: red';></td>";			
		}
	}
}

else if($flag=="russia")
{
	for($i=1;$i<=$grammes;$i++)
	{
		echo "<tr>";
		for($j=1;$j<=$stiles;$j++)
		{
			if($i<=($grammes/3))
				echo "<td style='background-color: white';></td>";
			else if($i>($grammes/3)*2)
				echo "<td style='background-color: red';></td>";
			else
				echo "<td style='background-color: blue';></td>";		
		}
	}
}

else
{
	for($i=1;$i<=$grammes;$i++)
	{
		echo "<tr>";
		for($j=1;$j<=$stiles;$j++)
		{
			if((($i>$grammes/3) && ($i<($grammes-($grammes/3))+1)) || (($j>$stiles/3) && ($j<($stiles-($stiles/3))+1)))
				echo "<td style='background-color: white';></td>";
			else
				echo "<td style='background-color: blue';></td>";		
		}
	}
}

echo "</tr>";
echo "</table>";
?>

</body>
</html>