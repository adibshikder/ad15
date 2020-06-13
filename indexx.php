<!DOCTYPE html>
<html>
<head>
	<title>REGI</title>
</head>
<body>
 <form action="insert.php" method="POST">
	<table>
		<tr>
			<td>
				Name :
			</td>
			<td>
				<input type="text" name="username" required>
			</td>
		</tr>
		<tr>
			<td>
				Password :
			</td>
			<td>
				<input type="Password" name="password" required>
			</td>
		</tr>
		<tr>
			<td>
				Gender :
			</td>
			<td>
				<input type="radio" name="gender" value="m" required>Male
				<input type="radio" name="gender" value="f" required>Female
			</td>
		</tr>
		<tr>
			<td>
				Email :
			</td>
			<td>
				<input type="email" name="email" required>
			</td>
		</tr>
		<tr>
			<td>
				Phone no :
			</td>
			<td>
				<select name="phoneCode" required>
					<option selected hidden value="">select code</option>
					<option value="017">017</option>
					<option value="018">018</option>
					<option value="016">016</option>
				</select>
				<input type="text" name="phone" required>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Submit" name="sumbit">
			</td>
		</tr>
	</table>
 </form>
</body>
</html>