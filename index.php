<?php
session_start();
    // include '../../db.php';
    // $conn =  mysqli_connect('localhost', 'id20130047_root', '8nmdJKET5Bd>K]Ca', 'id20130047_bestbuy');
if (!isset($_SESSION['user_email'])) {
  echo "<script>window.open('customer/login.php','_self');</script>";
}
else{
    echo "logged in! <br>";
    echo "<script>window.open('customer/index.php','_self');</script>";
}
echo "sorry, connection failed! please <a href='customer/login.php'>click here</a>"
?>