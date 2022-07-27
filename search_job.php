<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    $s_skil=$_GET['skill'];
    $s_salary=$_GET['salary'];
    $l_loc=$_GET['location'];
  
   require_once('db_config.php'); 
     $cnn = new mysqli($servername, $username, $password, $dbname);
            if ($cnn->connect_errno) {
                printf("Connect failed: %s\n", $cnn->connect_error);
               exit();
               }
             

  $sql="SELECT * FROM jobs WHERE (jobtitle LIKE '%$s_skil%') OR (jobkeywords LIKE '%$s_skil%') AND (location LIKE '%$l_loc%') AND salary >= '$s_salary'";       
               //echo $sql;

?>
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
            padding:15px;
        }
        .feed h4{
            padding: 10px;

        }

        .feed p{
            padding: 10px;

        }

        
        

    </style>
</head>
<body>
   <div class="feed">

        <?php
           if ($rslt = $cnn->query($sql)) {
               if($rslt->num_rows) {
                    while ($rww = $rslt->fetch_assoc()){
                        
                        print("<div class=groove>");
                        printf("<h2><li><a href='apply.php?id=%s'>%s<a></li></h2>",$rww["jobid"],$rww["jobtitle"]);
                        
                        printf("<h4>%s</h4>",$rww["location"]);
                        printf("<p>%s</p>",$rww["jobkeywords"]);
                        printf("<p>%s</p>",$rww["jobdescription"]);

                            printf("<p>Salary:%s</p>",$rww["salary"]);

                        printf("</div>");
                    }
                } else {
                    echo '<h1><p style="text-align:center;">No Search Result Found.<br> Return to <a href="index.php">Homepage</a></p></h1>';
                }
                }
           
        ?>

    </div>
    
</body>
</html>


