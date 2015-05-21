<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Message extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    
    public function __construct(){
        parent::__construct();
        if(!User::isLoggedIn()){
            $this->view->render('error/needLogin.php');
        }
    }
    public function index()
    {
        if(!User::isLoggedIn())
            return;
        $userSQL = new Super_UtilSQL();
        $user = $userSQL->findById(Session::get("id_utilisateur"));
        $conversations = $user->getConversations();
        // load views
        $this->view->render('message/index.php',array(
            'conversations' => $conversations
               ));
    }
	public function conversation()
    {
        if(!User::isLoggedIn())
            return;
        // load views
        $this->view->render('message/conversation.php');
    }
	public function newconv()
    {
        if(!User::isLoggedIn())
            return;
        // load views
        $this->view->render('message/newconv.php');
    }
	
	


}
