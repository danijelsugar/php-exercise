<?php include_once "../../configuration.php";
if(!isset($_SESSION[$idAPP."o"])){
	header("location: " . $putanjaAPP . "logout.php");
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

	<?php 
	$izraz = $veza->prepare("

		select a.sifra,a.naziv,a.cijena,
		a.upisnina, a.trajanje, count(b.sifra) as smjerova
		from smjer a left join grupa b
		on a.sifra=b.smjer group by a.sifra,a.naziv,a.cijena,
		a.upisnina, a.trajanje
		
		") ;
	$izraz->execute();
	$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
	?>
	<div class="container">
		<a href="new.php" class="btn btn-success btn-block">Dodaj novi smjer</a>
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-striped">
					<thead class="thead-dark">
						<th>Naziv</th>
						<th>Trajanje</th>
						<th>Cijena</th>
						<th>Upisnina</th>
						<th>Akcija</th>
					</thead>
					<tbody>
						<?php foreach($rezultati as $red): ?>
							<tr>
								<td><?php echo $red->naziv; ?></td>
								<td><?php echo $red->trajanje; ?></td>
								<td><?php echo $red->cijena; ?></td>
								<td><?php echo $red->upisnina; ?></td>
								<td>
									<a href="update.php?sifra=<?php echo $red->sifra; ?>">
										<i class="fas fa-edit fa-2x"></i>
									</a>
									<?php if($red->smjerova==0): ?>
										<a onclick="return confirm('Sigurno obrisati <?php $red->naziv; ?>')" href="delete.php?sifra=<?php echo $red->sifra; ?>">
											<i class="fas fa-trash fa-2x"></i>
										</a>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php include_once "../../template/scripts.php" ?>  

	<?php include_once "../../template/footer.php" ?> 

</body>
</html>