<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index($page=0)
    {
        $newsSQL = new NewsSQL();
        $news = $newsSQL->findByAccueil(true)->orderBy("date_post desc")->limit($page*10,($page+1)*10)->execute();
        $this->view->render('home/index.php',array("news" => $news));
    }

    public function departement($dep="",$page=0){
        $dep = strtolower($dep);
        if(!in_array($dep,array("info","gea","mmi","tc","prof","entreprise"))){
            $this->view->render('error/index.php');
        }else{
            $newsSQL = new NewsSQL();
            $request = "findBy".ucfirst($dep);
            $news = $newsSQL->$request(true)->orderBy("date_post desc")->limit($page*10,($page+1)*10)->execute();
            
            $evenementSQL = new EvenementSQL();
            $request = "findBy".ucfirst($dep);
            $event = $evenementSQL->findWithCondition("$dep=1 AND TO_DAYS(dateEvenement) >  TO_DAYS(DATE_ADD(NOW(), INTERVAL -1 DAY))");
            $event = $event->orderBy("dateEvenement")->limit(0,10)->execute();
            $this->view->render('home/departement.php',array("dep"=>$dep,"news" => $news,"event"=>$event));
        }
    }
    public function changeColor(){
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if (!$ajax) {
            
            $this->view->render('error/index.php');
        }
        if(isset($_POST['color_departement'])
                &&!is_null($_POST['color_departement'])){
            Session::set("color_departement",$_POST['color_departement']);
        }
    }

}
