<?php
// header('Content-Type: application/json');

$db_username = 'admin';
$db_password = 'root1234';
$db_hostname = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com';
$db_port = '3306';
$db_name = 'db_1821964';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
$q = "SELECT * FROM exam";
$r = mysqli_query($conn, $q);

while ($item = mysqli_fetch_object($r)) {
    $json = json_encode($item);
	$dec = json_decode($json, true);
	
	echo "<ul>";
	echo "<li>". $dec["subject"] ."</li>";
	echo "<ul>";
	echo "<li>". $dec["teacher"]." </li>";
	echo "<li>". $dec["schedule"] ."</li>";
	echo "</ul>";
	echo "</ul>";
}