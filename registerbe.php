<?php 
session_start();

$hashed = password_hash($_POST['pword'],PASSWORD_BCRYPT);

$dbfile = fopen("users.mndb",'a');
fwrite($dbfile,$db+$_POST['name']+'^'+$_POST['email']+'^'+$_POST['uname']+'^'+$hashed);
fclose($dbfile);



?>

<script>
//window.location.replace("home.php");
</script>