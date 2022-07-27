<?php 
session_start();

require('db_config.php');

$conn = new mysqli($servername, $username, $password, $dbname);//database conncet

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $job_id = $_POST['jobid'];
    $user = $_SESSION['username'];
    $sql0 = "SELECT jobs.employer FROM jobs WHERE jobid = $job_id";//query 

    if ($result = $conn->query($sql0)) {
        while ($row = $result->fetch_assoc()) {//all data collcet from row colum
            //print_r($row);
            $employer = $row['employer'];
            $sql1 = "INSERT INTO `appointment` (`id`, `applicant`, `acceptor`, `jobid`, `closed`) VALUES (NULL, '$user', '$employer', '$job_id', '0');";
            //echo $sql1;
            $sql2 = "INSERT INTO `notification` (`notificationid`, `unread`, `receiver`, `details`) VALUES (NULL, '1', '$employer', '$user applied to your job');";
            //echo $sql2;
            if(!$conn->query($sql1)) {
                echo "
                <script>
                    window.alert('You have applied this job before');
                    window.location.assign('homepage.php');
                </script>";
            }
            $conn->query($sql2);
            echo "<script>
                window.alert('You have succesfully applied');
                window.location.assign('homepage.php');
            </script>";
        }
    }
}
?>