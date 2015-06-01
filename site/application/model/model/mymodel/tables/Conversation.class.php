<?php

class Conversation extends Table {
    public $titre;
    public $dateCreation;
    protected $participants;

    function __construct($titre="",$dateCreation="",$id=false){
        parent::__construct();
        $this->titre = $titre;
        $this->dateCreation = $dateCreation;
        $this->id = $id;
        $this->messages = false;
        $this->participants;

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
    
            
    public function getParticipants(){
        if(!$this->participants && $this->id!==false){
            $conversationSQL = new ConversationSQL();
            $this->participants = $conversationSQL->getParticipants($this->id);
        }
        return $this->participants;
    }
    public function notifyParticipants(){
        $participants = $this->getParticipants();
        $convSQL = new ConversationSQL();
        foreach($participants as $p){
            $convSQL->setAsSeen($p->getId(), $this->id, false);
        }
        $this->setAsSeen();
    }
    public function setAsSeen($id_conv=false){
        if(!$id_conv){
            $id_conv=Session::get('id_utilisateur');
        }
            $conversationSQL = new ConversationSQL();
            $conversationSQL->setAsSeen($id_conv, $this->id);       
    }
    
    public function isSeen($id_conv=false){
        if(!$id_conv){
            $id_conv=Session::get('id_utilisateur');
        }             
        $conversationSQL = new ConversationSQL();
        $conversationSQL->setAsSeen($id_conv, $this->id);

    }
        
    public function addParticipant($id){
        $participant = new Participant_conversation($id,$this->id,false);
        $participant->saveLink();
    }    
}
