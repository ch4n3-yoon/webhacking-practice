<?php

highlight_file(__FILE__);
echo "<hr>";

/*
 * made by ch4n3 [at] BoB 6th, team Demon & H3X0R
 */

echo "What is ch4n3's school?<br>";
echo "<form><input type='text' name='answer'></form>";
$real_answer = "DIMIGO";

@extract($_GET);

if (!isset($answer))
	exit(0);

if ($answer === $real_answer) {
	if ($real_answer !== "DIMIGO") {
		echo "9reat! I think you're good at PHP Trick<br>";
	} else {
		echo "Correct. But I don't want this..<br>";
	}
}

else {
	echo "You're wrong. <br>";
}


?>