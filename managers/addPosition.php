<link rel="stylesheet" href="../style/style.css" type="text/css" />
<?php include_once("../navigation/adminnav.php")?>
<form action="position.php" method="post" >
    <div class="loginForm">
                        <div class="form-group">
                            <label>Position Name</label><br><br>
                            <input type="text" name="positionName" class="form-control" placeholder="Position name">
                        </div>
                        <br>
                        <br>
                        <div class="text-right">
                            <button class="btnAll" type="submit" value="addPosition" name="submit">Add position</button>
                        </div>
    </div>                    
</form>    
