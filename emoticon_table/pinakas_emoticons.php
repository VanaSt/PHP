<!DOCTYPE>
<html>
<head>
<title>pinakas_emoticons</title>
<style type="txt/css">
</style>
</head>

<body>
<?php
$gs=$_POST['gs'];
$bor=$_POST['bor'];
$mikos=$_POST['mikos'];
$ypsos=$_POST['ypsos'];
$mood=$_POST['mood'];
$sxima=$_POST['sxima'];

#echo "<table style='border:".$bor."px solid black; width:".$mikos."px; height:".$ypsos."px'>";

echo "<table border='".$bor."px solid black'; width:'".$mikos."px'; height:'".$ypsos."px'>";

for($i=1;$i<=$gs;$i++){
	echo "<tr>";
		for($j=1;$j<=$gs;$j++){
			
		
			if($sxima=="perimetrika"){
				if($i==1||$i==$gs||$j==1||$j==$gs)
				echo "<td><img src='img/".$mood."' width='150px' height='150px'></td>";
				else
				echo "<td></td>";
			}
		
			if($sxima=="stauros"){
				if($i==($gs+1)/2||$j==($gs+1)/2)
				echo "<td><img src='img/".$mood."' width='150px' height='150px'></td>";
				else
				echo "<td></td>";
			}
			
			if($sxima=="xiasti"){
				if($i==$j||$i+$j==$gs+1)
				echo "<td><img src='img/".$mood."' width='150px' height='150px'></td>";
				else
				echo "<td></td>";
			}
			
		}	
	echo "</tr>";
}
?>
</body>
</html>