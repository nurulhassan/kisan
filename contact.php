
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

 <?php require('logout_header.php');?>
<div class="container">
   
     <div class="search_padding">
     <h2><b><u><center>CONTACT US</center></u></b></h2> </div>
  <center><h4 style="color: orange"><b>Getting in touch is easy!!</b></h4></center><br/>

         <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                    
                        <form method="POST" action="contact_backend.php">
                    
                            <div class="form-group">
                                <input st class="form-control" placeholder="Your Name" name="name"  required = "true">
                            </div><br/>
                             <div class="form-group">
                                <input class="form-control" placeholder="Contact No" name="contact"  required = "true">
                            </div><br/>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true">
                            </div>
                             <br/>
                            <div class="form-group">
                                <input class="form-control" id="message"  placeholder="Message" name="message" required = "true">
                            </div>

                            <a href="main_page.php">
                           <center><button type="submit" name="submit" value="submit" class="btn btn-primary" style="width: 200px; border-radius: 20px; background-color: orange ; border-color: orange ; color: black;">Send</button></center></a>
                        </form>
                          
                    </div>
                </div></div>
<br/><br/>

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

