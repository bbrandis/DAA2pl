	<?php include('./php/header.php') ?>
	<main class="container">
	
	</br>
	<center>
	<b><h1>Dashboard</h1></b>
	<br>

	<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require 'php/Connection.php';
	
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "ID:	" . $row["id"] . "; ";
			echo "Username:	" . $row["username"] . "; ";
			echo "Mail:	" . $row["email"] . "; ";
			echo "Avatar:	" . $row["avatar"] . "; ";
			echo "Date of creation:	" . $row["date"] . "</br>";
		}
	}
	
	?>
	

	</center>
	</main>
<?php include('./php/footer.php') ?>
