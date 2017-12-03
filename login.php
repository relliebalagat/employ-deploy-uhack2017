<?php
session_start();
	if (isset($_POST["submit_but_employee"])){
		include_once 'db.php';
		$username = mysqli_real_escape_string($conn, $_POST['user_employee']);
		$password = mysqli_real_escape_string($conn, $_POST['pass_employee']);

		$sql = "SELECT * FROM employee WHERE username='$username'";
      	$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
      	$resultCheck = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

      	if ($resultCheck < 1 && !password_verify($password, $row['password'])) {
      		header("Location: employee.php?login=error");
      		exit();
      	} else {
  				$_SESSION['username'] = $row['username'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['full_name'] = $row['full_name'];
          $_SESSION['address'] = $row['address'];
          $_SESSION['email_add'] = $row['email_add'];
          $_SESSION['birthday'] = $row['birthday'];
          $_SESSION['phone_num'] = $row['phone_no'];
          $_SESSION['country'] = $row['country'];
          header("Location: mainModule.php");

      	}
    }	elseif (isset($_POST["submit_but_employer"])){
      include_once 'db.php';
      $username2 = mysqli_real_escape_string($conn, $_POST['user_employer']);
      $password2 = mysqli_real_escape_string($conn, $_POST['pass_employer']);

      $sql = "SELECT * FROM employer WHERE username='$username2'";
          $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
          $resultCheck = mysqli_num_rows($result);
          $row = mysqli_fetch_assoc($result);

          if ($resultCheck < 1 && !password_verify($password, $row['password'])) {
            header("Location: employer.php?login=error");
            exit();
          } else {
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['full_name'] = $row['full_name'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['email_add'] = $row['email_add'];
            $_SESSION['phone_no'] = $row['phone_no'];
           $_SESSION['country'] = $row['country'];
            header("Location: mainModule.php");

          }
      }
?>