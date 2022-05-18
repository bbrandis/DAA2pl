<?php include('../php/header.php') ?>
	<main class="container">
	
	</br>
	<center>
	<b><h1>Your Profile</h1></b>
	<br>

	<p>Your Username: <?php echo $_SESSION["username"] ?></p><br>
	<p>Your Email: <?php echo $_SESSION["email"] ?></p><br>
	<p>Your profile picture: 
		  <img src="../assets/<?php echo $_SESSION["avatar"] ?>" width="60" 
		   height="35" alt=""></p><br>
	<a href="./changepw.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Change password</a>
	

	</center>
	</main>
<?php include('../php/footer.php') ?>
