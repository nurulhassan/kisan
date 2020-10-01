<?php
$con = mysqli_connect("localhost", "root", "" , "kisanmart" ) or die(mysqli_error($con));
if(isset($_POST['button'])){


$title = mysqli_real_escape_string($con,$_POST['addtitle']);
$description = mysqli_real_escape_string($con,$_POST['adddescription']);
$category = mysqli_real_escape_string($con,$_POST['selectcategory']);
$check = getimagesize($_FILES["image"]["tmp_name"]);
if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        }
        $dataTime = date("Y-m-d H:i:s");
$price = mysqli_real_escape_string($con,$_POST['price']);
$confirm =mysqli_real_escape_string($con, $_POST['confirm']);

$info="insert into products(category,title,description,date,price,publish,photo,user_id) values('$category','$title','$description','$dataTime','$price','$confirm','$imgContent',2)";
 $result=mysqli_query($con, $info) or die(mysqli_error($con));

}

?>

     
        
       
   