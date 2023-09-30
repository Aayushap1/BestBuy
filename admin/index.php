<?php
session_start();
    // include '../../db.php';
    // $conn =  mysqli_connect('localhost', 'id20130047_root', '8nmdJKET5Bd>K]Ca', 'id20130047_bestbuy');
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('admin_login.php','_self');</script>";
}
else{
    echo "logged in! <br>";
    echo "<script>window.open('admin_user/index.php','_self');</script>";
}
echo "sorry, connection failed! please <a href='admin_login.php'>click here</a>"
?>