<?php

highlight_file(__FILE__);

$var = create_function("$args", $_GET['function']);
$var("Hello");

?>