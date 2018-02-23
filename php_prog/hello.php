<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
/*echo  "helloooo";
$a=10;
echo "a is".$a;
var_dump($a);
$b=10;
$c=$a+$b;
echo "sum is".$c;
echo "<br>";
$clg=array("BVM","ADIT");
echo $clg[0]."  and  ".$clg[1];*/
$name =$_POST['fname'];
$psw =$_POST['psw'];
if($psw==123)
{
	
echo "Home page";
//echo $psw;
}
else 
	echo "error";
	?>
</body>
</html>
