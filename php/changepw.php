<?php

$validated = false;

if( !empty($_POST["password"]))
{
	$validated = true;
}
else
{
	echo "Nezadal si heslo.<br>";
	$validated = false;
}

else

$hashed_password = md5($_POST["password"]);

require_once("./Connection.php");
session_start();
if($validated){
	$sql = "UPDATE password SET password = $hashed_password WHERE id = '$id'";  
	$result = $conn->query($sql);
}
if ($conn->query($sql) === TRUE) {
  echo "Password has been changed.";
} else {
  echo "ne: " . $conn->error;
}

?>



