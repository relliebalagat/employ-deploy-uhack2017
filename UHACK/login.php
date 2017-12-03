<!DOCTYPE>
<HTML>
<head>
	<title></title>
	<style>
	a {
		text-decoration: none;
	}
	</style>

</head>

<body>
	<form method = "POST" action = "login2.php">
		<input type="text" name="username" placeholder="Username/Email" required>
		<input type="password" name="password" placeholder="Password" required><br/>
		<a href="forgotpassword.php" >Forgot Password?</a>
		<a href="signup.php" style="color:red">Don't have an account? Sign up</a>	<br/>
		<button type="submit" name="submit">Login</button>
	</form>
						
	
</body>
</HTML>