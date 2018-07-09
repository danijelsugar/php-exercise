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
	<div class="container">
        Dashboard
    </div>
    <?php include_once "../template/scripts.php" ?>  

    <?php include_once "../template/footer.php" ?> 

</body>
</html>