<?php include_once "../configuration.php";
if(!isset($_SESSION[$idAPP."o"])){
	header("location: " . $putanjaAPP . "logout.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<?php include_once "../template/head.php" ?>
</head>
<body>
	
	<?php include_once "../template/heading.php" ?>

	<?php include_once "../template/navbar.php" ?>
	<?php 
		//$veza = new PDO("mysql:host=localhost;dbname=edunovapp17","edunova","edunova");
		$veza = new PDO("mysql:host=sql304.byethost.com;port=3306;dbname=b16_21955356_edunovapp17","b16_21955356","bogibatina13");
		$izraz = $veza->prepare("select * from smjer");
		$izraz->execute();
		$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
	?>
	<div class="container">
		<div class="row">
			<div class="col lg 6">
				<?php l($rezultati); ?>
			</div>
			<div class="col lg 6">
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>Šifra</th>
							<th>Naziv</th>
							<th>Trajanje</th>
							<th>Cijena</th>
							<th>Upisnina</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($rezultati as $red): ?>
						<tr>
							<td><?php echo $red->sifra; ?></td>
							<td><?php echo $red->naziv; ?></td>
							<td><?php echo $red->trajanje; ?></td>
							<td><?php echo $red->cijena; ?></td>
							<td><?php echo $red->upisnina; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<?php include_once "../template/scripts.php" ?>  

	<?php include_once "../template/footer.php" ?> 

</body>
</html>