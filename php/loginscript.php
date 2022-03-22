<?php      
    include('./Connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        $sql = "select *from users where email = '$email' and password = '$password'";  
        $result = mysqli_query($sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  


﻿