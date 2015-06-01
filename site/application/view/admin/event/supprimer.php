<div class='col-md-12'>
    <div class='row text-left'>
        <br>
        <button class="btn btn-md mainpage-link btn-info" href="administration/" style="margin-left:15px">
           Retour au panneau d'administration
       </button>       
        <hr>
    </div>
    <div class='row'>
        
        
<div class="col-md-8 col-md-offset-2">
    

    <form class="form-horizontal" id ="form_delete_event" onsubmit="return false;">
    <fieldset>

    <!-- Form Name -->
    <legend>Suppression d'un événement</legend>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="id_event">News</label>
      <div class="col-md-8">
        <select id="id_event" name="id_event" class="form-control">
        <?php
            foreach($this->evenements as $e){
                $date = new DateTime($e->dateEvenement);
        ?>
          <option value="<?php echo $e->getId(); ?>">
              <?php echo $date->format("d/m/Y à H\hi") . " - " . $e->description;  ?>
          </option>
        <?php 
            }
        ?>
        </select>
      </div>
    </div>
    <div class="row text-center">
        <button type="submit" class="btn btn-lg">
            Supprimer
        </button>
    </div>
    <br>
    </fieldset>
</form>
</div>
        </div></div>
    