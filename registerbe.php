<?php 
session_start();
$conn = new MySQLi("localhost", "e8280501_minn", "MinnePear.420", "e8280501_change4schools");
if (!$conn) {
	die("No database connection");
}

$hashed = password_hash($conn->real_escape_string($_POST['pword']),PASSWORD_BCRYPT);

$query="INSERT INTO users ('name','email','uname','pword') VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['uname']."','".$hashed."')";

$result = $conn->query($query);

echo "updated?";


?>

<script>
//window.location.replace("home.php");
</script>