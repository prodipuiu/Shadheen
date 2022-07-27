<?php
session_start();
if(!empty($_SESSION['username']))
{
  if(isset($_POST['submit']))
  {
  
  require_once 'dbh.php';
    
  $job_title=$_POST['title'];
  $job_type=$_POST['job-type'];
  $salary=$_POST['salary'];
  $location=$_POST['location'];
  $keyword=$_POST['keyword'];
  $employeer=$_POST['employeer'];
  $description=$_POST['description'];
  $Jobdeadline=$_POST['date'];

  $employeer= $_SESSION['username'];

  $sql = "INSERT INTO `jobs` (`jobid`, `jobtitle`, `jobtype`, `jobdescription`, `salary`, `location`, `jobkeywords`, `employer`, `deadline`,  `boosted`)
                      VALUES (NULL, '$job_title', '$job_type', '$description', '$salary', '$location', '$keyword', ' $employeer','$Jobdeadline', '0');";

  if($conn->exec($sql))
  {
    echo "
      <script>
        window.location.assign('recruiterpage.php');
      </script>
    ";
  }
  else
  {
    header('location : recruiterpage.php?post=unsuccessfull');

  }









  }








  
 
}
else
{
  header('location: ../../Beta/login.php');
}
