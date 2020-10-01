
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
  <body background="blow.jpeg">
 <nav class="navbar  navbar-fixed-top">
<div class="contain">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="login_header.php" class="navbar-brand"><strong><h4>Kisan Mart</h4></strong></a>
          <br/>
    </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right ">
            
            <li><a data-toggle="modal" data-target="#myModal"><strong><span class="glyphicon glyphicon-shopping-cart"></span>Login</strong></a></li>
            <li><a href="settings.php"><strong><span class="  glyphicon glyphicon-list-alt"></span>About US</strong></a></li>
            <li><a href="contact.php"><strong><span class="glyphicon glyphicon-log-in"></span>Contact US</strong></a></li>

            <li></li>
          
          </ul>
      </div>

      
  </div>
    </nav>

     
     <div class="container">
<div class="row" style="margin-top: 120px;">
    <div class="col-sm-6 col-sm-5">
      <img src="fruit.jpeg" style="margin-top: 20px;width: 310px;height: 280px; border-radius: 20px; float:left;margin-left: 30px;">
            
    </div>
    <div class="col-sm-6 col-sm-8" >
      <center><h1><b>Ad Title</b></h1>  </center><br/>
       <h3><u>Ad ID:</u></h3>
     <h3><u>Description:</u></h3><?php require ('view2.php') ?>
     <br/><br/><br/><br/><br/>
     <center> <button type="submit" value="submit" class="btn btn-success" name="button" style="width: 200px;">Add To Cart</button> </center>
    </div>
  </div>

<div class="row" style="margin-top: 40px;">
    <div class="col-sm-6 col-sm-5">
     <b><h3 style="color:green; margin-left: 70px;">Review of the Product</h3></b><br/><br/>
      <button type="submit" value="submit" class="btn btn-success" name="button" style="width: 200px; margin-left: 90px;">+ Add Review</button> 
            
    </div>
    <div class="col-sm-6 col-sm-12" style="border-style:solid;" >
      <center><h3><b>Seller's Profile</b></h3>  </center> <hr>
     <h4>Name of the Seller:</h4>
     <h4>Contact Number:</h4>
     <h4>Email-Id:</h4><br/><br/>
     
    </div>
  </div></div>


  </body>
  </html>




