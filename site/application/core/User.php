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
        
        $supUser = new Super_UtilSQL();
        $utils = $supUser->findByMail($email)->execute();
        if(count($utils)>0){
            $valid = false;
            Session::add('inscription_feedback_negative', "Adresse mail déjà utilisée.");
        }
        
        //MDP
        $password="";
        if(isset($_POST['password'])&&strlen($_POST['password'])>8){
            $password=sha1($_POST['password']+$email);
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
                $ext = self::inscriptionEntreprise();
            }else{
                $ext = self::inscriptionUtilisateur();
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
        if (!($nom=filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS))
                || strlen($nom)===0){
            $valid = false;
            Session::add('inscription_feedback_negative', "Le nom est obligatoire.");
        }
        if (!($prenom=filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS))
                || strlen($nom)===0){
            $valid = false;
            Session::add('inscription_feedback_negative', "Le prénom est obligatoire.");
        }
        if (!($birthdate=DateTime::createFromFormat('d/m/Y',$_POST['birthdate']))){
            $valid = false;
            Session::add('inscription_feedback_negative', "La date de naissance n'est pas au bon format (jj/mm/aaaa).");
        }
        
        
        
        $profact = filter_input(INPUT_POST, 'profact', FILTER_SANITIZE_SPECIAL_CHARS);
        $profant = filter_input(INPUT_POST, 'profant', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $TCCheck=filter_input(INPUT_POST, 'TCCheck', FILTER_VALIDATE_BOOLEAN);
        $GEACheck=filter_input(INPUT_POST, 'GEACheck', FILTER_VALIDATE_BOOLEAN);
        $MMICheck=filter_input(INPUT_POST, 'MMICheck', FILTER_VALIDATE_BOOLEAN);
        $INFOCheck=filter_input(INPUT_POST, 'INFOCheck', FILTER_VALIDATE_BOOLEAN);
        $SEPIACheck=filter_input(INPUT_POST, 'SEPIACheck', FILTER_VALIDATE_BOOLEAN);
        $PROFCheck=filter_input(INPUT_POST, 'PROFCheck', FILTER_VALIDATE_BOOLEAN);
        
        if(!$TCCheck&&!$GEACheck&&!$MMICheck&&!$INFOCheck&&!$PROFCheck){
            $valid = false;
            Session::add('inscription_feedback_negative', "Vous devez choisir au moins une formation.");
        }
        
        if (!($entree=DateTime::createFromFormat('Y',$_POST['entree']))){
            $valid = false;
            Session::add('inscription_feedback_negative', "L'année d'entrée n'est pas au bon format (aaaa).");
        }
        $sortie=DateTime::createFromFormat('Y',$_POST['sortie']);
        return -1;
    }
    private static function inscriptionEntreprise(){
        return -1;        
    }

    private static function stockUserInSession($user){
        Session::set('user_logged_in',true);
        Session::set('callName',$user->getCallNamePresentation());
    }
 
    public static function isLoggedIn()
    {
        return (Session::get('user_logged_in') ? true : false);
    }
    
}