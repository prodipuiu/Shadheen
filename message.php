<?php

    session_start();

    require_once('db_config.php');

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM message WHERE receiver = $username OR sender = $username";

    $me = $username;

    echo $me;

    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            //print_r($row);
            printf('<br>');
            
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