<?php

class Mail {
    public static function confirmInscription($id_utilisateur){
        $userSQL = new Super_UtilSQL();
        $user = $userSQL->findById($id_utilisateur);
        if(!$user)
            return;
        
        $mail = $user->mail; // Déclaration de l'adresse de destination.
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
        {
                $passage_ligne = "\r\n";
        }
        else
        {
                $passage_ligne = "\n";
        }
        
        $link = URL . "/inscription/confirmation_mail/" . $user->token . "/" . $user->getId();
        //=====Déclaration des messages au format texte et au format HTML.
        $message_txt = "Bonjour ".$user->getCallName().", bienvenue sur haintesy.ovh.\n" 
                . "La prochaine étape de votre inscription consiste à la vérification de votre adresse mail. "
                . "Pour cela, vous avez juste à suivre le lien suivant :\n"
                . URL . $link;
        
        $message_html = "<html>"
                            . "<head>"
                                . "<meta charset=\"utf-8\">"
                            . "</head>"
                            . "<body>"
                                . "<h3>"
                                    . "Bonjour <b>".$user->getCallName()."</b>,"
                                    . " bienvenue sur haintesy.ovh.\n "
                                . "</h3>"
                                . " </br>"
                                . "<p>"
                                    . "La prochaine étape de votre inscription consiste à la vérification de votre adresse mail. <br>"
                                    . "Pour cela, vous avez juste à suivre le lien suivant :</br>"
                                    . "<a href=\"" . $link ."\" >"
                                        . $link
                                    . "</a>"
                                . "</p>"
                            . "</body>"
                        . "</html>";
        //==========

        //=====Création de la boundary
        $boundary = "-----=".md5(rand());
        //==========

        //=====Définition du sujet.
        $sujet = "Bienvenue sur haintesy.ovh !";
        //=========

        //=====Création du header de l'e-mail.
        $header = "From: \"Haintesy\"<noreply@haintesy.ovh>".$passage_ligne;
        $header.= "MIME-Version: 1.0".$passage_ligne;
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        //==========

        //=====Création du message.
        $message = $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format texte.
        $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format HTML
        $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_html.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        mail($mail,$sujet,$message,$header);
    }
}
