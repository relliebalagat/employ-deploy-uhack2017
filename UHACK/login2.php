<?php
session_start();
	if (isset($_POST["submit"])) {
		include_once 'db.php';
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		$sql = "SELECT * FROM signup WHERE username='$username'";
      	$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
      	$resultCheck = mysqli_num_rows($result);

      	if ($resultCheck < 1) {
      		header("Location: ../login2.php?login=errornouser");
      		exit();
      	} else {
      		if ($row = mysqli_fetch_assoc($result)) {
      			$hashedPwdCheck = password_verify($password, $row['password']);
      			if ($hashedPwdCheck == false) {
      				header("Location: ../login2.php?login=incorrect");
      					echo "incorrect username or password";
      				exit();
      			}
      			elseif ($hashedPwdCheck == true) {
      				$_SESSION['userID'] = $row['userID'];
      				$_SESSION['first'] = $row['first'];
      				$_SESSION['last'] = $row['last'];
      				$_SESSION['username'] = $row['username'];
      				$_SESSION['address'] = $row['address'];
      				$_SESSION['birthday'] = $row['birthdate'];
      				$_SESSION['age'] = $row['age'];
      				$_SESSION['gender'] = $row['gender'];
      				header("Location: ../uhack/index.php");
      			}
      		}

      	}	
	}
?>