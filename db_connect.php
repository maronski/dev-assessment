<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dev_assessment";

$conn = mysql_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Connection failed: " . mysql_connect_error());
}
echo "Connected Successfully";
?>