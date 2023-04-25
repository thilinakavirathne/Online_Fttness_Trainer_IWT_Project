<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "onlinefitnesstrainer";


	if(isset($_POST['submit'])){
        $UserName = $_POST['UserName'];
        $CardNo = $_POST['CardNo'];



	}
	//connect to object
	$conn = new mysqli($servername, $username ,$password, $dbname);
	$sql="INSERT INTO paymentdetails(UserName, CardNo) VALUES('$UserName','$CardNo')";

    	
		if($conn->query($sql)){


			echo "<script> 
            window.alert(\"Payment Successful!\");
            window.location.replace(\"../home.html\"); 
            
            </script>";
			

		}

    ?>

    