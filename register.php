<?php

		if (isset($_POST["submit_employer"]))
		{
			include_once('db.php');
			$user = mysqli_real_escape_string($conn, $_POST['user_employer']);
			$pass = mysqli_real_escape_string($conn, $_POST['pass_employer']);
			$compName = mysqli_real_escape_string($conn, $_POST['comp_name']);
			$compAddress = mysqli_real_escape_string($conn, $_POST['address']);
			$emailAdd = mysqli_real_escape_string($conn, $_POST['email_add_employer']);
			$numEmployer = mysqli_real_escape_string($conn, $_POST['num_employer']);
			$country = mysqli_real_escape_string($conn, $_POST['country']);

			$sql = "SELECT * FROM employer WHERE username='$user'";
			$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) {
				echo "username already taken";
			}
			else {
				//hashing the password
				$hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
				$sql = "INSERT INTO employer (username, password, full_name, address, email_add, phone_no, country) VALUES ('$user', '$pass', '$compName', '$compAddress', '$emailAdd', '$numEmployer', '$country')";
				mysqli_query($conn, $sql) or die(mysqli_error($conn));

				header("Location: employer.php");						
			}					
		} elseif (isset($_POST["submit_employee"]))
		{
			include_once('db.php');
			$user2 = mysqli_real_escape_string($conn, $_POST['user_employee']);
			$pass2 = mysqli_real_escape_string($conn, $_POST['pass_employee']);
			$firstName = mysqli_real_escape_string($conn, $_POST['full_employee']);
			$lastName = mysqli_real_escape_string($conn, $_POST['last_employee']);
			$compAddress2 = mysqli_real_escape_string($conn, $_POST['address_employee']);
			$emailAdd2 = mysqli_real_escape_string($conn, $_POST['emailAdd_employee']);
			$birthday = mysqli_real_escape_string($conn, $_POST['bday_employee']);
			$numEmployee = mysqli_real_escape_string($conn, $_POST['num_employee']);
			$country2 = mysqli_real_escape_string($conn, $_POST['country_employee']);

			$sql = "SELECT * FROM employee WHERE username='$user2'";
			$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) {
				echo "username already taken";
			}
			else {
				//hashing the password
				$hashedPwd = password_hash($pass2, PASSWORD_DEFAULT);
				$sql = "INSERT INTO employee (username, password, full_name, address, email_add, birthday, phone_no, country) VALUES ('$user2', '$hashedPwd', '$firstName','$compAddress2', '$emailAdd2', '$birthday', '$numEmployee', '$country2')";
				mysqli_query($conn, $sql) or die(mysqli_error($conn));

				header("Location: employee.php");						
			}					
		}
?>