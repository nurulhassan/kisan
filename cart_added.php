<?php
$con = mysqli_connect("localhost", "root", "" , "kisanmart" ) or die(mysqli_error($con));
session_start();
if(isset($_POST['button'])){

$product_id = mysqli_real_escape_string($con,$_POST['prodno']);
$quantity =mysqli_real_escape_string($con, $_POST['quantity']);
$user_id = mysqli_real_escape_string($con,$_SESSION['id']);

$user_reg="insert into users_products(user_id,product_id,quantity) values('$user_id','$product_id ','$quantity')";
$result=mysqli_query($con, $user_reg) or die(mysqli_error($con));

        echo "successfully added to cart";
	
	}
  
?>


