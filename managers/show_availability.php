<!DOCTYPE html>
<html>
    <head>
       <title> Availability</title>
       <link rel="stylesheet" href="../style/style.css"  />
       <!--fixed path from style/style.css to ../style/style.css-->
       <style type="text/css">
           
       </style>
       
       <script type="text/javascript" src="../script/jquery.js"></script>
       <!--path should be ../script/jquery.js-->
    </head>
    
    
   <body>
        <?php include_once("../navigation/adminnav.php"); ?>
        
         
        
        
        <div id="buttonDay">
            <button class="days"  value ="sunday"  id ="sunday" type="submit">Sunday</button>
            <button class="days"  value ="monday" id ="monday" type="submit">Monday</button>
            <button class="days"  value ="tuesday" id ="tuesday" type="submit">Tuesday</button>
            <button class="days"  value ="wednesday" id ="wednesday" type="submit">Wednesday</button>
            <button class="days"  value ="thursday" id ="thursday" type="submit">Thursday</button>
            <button class="days"  value ="friday" id ="friday" type="submit">Friday</button>
            <button class="days"  value ="saturday" id ="saturday" type="submit">Saturday</button>
            
        </div>
        <div id="displayAvail">
              
        </div>
        
       <script type="text/jquery">
           
           $(document).ready(function(){
               $('#sunday').click(function(e){
                //  mistyped e.preventDeafult(); 
                e.preventDefault();
                  $.ajax({
                      type='POST',
                      url='showAvail.php',
        //{id:$id} is invalid, because $id is a php variable, but this is javascript context
                       data: { id:$id },
        //datatype refers to data expected back from url (showAvail.php). however the url seems to generate a table
        //if you want a table, change to "html"            
                       dataType: "html",
                       success: function (msg) {
                        if (msg.success) {
                            $("#displayAvail").load("showAvail.php");
                        } else {
                            alert("error");
                        }
                    }
                  })
               });
           });
           //should the script read like this?
           
           //----Should the click be delegated to the parent container #buttonDay?
           $("#buttonDay").click(function(e){
                //this prevent Default may not be necessary since it's not a form
             //  e.preventDefault();
               //get the id of button that's clicked
               var theid = e.target.attr('id');
               var submitval = e.target.attr('value');
               var mydata = {id:theid, submit:submitval};
               $.ajax({
                type        : 'POST',
                url         : 'showAvail.php',
                data        : mydata,
                dataType    : 'json',
                encode          : true
               })
               .done(function(data){
                   //data is sthe response received from the showAvail.php
                   //check if request result in data
                   if(data.success==true){
                    //insert code here to covert your json data to a table
                    
                   }
                   else{
                     //request fails, display an error message?
                   }
               });
           });
           
       </script>
   </body>
</html>