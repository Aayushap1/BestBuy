<?php
    $conn =  mysqli_connect('localhost', 'id20130047_root', '8nmdJKET5Bd>K]Ca', 'id20130047_bestbuy');
    if(!$conn){
        echo "sorry we failed to connect: ". mysqli_connect_error;
    }
?>