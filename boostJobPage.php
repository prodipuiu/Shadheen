<?php
 session_start();
 $username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Boost job</title>
  <style>
    .card{
      margin-left: 300px;
      margin-right: 300px;
     
    }
  </style>
</head>
<body>

 <h1 class="text-center mt-3 mb-5">Your jobs post is here!</h1>

  <?php
  include "dbh.php";
  
  
  $sql= "SELECT * FROM `jobs` WHERE employer LIKE'%$username%';";


  
  $returnObj=$conn->query($sql);

  if($returnObj->rowCount()==0)
  {
    echo "<h1 class='text-center'>No Jobs found</h1>";
  }
  else
  {
    $data=$returnObj->fetchAll();

    foreach ($data as $row) {

      if($row['boosted']==1)
      {
        echo"
     
      <div class='text-center my-3 shadow-lg p-5 card'>
      <h1>$row[jobtitle]</h1>
      <p>$row[jobdescription]</p>
      <a href='boostJob.php?id=$row[jobid]'><Button class='btn btn-primary' disabled>Boosted</Button></a>
      </div>
     
      ";

      }
      elseif($row['boosted']==0)
      { 
        echo"
     
      <div class='text-center my-3 shadow-lg p-5 card'>
      <h1>$row[jobtitle]</h1>
      <p>$row[jobdescription]</p>
      <a href='boostJob.php?id=$row[jobid]'><Button class='btn btn-primary'>Boost</Button></a>
      </div>
     
      ";

      }

      

     

     
    }
  }

 



  ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>