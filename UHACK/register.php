<?php

		if (isset($_POST["submit"]))
		{
			include_once('db.php');
			$first = mysqli_real_escape_string($conn, $_POST['first']);
			$last = mysqli_real_escape_string($conn, $_POST['last']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			$address = mysqli_real_escape_string($conn, $_POST['address']);
			$date = mysqli_real_escape_string($conn, $_POST['birthday']);
			$age = mysqli_real_escape_string($conn, $_POST['age']);
			$gender = mysqli_real_escape_string($conn, $_POST['gender']);	

			$sql = "SELECT * FROM signup WHERE username='$username'";
			$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) {
				echo "username already taken";
			}
			else {
				//hashing the password
				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT INTO signup (first, last, email, username, password, address, birthdate, age, gender) VALUES ('$first', '$last', '$email', '$username', '$hashedPwd', '$address', '$date', '$age', '$gender')";
				mysqli_query($conn, $sql) or die(mysqli_error($conn));

				header("Location: ../uhack/index.php");						
			}					
		}
?>