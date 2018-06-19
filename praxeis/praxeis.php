<!DOCTYPE HTML>
<html>
<head><title>Πράξεις</title></head>
<body>
<?php

$ar1=$_POST['ar1'];
$ar2=$_POST['ar2'];
$praxi=$_POST['praxi'];

if($praxi=='+')
	echo "Η πρόσθεση του αριθμού <strong>".$ar1."</strong> με τον <strong>".$ar2."</strong> είναι: <strong>".($ar1 + $ar2)."</strong>.";
else if($praxi=='-')
	echo "Η αφαίρεση του αριθμού <strong>".$ar1."</strong> με τον <strong>".$ar2."</strong> είναι: <strong>".($ar1 - $ar2)."</strong>.";
else if($praxi=='*')
	echo "Ο πολλαπλασιασμός του αριθμού <strong>".$ar1."</strong> με τον <strong>".$ar2."</strong> είναι: <strong>".($ar1 * $ar2)."</strong>.";
else if($praxi=='/')
	echo "Η διαίρεση του αριθμού <strong>".$ar1."</strong> με τον <strong>".$ar2."</strong> είναι: <strong>".($ar1 / $ar2)."</strong>.";
else if($praxi=='mod')
	echo "Το ακέραιο υπόλοιπο του αριθμού <strong>".$ar1."</strong> με τον <strong>".$ar2."</strong> είναι: <strong>".($ar1 % $ar2)."</strong>.";
else if($praxi=='div')
	echo "Η ακέραιη διαίρεση του αριθμού <strong>".$ar1."</strong> με τον <strong>".$ar2."</strong> είναι: <strong>".floor($ar1 / $ar2)."</strong>.";
else 
	echo "Δεν ορίζεται!!!";

?>
</body>
</html>