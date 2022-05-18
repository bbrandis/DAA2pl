<?php

require_once("./Connection.php");
	$sql = 'INSERT INTO Articles(title,text,cover_image,author) VALUES("'. $_POST["title"] .'","'.$_POST["text"] .'","'.$_POST["cover_image"].'","'.$_POST["author"].'");';
	$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
  header("Location: ../index.php");
} else {
  echo "posral si sqlko: " . $conn->error;
}

?>



