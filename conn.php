<?php

$host = "localhost";
$user = "root";
$pass = "";
//$pass = "root123";
$db = "wbftp";

$con = mysql_connect($host, $user, $pass);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db($db);
?>	

