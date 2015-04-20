<?php
class Super_Util extends Table {
    public $idExt;
    public $boolEntreprise;
    public $mail;
    public $mdp_hash;
    public $salt_seed;
    protected $exterieur;
    
    function __construct($idExt="", $boolEntreprise="", $mail="", $mdp_hash="", $salt_seed="",$id=false) {
        parent::__construct();
        $this->idExt = $idExt;
        $this->boolEntreprise = $boolEntreprise;
        $this->mail = $mail;
        $this->mdp_hash = $mdp_hash;
        $this->salt_seed = $salt_seed;
        $this->id=$id;
    }

    
    public function getEntreprise(){

    }
       
    public function getUtilisateur(){

    }
}