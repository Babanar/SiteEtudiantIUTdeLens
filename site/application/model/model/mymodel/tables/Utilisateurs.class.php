<?php

class Utilisateurs extends Table {
    public $idExt;
    public $nom;
    public $prenom;
    public $pays;
    public $ville;
    public $naissance;
    public $profession_ou_etudes_actuelle;
    public $profession_ou_etudes_anterieure;
    public $photo;
    public $boolSepia;

    function __construct($idExt="", $nom="", $prenom="", $pays="",
                         $ville="", $naissance="", $profession_ou_etudes_actuelle="",
                         $profession_ou_etudes_anterieure="", $photo="", $boolSepia="",$id=false){
        parent::__construct();
        $this->idExt = $idExt;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->pays = $pays;
        $this->ville = $ville;
        $this->naissance = $naissance;
        $this->profession_ou_etudes_actuelle = $profession_ou_etudes_actuelle;
        $this->profession_ou_etudes_anterieure = $profession_ou_etudes_anterieure;
        $this->photo = $photo;
        $this->boolSepia = $boolSepia; 
        $this->id = $id;

    }
    
    public function getCallNamePresentation(){
        return $this->prenom . ' ' . $this->nom;
    }


}