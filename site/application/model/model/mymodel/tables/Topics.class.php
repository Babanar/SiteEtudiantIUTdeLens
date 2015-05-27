<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Topics
 *
 * @author Mathieu
 */
class Topics extends Table {
    public $titre;
    public $IDAuteur;
    public $datetime;
    
    public function __construct($titre="",$IDAuteur="",$datetime="",$id=false) {
        parent::__construct();
        $this->titre=$titre;
        $this->IDAuteur=$IDAuteur;
        $this->datetime=$datetime;
        $this->id=$id;
        
        
    }
}
