
<?php
	session_start();
?>

<?php
	include("connection.php");
	if(isset($_POST["sub"]))
	{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$comment=$_POST['msg'];

	
	
	$sql="INSERT INTO `contactus` (`firstName`,`lastName`,`email`,`gender`,`comment`) 
		VALUES 
		('$fname','$lname','$email','$gender','$comment')";	

		$result=mysqli_query($conn,$sql);
			
		echo "<script type='text/javascript'> alert('We’ve got your concern and we will contact you as soon as possible');window.location='contactus.php';</script>";
		
	}
	
?>

	



	
