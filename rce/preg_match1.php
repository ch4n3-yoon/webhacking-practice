<?php

highlight_file(__FILE__);
echo "<hr>";

/*
 * made by ch4n3
 * message : You can practice it if you don't have PHP 7.x
 */

$SQLI_PATTERN 	= "/'|\"|\\|()|select|union/i";
$SQLI_REPLACE	= "(no hack)";

@extract($_GET);

if (!isset($_GET['message']))
	exit(0);

if (preg_match($SQLI_PATTERN, $message))
{
	echo "Hacking Detected! I will remove it.<br>";
	$message = preg_replace($SQLI_PATTERN, $SQLI_REPLACE, $message);
	echo "I made it. <br>";
	echo $message . "<hr>";
}

else
{
	echo "You're good user for me! Thank you :) <br>";
}

?>