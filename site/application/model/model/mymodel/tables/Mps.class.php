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
class Mps extends Table {
    public $idConversation;
    public $idExpediteur;
    public $message;
    public $date;
    
    function __construct($idConversation="", $idExpediteur="", $message="", $date="") {
     
        parent::__construct();
        $this->idConversation=$idConversation;
        $this->idExpediteur=$idExpediteur;
        $this->message=$message;
        $this->date=$date;
    }
    
    function getDate(){
        $date_tmp = DateTime::createFromFormat("Y-m-d H:i:s", $this->date);
        return $date_tmp->format("d-m-Y H:i:s");
    }
}
