<?php

// --------------Contact Us Page-------------

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "onlinefitnesstrainer";

//Check if form submited,insert data
	if(isset($_POST['Submit'])){
		$GuestName = $_POST['GuestName'];
		$email = $_POST['email'];
		$Message = $_POST['Message'];

	}



	//Connection object
	$conn = new mysqli($servername, $username ,$password, $dbname);
	$sql="INSERT INTO contactdetails(GuestName,email,Message) VALUES('$GuestName','$email','$Message')";
	$result = mysqli_query($conn,$sql);



		if($result){
			
			
			//header('Location: ../Index.html'); 
				
				echo "<script> 
					window.alert(\"Thank You for Contact us. We will inform you as soon as possible\");
					window.location.replace(\"../home.html\");
	 			 </script>";
			

		}


	$conn->close();

?>