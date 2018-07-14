<?php include_once "../../configuration.php";
if(!isset($_SESSION[$idAPP."o"])){
	header("location: " . $putanjaAPP . "logout.php");
}

if(isset($_POST["dodaj"])){
	$izraz = $veza->prepare("insert into smjer (naziv,trajanje,cijena,upisnina) values 
		(:naziv,:trajanje,:cijena,:upisnina)");
	unset($_POST["dodaj"]);
	$izraz->execute($_POST);
	header("location: index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<?php include_once "../../template/head.php" ?>
</head>
<body>
	
	<?php include_once "../../template/heading.php" ?>

	<?php include_once "../../template/navbar.php" ?>
	
	<div class="container">
		<form class="text-center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
			<div class="form-group">
				<label for="smjer">Naziv smjera</label>
				<input type="text" class="form-control" id="naziv" name="naziv" >
			</div>
			<div class="form-group">
				<label for="trajanje">Trajanje</label>
				<input type="number" class="form-control" id="trajanje" name="trajanje" min="1" max="500" >
			</div>
			<div class="form-group">
				<label for="cijena">Cijena</label>
				<input type="number" class="form-control" id="cijena" name="cijena" min="1" max="10000" step="0.01">
			</div>
			<div class="form-group">
				<label for="upisnina">Upisnina</label>
				<input type="number" class="form-control" id="upisnina" name="upisnina" min="1" max="500" >
			</div>
			
			<input class="btn btn-primary btn-block" type="submit" name="dodaj" value="Dodaj smjer" >
		</form>
	</div>
	<?php include_once "../../template/scripts.php" ?>  

	<?php include_once "../../template/footer.php" ?> 

</body>
</html>