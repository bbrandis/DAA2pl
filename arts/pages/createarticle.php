<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style/style.css">
	<title>Nový článok</title>
</head>
<body>
	<br>
	<a href="../index.php" class="custom-button">< Back</a>
	<br>
	<br>
	
	<div id = "frm"><center><form action="../php/insertarticle.php" method="POST">
		<label for="title">Titulok:	</label>
		<br>
		<input type="text" name="title" id="title">
		<br>
		<label for="text">Text článku:	</label>
		<br>
		<input type="text" name="text" id="text">
		<br>
		<label for="cover_image">Titulný obrázok:	</label>
		<br>
		<input type="text" name="cover_image" id="cover_image">
		<br>
		<label for="author">Autor:	</label>
		<br>
		<input type="text" name="author" id="author">
		<br>
		<input type="submit" value="Zverejniť článok" class="custom-button">
	</form></center></div>
		
</body>
</html>
