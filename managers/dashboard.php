<!DOCTYPE html>
<html>
    <head>
       <title> Dasboard</title>
       <link rel="stylesheet" href="style/style.css"  />
       <style type="text/css">
           #tasks{
               
               width:45%;
               height:495px;
               border:5px solid grey;
               display: block;
               float: left;
           }
           
            #quickLinks{
               
               width:45%;
               height:495px;
               border:5px solid grey;
               display: block;
               float: right;
           }
           
           .qckbtn{
               
               width: 100%;
               height: 90px;
               margin-top: 5px;
               background-color: blue;
               color: white;
               font-weight: bold;
           }
           #container{
               
               margin-top: 10px;
           }
       </style>
    </head>
    
    
   <body>
    
       <div id="container">
       <div id="tasks">
           <p>Tasks to do</p>
       </div>
       
       <div id="quickLinks">
           <button class="qckbtn" onclick="window.location='managers/addPosition.php';">Add positions</button>
           <button class="qckbtn"  onclick="window.location='managers/inviteForm.php';">Add and Invite staff</button>
           <button class="qckbtn">Create and publish roster</button>
           <button class="qckbtn" onclick="window.location='managers/show_availability.php';">See availability</button>
           <button class="qckbtn">See leave requests</button>
       </div>
       
       </div>
   </body>
</html>