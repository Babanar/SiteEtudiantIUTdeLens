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
class Participant_conversation extends Table {
    public $idEtudiant;
    public $idConversation;
    public $vu;
    
    function __construct($idEtudiant="", $idConversation="", $vu="") {
     
        parent::__construct();
        $this->idEtudiant=$idEtudiant;
        $this->idConversation=$idConversation;
        $this->vu=$vu;
    }

}
