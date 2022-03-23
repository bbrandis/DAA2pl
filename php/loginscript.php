<?php      
    require('./Connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";  
        $result = mysqli_query($conn, $sql);  
    
        if ($username == "" || $password == ""){
            echo "Nekompletné údaje";
        }
        else if ($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['username'];
            echo "Vitajte";
        }
        else {
            echo "Nesprávne meno alebo heslo";
        }
       
?>  