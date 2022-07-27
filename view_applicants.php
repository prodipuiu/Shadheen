<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHADHEEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/shadheen.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
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
  
    <section>
    <table class="table table-hover border border-dark" style="width: auto;margin-left: 20em;margin-top: 5em; ">
        <thead>
          <tr>
            <th scope="col">Job ID</th>
            <th scope="col">Username</th>
            <th scope="col">Education</th>
            <th scope="col">Skill</th>
            <th scope="col">Reference</th>
            <th scope="col">Accept</th>
          </tr>
        </thead>
        <tbody>
        <?php
            session_start();
            $acceptor = $_SESSION['username'];
            //print_r($_SESSION);
            include_once 'dbh.php';
              //$search_key= $_POST['search-key'];
              
                

              $sql="SELECT * FROM appointment LEFT JOIN cv ON appointment.applicant = cv.username WHERE appointment.acceptor = '$acceptor' AND appointment.closed != 1;";

            //echo $sql;

              $returnObj=$conn->query($sql);
          
              $data=$returnObj->fetchAll();
            
            
              foreach ($data as $row) { 
                //print_r($row);
                ?>
          <tr>
            <td><a href="apply.php?id=<?php echo $row['jobid']; ?>"><?php echo $row['jobid']; ?></a></td>
            <td><a href="show_post_cv.php?user=<?php echo $row['username'] ?>"><?php echo $row['username']; ?></a></td>
            <td><?php echo $row['education']; ?></td>
            <td><?php echo $row['skills']; ?></td>
            <td><?php echo $row['reference']; ?></td>
            <td><a href="accept_applicant.php?id=<?php echo $row['jobid']; ?>&user=<?php echo $row['username'];?>">Yes?</a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>


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