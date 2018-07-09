<?php include_once "configuration.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include_once "template/head.php" ?>
</head>
<body>
	<?php include_once "template/heading.php" ?>
	<?php include_once "template/navbar.php" ?>
	<div class="container">
		<form class="form-horizontal" role="form" method="POST" action="authorize.php">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h1>Please Login</h1>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="form-group has-danger">
						<label class="sr-only" for="user">E-Mail Address</label>
						<div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<input type="text" name="user" class="form-control" id="user"
							placeholder="dsugar" >
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="sr-only" for="password">Password</label>
						<div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<input type="password" name="password" class="form-control" id="password"
							placeholder="d" >
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="padding-top: 1rem">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-success">Login</button>
				</div>
			</div>
		</form>
	</div>
	<div class="container text-center">
		<span class="text-danger align-middle">
			<?php

			if(isset($_GET["poruka"])){
				switch($_GET["poruka"]){
					case "1":
					echo "Wrong user-name or password!";
					break;
					case "2":
					echo "Enter the user-name and password";
					break;
					default: 
					echo "";
					break;
				}
			}

			?>
		</span>
	</div>
	<?php include_once "template/scripts.php" ?>
	<?php include_once "template/footer.php" ?>
</body>
</html>