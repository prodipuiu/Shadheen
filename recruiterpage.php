<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/notification.css">
  <link rel="stylesheet" href="css/search_cv.css">
  <title>Post a job</title>
</head>
<body>
  <header class="header">
    <h2 class="title">SHADHEEN</h2>
    <a href="log_out.php"><button class="signIn-btn">Log out</button></a>
    
    
    




  </header>

  <!-- <div class="img-div">
    <img class="image" src="pictures/logo.png" alt="image">
   

  </div> -->
  <div>
    <h1 class="title2">YOUR NEXT HIRE IS HERE</h1>
  </div>

  <div class="post-type">


    <div class="post-directly">
      <h2 class="post-job-title">Post job directly</h2> 
      <p>You are one click away from posting your Job Post</p>

      <a href="post_job_form.php">  <button class="pay-btn">Post Job</button></a>
  
    </div>

    <div>
      <button class="btn btn-success mt-5" onclick="window.location.href='boostJobPage.php'">Boost Your job post job</button>
      <button class="btn btn-success mt-5" onclick="window.location.href='view_applicants.php'">View Applicants</button>
    </div>

    
    <div class="auto-index">

    	
     <?php 

  
   require_once('db_config.php'); 
   $user = $_SESSION['username'];
     $cnn = new mysqli($servername, $username, $password, $dbname);
            if ($cnn->connect_errno) {
                printf("Connect failed: %s\n", $cnn->connect_error);
               exit();
               }
             

  $sql="SELECT * FROM payment WHERE payerid='".$_SESSION['username']."'";  
  $sql2="SELECT * FROM subscription WHERE subscriber='".$_SESSION['username']."'";  

  $rr2 = $cnn->query($sql2);
  $rww3 = $rr2->fetch_assoc();


        if ($rslt = $cnn->query($sql)) {
        $rww = $rslt->fetch_assoc();
        }      

         if($rww==null){
        
        	
        	printf('<h2 class="post-job-title">Subscribe Here!</h2>');
     
            printf('<ul class="payment">');
            printf('<li class="buttonA"><a class="buttona"href="payment_post.php">Pay as you go</a> </li>'); 
            printf('<li class="buttonB"><a class="buttonb"href="payment_post.php">Monthly Subscription</a> </li>');
            printf('<li class="buttonC"><a class="buttonc"href="payment_post2.php">Yearly Subscription</a> </li>');
            printf(' </ul>');
        }  
        else
        {
        	
        	printf("<h2>you are suscribed %s</h2>",$rww3["scheme"]);
        	printf("<p>expire date:%s</p>",$rww3["expire"]);
                 
        }

?>
    
   
    

    </div>
  </div>



  <div class="cv-search">
   
    <h1>Search CV</h1>
 
    <div class="search-cv-form text-center m-auto">
    <form action="search_cv_action.php" method="POST">
      <input class="form-control mb-3" name="search-key" type="text" placeholder="Search for your next hire">
      <div class="cv-search-btn-div" > <button  class="cv-search-btn"><i class="fas fa-search"></i>Search</button>
      </div>
    </form>
  </div>
   
    
    
  </div>
  
  <section> 
        <div class="box-1">
            <div class="notification-1">
                <i class="fas fa-bell"></i>
        
<?php 

        //require('dbh.php');
    $sqlnotify = "SELECT notification.details FROM notification WHERE notification.receiver='$user' and notification.unread = 1";
    
    //echo $sqlnotify;
    if ($result0 = $cnn->query($sqlnotify)) {
        //echo sizeof($result0->fetch_assoc());
        $temp = mysqli_num_rows ($result0);
        echo '<span class="num-1">';
        echo $temp;
        echo '</span>';
        echo '<ul class="ulclass">';
        while ($row = $result0->fetch_assoc()) {?>
                    <li>
                        <span class="icon-1"><i class="fas fa-user"></i></span>
                        <span class="text-1"><?php echo $row['details']; ?></span>
                    </li>
        <?php }
    } ?>
                </ul>
            </div>

        </div>
    </section>
  
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>