<html>
<head>
<title>Login Page</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Hospital Management</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body style="background-color:Aliceblue;>

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
<center>
<form name="loginForm" method="post" action="login.php">
<table width="20%" bgcolor="0099CC" align="center">

<tr>
<td colspan=2><center><font size=4><b>Please Login</b></font></center></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" size=25 name="userid"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password" size=25 name="pwd"></td>
</tr>

<tr>
<td ><input type="Reset"></td>
<td><input type="submit" onclick="return check(this.form)" value="Login"></td>
</tr>
</center>
</table>
</form>
</br>

<footer>
	        <div class="footer">
				<h2>Designed by: Adib </h2>
			</div>
		</footer>
	</div> 
</body>
</html>