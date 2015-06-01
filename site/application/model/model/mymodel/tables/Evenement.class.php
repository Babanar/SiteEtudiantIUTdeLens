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
class Evenement extends Table {
    public $dateEvenement;
    public $description;
    public $id_news;
    public $info;
    public $mmi;
    public $gea;
    public $tc;
    public $prof;
    public $entreprise;
    
    function __construct( $dateEvenement="", $description="", $id_news="", $info="", $mmi="", $gea="", $tc="", $prof="", $entreprise="") {
       parent::__construct();
        $this->dateEvenement = $dateEvenement;
        $this->description = $description;
        $this->id_news = $id_news;
        $this->info = $info;
        $this->mmi = $mmi;
        $this->gea = $gea;
        $this->tc = $tc;
        $this->prof = $prof;
        $this->entreprise = $entreprise;
    }


}
