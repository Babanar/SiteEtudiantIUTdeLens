<?php

class Utilisateurs extends Table {
    public $nom;
    public $prenom;
    public $adresse;
    public $compAddr1;
    public $compAddr2;
    public $CP;
    public $ville;
    public $pays;
    public $tel;
    public $naissance;
    public $profession_ou_etudes_actuelle;
    public $profession_ou_etudes_anterieure;
    public $boolTC;
    public $boolGEA;
    public $boolMMI;
    public $boolINFO;
    public $boolSepia;
    public $boolProf;
    public $entree;
    public $sortie;
    public $photo;
    protected $conversations;
    protected $nbConvNonVu;

    function __construct($nom="", $prenom="" ,$adresse="",
                            $compAddr1="", $compAddr2="",$CP="",$ville="",
                            $pays="",$tel="", $naissance="", 
                            $profession_ou_etudes_actuelle="",
                            $profession_ou_etudes_anterieure="", 
                            $boolTC="", $boolGEA="", $boolMMI="", $boolINFO="", 
                            $boolSepia="", $boolProf="",$entree="",$sortie="", $photo="",$id=false){
        parent::__construct();
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->compAddr1 = $compAddr1;
        $this->compAddr2 = $compAddr2;
        $this->CP = $CP;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->tel=$tel;
        $this->naissance = $naissance;
        $this->profession_ou_etudes_actuelle = $profession_ou_etudes_actuelle;
        $this->profession_ou_etudes_anterieure = $profession_ou_etudes_anterieure;
        $this->boolTC = $boolTC;    
        $this->boolGEA = $boolGEA;
        $this->boolMMI = $boolMMI;
        $this->boolINFO = $boolINFO;
        $this->boolSepia = $boolSepia;
        $this->boolProf = $boolProf;
        $this->entree = $entree;
        $this->sortie = $sortie;
        $this->photo = $photo; 
        $this->id = $id;
        $this->conversation = false;
        $this->nbConvNonVu=false;

    }
    
    public function getCallNamePresentation(){
        return $this->prenom . ' ' . $this->nom;
    }
    
    public function getConversations(){
        if(!$this->conversations && $this->id!==false){
            $utilisateurSQL = new UtilisateursSQL();
            $this->conversations = $utilisateurSQL->getConversations($this->id);
        }
        return $this->conversations;
    }

    public function getNbConvNonVu(){
        if(!$this->nbConvNonVu && $this->id!==false){
            $utilisateurSQL = new UtilisateursSQL();
            $this->nbConvNonVu = $utilisateurSQL->getNbConversationsNonVu($this->id);
        }
        return $this->nbConvNonVu;
    }

}