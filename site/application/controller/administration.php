<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Administration extends Controller
{
    
    
    public function index()
    {
        if(Session::get("admin")===true){
            $this->view->render('admin/index.php');
        }else{
            $this->view->render('admin/connexion.php');
        }
    }
    
    public function validConnexion(){
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            $this->view->render('error/index.php');
        }else{
            $adminSQL = new AdminSQL();
            if(isset($_POST['motdepasse'])&&isset($_POST['identifiant'])){
                $admin = $adminSQL->findByMdp($_POST['motdepasse'])->findByIdentifiant($_POST['identifiant'])->execute();
                if(sizeof($admin)===0){
                    Session::add("adminconnexion_feedback_negative","Mauvais mot de passe ou identifiant.");
                    $this->view->render('admin/connexion.php');
                }else{
                    Session::set("admin", true);
                    $this->view->render('admin/index.php');
                    
                }
                
            }else{
                $this->view->render('error/index.php');
            }
            
        }
    }
    public function disconnect(){
        Session::set("admin",false);
        $this->view->render('admin/connexion.php');
    }
    public function evenements_ajouter(){
        if(!Session::get("admin")===true){
            $this->view->render('error/index.php');
            return;
        }
        $newsSQL = new NewsSQL();
        $news = $newsSQL->findAll()->orderBy("date_post desc")->execute();
        $this->view->render('admin/event/ajouter.php',array("news"=>$news));
    } 
    public function evenements_supprimer(){
        if(!Session::get("admin")===true){
            $this->view->render('error/index.php');
            return;
        }
        $evenementSQL = new EvenementSQL();
        $evenement = $evenementSQL->findAll()->orderBy("id desc")->execute();
        $this->view->render('admin/event/supprimer.php',array("evenements"=>$evenement));
    }   
    public function evenements_editer(){
        if(!Session::get("admin")===true){
            $this->view->render('error/index.php');
            return;
        }
        $this->view->render('admin/event/editer.php');
    } 
    public function news_ajouter(){
        if(!Session::get("admin")===true){
            $this->view->render('error/index.php');
            return;
        }
        $this->view->render('admin/news/ajouter.php');
    } 
    public function news_supprimer(){
        if(!Session::get("admin")===true){
            $this->view->render('error/index.php');
            return;
        }
        $newsSQL = new NewsSQL();
        $news = $newsSQL->findAll()->orderBy("date_post desc")->execute();
        $this->view->render('admin/news/supprimer.php',array("news"=>$news));
    }  
    public function news_editer(){
        if(!Session::get("admin")===true){
            $this->view->render('error/index.php');
            return;
        }
        $this->view->render('admin/news/editer.php');
    } 
    public function news_ajouter_valider(){

        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax || !Session::get("admin")===true) {
            $this->view->render('error/index.php');
            return;
        }
        $tc =  filter_input(INPUT_POST,"tc",FILTER_VALIDATE_BOOLEAN 	);
        $gea =  filter_input(INPUT_POST,"gea",FILTER_VALIDATE_BOOLEAN 	);
        $info =  filter_input(INPUT_POST,"info",FILTER_VALIDATE_BOOLEAN 	);
        $mmi =  filter_input(INPUT_POST,"mmi",FILTER_VALIDATE_BOOLEAN 	);
        $prof =  filter_input(INPUT_POST,"prof",FILTER_VALIDATE_BOOLEAN 	);
        $entreprise =  filter_input(INPUT_POST,"entreprise",FILTER_VALIDATE_BOOLEAN 	);
        $titre =  filter_input(INPUT_POST,"titre",FILTER_SANITIZE_SPECIAL_CHARS 	);
        $text =  isset($_POST['text'])?nl2br(htmlentities($_POST['text'])):"";
        
        $news = new News(date('Y-m-d H:i:s'),$titre,$text,$info,$mmi,$gea,$tc,$prof,$entreprise);
        $news->save();
        Session::add('ajoutnews',"Ajouté avec succés !");
        $this->view->render('admin/news/valid_ajouter.php');
    } 
    public function news_supprimer_valider(){

        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax || !Session::get("admin")===true) {
            $this->view->render('error/index.php');
            return;
        }
        $id = filter_input(INPUT_POST,"id",FILTER_SANITIZE_NUMBER_INT );
        $newsSQL = new NewsSQL();
        $news = $newsSQL->findById($id);
        if($news!==false){
            $news->delete();
        }
        $this->view->render('admin/news/valid_supprimer.php');
    }
    
    public function evenement_ajouter_valider(){

        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        $newsSQL = new NewsSQL();
        $news = $newsSQL->findAll()->orderBy("date_post desc")->execute();
        
        
        if (!$ajax || !Session::get("admin")===true) {
            $this->view->render('error/index.php');
            return;
        }
        if (!($date=DateTime::createFromFormat('d/m/Y H:i',$_POST['date']))){
            Session::add('ajoutnews_feedback_negative'
                ,"La date est au mauvais format. Merci de respecter ce format : jj/mm/aaaa hh:mm");
            $this->view->render('admin/event/ajouter.php',array("news"=>$news));
        }
        $description = filter_input(INPUT_POST,"description",FILTER_SANITIZE_SPECIAL_CHARS 	);
        $id = filter_input(INPUT_POST,"id",FILTER_SANITIZE_NUMBER_INT );
        $newsSQL2 = new NewsSQL();
        $news2 = $newsSQL2->findById($id);
        if($news2===false){
            Session::add('ajoutnews_feedback_negative'
                ,"L'article associé n'existe pas, ou plus...");
            $this->view->render('admin/event/ajouter.php',array("news"=>$news));
        }
        
        $tc =  filter_input(INPUT_POST,"tc",FILTER_VALIDATE_BOOLEAN 	);
        $gea =  filter_input(INPUT_POST,"gea",FILTER_VALIDATE_BOOLEAN 	);
        $info =  filter_input(INPUT_POST,"info",FILTER_VALIDATE_BOOLEAN 	);
        $mmi =  filter_input(INPUT_POST,"mmi",FILTER_VALIDATE_BOOLEAN 	);
        $prof =  filter_input(INPUT_POST,"prof",FILTER_VALIDATE_BOOLEAN 	);
        $entreprise =  filter_input(INPUT_POST,"entreprise",FILTER_VALIDATE_BOOLEAN 	);
        
        $evenement = new Evenement($date->format("Y-m-d H:i:s"),$description,$id,$info,$mmi,$gea,$tc,$prof,$entreprise);
        $evenement->save();
        
        $this->view->render('admin/event/valid_ajouter.php');
    } 
    public function evenement_supprimer_valider(){

        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax || !Session::get("admin")===true) {
            $this->view->render('error/index.php');
            return;
        }

        $id = filter_input(INPUT_POST,"id",FILTER_SANITIZE_NUMBER_INT );
        $evenementSQL = new EvenementSQL();
        $evenement = $evenementSQL->findById($id);
        if($evenement!==false){
            $evenement->delete();
        }
        $this->view->render('admin/event/valid_supprimer.php');
    }
    
    public function utilisateurs_valider(){
        if(!Session::get("admin")===true){
            $this->view->render('admin/connexion.php');
            return;
        }
        $usrSQL = new Super_UtilSQL();
        $usrs = $usrSQL->findByAdminConfirmation(false)->execute();
        $this->view->render('admin/utilisateurs/validation.php',array('users'=>$usrs));
        
    }    
    
    public function utilisateurs_valider_valider(){
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax || !Session::get("admin")===true) {
            $this->view->render('error/index.php');
            return;
        }

        $id = filter_input(INPUT_POST,"id_usr",FILTER_SANITIZE_NUMBER_INT );
        $usrSQL = new Super_UtilSQL();
        $usr = $usrSQL->findById($id);
        if($usr!==false){
            $usr->adminConfirmation = true;
            $usr->save();
            Session::add("uservalidation_feedback_positive"
                    ,"Utilisateur". $usr->getCallName()." bien validé !");
        }else{
            Session::add("uservalidation_feedback_negative", "Utilisateur introuvable dans la base de donnée.");
        }
         
        $this->utilisateurs_valider();
        
    }
}
