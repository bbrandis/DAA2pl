<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style/style.css">
	<title>Login</title>
</head>
<body>
	</br>
	<a href="../index.php" class="custom-button">< Back</a>
	<br>
	<br>
	
	<div id = "frm"><center><form action="../php/loginscript.php" method="POST">
		<label for="email">Mail: </label><br>
		<input type="mail" name="email" id="email">
		<br>
		<label for="password">Heslo: </label><br>
		<input type="password" name="password" id="password">
		<br>
		<input type="submit" value="Prihlásiť" class="custom-button">
		
		<p> <?php echo $error ?></p>
	</form></center></div>
	
</body>
</html>