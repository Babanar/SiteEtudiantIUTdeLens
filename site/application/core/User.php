<?php

class User{
    
    public static function connect(){
        $salt=filter_input(INPUT_POST,"salt");
        $mdp=filter_input(INPUT_POST,"mdp");
        $mail=filter_input(INPUT_POST,"mail",FILTER_VALIDATE_EMAIL);
        
        $superUtilSql= new Super_UtilSQL();
        $utils = $superUtilSql->findByMail($mail)->execute();
        if(count($utils)<1){
            Session::add('feedback_negative', "Mot de passe ou email incorrect.");
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
                Session::add('feedback_negative', "Mot de passe ou email incorrect.");
                return false;
            }
        }
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