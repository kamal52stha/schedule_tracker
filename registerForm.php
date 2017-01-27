<!DOCTYPE html>
<html>
    <head>
       <title> Register</title>
       <link rel="stylesheet" href="style/style.css"  />
    </head>
    
    
   <body>
       
       <?php include_once("navigation/welcome.php")?>
       
       <div class="container">
          <div class="row">
             <div class="loginForm" >
                   <form action="register.php" method="post">
                        <div class="form-group">
                            <label>User Name</label><br>
                            <input type="text" name="username" class="form-control" placeholder="user name">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Email</label><br>
                            <input type="email" name="email" class="form-control" placeholder="you@domain.com">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Password</label><br>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        
                        <br>
                        <div class="form-group">
                            <label>Company Name</label><br>
                            <input type="text" name="companyName" class="form-control" placeholder="Company Name">
                        </div>
                        <br>
                        <br>
                        <div class="text-right">
                            <button class="btn btn-default" type="submit" value="register" name="submit">Register</button>
                        </div>
                    </form> 
             </div> 
          </div>
       </div>
   </body>
</html>