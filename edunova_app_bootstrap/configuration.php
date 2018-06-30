<?php 

	$nazivApp = "Edunova";

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