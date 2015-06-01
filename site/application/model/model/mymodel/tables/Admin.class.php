<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of mps
 *
 * @author Mathieu
 */
class Admin extends Table {
    public $identifiant;
    public $mdp;
    
    function __construct($identifiant="", $mdp="") {
     
        parent::__construct();
        $this->identifiant=$identifiant;
        $this->mdp=$mdp;

    }

}
