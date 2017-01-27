<?php
 
  if($_POST["submit"]=="register"){
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $company = $_POST["companyName"];
      
      //sanitise the data received 
      $username = filter_var($username, FILTER_SANITIZE_STRING);
      $email  = filter_var($email, FILTER_SANITIZE_EMAIL);
      $company = filter_var($company, FILTER_SANITIZE_STRING);
      
      //connecting to database 
    
        $dbuser = "kamal12";
        $dbpass = "";
        $dbhost = "localhost";
        $dbname = "an";
        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        // if connection is successful
        if($connection){
            
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO Users (userName, email, password, companyName) VALUES('$username', '$email','$hash', '$company')";
            if($connection -> query($query)){
                echo "registration is successful";
            }
            else{
                echo "Something is wrong";
            }
        }
        else{
            echo "connection error";
        }
        
  }
?>