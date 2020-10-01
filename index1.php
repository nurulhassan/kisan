<?php

     session_start();
   

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
  <body background="back.jpeg ">
  <?php
       require('login_header.php');?>

<div class="banner">
  <div class="container">
    <div id="banner_content1">
         <form method="post" action="banner_form.php">


   <select  onChange="if(this.selectedIndex!=0)
              self.location=this.options[this.selectedIndex].value" class = "main_search">
                <option value="categories.php">Categories</option>
                <option value="category_fruit.php"> Fruits</option>
                 <option value="category_vegetable.php" >Vegetables</option>
                 <option value="category_poultry.php" >Poultry</option>
                 <option value="category_spices.php" >Spices</option>
                 <option value="category_diary.php" >Diary</option>
                 <option value="category_cereal.php" >Cerals</option>
                 
                  

              </select>
          <input type="search" placeholder="what category are you searching for?" name="search" size="30">
      <button type="submit"><span class="  glyphicon glyphicon-search"></span></button></form></div>


     
      <div id="banner_content">
 
        <center><h1 style="color:white">Farmers are the only hope for our future</h1><br/>
        <a data-toggle="modal" data-target="#myModal2" class="btn btn-danger btn-lg-active">Post Free Add</a></center>
      </div>
  </div>
</div>

<div class="container">
<h3><b>Categories</b></h3><br/>
   <div class="row text-center">

                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
      <a href="categories.php">
      <div><center><img class="panel1" src="fruit.jpeg" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="cart.php"><button style="min-width:170px">Fruits</button></a></center></div>
    </div>
 </div></a>
      
              

                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
     
      <div><center><img class="panel1" src="vegetable.jpeg" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="cart.php"><button style="min-width:170px">Vegetables</button></a></center></div>
    </div>
 </div>
      
               
             


                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
     
      <div><center><img class="panel1" src="cereal" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="cart.php"><button style="min-width:170px">Cereals</button></a></center></div>
    </div>
 </div>
      


                
                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
     
      <div><center><img class="panel1" src="poultry" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="cart.php"><button style="min-width:170px">Poultry</button></a></center></div>
    </div>
 </div>
      


                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
     
      <div><center><img class="panel1" src="spices.jpeg" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="cart.php"><button style="min-width:170px">Spices</button></a></center></div>
    </div>
 </div>
   




                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
     
      <div><center><img class="panel1" src="daity.jpg" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="cart.php"><button style="min-width:170px">Dairy</button></a></center></div>
    </div>
 </div>
 </div>
    
<!--................................................................-->

<!-- modals -->
<?php
require('login_modal.php');
?>


<?php
require('freeadd_modal.php');
?>

<!--end modals-->
  <div >
<footer class="contain">

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
      </footer>
  </div>


  </body>
  </html>



