<?php
	if(isset($_GET['login']) && $_GET['login'] == "error"){
		$error = "Invalid Username or Password";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> UHack </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<script src="jquery-3.2.1.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans" rel="stylesheet">
	</head>

	<body class="bg">
		<section>
			<nav class="navbar">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand job-finder" href="index.php" id="head">Employ&Deploy</a>
			    </div>
			    <ul class="nav navbar-nav navbar-right pull-right">
			      <li><a href="#" style="text-decoration:none"><i class="fa fa-question-circle-o job-finder" aria-hidden="false" id="search-ic"></i></a></li>
			    </ul>
			  </div>
			</nav>
		</section>

		<section class="log-in-employee">
			<div class="container">
				<div class="col-md-3">
				</div>
				<div class="col-md-6 col-xs-12">
					<form action="login.php" method="post">
						<center><table id="table-employee">
							<tr class="tr1">
									<th colspan="2" class="log-in">Employer</th>
							</tr>
							<tr class="tr1">
								<td colspan="2" class="td1" id="start">User Name: </td>
							</tr>
							<tr class="tr1">
								<td colspan="2" class="td2"><input type="text" placeholder="User Name" size="35" name="user_employer" class="inputs"></td>
							</tr>
							<tr class="tr1">
								<td colspan="2" class="td1" >Password: </td>
							</tr>
							<tr class="tr1">
								<td colspan="2" class="td2"><input type="password" placeholder="Password" size="35" class="inputs" name="pass_employer"></td>
							</tr>
							<tr class="tr1">
								<td class="forgot-pass"><a href="#" style="text-decoration:none; color:#333; text-shadow: 0px 1px #FFF;">Forgot Password?</td>
								<td class="pull-right forgot-pass"><a href="employerSignUp.php" style="text-decoration: none; color:#333; text-shadow: 0px 1px #FFF;">Sign Up</td>
							</tr>
							<tr class="tr1">
								<td colspan="2" class="text-center" style="padding-bottom:20px; padding-top:20px"><input  name="submit_but_employer" type="submit" value="Submit" class=sub-but></a></td>
							</tr>
						</table></center>
					</form>
				</div>
				<div class="col-md-3">
				</div>
			</div>
		</section>

	</body>
</html>