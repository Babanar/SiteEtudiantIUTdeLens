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
    public $idNews;
    public $info;
    public $mmi;
    public $gea;
    public $tc;
    public $prof;
    public $entreprise;
    
    function __construct( $dateEvenement="", $description="", $idNews="", $info="", $mmi="", $gea="", $tc="", $prof="", $entreprise="") {
       parent::__construct();
        $this->dateEvenement = $dateEvenement;
        $this->description = $description;
        $this->idNews = $idNews;
        $this->info = $info;
        $this->mmi = $mmi;
        $this->gea = $gea;
        $this->tc = $tc;
        $this->prof = $prof;
        $this->entreprise = $entreprise;
    }


}
