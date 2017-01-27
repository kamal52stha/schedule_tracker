 if(userlevel >=2)
{
    document.getElementsByClassName(menuSec).write('<?php include_once "../navigation/adminnav.php"?>');
   
}
else
{
    document.getElementsByClassName(menuSec).write('<?php include_once "../navigation/generalnav.php"?>');
    
}
            