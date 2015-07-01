<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Message envoyé, nous vons répondrons dans les plus brefs délais. Merci'
	);
        
        $usrSQL = new Super_UtilSQL();
        $usr = $usrSQL->findById($id);

    $name = @trim(stripslashes($this->usr->getCallName())); 
    $email = @trim(stripslashes($this->usr->getEmail())); 
    $subject = @trim(stripslashes($_POST['objet_contact'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'mathieu.blanquin@live.fr'; //Je ne sais pas quel email mettre

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;