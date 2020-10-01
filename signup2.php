 <?php 
$con=mysqli_connect("localhost","root","","kisanmart") or die(mysqli_error($con));
session_start();
 if (isset($_POST['submit'])) {



$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);
$contact=mysqli_real_escape_string($con, $_POST['contact']);
$state=mysqli_real_escape_string($con, $_POST['state']);
$address=mysqli_real_escape_string($con, $_POST['address']);
$usertype = mysqli_real_escape_string($con,$_POST['selectcategory']);

$email_pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";

		$query1="select * from users where email_id = '$email'";
		$result1=mysqli_query($con, $query1) or die(mysqli_error($con));
		// $row1=mysqli_fetch_array($result1);

		$total_s=mysqli_num_rows($result1);

	if($total_s == 0)
	{
		$user_reg="insert into users(name,email_id,password,mobile_no,state,address,usertype) values('$name','$email','$password','$contact','$state','$address','$usertype')";

		$result=mysqli_query($con, $user_reg) or die(mysqli_error($con));

		$_SESSION['email_id']=$email;
		$_SESSION['name']=$name;
		$_SESSION['password']=$password;
		$_SESSION['mobile_no']=$contact;
		$_SESSION['usertype']=$usertype;
		//$_SESSION['message']="you are successfully signed in";
		$_SESSION['id']=mysqli_insert_id($con);
		header("location:index.php");
	}
	else{
		echo "<center>Account Already Exists</center><br>";}
	}
?>