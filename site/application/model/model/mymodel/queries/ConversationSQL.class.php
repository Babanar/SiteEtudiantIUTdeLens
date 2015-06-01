<?php

class ConversationSQL extends Query {
        public function getParticipants($id_conversation){
            $this->dbAdapter->prepare("SELECT * FROM participant_conversation WHERE idConversation=?");
            $this->dbAdapter->execute(array($id_conversation));
            $userList = $this->dbAdapter->fetchAll();
            $users = array();
            foreach($userList as $u){
                $Super_UtilSQL = new Super_UtilSQL();
                $users[]=$Super_UtilSQL->findById($u['idEtudiant']);
            }
            return $users;
        }
        
        public function setAsSeen($id_user,$id_conv,$seen=true){
            $this->dbAdapter->prepare("UPDATE participant_conversation SET vu=?  WHERE idConversation=? AND idEtudiant=? ");
            $this->dbAdapter->execute(array($seen,$id_conv,$id_user));
        }

}
