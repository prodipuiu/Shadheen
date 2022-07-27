<?php
$post_id=$_GET['id'];
include "dbh.php";

$sql="UPDATE jobs
SET 
    boosted='1'
WHERE
    jobid='$post_id'";

if($conn->exec($sql)==true)
{
  header("Location: recruiterpage.php?boost=successfull");
}

else
{
  header("Location: recruiterpage.php?boost=failed");
}






