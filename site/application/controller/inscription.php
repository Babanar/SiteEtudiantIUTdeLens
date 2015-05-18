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
        $this->view->render('inscription/index.php');
    }
    public function entreprise()
    {
        $this->view->render('inscription/entreprise.php');
    }
    public function utilisateur()
    {
        // load views
        $this->view->render('inscription/utilisateur.php');
    }
    
    public function profil_utilisateur()
    {
        // load views
        $this->view->render('inscription/profil_utilisateur.php');
    }
    
    public function profil()
    {
        // load views
        $this->view->render('inscription/profil_entreprise.php');
    }
    
}
