<?php

require("Controller/VoitureController.php");

if(isset($_GET["action"])){
    switch ($_GET["action"]){
        case "ajouter" :
            if(isset($_POST["immatriculation"])
            && isset($_POST["marque"])
            && isset($_POST["kilometrage"])){
                VoitureController::ajouter(
                    $_POST["immatriculation"],
                    $_POST["marque"],
                    $_POST["kilometrage"]
                );
            }
            break;
        case "create":
            VoitureController::create();
            break;
    }

}else{
    VoitureController::getAll();
}