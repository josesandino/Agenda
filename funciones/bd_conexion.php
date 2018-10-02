<?php
    $conn = new('localhost', 'root', 'root', 'agenda');

    if($conn->connection_error) {
        echo $error -> $conn->connect_error;
    }
?>    