
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <?php 

   $us_name=$_POST['Username'];
   $cont=$_POST['contact'];
   $loc=$_POST['location'];
   $m_thod=$_POST['method'];
   $a_mount=$_POST['amount'];
  
   printf($a_mount);
  
   require_once('db_config.php'); 
   $sql="Insert into payment VALUES('','$us_name','$m_thod','$a_mount',now())";

    if($a_mount==300)
   {
    $sql2="INSERT INTO `subscription` (`subscriptionid`, `subscriber`, `scheme`, `expire`) VALUES (NULL, '$us_name', 'monthly', DATE_ADD(Now(),INTERVAL 30 DAY))";
   }
   else
   {
    $sql2="INSERT INTO `subscription` (`subscriptionid`, `subscriber`, `scheme`, `expire`) VALUES (NULL, '$us_name', 'yearly', DATE_ADD(Now(),INTERVAL 365 DAY))";

   }

   
     $cnn = new mysqli($servername, $username, $password, $dbname);
            if ($cnn->connect_errno) {
                printf("Connect failed: %s\n", $cnn->connect_error);
               exit();
               }
  
   
   $result = $cnn->query($sql);
   $result1 = $cnn->query($sql2);
  
    

  if (!$result)
  {
    echo "Error during insertion!<br>";
    echo mysqli_error($cnn);
  }
  
  else
  {
    if($a_mount==300)
    {
       echo "<script>
        window.alert('you subscribed Successfully for 1 month ');
      </script>";
    //header("Location: ../index.php");
    echo "<script>window.location.assign('recruiterpage.php');</script>";
    }
    else
    {
       echo "<script>
        window.alert('you subscribed Successfully for 1 year');
      </script>";
    //header("Location: ../index.php");
    echo "<script>window.location.assign('recruiterpage.php');</script>";

    }
   
  }

  $cnn->close();

?>
  <style>
    
  </style>
</head>
<body>
        

      </body>
     
</html>