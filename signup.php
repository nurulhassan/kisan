

<!DOCTYPE HTML>
<html>
  <head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="script.css" type="text/css">
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body background="back.jpeg">
 <?php 
if(!isset($SESSION['id'])){ 

  require ('logout_header.php');}
  
  else {
       require ('login_header.php');
  }
 ?>
    <br/>
    <br/>
  
<div class="container-fluid"  background="pop.jpeg">
            
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <center><h2 style="color:orange">SIGN UP</h2></center>
                        <form method="POST" action="signup2.php">
                    
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true">
                          </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="State" name="state" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <div class = "form-group categories" >
                             <select class="pp2" style="height:45px; margin-left: 0px;" name="selectcategory">
                             <option value="categories">Category</option>
                            <option value="farmer">Farmer</option>
                            <option value="user">User</option>
                            </select>
                          </div>

                            <center><a href="login_header.php">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary" style="width: 200px;">Submit</button></a></center>
                        </form>
                           <h4>Already have an Account?<a data-toggle="modal" data-target="#myModal">Login</a></h4>
                    </div>
                </div>
            </div>

<br/><br/>
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
<?php
require('login_modal.php');
?>
    
</body>
</html>
