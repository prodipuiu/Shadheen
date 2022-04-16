<?php
 try{


  $conn=new PDO('mysql:host=localhost:3306;dbname=shadheen','root','');
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //enveroment variable

}
catch(PDOException $e)
{
  echo $e;

}