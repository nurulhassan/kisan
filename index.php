<?php

     session_start();
     if(isset($_SESSION['id']))
  { 

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
          <input type="search" placeholder="what are you searching for?" name="search" size="30">
      <button type="submit"><span class="  glyphicon glyphicon-search"></span></button></form></div>

      <center><div class="alert alert-success alert-dismissible" style="width:500px;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> Hi <?php echo $_SESSION['name']; ?> !!!
          </strong>
</div></center>
     
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

 <h3> <b>Recent Ads</b></h3><br/>
   <div class="row text-center">

    <div class="col-md-3 col-sm-6">
       <div class="panel-group">
         <div class="panel panel-default">
           <div class="panel-heading">1</div>
             <div class="panel-body"><center><img src="view1.php?id=7" alt="responsive" style="width:200px;height:160px;border-radius: 20px;"><div class="caption">
                            <h4>Fresh Tomatoes</h4>
                            <h5>Price:Rs.40.00</h5>
                        </div> <a href="cart.php"> <button type="button" class="btn btn-primary btn-block">Add to Cart</button></a></center></div>
    </div>
 </div>
               </div>
              

 

                <div class="col-md-3 col-sm-6">
              <div class="panel-group">
    <div class="panel panel-default">
       <div class="panel-heading">2</div>
      <div class="panel-body"><center><img src="amla.jpg" style="width:200px;height:200px;border-radius: 20px;" alt="responsive"><div class="caption" >
                            <h4>Amla</h4>
                            <h5>Price:Rs.190.00</h5>
                        </div>  <a href="cart.php"><button type="button" class="btn btn-primary btn-block">Add to Cart</button></a></center></div>
    </div>
 </div>
               </div>
               
              




                <div class="col-md-3 col-sm-6">
               <div class="panel-group">
    <div class="panel panel-default">
       <div class="panel-heading">3</div>
      <div class="panel-body"><center><img src="ff.jpg" style="width:200px;height:200px;border-radius: 20px;" alt="responsive"><div class="caption" >
                            <h4>Cucumber</h4>
                            <h5> Price:Rs.240.00</h5>
                        </div> <a href="cart.php"> <button type="button" class="btn btn-primary btn-block">Add to Cart</button></a></center></div>
    </div>
 </div>

       

      </div>
       <div class="col-md-3 col-sm-6"> <div class="panel-group">
    <div class="panel panel-default">
       <div class="panel-heading">4</div>
      <div class="panel-body"><center><img src="corn.png" style="width:200px;height:200px;border-radius: 20px;" alt="responsive"><div class="caption" >
                            <h4>Fresh Cereals</h4>
                            <h5> Price:Rs.315.00</h5>
                        </div>  <a href="cart.php"><button type="button" class="btn btn-primary btn-block">Add to Cart</button></a></center></div>
    </div>
               </div>

     </div></div>
     <!--end of one row-->
     <h4 style="float:right"><a href="home.php">See more>></a></h4>
     </div>

</div>

<!-- modals -->
<?php
require('login_modal.php');
require('freeadd_modal.php');
?>

<!--end modals-->
<?php require ('footer.php') ?>
<?php } ?>
  </body>
  </html>



