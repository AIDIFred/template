<?php 
session_start();

$filer = fopen("users.mndb",'r')
$db = fread($filer);
fclose($filer);
/*
$hashed = password_hash($_POST['pword'],PASSWORD_BCRYPT);

$db+="\n";
$dbfile = fopen("users.mndb",'w');
fwrite($dbfile,$db+$_POST['name']+'^'+$_POST['email']+'^'+$_POST['uname']+'^'+$hashed);
fclose($dbfile);

*/

?>

<script>
//window.location.replace("home.php");
</script>