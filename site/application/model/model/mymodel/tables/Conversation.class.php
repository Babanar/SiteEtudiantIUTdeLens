<?php

function cmp_Conversation($a,$b){
    return 0;
}

class Conversation extends Table {
    public $titre;
    protected $messages;

    function __construct($titre="",$id=false){
        parent::__construct();
        $this->titre = $titre;
        $this->id = $id;
        $this->messages = false;

    }
    
    function getMessages(){
        if(!$this->messages){
            $mps = new MpsSQl();
            $this->messages = $mps->findByIdConversation($this->id)->orderBy("date");
        }
        return $this->messages;
    }
    
}
