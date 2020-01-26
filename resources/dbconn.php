<?php
session_start();
$conn = new MySQLi("localhost", "e8280501_minn", "MinnePear.420", "e8280501_change4schools");
if (!$conn) {
	die("No database connection");
}
?>