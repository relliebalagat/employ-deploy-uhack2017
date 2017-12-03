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
		<?php
			session_start();
		?>
		<section>
			<nav class="navbar">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand job-finder" href="#" id="head">Employ&Deploy</a>
			    </div>
			    <ul class="nav navbar-nav navbar-right pull-right">
			      <li><a href="#" style="text-decoration:none"><i class="fa fa-question-circle-o job-finder" aria-hidden="false" id="search-ic"></i></a></li>
			    </ul>
			  </div>
			</nav>
		</section>

		<section class="pick-form">
			<div class="container">
				<div class="col-md-3">
				</div>
				<div class="col-md-6 col-xs-12">
					<center><table id="table-land" class="text-center">
						<tr>
							<td colspan="2" class="log-in">Log In</td>
						</tr>
						<tr style="background-color:rgba(1,1,1,0.2)">
							<td class="but-emp"><a href="employee.php" style="text-decoration: none; color:#333"><button class="but-employ">Employee<i class="fa fa-id-badge" aria-hidden="false"></i></button></a></td>
							<td class="but-emp"><a href="employer.php" style="text-decoration: none; color:#333"><button class="but-employ">Employer<i class="fa fa-id-card-o" aria-hidden="false"></i></button></a></td>
						</tr>
					</table></center>
				</div>
				<div class="col-md-3">
				</div>
			</div>
		</section>

	</body>
</html>