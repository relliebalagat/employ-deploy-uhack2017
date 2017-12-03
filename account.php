<!DOCTYPE html>
<html lang="en">
	<head>
		<title> UHack </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/js/bootstrap.min.js">
		<script src="jquery-3.2.1.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans" rel="stylesheet">

		<script>
			$(function(){
				$('#myModal').hide();
				$('#myModal').click(function(){
					$('#myModal').show();
				});
			})
		</script>
	</head>

	<body>
		<div class="container">
			<div class="col-md-3">
			</div>	
			<div class="col-md-6 col-xs-12">
				<img src="Images/admin.png" class="img-responsive img-circle" id="img-user">

				<?php
					include_once 'login.php';
				?>

				<div class="panel" id="user-info">
					<div class="panel panel-default text-center">
						<div class="panel-heading text-center" id="acc-prof">Account Profile
						</div>
						<div class="panel-body body-prof"><?php echo $_SESSION['username'];  ?></div>
						<div class="panel-body body-prof"><?php echo $_SESSION['full_name'];  ?></div>
						<div class="panel-body body-prof"><?php echo $_SESSION['address']; ?></div>
						<div class="panel-body body-prof"><?php echo $_SESSION['email_add']; ?></div>
						<div class="panel-body body-prof"><?php echo $_SESSION['phone_no']; ?></div>
						<div class="panel-body body-prof">
							<a href="index.php" style="text-decoration: none; color:#333"><span class="pull-left"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out </span></a><span class="pull-right"><a href="#myModal" data-toggle="modal"><a href="#myModal" data-toggle="modal">Edit <i class="fa fa-cog fa-spin fa-1x fa-fw"></i><span class="sr-only">Loading...</span></a>
						</div>
					</div>
				<div class="col-md-3">
				</div>
			</div>
		</div>

		<div class="container-fluid">
				<table class="text-center" id="table-account">
					<tr>
						<td class="td-t3"><a href="account.php" style="text-decoration:none; color:#333"><i class="fa fa-user-o" aria-hidden="false"></i></a></td>
						<td class="td-t3"><a href="mainModule.php" style="text-decoration:none; color:#333"><i class="fa fa-home" aria-hidden="true"></i></a></td>
						<td class="td-t3"><i class="fa fa-handshake-o" aria-hidden="false"></i></td>
					</tr>
				</table>
		</div>
		<div id="myModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Confirmation</h4>
					</div>
					<div class="modal-body">
						<p>Do you want to save changes you made to document before closing?</p>
						<p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>