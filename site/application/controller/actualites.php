<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Actualites extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        $this->view->render('error/index.php');
    }

    public function article($id=""){

        $newsSQL = new NewsSQL();
        $news = $newsSQL->findById($id);
        if($news!==false){
           $this->view->render('actu/article.php',array("news" => $news));
        }else{
            $this->view->render('error/index.php');
        }
    }


}
