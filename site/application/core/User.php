<?php

class User{
    
    public static function connect(){
        $salt=filter_input(INPUT_POST,"salt");
        $mdp=filter_input(INPUT_POST,"mdp");
        $mail=filter_input(INPUT_POST,"mail",FILTER_VALIDATE_EMAIL);
        
        $superUtilSql= new Super_UtilSQL();
        $utils = $superUtilSql->findByMail($mail)->execute();
        if(count($utils)<1){
            Session::add('connexion_feedback_negative', "Mot de passe ou email incorrect.");
            return false;
        }
        else{
            $utils = $utils[0];
            $mdp_hash = $utils->mdp_hash;
            if(sha1($mdp_hash.(string)$salt)==$mdp){
                User::stockUserInSession($utils);
                return true;
            }
            else{
                Session::add('connexion_feedback_negative', "Mot de passe ou email incorrect.");
                return false;
            }
        }
    }
    
    public static function inscription(){
        $valid = true;
        
        //MAIL
        if (!($email=filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))) {
            $valid = false;
            Session::add('inscription_feedback_negative', "Adresse mail incorrecte.");
        }
        
        //MDP
        $password="";
        if(isset($_POST['password'])&&strlen($_POST['password'])>8){
            $password=sha1($_POST['password']);
        }else{
            $valid = false;
            Session::add('inscription_feedback_negative', "Mot de passe trop court (8 caractères minimum)"); 
        }
        
        //BOOL ENTREPRISE
        if(is_null($entreprise=filter_input(INPUT_POST, 'entreprise', FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE))){
            $valid = false;
        }
        
        //ACCEPT RULES
        if(!($accept=filter_input(INPUT_POST, 'accept', FILTER_VALIDATE_BOOLEAN))){
            $valid = false;
            Session::add('inscription_feedback_negative', "Vous devez accepter les règles d'utilisation."); 
        }
        if($valid){
            $ext = -1;
            if($entreprise){
                $ext = User::inscriptionEntreprise();
            }else{
                $ext = User::inscriptionUtilisateur();
            }
            
            if($ext>0){
                $user = new Super_Util($ext,$entreprise,$email,$password);
                $user->save();
            }
            else{
                $valid=false;
            }
        }
        
        return $valid;
    }
        
    private static function inscriptionUtilisateur(){
        $valid = true;
        if (!($nom=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS))
            || strlen($nom)<8){
            $valid = false;
            Session::add('inscription_feedback_negative', "Nom trop court (8 caractères minimum).");
            echo "ok2";
        }else{
            echo "ok";
        }
        return -1;
    }
    private static function inscriptionEntreprise(){
        return -1;        
    }

    private static function stockUserInSession($user){
        Session::set('user_logged_in',true);
        Session::set('callName',$user->getCallNamePresentation());
    }
    /**
     * Checks if the user is logged in or not
     *
     * @return bool user's login status
     */
    public static function isLoggedIn()
    {
        return (Session::get('user_logged_in') ? true : false);
    }
    
}