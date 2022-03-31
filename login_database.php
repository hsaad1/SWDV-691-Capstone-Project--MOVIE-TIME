
<?php
	session_start();
?>
<?php
	include("connection.php");
	if(isset($_POST["sub"]))
	{
	$email=$_POST['email'];
	
	$password=$_POST['pass'];
	$sql="select * from logintable where email='$email' AND password='$password'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$name=$row['name'];
	if(mysqli_num_rows($result)>0)
	{
	
		$_SESSION["user1"]=$name;
	}
	
	
	if($email == $row['email'])
	{
		echo "<script type='text/javascript'>  window.location='index.php';</script>";
	
	}
	
	else{
		
		echo "<script type='text/javascript'> alert('email id is not registered');window.location='login.php';</script>";
	}
	}
	
?>

	
