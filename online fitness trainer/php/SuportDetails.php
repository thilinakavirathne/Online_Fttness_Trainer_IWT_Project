<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "onlinefitnesstrainer";

//Check if form submited,insert data
	if(isset($_POST['Submit'])){
		$UserName = $_POST['UserName'];
		$UserEmail = $_POST['UserEmail'];
		$ReqeustType = $_POST['ReqeustType'];
		$UserMessage = $_POST['UserMessage'];

	}
	//Connection object
	$conn = new mysqli($servername, $username ,$password, $dbname);
	$sql="INSERT INTO suportdetails(UserName,UserEmail ,ReqeustType,UserMessage) VALUES('$UserName','$UserEmail','$ReqeustType','$UserMessage')";

	//$result = mysqli_query($conn,$sql);
	
		if($conn->query($sql)){

			//echo "Insert Succssful";
			echo "<script> 
					window.alert(\"Your Reqeust was sent Succssful.Our Agent will Contact You As soon as possible Thank You!\");
					window.location.replace(\"../home.html\");
	 			 </script>";
			

		}

		else{
			echo 'Erro';
		}

//new




	

?>