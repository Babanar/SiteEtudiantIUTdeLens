<?php

class conversation extends Table {
    public $titre;

    function __construct($titre,$id=false){
        parent::__construct();
        $this->titre = $titre;
        $this->id = $id;

    }
    
}
