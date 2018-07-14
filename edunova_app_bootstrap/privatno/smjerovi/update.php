<?php include_once "../../configuration.php";
if(!isset($_SESSION[$idAPP."o"])){
	header("location: " . $putanjaAPP . "logout.php");
}


if(!isset($_GET["sifra"]) && !isset($_POST["sifra"])){
  header("location: " . $putanjaAPP . "logout.php");
}



if(isset($_POST["promjeni"])){
  $izraz = $veza->prepare("update smjer set naziv=:naziv,
                          trajanje=:trajanje,cijena=:cijena,upisnina=:upisnina
                          where sifra=:sifra;");
  unset($_POST["promjeni"]);
  $izraz->execute($_POST);
  header("location: index.php");
}else{
  $izraz = $veza->prepare("select * from smjer where sifra=:sifra");
  $izraz->execute($_GET);
  $o=$izraz->fetch(PDO::FETCH_OBJ);
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
				<input type="text" class="form-control" id="naziv" name="naziv" value="<?php echo $o->naziv; ?>" >
			</div>
			<div class="form-group">
				<label for="trajanje">Trajanje</label>
				<input type="number" class="form-control" id="trajanje" name="trajanje" min="1" max="500" value="<?php echo $o->trajanje; ?>" >
			</div>
			<div class="form-group">
				<label for="cijena">Cijena</label>
				<input type="number" class="form-control" id="cijena" name="cijena" min="1" max="10000" step="0.01" value="<?php echo $o->cijena; ?>">
			</div>
			<div class="form-group">
				<label for="upisnina">Upisnina</label>
				<input type="number" class="form-control" id="upisnina" name="upisnina" min="1" max="500" value="<?php echo $o->upisnina; ?>" >
			</div>
			<input type="hidden" name="sifra" value="<?php echo $o->sifra; ?>">
			<input class="btn btn-primary btn-block" type="submit" name="promjeni" value="Promjeni" >
		</form>
	</div>
	<?php include_once "../../template/scripts.php" ?>  

	<?php include_once "../../template/footer.php" ?> 

</body>
</html>