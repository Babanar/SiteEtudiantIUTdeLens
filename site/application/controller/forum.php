<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of forum
 *
 * @author Mathieu
 */
class forum extends Controller{
    private $canAccess;
    public function __construct() {
        parent::__construct();
        if(!User::isLoggedIn()){
            $this->view->render('error/needLogin.php');
            $this->canAccess=false;
            exit;   
        }
        else if(!User::isConfirmed()){
            $this->view->render('error/needConfirmation.php');
            $this->canAccess=false;
            exit;
        }
        else{
            $this->canAccess=true;
            //* tmp en construction
            $this->view->render('error/construction.php');
            exit; //*/
        }
        
        
    }
    public function index()
    {
         $this->view->render('forum/index.php');
    }
    
    public function notification(){
        $this->view->render('error/construction.php');
    }
    
    public function newConv()
    {
         $this->view->render('forum/newConv.php');
    }
    
    public function conversation()
    {
         $this->view->render('forum/conversation.php');
    }
    
    public function newConvI()
    {
         $this->view->render('forum/newConv_index.php');
    }
}
