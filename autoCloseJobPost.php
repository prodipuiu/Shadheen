<?php
include_once "dbh.php";
$sql="DELETE FROM jobs
WHERE CURRENT_TIMESTAMP()>deadline";

$conn->exec($sql);