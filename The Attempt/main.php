<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>
	<form action="action.php" method="post">

	<table>
		<tr>
			<td>S_ID</td>
			<td><input type="text" name="id"/></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td>Department</td>
			<td><input type="text" name="department"></td>
		</tr>
		<tr>
			<td>CGPA</td>
			<td><input type="text" name="cgpa"/></td>
		</tr>
		<tr>
			<td>Bloodgroup</td>
			<td><input type="text" name="bloodgroup"/></td>
		</tr>
		<input type="radio" name="gender" value="male" checked> Male<br>
		<input type="radio" name="gender" value="female"> Female<br>
		<input type="radio" name="gender" value="other"> Other
		<tr>
			<td><input type="submit" name="submit"/></td>
	</table>
</form>
</body>
</html>
