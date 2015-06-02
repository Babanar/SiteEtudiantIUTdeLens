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
	public function conversation($id=false)
    {
        if(!User::isLoggedIn())
            return;
        

        // load views
        $convSQL = new ConversationSQL();
        $conversation = $convSQL->findById($id);
        if(!$conversation || !$id || !User::isInConversation($id)){
            $this->view->render('error/index.php');
        }else{  
                $conversation->setAsSeen();
                $this->view->render('message/conversation.php',array("conversation"=>$conversation));
            
        }
    }
	public function newconv()
    {
        if(!User::isLoggedIn())
            return;
        // load views
        $this->view->render('message/newconv.php');
    }
	
    public function sendmsg(){
        if(!User::isLoggedIn())
            return;
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            
            $this->view->render('error/index.php');
        }
        $text = isset($_POST['text'])?nl2br(htmlentities($_POST['text'])):"";
        $id_conv = filter_input(INPUT_POST, 'conversation', FILTER_SANITIZE_NUMBER_INT);
        if(!User::isInConversation($id_conv)){
            $this->view->render('error/index.php');
       }else{
            $mp = new Mps($id_conv,Session::get('id_utilisateur'),$text);
            $mp->save();
            $convSQL = new ConversationSQL();
            $conversation = $convSQL->findById($id_conv);
            $conversation->notifyParticipants();
            $this->view->render('message/conversation.php',array("conversation"=>$conversation));
        }
    }

    public function sendconv(){
        if(!User::isLoggedIn())
            return;
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            
            $this->view->render('error/index.php');
        }
        $members = filter_input(INPUT_POST,"membres_conv",FILTER_SANITIZE_STRING);
        $title = filter_input(INPUT_POST,"objet_conv",FILTER_SANITIZE_SPECIAL_CHARS);
        $members = explode(";",$members);
        $conv = new Conversation($title,date("Y-m-d  H:i:s"));
        $conv->save();
        $memberSQL = new Super_UtilSQL();
        foreach($members as $m){
            if($memberSQL->findById($m)!=null){
                $conv->addParticipant($m);
            }
        }
        $conv->addParticipant(Session::get('id_utilisateur'));
        $this->conversation($conv->getId());
    }

}
