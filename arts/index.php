<?php include('./php/header.php') ?>
	<main class="container">
	
	</br>
	<center>
	<b><h1>Vitajte!</h1></b>
	<br>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'php/Connection.php';

$sql = "SELECT title, text, cover_image, author, create_time FROM Articles";
$result = $conn->query($sql);


if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo $row["title"] . "</br>";
		echo $row["text"] . "</br>";
		echo $row["author"] . "</br>";
		echo $row["create_time"] . "</br>";
	}
}

?>


<div class="card" style="width: 18rem;">
<img class="card-img-top" src="/assets/bgsmall.png" alt="Card image cap">
  <div class="card-body">
<h5 class="card-title"><?php echo $row["title"] ?></h5>
<p class="card-text"><?php echo $row["text"] ?></p>
  </div>
  <ul class="list-group list-group-flush">
	<li class="list-group-item"><?php echo $row["author"] ?></li>
	<li class="list-group-item"><?php echo $row["create_time"] ?></li>
  </ul>
  <div class="card-body">
</div>

	</center>
	</main>
<?php include('./php/footer.php') ?>
