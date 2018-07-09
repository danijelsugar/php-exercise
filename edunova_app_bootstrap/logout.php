<?php 
include_once "configuration.php" ;
unset($_SESSION[$idAPP."o"]);
header("location: index.php");
