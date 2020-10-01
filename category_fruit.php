
<?php 
$con=mysqli_connect("localhost","root","","kisanmart") or die(mysqli_error($con));
 session_start();

 $query = "select * from products where category='fruits'";
 $result1=mysqli_query($con, $query) or die(mysqli_error($con));

?>


<!DOCTYPE HTML>
<html>
  <head>
    <title>Kisan Mart</title>
    <link rel="stylesheet" href="script.css" type="text/css">
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="jj.js"></script>

    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body background="back.jpeg">

 <?php
    if(isset($_SESSION['id']))
  { 
    require ('login_header.php');
   }
   else {
    require('logout_header.php');
   }
    ?>

<div class="container">
  
    <div class="search_padding">

      <form method="post" action="banner_form.php">

          <input type="text" placeholder="Product name" name="search1" size="30">
      <button type="submit"><span class="  glyphicon glyphicon-search"></span></button></form></div>
     <h3><b><u>Featured Ads:</u><i>Category(Fruits)</i></b></h3><br/> 



  <?php 
     
   while($row = mysqli_fetch_array($result1)) { ?>
  
  <div class="row" style="margin-top: 20px; border-style:inset; border-radius: 20px;">
    <div class="col-sm-3 col-sm-5">
    <?php $im = $row['photo']; 

    echo '<img class="panel1" style="width:260px;height:240px;border-radius: 20px;" alt="responsive" src="data:image/png;base64,' . base64_encode($im) . '" />'; ?>

    </div>
    <div class="col-sm-9 col-sm-8" >
      <h3><b><u><?php echo $row['title']; ?></u></b></h3>
      <h4 style="color: orange;">Product ID : <?php echo $row['id']; ?></h4>
     <h4 style="color: orange;">Description:</h4><?php echo $row['description']; ?>
      <h4 style="color: orange;">Price:</h4><h4><?php echo $row['price']; ?></h4>

    <?php if(isset($_SESSION['id'])) { ?>

        <a data-toggle="modal" data-target="#all"><button type="submit" value="submit" class="btn btn-success" name="button" style="width: 200px;margin-left: 600px;">Add To Cart</button></a>

      <?php } else {  ?>
   
    <a data-toggle="modal" data-target="#myModal"><button type="submit" value="submit" class="btn btn-success" name="button" style="width: 200px;margin-left: 600px;">Add To Cart</button></a>
     <?php } ?>
    </div>
  </div>

  <?php } ?> 
<br/>
<br/><br/><br/><br/><br/><br/>




   </div>


<!-- modals -->
<?php
require('login_modal.php');
?>
<?php
require('add_to_cart_modal.php');
?>



<footer class="contain">
  <div >
   <center> Copyright : K.Prashanthi , Nirguna</center>
  </div>

  </footer>
  </body>
  </html>



