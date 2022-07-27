 <!DOCTYPE html>
 <html>
 <head>
   <title></title>

   <style>
    .groove {
          margin-top: 10px;
          border: 1px solid white;
          border-radius: 10px;
          background-color: #E3E6E3;
        }
        .feed{
           width: 500px; 
           margin-left:400px;
        
        }

        .feed h2{
            color: #1877F2;
            padding:20px;
        }
        .feed h4{
            padding: 20px;

        }

        .feed p{
            padding: 20px;

        }

</style>
<?php
      $dog=$_GET['cat'];
     
?>
</head>
<body>

 <div class="feed">
  <?php


  require_once('db_config.php');
  $connect = new mysqli($servername, $username, $password, $dbname);
  if ($connect->connect_errno) {
    printf("Connect failed: %s\n", $connect->connect_error);
    exit();
  }

  $query = "SELECT *FROM  jobs where  jobtype like '%$dog%'";

  if ($res = $connect->query($query)) {
    
  

      while ($rw = $res->fetch_assoc()){
          print("<div class=groove>");
          printf("<h2><li><a href='apply.php?id=%s'>%s<a></li></h2>",$rw["jobid"],$rw["jobtitle"]);

          printf("<h4>%s</h4>",$rw["location"]);
          printf("<p>%s</p>",$rw["jobkeywords"]);
          printf("<p>%s</p>",$rw["jobdescription"]);
         
          printf("</div>");

     }   
    }
      
  

?>
</div>

</body>
</html>

