<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of mps
 *
 * @author Mathieu
 */
class News extends Table {
    public $date_post;
    public $titre;
    public $text;
    public $info;
    public $mmi;
    public $gea;
    public $tc;
    public $prof;
    public $entreprise;
    
    function __construct( $date_post="", $titre="", $text="", $info="", $mmi="", $gea="", $tc="", $prof="", $entreprise="") {
        parent::__construct();
        $this->date_post = $date_post;
        $this->titre = $titre;
        $this->text = $text;
        $this->info = $info;
        $this->mmi = $mmi;
        $this->gea = $gea;
        $this->tc = $tc;
        $this->prof = $prof;
        $this->entreprise = $entreprise;
    }


}
