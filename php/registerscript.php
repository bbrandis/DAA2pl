<?php

if( !empty($_POST["username"]))
{
	echo "Zadal si meno.<br>";
}
else
{
	echo "Nezadal si meno.<br>";
}

if( !empty($_POST["email"]))
{
	echo "Zadal si mail.<br>";
}
else
{
	echo "Nezadal si mail.<br>";
}

if( !empty($_POST["password"]))
{
	echo "Zadal si heslo.<br>";
}
else
{
	echo "Nezadal si heslo.<br>";
}

if ($_POST["password"]!=$_POST["password_check"])
{
	echo "Heslá sa nezhodujú.<br>";
}
else
{
	echo "Nezadal si heslo znova.<br>";
}
?>



