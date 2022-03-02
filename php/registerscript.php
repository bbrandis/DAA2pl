<?php

$validated = true;
$pwm = true; 

if( !empty($_POST["username"]))
{
	echo "Zadal si meno.<br>";
}
else
{
	echo "Nezadal si meno.<br>";
	$validated = false;
}

if( !empty($_POST["email"]))
{
	echo "Zadal si mail.<br>";
}
else
{
	echo "Nezadal si mail.<br>";
	$validated = false;
}

if( !empty($_POST["password"]))
{
	echo "Zadal si heslo.<br>";
}
else
{
	echo "Nezadal si heslo.<br>";
	$validated = false;
}

if ($_POST["password"]!=$_POST["password_check"])
{
	echo "Heslá sa nezhodujú.<br>";
	$validated = false;
	$pwm = false;
}
else
{
	echo "Heslá sa zhodujú.<br>";
}

$hashed_password = password_hash($_POST["password"], PASSWORD_BCRYPT);
echo "Unhashed password = " . $_POST["password"];
echo $hashed_password;

require_once("./Connection.php");
if($validated && $pwm){
	$sql = 'INSERT INTO users(password,email,username) VALUES("'. $_POST["password"] .'","'.$_POST["email"] .'","'.$_POST["username"].'");';
	echo "<br>".$sql;
}


?>



