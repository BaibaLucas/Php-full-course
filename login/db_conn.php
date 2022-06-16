<?php
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASSW = '';
    $DATABASE_NAME = 'test_db';

    $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    if(!$conn) {
        echo "Connection Failed";
    }
    ?>