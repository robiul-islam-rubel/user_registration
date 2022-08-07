<?php
    # mysqli_connect(hostname, username, password, database-name);
    $dbconnection = mysqli_connect('localhost', 'root', '', 'testdb');

    if(mysqli_connect_errno()){
        echo "Failed to connect to MYSQL: " . mysqli_connect_errno();
    }

?>