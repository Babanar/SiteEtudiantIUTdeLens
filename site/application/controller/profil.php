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
class profil extends Controller {
    
    public function __construct(){
        parent::__construct();/*
        $this->view->render('error/construction.php');
        exit; **/
        if(!User::isLoggedIn()){
            $this->view->render('error/needLogin.php');
            exit;
        }
    }
    
    public function index()
    {
        $this->view->render('profil/index.php');
    }
    
    public function myprofil_entreprise()
    {
        // load views
        $this->view->render('profil/myprofil_entreprise.php');
    }
    
    public function myprofil_utilisateur()
    {
        // load views
        $this->view->render('profil/myprofil_utilisateur.php');
    }
    
    public function profil_entreprise()
    {
        // load views
        $this->view->render('profil/profil_entreprise.php');
    }
    
    public function profil_utilisateur($id=0)
    {
        // load views
        $usrSQL = new UtilisateursSQL();
        $usr = $usrSQL->findById($id);
        if($usr!==false){
            $this->view->render('profil/profil_utilisateur.php',array('usr'=>$usr));
        }
        else{
            $this->view->render('error/index.php');
        }
    }
    
    public function notification(){
        $this->view->render('error/construction.php');
    }
}
