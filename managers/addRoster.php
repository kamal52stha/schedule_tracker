<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  
  <title></title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $(document).ready(function(){
      // var startDate = moment().subtract(1, 'week').startOf('week');
       
       
        $("#range").text("Week Starting: ");
        
        
        
         $("#range").text("Week ending: ");
        
    })
    
</script>
  
</head>

<body>
<?php include_once("../navigation/adminnav.php"); ?>
<div id="tableContain">
    <table id="table">
        <tr id="range"></tr>
        <tr>
            <th></th>
        </tr>
    </table>
    
</div>
  
</body>

</html>