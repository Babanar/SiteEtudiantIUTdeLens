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
    

<form class="form-horizontal" id ="form_delete_news">
    <fieldset>

    <!-- Form Name -->
    <legend>Suppression d'une news</legend>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="News">News</label>
      <div class="col-md-8">
        <select id="id_news" name="id_news" class="form-control">
        <?php
            foreach($this->news as $n){
                $date = new DateTime($n->date_post);
        ?>
          <option value="<?php echo $n->getId(); ?>">
              <?php echo $date->format("d/m/Y à H\hi") . " - " . $n->titre;  ?>
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
    