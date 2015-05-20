<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of forum
 *
 * @author Mathieu
 */
class forum extends Controller{
    
    public function index()
    {
         $this->view->render('forum/index.php');
    }
}
