
<?php
	session_start();
?>

<?php
	include("connection.php");
	if(isset($_POST["sub"]))
	{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pass'];

	
	
	$sql="INSERT INTO `logintable`(`name`,`email`,`password`) 
		VALUES 
		('$name','$email','$password')";		
		$result=mysqli_query($conn,$sql);
		
		header("location:login.php");
	}
	
?>

	



	
