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
    
    public function news_ajouter(){
        if(!Session::get("admin")===true){
            $this->view->render('admin/connexion.php');
            return;
        }
        $this->view->render('admin/news/ajouter.php');
    } 
    public function news_supprimer(){
        if(!Session::get("admin")===true){
            $this->view->render('admin/connexion.php');
            return;
        }
        $newsSQL = new NewsSQL();
        $news = $newsSQL->findAll()->orderBy("date_post desc")->execute();
        $this->view->render('admin/news/supprimer.php',array("news"=>$news));
    } 
    public function news_ajouter_valider(){

        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            $this->view->render('error/index.php');
        }
        if(!Session::get("admin")===true){
            $this->view->render('admin/connexion.php');
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
        if (!$ajax ) {
            $this->view->render('error/index.php');
        }
        if(!Session::get("admin")===true){
            $this->view->render('admin/connexion.php');
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

}
