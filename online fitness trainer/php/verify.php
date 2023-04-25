<?php
//-----------Login Page verify--------------------------------

global $userName, $password;
$email = $_POST['username'];
$password = $_POST['password'];

global $con;
$con = new mysqli("localhost", "root", "", "onlinefitnesstrainer");
$sqlCmd = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
$resultSet = $con->query($sqlCmd);

if($resultSet->num_rows > 0)
{
	session_start();
	$_SESSION["loggedUser"] = $email;
	
	header("Location: useracc.php");  // if Login Succfull  redirect to the user account 


}
else
{
	// if e mail Wrong page will be Redirect the Login Page
	echo "  <script> 

				window.alert(\" Incorrect Username or Incorect Password !\");
	 			window.location.replace(\"../Login.html\");   

	 	   </script>";
	
}


?> 