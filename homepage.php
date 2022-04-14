<?php
    session_start();

    include "autoCloseJobPost.php";
    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SHADHEEN</title>
        <link rel="stylesheet" href="css/shadheen.css">
        <link rel="stylesheet" href="css/notification.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <?php 
        require_once('db_config.php');
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
            padding:20px;
        }
        .feed h4{
            padding: 20px;

        }

        .feed p{
            padding: 20px;

        }

        
        

    </style>
    </head>
    <body>
        <section>
        <div class="navbar">
            <div class="container">
                
                
                <nav class="shadheen">
                    <a class="logo-1"href="index.php">Shadheen</a>
                    
                    <ul class="primary-nav">
                        <!--
                        #will use in later pages
                        <li><img id="post" src="images/post.svg" alt="open-post"><a href="post_job.html">Post a job</a></li>-->
                    </ul>
                
                
                    <ul class="secondary-nav">
                        <!--
                        #will use in later pages
                        <li><img id="post2" src="images/post2.svg" alt="open-post2"><a href="upldcv.html">Post your CV</a></li>
                        -->
                        <li class="sign-in"><a href="post_cv.php">Create CV</a></li>
                        <li class="sign-in"><a href="log_out.php">Log Out</a></li>
                        
                    </ul>
                
                </nav>
            </div>
        </div>
        </section>
   
        
        
        

    <section>
            <!--============= For Chat Start ==============-->
        <button class="chat_btn" onclick="openForm()">
            <i class="far fa-comment-alt"></i>
        </button>

        <div class="chat_popup" id="forOpenClose">
            <div class="form_container">
                
                <?php
                    require_once('db_config.php');

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        printf("Connect failed: %s\n", $conn->connect_error);
                        exit();
                    }

                    $sql = "SELECT DISTINCT sender FROM `message` WHERE receiver = 1";
                    
                    if ($result = $conn->query($sql)) {
                        while ($row = $result->fetch_assoc()) {
                            //print_r($row);
                            //print_r(sizeof($row));
                            //print_r(sizeof($result));
                            //print_r($row[ - 1]);
                        }
                    }
                ?>
                
                <div class="chat_head">
                    <h5>Inbox</h5>

                    <button type="button" class="close_btn cancel" onclick="closeForm()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="main_chat_body">
                    <?php

                    $user = $_SESSION['username'];

                    $sql = "SELECT * FROM message WHERE receiver = '$user' OR sender = '$user'";

                    //echo $sql;

                    $me = $user;



                    if ($result = $conn->query($sql)) {
                        while ($row = $result->fetch_assoc()) {
                            //print_r($row);
                            printf('<br>');
                            if($row['sender'] != $me) {
                                $_SESSION['sender'] = $row['sender'];
                            }
                            
                            if($row['receiver']==$me) {
                                printf('<div class="admin_message">
                                        <div class="admin_message_text">');
                                    printf($row['messagetext']);
                                    printf('</div>
                                        <div class="admin_message_time">');
                                    printf($row['senton']);
                                    printf('</div></div>');
                            } else {
                                    
                                    printf('<div class="sender_message">
                                        <div class="sender_message_text">');
                                    printf($row['messagetext']);
                                    printf('</div>
                                        <div class="sender_message_time">');
                                    printf($row['senton']);
                                    printf('</div></div>');    
                            }
                        }
                    }
                    ?>
                </div>

                <div class="chat_footer">
                    <form action="send_message.php" method="post">
                        <div class="send_sms_btn">
                            <textarea name="message" placeholder="Type Message ..." rows="2"></textarea>
                            <span class="send_btn_group">
                                <button type="submit" class="send_btn">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        </section>

        <section> 
        <div class="box-1">
            <div class="notification-1">
                <i class="fas fa-bell"></i>
        
<?php 
    $sqlnotify = "SELECT notification.details FROM notification WHERE notification.receiver='$user' and notification.unread = 1";
    
    //echo $sqlnotify;
    if ($result0 = $conn->query($sqlnotify)) {
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
        <!--============= For Chat End ==============-->

        

        <section>
        <div class="feed">



        <?php
         $connect = new mysqli($servername, $username, $password, $dbname);
               if ($connect->connect_errno) {
                    printf("Connect failed: %s\n", $connect->connect_error);
               exit();
               }
              

               $query = "SELECT * FROM jobs ORDER BY boosted DESC";




                    if ($res = $connect->query($query)) {
                         while ($rw = $res->fetch_assoc()){
                          print("<div class=groove>");
                            if($rw["boosted"]==1) {
                                printf("<br><i>SPONSERED</i>");
                            }
                            printf("<h2><li><a href='apply.php?id=%s'>%s<a></li></h2>",$rw["jobid"],$rw["jobtitle"]);
                            printf("<h4>%s</h4>",$rw["location"]);
                            //printf("<p>%s</p>",$rw["jobkeywords"]);
                            printf("<p>%s</p>",$rw["jobdescription"]);
                            printf("<p>Deadline: %s</p>",$rw["deadline"]);
                            printf("</div>");
                            

                             
                            

                    }
                }

                     
        ?>
       
    </div>
    </section>

        <!--============= For Fontawesome ==============-->
       
        
        <section>
            <div class="container-last">
               
                <nav clss="last">
                    <ul class="end">
                        <li style="margin-right: 27em"><a href="#">About us </a></li>
                        <li><a href="#">Partners</a></li>
                        <li style="margin-left: 25em"><a href="#">Frequent queries</a></li>

                    </ul>
                </nav>
            </div>
        </section>


         <script src="https://kit.fontawesome.com/6c18232229.js" crossorigin="anonymous"></script>

        <!--============= Chat Open Close ==============-->
        <script type="text/javascript">
            function openForm() {
              document.getElementById("forOpenClose").style.display = "block";
            }

            function closeForm() {
              document.getElementById("forOpenClose").style.display = "none";
            }
        </script>
        
    </body>
</html>
<?php
    } else {
        printf("<script>window.location.assign('index.php');</script>");
    }
?>