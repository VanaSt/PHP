<!DOCTYPE HTML>
<html>
<head>
	<title>Αλλαγή μεγέθους εικόνας</title>
	<content charset="utf-8">
</head>

<body>
<?php

$meg=$_POST['meg'];
echo "<img src='h.jpg' width='".$meg."' height='".$meg."'/>";

?>

<!--
<img src='images/h.jpg' width='50px' height='50px' />
-->

</body>
</html>