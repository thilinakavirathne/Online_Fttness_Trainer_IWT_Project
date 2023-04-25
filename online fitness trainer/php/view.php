<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rota Fitness Center</title>
	<link rel="stylesheet" href="../css/headerFooter.css"/> <!--Header & Footer--->
	<link rel="stylesheet" href="../css/register.css"/>
	<script src="../js/register.js"></script>
</head>
<body>

	<!--Header-->
	<div id="bcolor">
		
		<table  width="100%">
			<tr>
				<td>	<a href="../login.html"><img src="../images/logo.jpg" class="logo" alt="*The logo of our Online Fitness Trainer*" /></a></td>
				<td class="col1"><h1 class="title">Rota Fitness Center</h1></td>

				<td class="col2" >
						
						<a href="../login.html">
									<button class="btn1" > Login</button><img src="../images/Acc.png" id="accp" align="center" alt="*The logo of login*" /></a>

					
				</td>
			</tr>
	
		</table>
	
	</div>				
<!----Header close---->
		

<!--Navigation bar-->
<ul class="menu">
		<li class="menu"> <a href="../Home.html"> Home</a> </li>
		<li class="menu"> <a href="../Packages.html"> Packages</a></li>
		<li class="menu"> <a href="../Membership.html"> Membership</a></li>
		<li class="menu"> <a href="../FindUs.html"> Find Us</a></li>
		<li class="menu"> <a href="../AboutUs.html"> About Us</a></li>
	</ul>
	
<hr id="test"/>

<div id="regib">
	<p class="font1" align="center">...View Accounts Details...</p>
	
		<center>
			<table border="1" width="80%" bgcolor="white">

		<tr>
			<th>MemberID</th>	
			<th>nic</th>
			<th>firstname</th>
			<th>lastname</th>
			<th>gender</th>
			<th>age</th>
			<th>height</th>
			<th>weight</th>
			<th>dob</th>
			<th>address</th>
			<th>mobile</th>
			<th>packages</th>
			<th>email</th>
	
	
		</tr>

	

	
	<?php
			$sql = "select * from registration;";
			$result=$conn->query($sql);

			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					echo"<tr>";
					echo"<td>".$row["MemberID"]."</td>";
					echo"<td>".$row["nic"]."</td>";
					echo"<td>".$row["firstname"]."</td>";
					echo"<td>".$row["lastname"]."</td>";
					echo"<td>".$row["gender"]."</td>";
					echo"<td>".$row["age"]."</td>";
					echo"<td>".$row["height"]."</td>";
					echo"<td>".$row["weight"]."</td>";
					echo"<td>".$row["dob"]."</td>";
					echo"<td>".$row["address"]."</td>";
					echo"<td>".$row["mobile"]."</td>";
					echo"<td>".$row["packages"]."</td>";
					echo"<td>".$row["email"]."</td>";
					echo"</tr>";

				}
			}
			else{
				echo "No details to display";
			}

			echo"</table>";

			$conn->close();
	




	?>
			</table>
		</center>
		<br/>
	<style >
input[type=delete]{
  
  padding: 10px;
  margin: 5px 0 10px 9px;
  display: inline-block;
  border: none;
  background: #f1f1f1;

}
#deletebtn{
	background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
 
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
	
}
#deletebtn:hover {
  opacity: 1;
}
.form2{
	background: none;
	margin-left: 10px;
	width: 500px;
	margin-left: auto;
	margin-right: auto;
}
.dnic{

	color: black;
}
.divbk{
	background-color: white;
	margin-right: 10px;
}
.form3{
	background: none;
	width: 50%;
	margin-left: 10px;
	box-shadow: 0px 0px 10px 10px white;


}

	

.up{
	font-size: 17px;
	color: black;
	border-style: groove;
	background-color: white;
}
.ud{
	
	background: none;


}

	</style>
	
<form class="form2" action="deleteacc.php" method="POST">

<div class="divbk">

<label for = "nic" class="dnic"><b>Delete Your Account Enter NIC Number</b></label></div>
<input type="delete" name="del"  placeholder = "Enter NIC Number"  required>
<input type="submit" id="deletebtn" value="Delete Account">

</form>

<center>
	
<form class="form3" action="update.php" method="POST">
	


	<div class="ud" >
	<table    >
		<tr ><th colspan="5"><label for = "update" class="up"><b>Update Account Details</b></label></th>
		</tr>
		<tr>
			<td><label for = "nic" class="up">NIC:</label><br/>
				<input type="NIC" name="nic" pattern="[0-9]{12}" placeholder="200116404223" ><br></td>	
			<td><label for = "age" class="up">Age:</label><br/>
				<input type="number" name="age" pattern="[0-9]{2}" placeholder="Age" ><br></td>
			<td><label for = "weight" class="up">Weight:</label><br/>
				<input type="text" name="weight" placeholder="Weight" ><br></td>
			<td rowspan="2"><br/><br/><br/><br/><label for = "address" class="up">Address:</label><br/>
		    <textarea name="address" class="area" rows="8" cols="50" ></textarea><br></td>
			<td><label for = "mnumber" class="up">Mobile Number:</label><br/>
				<input type="phone" name="mobile" pattern="[0-9]{10}" placeholder="0714782233" ></td>
	
	
		</tr>
		<tr></tr>
	</table>
	</div>

				<input type="submit" id="submitbtn" value="Update Account">

</form>

</center>



<br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<!--footer-->

<footer class="footer" id="ex1" >
	
	<table  style="width:100%">	
			

			<tr>
  				<td><img src ="../images/net.png" alt="fbicon" class="foot-icon"> Visit :www.rotafitness.lk<br>
  					<img src ="../images/call.png" alt="fbicon" class="foot-icon">Call Us : +11 254 4587<br>
  					<img src ="../images/Location.png" alt="fbicon" class="foot-icon">Location : <a href="https://goo.gl/maps/8B2rGMJgdZBQkEYG6/"> Kandy Rd,Malabe</a> <br>

  				</td>



				<td class="col4">
							© All Rights Reserved.<br>
  	       					Rota Fitz Pvt Ltd<br>
  							<a href="rotafitz@gmail.com">rotafitz@gmail.com</a>
  				</td>

			<td >	
				<div id="textAlign">
  					<p class="foots">Follow Us On  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</p>
					<a href="https://www.facebook.com/sliit.lk/"><img src ="../images/fbb.png" alt="fbicon"  width="40" height="40" > </a>
					<a href="https://twitter.com/SLIITComputing?t=SnT3hK0oX-LJ234NYfmMzw&s=09"><img src ="../images/tweeticon.png" alt="teewticon"  width="40" height="40" ></a>
					<a href="https://instagram.com/sliit.life?igshid=YmMyMTA2M2Y="><img src ="../images/insticon.png" alt="yticon"  width="45" height="40" > </a>
				</div>
			</td>
		

		</tr>
		
		


</table>

</footer>

</body>


</html>