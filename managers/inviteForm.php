<link rel="stylesheet" href="../style/style.css" type="text/css" />
<?php include_once("../navigation/adminnav.php")?>
<form action="position.php" method="post" >
    <div class="loginForm">
         <div class="form-group">
                            <label>Name</label><br><br>
                            <input type="text" name="name" class="form-control" placeholder="name">
                        </div>
                        <br>
                        <br>
                         <div class="form-group">
                            <label>Email</label><br><br>
                            <input type="email" name="email" class="form-control" placeholder="email">
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label>Position Name</label><br><br>
                            <input type="text" name="positionName" class="form-control" placeholder="Position name">
                        </div>
                        <br>
                        <br>
                        <div class="text-right">
                            <button class="btnAll" type="submit" value="sendInvitation" name="invite">Send invitation</button>
                        </div>
    </div>                    
</form>    