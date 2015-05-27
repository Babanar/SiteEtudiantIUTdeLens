<?php
class Super_Util extends Table {
    public $idExt;
    public $boolEntreprise;
    public $mail;
    public $mdp_hash;
    public $mailConfirmation;
    public $token;
    protected $exterieur;
    protected $conversations;
    protected $nbConvNonVu;
    
    function __construct($idExt="", $boolEntreprise="", $mail="", $mdp_hash="",$mailConfirmation = "",$token="",$id=false) {
        parent::__construct();
        $this->idExt = $idExt;
        $this->boolEntreprise = $boolEntreprise;
        $this->mail = $mail;
        $this->mdp_hash = $mdp_hash;
        $this->id=$id;
        $this->mailConfirmation=$mailConfirmation;
        $this->token = $token;
       
        $this->exterieur = false;
        $this->conversation = false;
        $this->nbConvNonVu=false;
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
    
    public function getCallName(){
        $this->loadExterieur();
        return $this->exterieur->getCallNamePresentation();

    }
    
    
        
    public function getConversations(){
        if(!$this->conversations && $this->id!==false){
            $utilisateurSQL = new Super_UtilSQL();
            $this->conversations = $utilisateurSQL->getConversations($this->id);
        }
        return $this->conversations;
    }

    public function getNbConvNonVu(){
        if(!$this->nbConvNonVu && $this->id!==false){
            $utilisateurSQL = new Super_UtilSQL();
            $this->nbConvNonVu = $utilisateurSQL->getNbConvNonVu($this->id);
        }
        return $this->nbConvNonVu;
    }
}