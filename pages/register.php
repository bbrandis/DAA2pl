<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style/style.css">
	<title>Register</title>
</head>
<body>
	<br>
	<a href="../index.php" class="custom-button">< Back</a>
	<br>
	<br>
	
	<div id = "frm"><center><form action="../php/registerscript.php" method="POST">
		<label for="username">Meno:	</label>
		<br>
		<input type="text" name="username" id="username">
		<br>
		<label for="email">Mail:	</label>
		<br>
		<input type="mail" name="email" id="email">
		<br>
		<label for="password">Heslo:	</label>
		<br>
		<input type="password" name="password" id="password">
		<br>
		<label for="password_check">Zopakujte:	</label>
		<br>
		<input type="password" name="password_check" id="password_check">
		<br>
		<input type="submit" value="Registrovať" class="custom-button">
	</form></center></div>
		
</body>
</html>
