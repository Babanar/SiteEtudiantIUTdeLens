<?php

class View{
    public $user=null;
    public function render($filename, $data = null)
    {
        if ($data) {
            foreach ($data as $key => $value) {
                $this->{$key} = $value;
            }
        }
        
        $ajax = filter_input(INPUT_POST,"ajax",FILTER_VALIDATE_BOOLEAN 	);
        if ($ajax) {
            $this->renderWithoutHeaderAndFooter($filename);
        } else {
            $this->renderWithHeaderAndFooter($filename);
        }

    }

    public function renderWithoutHeaderAndFooter($filename){
        require APP . 'view/'.$filename;
    }
    

    public function renderWithHeaderAndFooter($filename){
         require APP . 'view/_templates/header.php';
        require APP . 'view/'.$filename;
        require APP . 'view/_templates/footer.php';       
    }
    
    public function renderFeedback($name=''){
        $positive = Session::get($name.'_feedback_positive');
        $negative = Session::get($name.'_feedback_negative');
         require APP . 'view/_templates/feedback.php';
        Session::set($name.'_feedback_positive', null);
        Session::set($name.'_feedback_negative', null);
    }
}