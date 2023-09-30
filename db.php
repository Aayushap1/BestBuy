<?php
    $conn =  mysqli_connect('localhost', 'root', 'password', 'bestbuy');
    if(!$conn){
        echo "sorry we failed to connect: ". mysqli_connect_error;
    }
?>
