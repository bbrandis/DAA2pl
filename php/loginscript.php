<?php  
    require('./Connection.php');  
    $email = $_POST['email'];  
    $hashed_password = md5($_POST['password']);
      
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";  
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $id;
            $_SESSION['avatar'] = $avatar;
            header("Location: ../index.php");
        }
        else {
            header("Location: ../pages/login.php?message=Nesprávne údaje");
        }
       
?>  