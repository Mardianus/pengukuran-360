<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login System Pengukuran</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<div style="margin:20% 0px;"></div>
			<form action="<?=base_url('Login/Proses/');?>" method="post">
				<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="text-center text-uppercase">Login user</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="text-uppercase">username :</label>
						<input type="text" name="uname" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label class="text-uppercase">Password :</label>
						<input type="Password" name="pwd" class="form-control" required="">
					</div>
				</div>
				<div class="panel-footer">
					<button class="btn btn-default btn-primary" type="submit">Login</button>
				</div>
			</div>
			</form>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
	</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>