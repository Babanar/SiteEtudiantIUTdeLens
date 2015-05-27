<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MesagesForum
 *
 * @author Mathieu
 */
class MesagesForum extends Table {
    public $IDAuteur;
    public $datetime;
    public $contenu;
    
    public function __construct($IDAuteur="",$datetime="",$contenu="",$id=false) {
        parent::__construct();
        $this->IDAuteur=$IDAuteur;
        $this->datetime=$datetime;
        $this->contenu=$contenu;
        $this->id=$id;
        
    }
    
}
