<?php
if(!isset($_POST["user"])){
exit;
}
    include_once "configuration.php";

    if($_POST["user"]===""){
        header("location: login.php?poruka=2");
        exit;
    }

    if(($_POST["user"]==="dsugar" && $_POST["password"]==="d")
    ||
    ($_POST["user"]==="edunova" && $_POST["password"]==="e")
    ){
        //pusti dalje
      session_start();
        $_SESSION[$idAPP."o"]= $_POST["user"];
        header("location: privatno/dashboard.php");
    }else{
        header("location: login.php?poruka=1");
    }
