<?php 

if(isset($_POST["user"])){

    if($_POST["user"]===""){
            header("location: login.php?poruka=2");
            exit;
    }
    
    if($_POST["user"]==="edunova" && $_POST["password"]==="e"){
        //pusti dalje
        session_start();
        $_SESSION["autoriziran"]="Edunova - " . $_POST["korisnik"];
        header("location: nadzornaPloca.php");

    }else{
        header("location: login.php?poruka=1");
    }
}

?>