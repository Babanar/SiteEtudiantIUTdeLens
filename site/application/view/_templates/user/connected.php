


<div class="row" id="entete_profil">
    
    <div class="col-md-4">
        <?php echo Session::get('callName'); ?>   
    </div>
     <div class="col-md-2 profile_icone mainpage-link" id="icone_msg" href="message/">
         <span class="text_icone" href="message/">
             20
         </span>
     </div>
     <div class="col-md-2 profile_icone" id="icone_forum">
         <span class="text_icone">
             99
         </span>
     </div>
     <div class="col-md-2 profile_icone" id="icone_notif">
         <span class="text_icone">
             2
         </span>
     </div>
     <a class="col-md-2 profile_icone" id="icone_disconnect" href="<?php echo URL ?>/connexion/disconnect"></a>
    
</div>
        
