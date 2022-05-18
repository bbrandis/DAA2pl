<?php  
    require('./Connection.php');  
    $email = $_POST['email'];  
    $hashed_password = md5($_POST['password']);
      
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'"; 
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1){
session_start();
            $row = mysqli_fetch_assoc($result);           
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row["id"];
            $_SESSION['username'] = $row["username"];
            $_SESSION['avatar'] = "linussmall.png";

            header("Location: ../index.php");
        }
        else {
            header("Location: ../pages/login.php?message=Nesprávne údaje");
        }
       
?>  