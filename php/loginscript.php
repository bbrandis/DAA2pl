<?php      
    require('./Connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        $sql = "select * from users where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
    
        if ($username == "" || $password == ""){
            echo "Nekompletné údaje";
        }
        else if ($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['username'];
        }
        else {
            echo "Nesprávne meno alebo heslo";
        }
       
?>  