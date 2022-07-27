<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/shadheen.css">
    <?php
        $id=$_GET['id']; //get primary key
        require_once('db_config.php'); 
        $connect = new mysqli($servername, $username, $password, $dbname);// database connection
            if ($connect->connect_errno) {
                printf("Connect failed: %s\n", $connect->connect_error);
               exit();
               }
              
            $query = "SELECT *FROM jobs where jobid=$id";//id query 
              
               
              
    ?>
    <style>
        .feed{
           width: 400px; 
           margin-left: 200px;
           margin-top: 3em;
    
          }
        .feed h2{
            color: #1877F2;
            
        }
        .btn{
          height: 30px;
          width: 150px;
          border-radius: 20px;
          background-color: blue;
          color:white;
        }
       
    </style>

</head>
<body>
<section>
        <div class="navbar">
            <div class="container">
                
                
                <nav class="shadheen">
                    <a class="logo-1"href="homepage.php">Shadheen</a>
                    
                    <ul class="primary-nav">
                    </ul>
                    <ul class="secondary-nav">
                  
                        <li class="sign-in"><a href="login.php">Log In</a></li>
                    </ul>
                
                </nav>
            </div>
        </div>
    </section >


    <div class="feed">

        


        <?php
          if ($rlt = $connect->query($query)) { //sql qurey connceted to database
               while ($rw = $rlt->fetch_assoc()){
                  printf("<h2>%s</h2>",$rw["jobtitle"]);// row and colums 
                  printf("<h3>%s</h3>",$rw["jobkeywords"]);
                  printf("<p>Location: %s</p>",$rw["location"]);
                  printf("<p>Description: %s</p>",$rw["jobdescription"]);
                  printf("<p>Salary: %s</p>",$rw["salary"]);
                  printf("<p>Posted on: %s</p>",$rw["boosted"]);
         

                }
            }

           
        ?>

    <form action="applyaction.php" method="POST">
        <button class="btn" type="submit" name="jobid" value="<?php echo $id; ?>">Appy for this job </button>
    </form>

    </div>


    <section>
        <div class="container-last">
           
            <nav clss="last">
                <ul class="end">
                    <li><a href="#">About us </a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Frequent queries</a></li>

                </ul>
            </nav>
        </div>
    </section>

</body>
</html>