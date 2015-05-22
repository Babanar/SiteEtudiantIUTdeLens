<?php

function cmp_Conversation($a,$b){
    $dateA = DateTime::createFromFormat("d-m-Y H:i:s", $a->getLastDate());
    $dateB = DateTime::createFromFormat("d-m-Y H:i:s", $b->getLastDate());
    if ($dateA < $dateB) {
        return 1;
    }else if($dateB < $dateA){
        return -1;
    }else{
        return 0;
    }
}

class Conversation extends Table {
    public $titre;
    public $dateCreation;
    protected $mtitre;
    public $titreessages;

    function __construct($titre="",$dateCreation="",$id=false){
        parent::__construct();
        $this->titre = $titre;
        $this->dateCreation = $dateCreation;
        $this->id = $id;
        $this->messages = false;

    }
    
    function getMPs(){
        if(!$this->messages){
            $mps = new MpsSQL();
            $this->messages = $mps->findByIdConversation($this->id)->orderBy("date desc")->execute();
        }
        return $this->messages;
    }
    
    function getLastMP(){
        
        if($this->getMPs()!=false && sizeof($this->messages)>0){
            return $this->messages[0];
        }
        return false;
    }
    
    function getLastDate(){
        $msg = $this->getLastMP();
        if(!$msg){
            $date_tmp = DateTime::createFromFormat("Y-m-d H:i:s", $this->dateCreation);
            return $date_tmp->format("d-m-Y H:i:s");
            
        }
        return $msg->getDate();
    }
    
    function getLastMessage(){
        $msg = $this->getLastMP();
        if(!$msg){
            return "Aucun message n'a encore été posté sur cette conversation.";
            
        }
        return $msg->message;      
    }
    
}
