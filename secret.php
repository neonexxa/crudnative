<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$name = "crudnative";
 
$wired = mysql_connect($host, $user, $pass) or die("Fail to connect to database!: ".mysql_error());
mysql_select_db($name, $wired) or die("No Database Selected");

?>