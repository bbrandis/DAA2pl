<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 session_start() ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>

<header>
	<?php if (!isset($_SESSION["email"])) : ?>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
	  <li class="nav-item active">
		<a class="nav-link" href="pages/login.php">Prihlásenie</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="pages/register.php">Registrácia</a>
	  </li>
	  <?php else : ?>
	  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link disabled">Prihlásený je <?php echo $_SESSION["email"] ?></a>
			  </li>
			  <a href="pages/profile.php?id=<?php echo $_SESSION['id'] ?>"> 
				  <img src="../assets/<?php echo $_SESSION["avatar"] ?>" width="60" 
				   height="35" alt="">
			  </a>
	  <li class="nav-item">
		  <a class="nav-link" href="php/logout.php">Odhlásiť</a>
		</li> 
		<?php endif; ?>
	</ul>
  </div>
</nav>
</header>	
