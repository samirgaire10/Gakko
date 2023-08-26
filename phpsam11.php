<html>

   <head>

   <title>送信ボタン。リセットボタン </title>

   </head>
   
   <body>
<?php
$name ="white" ;

$name = $_POST["color"];

echo "<body bgcolor=$name>"
?>
<center>
<h2>背景色を選びましょう </h2>
<form method="POST" action="phpsam11.php">

赤<input type="radio" name="color" value="red" >
青<input type="radio" name="color" value="blue" >
<br><br>
<input type="submit" value="登録">

</form>
</center>
   </body>
   </html>
