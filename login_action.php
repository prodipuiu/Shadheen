<?php
    session_start();
    if (isset($_POST['submit'])) {
        //print_r($_POST);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "shadheen";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $uname = $_POST['username'];
            $password = $_POST['password'];
            //$sql = "SELECT * FROM `userCredential` WHERE user = '$uname' AND pass = SHA2('$password', 224)";
            $sql = "SELECT * FROM users WHERE username = '$uname' and password = '$password'";
            if ($result = $conn->query($sql)) {
                //echo "<p>Successfully Logged In</p>";
                if ($result->num_rows) {
                    $query0 = "SELECT recruiter.recruiterid FROM recruiter WHERE recruiterid='$uname'";
                    $temp = $conn->query($query0);
                    
                    if  ($temp->num_rows) {
                        $_SESSION['username'] = $uname;
                        echo "<script>
                        window.location.assign('recruiterpage.php');
                        </script>";        
                    } else {
                        $_SESSION['username'] = $uname;
                        echo "<script>
                        window.location.assign('homepage.php');
                        </script>";
                    }
                }
                else {
                    echo "<p>You have entered incorrect password. Try again.</p>";
                }
            } else {
                die($conn->error);
            }
        }
    }
?>