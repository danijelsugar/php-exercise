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


?>