<?php
	include_once 'config.php';
?>

<?php
	$nic= $_POST['nic'];
	$firstname= $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age= $_POST['age'];
	
	$weight= $_POST['weight'];
	$address= $_POST['address'];
	$mobile= $_POST['mobile'];

	
	
	if(mysqli_query($conn,"UPDATE registration SET `age`='".$age."',`firstname`='".$firstname."',`lastname`='".$lastname."',`weight`='".$weight."',`address`='".$address."',`mobile`='".$mobile."' WHERE `nic`='".$nic."'")){

		echo "<script>alert('Data Inserted Succesfully')</script>";
		header("Location:useracc.php");
		//can redirect to the main page.....
	}
	else{
		echo"<script>alert('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
?>