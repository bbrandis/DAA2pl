<?php

$validated = false;

if( !empty($_POST["username"]))
{
	$validated = true;
}
else
{
	echo "Nezadal si meno.<br>";
	$validated = false;
}

if( !empty($_POST["email"]))
{
	$validated = true;
}
else
{
	echo "Nezadal si mail.<br>";
	$validated = false;
}

if( !empty($_POST["password"]))
{
	$validated = true;
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
}

else

$hashed_password = md5($_POST["password"]);

require_once("./Connection.php");
if($validated){
	$sql = 'INSERT INTO users(password,email,username) VALUES("'. $hashed_password .'","'.$_POST["email"] .'","'.$_POST["username"].'");';
	$result = $conn->query($sql);
}
if ($conn->query($sql) === TRUE) {
  echo "Registrácia úspešná";
} else {
  echo "ne: " . $conn->error;
}


?>



