<!DOCTYPE HTML>
<html>
<head>
<title>Receipt</title>
</head>
<body>
<h1>Receipt</h1>
<?php
$name=$_POST['name'];
$lastname=$_POST['lastname'];


$birthday=$_POST['birthday'];
$email=$_POST['email'];
$url=$_POST['url'];
$phone=$_POST['phone'];


$shoe=$_POST['shoe'];
$amount=$_POST['amount'];
$size=$_POST['size'];
$color=$_POST['color'];
$ikan=$_POST['ikan'];
$address=$_POST['address'];
$zip=$_POST['zip'];
$country=$_POST['country'];
$cardtype=$_POST['cardtype'];


$cardName=$_POST['cardName'];
$cardNo=$_POST['cardNo'];
$security=$_POST['security'];
$expire=$_POST['expire'];


$t = date("H");
$price=0;
$shoename=" ";


/* if (date("h:i:sa") < date("11:59:59p"))
{echo "Good morning $name $lastname";}
else if (date("h:i:sa") > date("12:00:00a"))
{echo "Good evening $name $lastname";} */


if($t < "20"){
	echo "Good morning ".$name." ".$lastname.".";
	}
else {
	echo "Good evening ".$name." ".$lastname.".";
	}
	
echo "<br>The shipping address is ".$address.", ".$zip.", ".$country.".";


if($shoe==1)
	{
	$price=105;
	$shoename="Nike free run";
	}
if($shoe==2)
	{
	$price=115;
	$shoename="Nike Pegasus";
	}
if($shoe==3)
	{
	$price=119;
	$shoename="Adidas Springblade";
	}
if($shoe==4)
	{
	$price=135;
	$shoename="Adidas Boost";
	}

echo "<br>Product: ".$shoename;
echo "<br>Price: ".$price;
echo "<br>Amount: ".$amount;
echo "<br>Size: ".$size;
echo "<br>Color: ".$color;


echo "<br>Final price: ".$price." * ".$amount." + 23% ΦΠΑ = ".$price*$amount*1.23;

?>
</body>
</html>