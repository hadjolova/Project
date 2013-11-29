<?php
define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "root"); // set database user
define ("DB_PASS",""); // set database password
define ("DB_NAME","dogdb"); // set database name

$link = mysql_connect('localhost', 'root', '') or die("Couldn't make connection.");
$db = mysql_select_db('dogdb', $link) or die("Couldn't select database");
?>
