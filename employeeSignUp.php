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
			<form action="register.php" method="POST">
				<div class="container">
					<div class="col-md-3">
					</div>
					<div class="col-md-6 col-xs-12">
						<center><table id="table-employee">
							<tr class="tr1">
									<th class="log-in">Employee</th>
							</tr>
							<tr class="tr1">
								<td class="td1" id="start">User Name: </td>
							</tr>
							<tr class="tr1">
								<td class="td2"><input type="text" placeholder="User Name" size="40" class="inputs" name="user_employee" required></td>
							</tr>
							<tr class="tr1">
								<td class="td1">Password: </td>
							</tr>
							<tr class="tr1">
								<td class="td2"><input type="password" placeholder="Password" size="40" class="inputs" name="pass_employee" required></td>
							</tr>
							<tr class="tr1">
								<td class="td1">Full Name: </td>
							</tr>
							<tr class="tr1">
								<td class="td2"><input type="text" placeholder="Full Name" size="40" class="inputs" name="full_employee" required></td>
							</tr>
							<tr class="tr1">
								<td class="td1">Complete Address: </td>
							</tr>
							<tr class="tr1">
								<td class="td2"><textarea placeholder="Complete Address" cols="40" class="inputs" name="address_employee" required></textarea></td>
							</tr>
							<tr class="tr1">
								<td class="td1">Email Address: </td>
							</tr>
							<tr class="tr1">
								<td class="td2"><input type="text" placeholder="Email Address" size="40" class="inputs" name="emailAdd_employee" required></textarea></td>
							</tr>
							<tr class="tr1">
								<td class="td1">Birthday: </td>
							</tr>
							<tr class="tr1">
								<td class="td2"><input type="date" class="inputs" name="bday_employee" required></textarea></td>
							</tr>
							<tr class="tr1">
								<td class="td1">Phone Number: </td>
							</tr>
							<tr class="tr1">
								<td class="td2"><input type="text" placeholder="Phone Number" size="40" class="inputs" name="num_employee" required></textarea></td>
							</tr>
							<tr class="tr1">
								<td class="td1">Country: </td>
							</tr>
							<tr class="tr1">
								<td class="td2">
									<select name="country_employee" class="inputs" style="padding:10px; padding-left:30px; padding-right:30px">
										<option>Country</option>
										<option>Country</option>
										<option>Country</option>
									</select>
								</td>
							</tr>
							<tr class="tr1">
								<td class="text-center" style="padding-bottom:20px; padding-top:20px"><input type="submit" value="Submit" name="submit_employee" class=sub-but></td>
							</tr>
						</table></center>
					</div>
					<div class="col-md-3">
					</div>
				</div>
			</form>
		</section>

	</body>
</html>