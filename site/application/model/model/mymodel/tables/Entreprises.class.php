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
    public $secteur;
    public $numSiret;
    
    public function __construct($nom="",$secteur="",$numSiret="",$id=false){
        parent::__construct();
        $this->nom = $nom;
        $this->secteur=$secteur;
        $this->numSiret=$numSiret;
        $this->id = $id;
    }
    
    public function getCallNamePresentation(){
        return $this->nom;
    }
}
