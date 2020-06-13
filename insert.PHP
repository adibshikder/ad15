<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Hospital Management</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="header">
				<div class="headerLogo">
					<img src="img/logo.jpg" alt="Logo_Image" width="5%" height="2%"/>
				</div>
				<div class="title">
					<h2>XYZ Hospital</h2>
				</div>
			</div>
		</header>
		<div class="marquee">
		
		
			<marquee>Welcome to XYZ Hospital........The hospital is an institution in which sick and injured persons are given medical or surgical treatment.</marquee>
		</div>
		<nav>
			<div class="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a>
						<ul>
							<li><a href="goalAndObjectives.php">Goal & Objectives</a></li>
							<li><a href="messageFromChairman.php">Message From Cairman</a></li>
							<li><a href="massageFrom ManagingDirector.php">Message From Managing Director</a></li>
						</ul>
					</li>
					<li><a href="service.php">Our Services</a></li>
					<li><a href="findDoctor.php">Doctors</a></li>
					<li><a href="branch.php">Branches</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="indexx.php">Registration</a></li>
					<li><a href="appointment.php">Appointment</a></li>
				</ul>
			</div>
		</nav>



<?php
$host= "localhost";
$dbUsername= "root";
$dbPassword= "";
$dbname= "adib";
$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
if(!$conn){
	die ("Connnection Error");
}
if(isset($_POST['sumbit'])){
	
	$username= $_POST['username'];
	$password= $_POST['password'];
	$gender= $_POST['gender'];
	$email= $_POST['email'];
	$phoneCode= $_POST['phoneCode'];
	$phone= $_POST['phone'];
	
	$select="select * from regitable where email='$email'";
	$match=mysqli_query($conn,$select);
	$numr=mysqli_num_rows($match);
	if($numr==1){
		echo "This email is already registered";
	}else{
		$insert="INSERT INTO regitable VALUES('$username','$password','$gender','$email','$phoneCode','$phone')";
		mysqli_query($conn,$insert);
		echo "Data Successfully Inserted";
	}
}
?>


		<footer>
	        <div class="footer">
				<h2>Designed by: Adib </h2>
			</div>
		</footer>
	</div> 
</body>
</html>