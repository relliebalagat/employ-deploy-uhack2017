<!DOCTYPE>
<HTML>
<head>
	<title></title>


</head>

<body>
		<form method="post" action="register.php">
			<p>Signup</p>
			<input type = "text" name = "first" placeholder="Firstname" pattern = "[a-zA-Z]+" required><br>
			<input type = "text" name = "last" placeholder="Lastname" pattern  = "[a-zA-Z]+" required><br>
			<input type = "text" name = "email" placeholder="Email" required required><br>
			<input type = "text" name = "username" placeholder="Username" required><br>
			<input type = "Password" name = "password" placeholder="Password" required><br>
			<p>Personal Information</p>
			<input type = "textarea" name = "address" placeholder="Address" required><br>
			<input type = "date" name = "birthday" placeholder="Birthday" required><br>
			<input type = "number" name = "age" placeholder="Age" required><br>
			<input type="radio" name="gender" value ="female" checked>Female
  			<input type="radio" name="gender" value="male">Male

			<button type = "submit" name="submit" value="submit">Sign up</button>
		</form>


</body>
</HTML>