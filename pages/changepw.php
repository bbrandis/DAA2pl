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
	
	<div id = "frm"><center><form action="../php/changepw.php" method="POST">
		<label for="password">New password: </label><br>
		<input type="password" name="password" id="password">
		<br>
		<input type="submit" value="Change password" class="custom-button">
		
		<p> <?php echo $error ?></p>
	</form></center></div>
	
</body>
</html>