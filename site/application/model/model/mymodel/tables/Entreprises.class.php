<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EntreprisesSQL
 *
 * @author Pablo Behague
 */
class Entreprises extends Table {
    public $nom;
    public $secteurAct;
    public $numSiret;
    public $adresse;
    public $compAddr1;
    public $compAddr2;
    public $CP;
    public $ville;
    public $pays;
    public $tel;
    
    public function __construct($nom="",$secteurAct="",$numSiret="",$adresse="",
                                $compAddr1="",$compAddr2="",$CP="",$ville="", 
                                $pays="", $tel="", $id=false){
        parent::__construct();
        $this->nom = $nom;
        $this->$secteurAct=$secteurAct;
        $this->numSiret=$numSiret;
        $this->adresse = $adresse;
        $this->compAddr1 = $compAddr1;
        $this->compAddr2 = $compAddr2;
        $this->CP = $CP;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->tel = $tel;
        $this->id = $id;
    }
    
    public function getCallNamePresentation(){
        return $this->nom;
    }
}
