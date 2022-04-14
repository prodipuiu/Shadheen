<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SHADHEEN</title>
        <link rel="stylesheet" href="css/shadheen.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    </head>
    <body>
        <div class="navbar">
            <div class="container">
                
                
                <nav class="shadheen">
                    <a class="logo-1"href="homepage.php">Shadheen</a>
                    
                    <ul class="primary-nav">
                        <!--
                        #will use in later pages
                        <li><img id="post" src="images/post.svg" alt="open-post"><a href="post_job.html">Post a job</a></li>-->
                    </ul>
                
                
                    <ul class="secondary-nav">
                        <!--
                        #will use in later pages
                        <li><img id="post2" src="images/post2.svg" alt="open-post2"><a href="upldcv.html">Post your CV</a></li>
                        --><?php
                        session_start();
                        if (!(isset($_SESSION['username']) && !empty($_SESSION['username']))) {
                            echo '<li class="sign-in"><a href="login.php">Login</a></li>';
                        } else {
                            echo '<li class="sign-in"><a href="login.php">Log out</a></li>';
                        }
                        ?>
                    </ul>
                
                </nav>
            </div>
        </div>
        </section>
   
        <section>
            <div class="main">
                <div class="container">
                    <div class="search_box">
                        <form action="search_job.php" method="get">
                            <div class="single_search_box">
                                <input type="text" name="skill" placeholder="Job Title">
                            </div>
                            <div class="single_search_box">
                                <input type="text" name="salary" placeholder="Minimum Expected Salary">
                            </div>
                            <div class="single_search_box">
                                <input type="text" name="location" placeholder="Location">
                            </div>
                            <div class="search_btn">
                                <input type="submit" value="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="category">
                <i class="fas fa-bars"></i>
                
                <span class="catbar"></span>
                <ul class="categorybar">
                   <li>
                       <span class="icon"><i class="fas fa-caret-right"></i></span>
                       
                       <span class="text"><a href="catagory.php?cat=Accounting/Finance">Accounting/Finance()</a></span>
                   </li>
                   <li>
                    <span class="icon"><i class="fas fa-caret-right"></i></span>
                    
                    <span class="text"><a href="catagory.php?cat=Education/Training">Education/Training (241)</a></span>
                   </li> 
                   <li>
                    <span class="icon"><i class="fas fa-caret-right"></i></span>
                    
                    <span class="text"><a href="catagory.php?cat=Engineer/Architects"> Engineer/Architects (378)</a></span>
                   </li>
                   <li>
                    <span class="icon"><i class="fas fa-caret-right"></i></span>
                    
                    <span class="text"><a href="catagory.php?cat=Garments/Textile">Garments/Textile (566)</a></span>
                   </li>
                   <li>
                    <span class="icon"><i class="fas fa-caret-right"></i></span>
                    
                    <span class="text"><a href="catagory.php?cat=Design/Creative">Design/Creative (103)</a></span>
                   </li>
                </ul>
                <ul class="categorybar">
                    <li>
                        <span class="icon"><i class="fas fa-caret-right"></i></span>
                        
                        <span class="text"><a href="catagory.php?cat=Production/Operation">Production/Operation (130)</a></span>
                    </li>
                    <li>
                     <span class="icon"><i class="fas fa-caret-right"></i></span>
                     
                     <span class="text"><a href="catagory.php?cat=IT & Telecommunication">IT & Telecommunication (506)</a></span>
                    </li> 
                    <li>
                     <span class="icon"><i class="fas fa-caret-right"></i></span>
                     
                     <span class="text"><a href="catagory.php?cat=Medical/Pharma"> Medical/Pharma (280)</a></span>
                    </li>
                    <li>
                     <span class="icon"><i class="fas fa-caret-right"></i></span>
                     
                     <span class="text"><a href="catagory.php?cat=Law/Legal">Law/Legal (30)  </a></span>
                    </li>
                    <li>
                     <span class="icon"><i class="fas fa-caret-right"></i></span>
                     
                     <span class="text"><a href="catagory.php?cat=Driving/Motor Technician">Driving/Motor Technician (17)</a></span>
                    </li>
                 </ul>
            </div>
        </section>

        <!-- <section> CV section
            <div class="container-cv">
                <ul>
                    <li class="upload-cv"><a href="#">Upload your CV</a><i class="fas fa-chevron-circle-up"></i></li>
                   
                    <li class="upload-cv"><a href="#">Post a job</a><i class="fas fa-clipboard"></i></li> 
                </ul>

            </div>
        </section> -->
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
