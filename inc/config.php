<?php //
$server = "us-cdbr-iron-east-02.cleardb.net";
$username = "b67c482eab4854";
$password = "c79d499e";
$db = "heroku_5da25e9f877d6fc";
//session_start();
$conexion = mysql_connect($server, $username,$password);
mysql_select_db($db,$conexion);
session_start();
?>
