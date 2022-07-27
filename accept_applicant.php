<?php
session_start();
//print_r($_GET);
print_r($_SESSION);
include_once 'dbh.php';
    $applicant = $_GET['user'];
    $acceptor = $_SESSION['username'];
    $postid = $_GET['id'];         
    $sql="UPDATE appointment SET closed = '1' WHERE appointment.applicant = '$applicant' AND appointment.acceptor = '$acceptor' AND appointment.jobid=$postid";
    //echo $sql;
    if($conn->query($sql)) {
        //echo "sql executed";
        $sql0 = "INSERT INTO `notification` (`notificationid`, `unread`, `receiver`, `details`) VALUES (NULL, '1', '$applicant', '$acceptor accepted you as an employee.');";
        $conn->query($sql0);
        echo "
            <script>
                window.alert('You have successfully hired!');
                window.location.assign('recruiterpage.php');
            </script>
        ";
    }

?>