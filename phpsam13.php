<html>
   <head>
<meta http-equiv="content-type" content="text/html ; charset= UTF-8">
<title>コンピュータ科掲示板</title>
   </head>
   
   <body>

     <h1>あなたとわたしの掲示板</h1>
     <form method="POST" action="<?php echo($_SERVER['PHP_SELF'])?>">

     <br>
     <input type="text" name="personal_name">

          <br>
          <br>
          <br>

          <textarea name="contents" rows="8" cols="80">ここに内容を</textarea>
          <br>
          <br>

     <input type="submit" name="btn1" value="投稿する">
</form>

<?php




if($_SERVER["REQUEST_METHOD"] == "POST")
{
writeData();
}



readData();
function readData()
{
$keijban_file ='keijban.txt' ;
$fp = fopen($keijban_file,'r');

   if($fp ==  true)
   {
   if(flock($fp,LOCK_SH)== true )
      {
      while(feof($fp)!= true )
         {
         $buffer = fgets($fp);
         echo($buffer);
         }
         flock($fp,LOCK_UN);
      }
   else
      {
      echo('File Logs');
      }
   }
   fclose($fp);
}





function writeData()
{
$personal_name =$_POST['personal_name'];
$contents = $_POST['contents'];
$contents = nl2br($contents);
$data = "<hr>\r\n" ;



$data = $data."<p>投稿者:".$personal_name."</p>\r\n" ;
$data = $data."<p>内容</p>\r\n" ;
$data = $data."<p>".$contents."</p>\r\n" ;

$keijban_file ='keijban.txt' ;
$fp = fopen($keijban_file,'a');


if($fp)
{
if(flock($fp,LOCK_EX))
   {
   if(fwrite($fp,$data)== FALSE )
      {
      echo(' READ FILE ');

      }
      flock($fp,LOCK_UN) ;
   }
   else
   {
      echo('file logged ');
   }
}
   fclose($fp);
}

?>

</body>
   </html>
