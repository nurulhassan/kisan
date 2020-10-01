<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

 <link rel="stylesheet" href="script.css" type="text/css">
</head>
<body>
<?php
if(isset($_SESSION['id'])){ 
	require 'login_header.php'; 
?>

<div  class="container" style="margin-top: 60px;">
<b>
<?php
echo "Hi ".$_SESSION['name'];
 ?>
</b>
</div>


<div class=" row " >
	<div class=" col-lg-offset-3 col-lg-5 col-md-offset-4 col-md-6 col-xs-offset-2 col-xs-8" style="margin-top: 50px;margin-left: 380px; ">
	
		<center><h2><strong> Change Password</strong> </h2></center><br/><br/>
		<form method="post" action="settings_backend.php">
						<div class="form-group">
							<input type="Password" class="form-control" name="old-pwd" placeholder="Old Password">
						</div>

						<div class="form-group">
							<input type="Password" class="form-control" name="new-pwd" placeholder="New Password">
						</div>

						<div class="form-group">	
							<input type="Password" class="form-control" name="re-pwd" placeholder="Re-enter new Password">
						</div>

						<div>
							<center><button type="submit" name="submit" value="submit" class="btn btn-primary" style="width: 200px; border-radius: 20px; background-color: orange ; border-color: orange ; color: black;">Change</button></center></a>					
						</div>
		</form>
	</div>
</div>
<?php } ?>
<br/><br/><br/><br/><br/><br/>
<?php require ('footer.php') ?>
</body>
</html>