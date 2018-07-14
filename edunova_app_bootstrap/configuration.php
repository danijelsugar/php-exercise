<?php 

    session_start();
    include_once "functions.php";
    
	$nazivApp = "Edunova";
    $idAPP="EdunovaV1moje";

	switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/Edunova07-moje/";
    $bojaIzbornika="style=\"background-color: blue;\"";
    break;
    case "dsugar.byethost16.com":
    $putanjaAPP="/Edunova07-moje/";
    $bojaIzbornika="";
    break;
}

    /* Byet host */
    //$veza = new PDO("mysql:host=sql304.byethost.com;port=3306;dbname=b16_21955356_edunovapp17","b16_21955356","bogibatina13");
    
    /*Local host*/
    $veza = new PDO("mysql:host=localhost;dbname=edunovapp17","edunova","edunova");
    $veza->exec("set names utf8;");
?>