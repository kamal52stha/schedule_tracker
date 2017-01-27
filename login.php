<?php
    if($_POST["submit"]=="login"){
        
        $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
       // echo $email;
        //MAKE DATABASE CONNECTION 
        $connection = mysqli_connect("localhost","kamal12","","an");
         //get the email from login form and sanitize it
 // $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
  //no need to sanitize password as it's not used in database query
  $password = $_POST["password"];
        $query = "SELECT companyID, email, password, userName, companyName FROM Users WHERE email='$email'";
        if($connection){
             $result = $connection-> query($query);
            
            //if email matches user
            if($result-> num_rows >0){
                $user = $result -> fetch_assoc();
                //print_r($user);
                $username = $user["userName"];
                $password = $user["password"];
                $email = $user["email"];
                $loginpassword = $_POST["password"];
                $company = $user["companyName"];
                if(password_verify($loginpassword, $password)){
                    // the password matches the one in database 
                    
                    include_once("navigation/adminnav.php");
                    //echo " hello " + $user["userName"];
                    include_once("managers/dashboard.php");
                }
                else{
                    
                    echo "email or password is wrong";
                }
            }
            else{
                echo "an error has occoured, email or password does not match our records";
            }
        }
    }
?>