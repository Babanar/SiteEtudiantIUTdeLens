<?php
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