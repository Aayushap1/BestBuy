<?php
session_start();
if(isset($_SESSION['user_email'])){
//    $u=$_SESSION['user_email'];
   $u=$_SESSION['user_id'];
include '../db.php';
// $conn =  mysqli_connect('localhost', 'root', '', 'db_bestbuy');
if (isset($_GET['edit_id'])) {
	$edit_id =  $_GET['edit_id'];
	$edit_val = $_GET['edit2'];
echo "$u ";
	$select = "SELECT * FROM tbl_cart , tbl_product WHERE p_id=product_id AND u_id=$u AND p_id=$edit_id";
	$run =  mysqli_query($conn, $select);
	$row_product =  mysqli_fetch_assoc($run);
	    $prod_quantity =  $row_product['product_quantity'];
		$quantity =  $row_product['quantity'];
		$c_total =  $row_product['c_total'];
		$product_price=$row_product['product_price'];
		$c_id = $row_product['c_id'];

		// $select2 = "SELECT * FROM tbl_product WHERE product_id='$edit_id'";
		// $run2 =  mysqli_query($conn, $select2);
		// $row_product2 =  mysqli_fetch_array($run2);
		// $product_price = $row_product2['product_price'];
		if($edit_val==-1 && $quantity<=1){
		    echo 'Invalid try !!!
		    <div id="test"></div>';
				
            echo '<script>
            var second=5;
            function displayseconds(){
                second-=1;
                document.getElementById("test").innerText="redirecting in "+second+"..."; 
            }
            setInterval(displayseconds,1000);
            function redirectpage(){
                window.location="cart.php";
            }
            setTimeout(redirectpage,4000); </script>';
		}
		else if($edit_val==+1 && $quantity>=$prod_quantity){
		    echo 'Invalid try !!!
		    <div id="test"></div>';
				
            echo '<script>
            var second=5;
            function displayseconds(){
                second-=1;
                document.getElementById("test").innerText="redirecting in "+second+"..."; 
            }
            setInterval(displayseconds,1000);
            function redirectpage(){
                window.location="cart.php";
            }
            setTimeout(redirectpage,4000); </script>';
		}else{
		    $quantity=$quantity+$edit_val;
    		$c_total=$quantity*$product_price;
    		echo "$quantity " ;
    		echo "$c_total ";
    		$update = "UPDATE tbl_cart SET quantity='$quantity',c_total='$c_total' WHERE c_id='$c_id' ";
    		$run_update = mysqli_query($conn,$update);
    		if($run_update ===  true){
    			echo "Data Has Been Updated";
    			echo "<script>window.open('cart.php','_self');</script>";
    // 			header("Location: cart.php");
    		}else{
    			echo "Failed, Ty Again";
		    }   	
		}
    }
}
?>
