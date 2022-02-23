<?php

require 'Connection.php';

$sql = "CREATE TABLE Articles (
id int PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(30),
pass VARCHAR(30),
artnum int,
arts VARCHAR(2200)
)";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
  echo "Table Articles created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>