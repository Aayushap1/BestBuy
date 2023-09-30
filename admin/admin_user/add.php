<?php
    include '../../db.php';
    // $conn =  mysqli_connect('localhost', 'id20130047_root', '8nmdJKET5Bd>K]Ca', 'id20130047_bestbuy');	
	if(isset($_POST['insert-btn'])){
		
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$user_details = $_POST['user_details'];
	$insert = "INSERT INTO tbl_admin(user_name,user_email,user_password,user_image,user_details) VALUES('$user_name','$user_email','$user_password','$image','$user_details')";
	
	$run_insert = mysqli_query($conn,$insert);
	if($run_insert ===  true){
		echo "Data Has Been Inserted";
		move_uploaded_file($image_tmp,"upload/$image");
    echo "<script>window.open('index.php','_self');</script>";
	}else{
		echo "Failed, Ty Again";
	}	
	}
?>