<?php

$dbuser = "kamal12";
        $dbpass = "";
        $dbhost = "localhost";
        $dbname = "an";
        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($_POST["submit"]=="addPosition"){
    
    $positionName = $_POST["positionName"];
    
    $positionName = filter_var($positionName, FILTER_SANITIZE_STRING);
    
     $query = "INSERT INTO positions (positionName) VALUES('$positionName')";
            if($connection -> query($query)){
                echo "position is added";
                
            }
            else{
                echo "Something went wrong";
            }
}
    
?>