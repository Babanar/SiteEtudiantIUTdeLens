<div class="row resultat_recherche_block">
    

<?php
$nb=0;
foreach($this->usr as $u){
    if($nb>0)
        echo '<hr>';?>
    <div class="col-md-12">
        <div class="row text-left row_search_result mainpage-link" href="profil/profil_utilisateur/<?php echo $u->getIdSuper_Util() ?>">
          <?php  echo "$u->prenom $u->nom "; ?>
        </div>
    </div>
    <?php
    
    $nb++;
}
if($nb==0){
    ?>
     <div class="col-md-12">
        <div class="row text-left row_search_result">
           Aucun résultat...
        </div>
    </div>       
    <?php
}

?>
        
    
</div>