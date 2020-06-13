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
					<li><a href="login.php">Login</a></li>
					<li><a href="appointment.php">Appointment</a></li>
				</ul>
			</div>
		</nav>
		<div class="content">
			<section>
				<div class="section">
					<div class="imgage">
						<img src="img/hospital.jpg" alt="Hospital_Pic.jpg" width="100%" height="100%"/>
					</div>
					
					<div class="aboutUs">
						<h1>About Us</h1>
						<p>XYZ hospital is an institution in which sick and injured persons are given medical or surgical treatment.It is a an organization committed to clinical practices,education and research,providing expert,whole person care to everyone who needs healing.
									
						</p>
					</div>	
				</div>
			</section>
			<article>
				<div class="article">
					<div class="event">
						<div class="eventPart">
						    <div class="eventPartImage">
								<img src="img/doctor.png" alt="" height="100%" width="100%"/>
							</div>
						    <div class="eventPartDetails">
								<a href="finddoctor.html"><h2>Find Doctors</h2>
								<p>At XYZ Hospital</p></a>
							</div>
								
						</div>
						<div class="eventPart">
						    <div class="eventPartImage">
								<img src="img/appointments.jpg" alt="" height="100%" width="100%"/>
							</div>
						    <div class="eventPartDetails">
								<a href="appointment.html"><h2>Appointments</h2>
								<p>Phone for appointments</p></a>
							</div>
						</div>
						<div class="eventPart">
						    <div class="eventPartImage">
								<img src="img/diagonistic.jpg" alt="" height="100%" width="100%"/>
							</div>
						    <div class="eventPartDetails">
								<a href="diagnostic.html"><h2>Diagnostic</h2>
								<p>Available diagnostic tests</p></a>
							</div>
						</div>
						<div class="eventPart">
						    <div class="eventPartImage">
								<img src="img/health-checkUp.jpg" alt="" height="100%" width="100%"/>
							</div>
						    <div class="eventPartDetails">
								<a href="healthcheckup.html"><h2>Health Check-up</h2>
								<p>Our corporate  service</p></a>
							</div>
						</div>
					</div>
					<div class="quickLinks">
						<h2>Quick Links</h2>
						<p><a href="service.php">&rarr; Our Services</a></p>
						<p><a href="branch.php">&rarr;Our Branches</a></p>
						<p><a href="appointment.php">&rarr; Call for appointments</a></p>
						<p><a href="gallery.php">&rarr; Gallery</a></p>
						<p><a href="contact.php">&rarr; Contact</a></p>
						
					</div>
				</div>
			</article>
		</div>
		<footer>
	        <div class="footer">
			
			
<p id="demo"></p>

<script>
	var day;
	switch (new Date().getDay()) {
	case 0:
		day = "Sunday";
		break;
	case 1:
		day = "Monday";
		break;
	case 2:
		day = "Tuesday";
		break;
	case 3:
		day = "Wednesday";
		break;
	case 4:
		day = "Thursday";
		break;
	case 5:
		day = "Friday";
		break;
	case  6:
		day = "Saturday";
		break;
	default:
		day = "unknown";
}
document.getElementById("demo").innerHTML = "Today is " + day;
</script>
			
				<h2>Designed by: Adib </h2>
			</div>
		</footer>
	</div> 
</body>
</html>