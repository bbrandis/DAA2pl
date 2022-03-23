<?php

$validated = true;
$pwm = true; 

if( !empty($_POST["username"]))
{

}
else
{
	echo "Nezadal si meno.<br>";
	$validated = false;
}

if( !empty($_POST["email"]))
{

}
else
{
	echo "Nezadal si mail.<br>";
	$validated = false;
}

if( !empty($_POST["password"]))
{

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


require_once("./Connection.php");
if($validated && $pwm){
	$sql = 'INSERT INTO users(password,email,username) VALUES("'. $_POST["password"] .'","'.$_POST["email"] .'","'.$_POST["username"].'");';
	$result = $conn->query($sql);
}
if ($conn->query($sql) === TRUE) {
  echo "Registrácia úspešná";
} else {
  echo "ne: " . $conn->error;
}


?>



