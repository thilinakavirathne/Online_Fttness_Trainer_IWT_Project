
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinefitnesstrainer";

// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
}

	$delete=$_POST['del'];

	
	if(mysqli_query($conn,"DELETE FROM registration WHERE nic=$delete")){
		header("location:view.php");
	}
	else{
		echo "<script>alert('Invalied NIC !!')</script>";
	}

	mysqli_close($conn);
?>