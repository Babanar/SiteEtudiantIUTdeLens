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
            $password=sha1($_POST['password'].$email);
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
        $TCCheck = is_null($TCCheck) ? false : $TCCheck;
        $GEACheck=filter_input(INPUT_POST, 'GEACheck', FILTER_VALIDATE_BOOLEAN);
        $GEACheck = is_null($GEACheck) ? false : $GEACheck;
        $MMICheck=filter_input(INPUT_POST, 'MMICheck', FILTER_VALIDATE_BOOLEAN);
        $MMICheck = is_null($MMICheck) ? false : $MMICheck;
        $INFOCheck=filter_input(INPUT_POST, 'INFOCheck', FILTER_VALIDATE_BOOLEAN);
        $INFOCheck = is_null($INFOCheck) ? false : $INFOCheck;
        $SEPIACheck=filter_input(INPUT_POST, 'SEPIACheck', FILTER_VALIDATE_BOOLEAN);
        $SEPIACheck = is_null($SEPIACheck) ? false : $SEPIACheck;
        $PROFCheck=filter_input(INPUT_POST, 'PROFCheck', FILTER_VALIDATE_BOOLEAN);
        $PROFCheck = is_null($PROFCheck) ? false : $PROFCheck;
        
        if(!$TCCheck&&!$GEACheck&&!$MMICheck&&!$INFOCheck&&!$PROFCheck){
            $valid = false;
            Session::add('inscription_feedback_negative', "Vous devez choisir au moins une formation.");
        }
        
        if (!($entree=DateTime::createFromFormat('Y',$_POST['entree']))){
            $valid = false;
            Session::add('inscription_feedback_negative', "L'année d'entrée n'est pas au bon format (aaaa).");
        }
        $sortie=DateTime::createFromFormat('Y',$_POST['sortie']);
        if($sortie){
            $sortie = $sortie->format("Y");
        }
        if ($valid) {
            $user = new Utilisateurs($nom, $prenom, "", "", "", "", "", "", "", $birthdate->format("Y-m-d"), $profact, $profant,
                             $TCCheck, $GEACheck, $MMICheck, $INFOCheck, $SEPIACheck, $PROFCheck,$entree->format("Y"),$sortie, "");
            $user->save();
            return $user->getId();
        } else {
            return -1;
        }
    }
    private static function inscriptionEntreprise(){
        $valid=true;
        
        if (!($nomentre=filter_input(INPUT_POST, 'nomentre', FILTER_SANITIZE_SPECIAL_CHARS))
                || strlen($nomentre)===0){
            $valid = false;
            Session::add('inscription_feedback_negative', "Le nom de l'entreprise est obligatoire.");
            }
            
            if (!($siret=filter_input(INPUT_POST, 'siret', FILTER_VALIDATE_INT))
                || strlen($siret)!=14){
            $valid = false;
            Session::add('inscription_feedback_negative', "Le numéro de Siret est obligatoire et est composé de 14 chiffres.");
            }
            
            if (!($secteurAct=filter_input(INPUT_POST, 'secteurAct', FILTER_SANITIZE_SPECIAL_CHARS))){
            $valid = false;
            Session::add('inscription_feedback_negative', "Le secteur d'activité ne peut contenir de caractères spéciaux.");
            }
            
            if ($pays.val()!="France"){
            $valid = false;
            Session::add('inscription_feedback_negative', "Le pays doit être égal à \"France\".");
            }
            
            if (!($ville=filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_SPECIAL_CHARS))){
            $valid = false;
            Session::add('inscription_feedback_negative', "Le nom de la ville ne peut contenir de caractères spéciaux.");
            }
           
            if (strlen($CP)>0){
            {
                if (!($CP=filter_input(INPUT_POST, '$CP', FILTER_VALIDATE_INT))
                    || strlen($CP)!=5)
                {
                $valid = false;
                Session::add('inscription_feedback_negative', "Le code postal doit être composé de 5 chiffres.");
                
                }    
            }
            }
            
            if (!($adresse=filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_SPECIAL_CHARS))){
            $valid = false;
            Session::add('inscription_feedback_negative', "l'adresse ne peut contenir de caractères spéciaux.");
            }
            
            if (!($compAddr1=filter_input(INPUT_POST, 'compAddr1', FILTER_SANITIZE_SPECIAL_CHARS))){
            $valid = false;
            Session::add('inscription_feedback_negative', "l'adresse ne peut contenir de caractères spéciaux.");
            }
            
            if (!($compAddr2=filter_input(INPUT_POST, 'compAddr2', FILTER_SANITIZE_SPECIAL_CHARS))){
            $valid = false;
            Session::add('inscription_feedback_negative', "l'adresse ne peut contenir de caractères spéciaux.");
            }
            
            if (strlen($tel)>0){
            {
                if (!($tel=filter_input(INPUT_POST, '$tel', FILTER_VALIDATE_INT))
                    || strlen($tel)!=10)
                {
                $valid = false;
                Session::add('inscription_feedback_negative', "Le numéro de de téléphone doit être composé de 10 chiffres.");
                }    
            }
            
             if ($valid) {
            $user = new Entreprises($nomentre, $secteurAct, $numSiret, $adresse, $compAddr1, $compAddr2, $CP, $ville, $pays, $tel);
            $user->save();
            return $user->getId();
        } else {
            return -1;
        }
      }
                
        
    }
    private static function stockUserInSession($user){
        Session::set('user_logged_in',true);
        Session::set('callName',$user->getCallNamePresentation());
        Session::set('id',$user->getCallNamePresentation());
        Session::set('callName',$user->getCallNamePresentation());
    }
 
    public static function isLoggedIn()
    {
        return (Session::get('user_logged_in') ? true : false);
    }
    
}