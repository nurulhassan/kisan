
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
    require ('login_header.php');?>
<div class="container">
 
    <div class="search_padding">

      <form method="post" action="banner_form.php">

          <input type="text" placeholder="Product name" name="search1" size="30">
      <button type="submit"><span class="  glyphicon glyphicon-search"></span></button></form></div>
     <h3><b><u>Featured Ads:</u><i>Category(Fruits)</i></b></h3><br/> 



<?php for($id = 7; $id <= 8  ; $id ++)
{ ?>
 <div class="row" style="margin-top: 20px; border-style:inset;">
    <div class="col-sm-3 col-sm-5">
      <img class="panel1" src="view1.php?id= <?php echo $id ?>" style="width:220px;height:180px;border-radius: 20px;" alt="responsive">
    </div>
    <div class="col-sm-9 col-sm-8" >
      <h3><b><u>Ad Title</u></b></h3>
     <h4>Description:</h4><?php require ('view2.php') ?>
      <h4>Price:</h4>
     <button type="submit" value="submit" class="btn btn-success" name="button" style="width: 200px;margin-left: 500px;">+ More Info</button>
    </div>
  </div>
<br/><br/>
<?php } ?>




   </div>


<!-- modals -->
<?php
require('login_modal.php');
?>


<footer class="contain">
  <div >
    <div class="col-xs-4">
    <h3>Information  </h3>
    <p ><a href="about.php"> About Us</a></p>
    <p><a href="about.php">Contact Us</a></p>
  </div>
  <div class="col-xs-4">
    <h3>My Account</h3>
    <p><a data-toggle="modal" data-target="#myModal" >
      Login</a>
    </p>
    <p><a href="signup.php">SignUp</a></p></div>
     <div class="col-xs-4">
    <h3>Contact Us  </h3>
    <p>+91 7358337901</p></div>
  </div>

  </footer>
  </body>
  </html>


