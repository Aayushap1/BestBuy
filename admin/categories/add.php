<?php
include '../../db.php';
// 	$conn =  mysqli_connect('localhost','root','','db_bestbuy');

	if(isset($_POST['insert-btn'])){

	$category_name = $_POST['category_name'];

	$insert = "INSERT INTO categories (category_name) VALUES('$category_name')";

	$run_insert = mysqli_query($conn,$insert);
	if($run_insert ===  true){
		echo "Data Has Been Inserted";

    echo "<script>window.open('index.php','_self');</script>";
	}else{
		echo "Failed, Ty Again";
	}
	}
  ?>
