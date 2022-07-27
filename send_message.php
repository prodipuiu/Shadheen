<?php 

session_start();

require_once('db_config.php');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}

print_r($_POST);

$user = $_SESSION['username'];
$data = $_POST['message'];
$receiver = $_SESSION['sender'];

$sql = "INSERT INTO `message` (`messageid`, `messagetext`, `sender`, `receiver`, `senton`) VALUES (NULL, '$data', '$user', '$receiver', current_timestamp())";

echo $sql;

if ($result = $conn->query($sql)) {
    header("location: homepage.php");
}

?>