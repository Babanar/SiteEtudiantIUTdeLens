<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Inscription extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            require APP . 'view/_templates/header.php';
        }
        require APP . 'view/inscription/index.php';
        if (!$ajax) {
            require APP . 'view/_templates/footer.php';
        }
    }
    public function entreprise()
    {
        // load views
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            require APP . 'view/_templates/header.php';
        }
        require APP . 'view/inscription/entreprise.php';
        if (!$ajax) {
            require APP . 'view/_templates/footer.php';
        }
    }
    public function utilisateur()
    {
        // load views
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            require APP . 'view/_templates/header.php';
        }
        require APP . 'view/inscription/utilisateur.php';
        if (!$ajax) {
            require APP . 'view/_templates/footer.php';
        }
    }
    
    public function test(){
        $salt=filter_input(INPUT_POST,"salt");
        $mdp=filter_input(INPUT_POST,"mdp");
        $mail=filter_input(INPUT_POST,"mail",FILTER_VALIDATE_EMAIL);
        
        $superUtilSql= new Super_UtilSQL();
        $utils = $superUtilSql->findByMail($mail)->execute();
        if(count($utils)<1){
            //NO USER FOR THIS MAIL
        }
        else{
            $utils = $utils[0];
            $mdp_hash = $utils->mdp_hash;
            if(sha1($mdp_hash.(string)$salt)==$mdp){
                //OK
            }
            else{
                //BAD PASSWORD

            }
        }
            
    }
}
