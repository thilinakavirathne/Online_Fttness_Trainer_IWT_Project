<?php
	$nic= $_POST['nic'];
	$firstname= $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender= $_POST['gender'];
	$age= $_POST['age'];
	$height= $_POST['height'];
	$weight= $_POST['weight'];
	$dob= $_POST['dob'];
	$address= $_POST['address'];
	$mobile= $_POST['mobile'];
	$packages= $_POST['packages'];
	$email= $_POST['email'];
	$passwrod= $_POST['password'];
	/*$repassword= $_POST['repassword'];*/

	//database connection

	$conn= new mysqli('localhost','root','','onlinefitnesstrainer');
	if ($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt= $conn->prepare("insert into registration(nic,firstname,lastname,gender,age,height,weight,dob,address,mobile,packages,email,password)values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isssissssisss",$nic,$firstname,$lastname,$gender,$age,$height,$weight,$dob,$address,$mobile,$packages,$email,$passwrod);
		$stmt->execute();
		echo "Yor Registration is Successfully....";
		
			echo "<script> 
			window.location.replace(\"../home.html\");
			</script>";
		$stmt->close();
		$conn->close();
	}

?>  