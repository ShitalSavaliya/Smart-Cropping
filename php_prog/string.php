<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h1>PHP String Funtion demo...</h1>
<?php
echo strlen("savaliya shital")."<br>";
echo str_word_count("Hello world!")."<br>"; // outputs 2
echo strrev("hello world")."<br>";
echo strpos("hello world","world")."<br>";
echo str_replace("world","dolly","hello world")."<br>";
define("GREETING"," 1.Welcome to W3Schools.com!");
echo GREETING;
define("GREETING","2.Welcome to W3Schools.com!", true);
echo greeting;
define("GREETINGG","3.Welcome to W3Schools.com!");
function myTest() {
    echo GREETINGG;
}
 myTest();
?>
</body>
</html>
