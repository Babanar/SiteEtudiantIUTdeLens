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
       
        $this->exterieur = false;
    }

    private function loadExterieur(){
        if($this->exterieur!=false)
            return;
        if($this->boolEntreprise){
            $tmp=new EntreprisesSQL();
        }else{
            $tmp=new UtilisateursSQL();
        }
        $this->exterieur=$tmp->findById($this->idExt);
    }
    
    public function getEntreprise(){
        if (!$this->boolEntreprise) {
            return false;
        }
        $this->loadExterieur();
        return $this->exterieur;
    }
       
    public function getUtilisateur(){
        
        if ($this->boolEntreprise) {
            return false;
        }
        $this->loadExterieur();
        return $this->exterieur;
    }
    
    public function getCallNamePresentation(){
        $this->loadExterieur();
        return $this->exterieur->getCallNamePresentation();

    }
}