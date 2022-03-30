<?php      
    require('./Connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";  
        $result = mysqli_query($conn, $sql);  
    
        if (empty($email)|| empty($password)){
            header("Location: ../pages/login.php?message=Nekompletné údaje");
        }
        else if ($result->num_rows == 1){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['username'];
            header("Location: ../index.php");
        }
        else {
            header("Location: ../pages/login.php?message=Nesprávne údaje");
        }
       
?>  