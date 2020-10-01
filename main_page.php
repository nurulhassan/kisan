 

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
       require('logout_header.php');?>

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
                           
                        </div>  <a href="category_fruit.php"><button style="min-width:170px">Fruits</button></a></center></div>
    </div>
 </div></a>
      
              

                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
     
      <div><center><img class="panel1" src="vegetable.jpeg" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="category_vegetable.php"><button style="min-width:170px">Vegetables</button></a></center></div>
    </div>
 </div>
      
               
             


                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
     
      <div><center><img class="panel1" src="cereal" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="category_cereal.php"><button style="min-width:170px">Cereals</button></a></center></div>
    </div>
 </div>
      


                
                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
     
      <div><center><img class="panel1" src="poultry" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="category_poultry.php"><button style="min-width:170px">Poultry</button></a></center></div>
    </div>
 </div>
      


                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
     
      <div><center><img class="panel1" src="spices.jpeg" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="category_spices.php"><button style="min-width:170px">Spices</button></a></center></div>
    </div>
 </div>
   




                <div class="col-md-2 col-sm-6">
               <div class="panel-group">
   
     
      <div><center><img class="panel1" src="daity.jpg" style="width:170px;height:150px;border-radius: 20px;" alt="responsive"><div class="caption" >
                           
                        </div>  <a href="category_diary.php"><button style="min-width:170px">Dairy</button></a></center></div>
    </div>
 </div>
 </div>
    
    
   


<!--................................................................-->



 <h3> <b>Trending Ads</b></h3><br/>
   <div class="row text-center">

    <div class="col-md-3 col-sm-6">
       <div class="panel-group">
    <div class="panel panel-default">
       <div class="panel-heading">1</div>
      
      <div class="panel-body"><center><img src="view1.php?id=7" alt="responsive" style="width:200px;height:160px;border-radius: 20px;"><div class="caption" >
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
?>


<?php
require('freeadd_modal.php');
?>

<!--end modals-->

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



