<?php

$nazivAPP="Edunova V1";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/Edunova07/";
    $bojaIzbornika="style=\"background-color: blue;\"";
    break;
    case "dsugar.byethost16.com":
    $putanjaAPP="/Edunova07/";
    $bojaIzbornika="";
    break;
}



