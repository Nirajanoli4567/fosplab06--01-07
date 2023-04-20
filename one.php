<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<table border= 1>

<th> Multiplication table</th>

<?php
 $myfile=fopen("nirajan.txt","w") or die(" unable to open the file");

 $text= " I am nirajan oli \n";


 fwrite($myfile,$text);

for($i=1;$i<=5;$i++)
{
    $mul = "\n".  "2 * $i = " .(2*$i)."\n";


    fwrite($myfile,$mul);
}
// $myfile=fopen("nirajan.txt","r") or die(" unable to open the file");

//   echo fread($myfile,filesize("nirajan.txt"));

   
 fclose($myfile);
 $myfile=fopen("nirajan.txt","a") or die(" unable to open the file");
 for($i=5;$i<=10;$i++)
{
    $mull = "\n".  "2 * $i = " .(2*$i)."\n";


    fwrite($myfile,$mull);
}

 fclose($myfile);

 $myfile=fopen("nirajan.txt","r") or die(" unable to open the file");

 
  while(!feof($myfile))
  {
   $value=fgets($myfile);
   echo "
   <tr>
   <td>$value</td>
   </tr>";
  }
 
 
fclose($myfile);

?>
</table>
</body>
</html>