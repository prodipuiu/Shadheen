<?php
session_start();
unset($_SESSION['username']);
session_destroy();
#echo "Hello World";
echo "<script>window.location.assign('index.php');</script>";
?>