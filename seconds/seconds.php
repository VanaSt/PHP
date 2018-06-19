<!DOCTYPE HTML>
<html>
<head>
<title>Παράδειγμα με μετατροπή seconds</title>
<style type="text/css">
</style>
</head>
<body>
<?php
$sec=$_POST['sec'];
$hour=(((int)($sec/3600)));
$min=((int)($sec%3600/60));
$rest_sec=((int)($sec%3600%60));

echo "<img src='clock.gif' width='200px' height='200px'/>";

echo "</br>You gave <strong>".$sec."</strong> seconds.";

if(((int)($sec/3600)>1)||((int)($sec/3600)==0))
	echo "</br><strong>".$sec."</strong> seconds are: <strong>".$hour."</strong> hours, <strong>".$min."</strong> minutes and <strong>".$rest_sec."</strong> seconds.";
else
	echo "</br><strong>".$sec."</strong> seconds is: <strong>".$hour."</strong> hour, <strong>".$min."</strong> minutes and <strong>".$rest_sec."</strong> seconds.";


?>
</body>
</html>