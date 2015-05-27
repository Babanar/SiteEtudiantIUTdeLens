<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Connexion extends Controller
{
    public function index()
    {
        Redirect::home();
    }

  
    public function connect(){
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            Redirect::home();
        }
        if(User::connect()){
            $this->view->render('_templates/user/connected.php');
        }else{
            $this->view->render('_templates/user/connexion_inscription.php');
        }
            
    }
    
    public function updateProfil(){
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            Redirect::home();
        } 
        if(User::isLoggedIn()){
            $this->view->render('_templates/user/connected.php');
        }else{
            $this->view->render('_templates/user/connexion_inscription.php');
        }
    } 
    
    public function disconnect(){
        session_destroy();
        Redirect::home();
    }  
}
