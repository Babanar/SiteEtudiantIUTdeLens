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


    }
    
    public function getBirthdate(){
        $date_tmp = DateTime::createFromFormat("Y-m-d", $this->naissance);
        return $date_tmp->format("d/m/Y");
    }
    
    public function getFormation(){
         $first = true;
         $tmp ="";
        if($this->boolTC){
            $first = false;
            $tmp = "TC";
        }
        
        if($this->boolGEA){

            if(!$first){
                $tmp = $tmp.',';
            }
            
            $first = false;
            $tmp = $tmp . "GEA";
        }
        if($this->boolMMI){

            if(!$first){
                $tmp = $tmp.',';
            }
            
            $first = false;
            $tmp = $tmp . "MMI";
        }
        if($this->boolINFO){

            if(!$first){
                $tmp = $tmp.',';
            }
            
            $first = false;
            $tmp = $tmp . "INFO";
        }
        if($this->boolSepia){

            if(!$first){
                $tmp = $tmp.',';
            }
            
            $first = false;
            $tmp = $tmp . "Prof";
        }
        if($this->boolProf){
            if(!$first){
                $tmp = $tmp.',';
            }
            $first = false;
            
            $tmp = $tmp . "Sepia";
        }
        
        return $tmp;
        
    }
    
    public function getCallNamePresentation(){
        return $this->prenom . ' ' . $this->nom;
    }
    
    public function getIdSuper_Util(){
        if(!$this->id){
            return false;
        }
        $superUtilSQL=new Super_UtilSQL();
        $user = $superUtilSQL->findWithCondition("idExt = ? AND boolEntreprise = 0",array($this->id))->execute();
        return $user[0]->getId();
    }


}