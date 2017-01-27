<?php
//start session to maintain state of user's authentication
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Schedule Traker" ?></title>
        <link rel="stylesheet" href="style/style.css">
        <style type="text/css">
        body {
            margin:0px;
            background-image:url(Image/images.jpg);
            background-size: 800px 600px;
            background-repeat: no-repeat;
            
            }
        </style>
        
    </head>
    
    <body>
        <!--<div class="menuSec">-->
        <!--    <nav class="navigation">-->
        <!--        <a href ="index.php">My Roster</a>-->
        <!--        <a href ="content/notice.php">Notice board</a>-->
        <!--        <a href ="content/availibility.php">Availibility</a>-->
        <!--        <a href ="content/leavereq.php">Leave Request</a>-->
        <!--    </nav>-->
        <!--</div>-->
        <!--<div id="contentSection">-->
            
            
        <!--</div>-->
        
        <?php include_once("navigation/welcome.php")?>
        
        
    </body>
</html>