<?php

require('Model/VoitureModel.php');

class VoitureController{

    public static function getAll(){
        $tab_voitures= VoitureModel::getAllVoitures();
        ob_start();
        require("View/ListeVoitures.php");
        $title = "Liste des voitures";
        $contenue = ob_get_clean();
        require("View/default.php");
    }

    public static function ajouter($imm, $marque, $kilm){
        $obj = new VoitureModel($imm, $marque, $kilm);
        $obj->ajouter();
        header("location:index.php");
    }

    public static function create(){
        ob_start();
        require("View/create.php");
        $title = 'ajout d\'une voiture';
        $contenue = ob_get_clean();
        require("View/default.php");
    }
}