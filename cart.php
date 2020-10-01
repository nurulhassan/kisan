<?php
$con=mysqli_connect("localhost","root","","kisanmart") or die(mysqli_error($con));
session_start();
	if(isset($_SESSION['id']))
	{ 
	require 'login_header.php';
	$temp= $_SESSION['id']; 
	$select= "select * from users_products where user_id='$temp' order by product_id asc ";
	$select_qrray=mysqli_query($con, $select) or die(mysqli_error($con));
	//echo $_SESSION['id'];
	//echo mysqli_num_rows($select_qrray);
	
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">
	
</style>
</head>
<body background="back.jpeg">

	<div class="container" style="margin-top: 40px; ">
		<div class="row">
			<div class="col-xs-offset-2">
				<u><h1 style= "margin-left: 350px;">Cart</h1></u>
			</div>
		</div><br/><br/>

		<div class="row" style="margin-left: 20px;">
			<div class=" col-xs-offset-3 col-xs-2 " style="border-bottom: 1px solid orange;">
				<h3>Item Number</h3>
			</div>
			<div class="  col-xs-2 " style="border-bottom: 1px solid orange;">
				<h3>Quantity</h3>
			</div>


			<div class=" col-xs-2" style="border-bottom: 1px solid orange;">
				<h3>Price</h3>
			</div>
		</div>
		<div style=""></div>
			
<?php
$total=0;
 while ($row=mysqli_fetch_array($select_qrray)) { ?>
		<div class="row" style="padding-top:20px; margin-left: 20px; ">
			<div class="col-xs-offset-3 col-xs-2" style="border-bottom: 1px solid orange;">
				<?php echo $row['product_id'] ; $t= $row['product_id'];  
 ?> 
			</div>
			


<?php  
	$sele="select * from products where id = '$t'";
	$sele_qrr=mysqli_query($con, $sele) or die(mysqli_error($con));
	$ress=mysqli_fetch_array($sele_qrr);
	$total = $total + $ress['price']*$row['quantity'];
?>


			<div class=" col-xs-2" style="border-bottom: 1px solid orange;">
				<?php echo $row['quantity'] ; ?>			
			</div>
			<div class=" col-xs-2" style="border-bottom: 1px solid orange;">
				<?php echo $ress['price']*$row['quantity']."/-" ; ?>			
			</div>
		</div>

<?php } ?>
<div class="row" style="margin-left: 20px;" >
			<div class=" col-xs-offset-3 col-xs-6 " style="border-bottom: 1px solid orange; padding-top:20px; ">
				<center><b><h3>Total Amount : <?php echo $total."/-"; ?></h3></b></center>
			</div>

			
		</div><br><br>

<a href="order_placed_page.php">
<center><button type="submit" name="submit" value="submit" class="btn btn-primary" style="width: 200px; border-radius: 20px; background-color: orange ; border-color: orange ; color: black;">Place Order</button></center>
</a>

<!-- cart after this step should again become empty.-->



<?php } ?>
</div><!-- container closed-->
<br/><br/><br/><br/><br/><br/>
<?php require ('footer.php') ?>
</body>
</html>