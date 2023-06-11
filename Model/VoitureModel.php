<?php

require("Model/Model.php");

class VoitureModel{

    private $immatriculation;
    private $marque;
    private $kilometrage;

    public function __construct($immatriculation='',$marque ='',$kilometrage=0)
    {
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->kilometrage = $kilometrage;
    }

    public static function getAllVoitures(){
        $stm = Model::execRequete("select * from voiture");
        $tbl = $stm->fetchAll(PDO::FETCH_OBJ);

        return $tbl;
    } 

    public function ajouter(){
        $flag = Model::execRequete("insert into voiture values(:imm, :marque, :kilo)",
        [
            ":imm" => $this->immatriculation,
            ":marque" => $this->marque,
            ":kilo" => $this->kilometrage,
        ]
        );
        return $flag;
    }
}