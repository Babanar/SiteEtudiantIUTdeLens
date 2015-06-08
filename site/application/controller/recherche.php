<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of profil
 *
 * @author Mathieu
 */
class recherche extends Controller {
    public function index(){
        
    }
    public function test(){
        $this->view->render('recherche/input_recherche.php');
    }
    public function result(){
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            $this->view->render('error/index.php');
            exit;
        }
        if(!User::isLoggedIn()){
            ?>
    <div class="row resultat_recherche_block">
        <div class="col-md-12">
           <div class="row text-left row_search_result">
               Vous devez être connecté...
           </div>
        </div>     
    </div>
            <?php
            exit;
            
        }
        $requete = filter_input(INPUT_POST, 'recheche_sujet',FILTER_SANITIZE_STRING);
        $usrs = User::search($requete);
        $this->view->render('recherche/result_user.php',array('usr'=>$usrs));
    }
}
