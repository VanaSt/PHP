<!DOCTYPE HTML>
<html>
<head>
	<title>forma_telikh</title>
	<content charset="utf-8">
</head>

<body>
<?php
$name=$_POST['name'];
$lname=$_POST['lname'];
$date=$_POST['date'];
$color=$_POST['color'];
$mood=$_POST['mood'];

echo "<p>Το όνομα σας είναι <span style='color:$color'><strong>".$name." ".$lname."</strong></span>.</p>";
echo "<p>Γεννηθήκατε στις <strong>".$date.".</strong>";
	if($date>'1988-05-22')
		echo "</br>Είστε κάτω από 30 ετών.</p>";
	else if($date<'1988-05-22')
		echo "</br>Είστε πάνω από 30 ετών.</p>";
	else
		echo "Χρόνια πολλά!!!</p>";
echo "<img src='h.jpg' width='".($mood*15)."px' height='".($mood*15)."px'/>";
		
?>
</body>
</html>