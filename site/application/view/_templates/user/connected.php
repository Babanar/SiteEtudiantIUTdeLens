<?php
    $userSQL_view = new Super_UtilSQL();
    $user_view = $userSQL_view->findById(Session::get("id_utilisateur"));
    $nbConv = $user_view->getNbConvNonVu();

?>
    


<div class="row" id="entete_profil">
    
    <div class="col-md-4 col-sm-12">
        <?php echo Session::get('callName'); ?>   
    </div>
     <div class="col-md-2  col-sm-3 profile_icone mainpage-link" id="icone_msg" href="message/">
         <span class="text_icone" href="message/">
             <?php echo $nbConv?$nbConv:"";  ?>
         </span>
     </div>
     <div class="col-md-2 col-sm-3 profile_icone mainpage-link" id="icone_forum" href="forum/notification">
         <span class="text_icone">
             
         </span>
     </div>
     <div class="col-md-2 col-sm-3 profile_icone mainpage-link" id="icone_notif" href="profil/notification">
         <span class="text_icone">
             
         </span>
     </div>
     <a class="col-md-2  col-sm-3 profile_icone" id="icone_disconnect" href="<?php echo URL ?>/connexion/disconnect"></a>
    
</div>
        
