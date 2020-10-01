 <?php 
$con=mysqli_connect("localhost","root","","kisanmart") or die(mysqli_error($con));
session_start();
 if (isset($_POST['submit'])) {

$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$contact=mysqli_real_escape_string($con, $_POST['contact']);
$message=mysqli_real_escape_string($con, $_POST['message']);

$email_pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";

	$user_reg="insert into contact_us(name,email_id,mobile_no,message) values('$name','$email','$contact','$message')";

		$result=mysqli_query($con, $user_reg) or die(mysqli_error($con));

		header("location:main_page.php");
	}
	
?>