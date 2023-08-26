<html>

   <head>

   <title> </title>

   </head>
   
   <body>
<?php

$color = array("赤","青","黄","黒","白");
for($i = 0 ; $i < 5 ; $i++)
{
   if($color[$i] == "青")
   {
      echo"<font color='blue' size='7' >".$color[$i]."</font></br>";
   }
   else
   {
      echo $color[$i]."<br>";
   }
}

?>
   </body>
   </html>
