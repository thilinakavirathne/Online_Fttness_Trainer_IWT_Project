
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "onlinefitnesstrainer";



global $userName;

//   Check if form submited,insert  and data & T&c 
	if(isset($_POST['changePassConfirm'])){

		$email = $_POST['username'];
		$UserPassword = $_POST['password'];

		
	}

		// check the  Tearm and Condition
		else{
				echo "<script> 

					window.alert(\"You Must Agree the tearm and Condition. Please tick 'I need to change my Password' !\");
			
	 				window.location.replace(\"../Login.html\");

	 	   			</script>";


}



	//Connection object
	$conn = new mysqli($servername, $username ,$password, $dbname);

	//$sql=" UPDATE details SET (password) WHERE userName = '$userName'";

	//Update The Password
	$sql="UPDATE registration SET password='" .$UserPassword."' WHERE email='" .$email."' " ;

	$result = mysqli_query($conn,$sql);

	if($result){
			
			
			echo "<script> 

				window.alert(\"Your Password Change Succfull !\");
				window.alert(\"You has been sent an email about changed Password !\");
	 			window.location.replace(\"../Login.html\");

	 	   		</script>";

			}

		else{
			echo "Your Enter Details was Wrong or dose not match";
	
}



?>