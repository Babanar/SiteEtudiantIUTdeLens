<?php

function cmp_Conversation($a,$b){
    $dateA = DateTime::createFromFormat("d-m-Y H:i:s", $a->getLastDate());
    $dateB = DateTime::createFromFormat("d-m-Y H:i:s", $b->getLastDate());
    if ($dateA < $dateB) {
        return 1;
    }else if($dateB < $dateA){
        return -1;
    }else{
        return 0;
    }
}

    class Super_UtilSQL extends Query {
         public function getConversations($id_etudiant){
            $this->dbAdapter->prepare("SELECT * FROM participant_conversation WHERE idEtudiant=?");
            $this->dbAdapter->execute(array($id_etudiant));
            $conversationList = $this->dbAdapter->fetchAll();
            $conversations = array();
            foreach($conversationList as $c){
                $conversationsSQL = new ConversationSQL();
                $conversations[]=$conversationsSQL->findById($c['idConversation']);
            }
            usort($conversations,"cmp_Conversation");
            return $conversations;
        }
        public function getNbConvNonVu($id_etudiant){
            $this->dbAdapter->prepare("SELECT count(*) FROM participant_conversation WHERE idEtudiant=? AND vu=0");
            $this->dbAdapter->execute(array($id_etudiant));
            return $this->dbAdapter->fetch()[0];

            
        }    
    }
?>