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
            <form class="form-horizontal" id="form_add_event">
                <fieldset>

                <!-- Form Name -->
                <legend>Ajout d'un événement</legend>
                <?php $this->renderFeedback('ajoutnews'); ?>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="date">Date de l'événement :</label>  
                  <div class="col-md-5">
                  <input id="date" name="date" placeholder="jj/mm/aaaa hh:mm" class="form-control input-md" type="text">

                  </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="description">Description</label>
                  <div class="col-md-5">                     
                    <input id="description" name="description" placeholder="Description succinte de l'événement" class="form-control input-md" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="description">Article associé</label>
                  <div class="col-md-5"> 
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
                 <!-- Multiple Checkboxes -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="departement">Visibilité :</label>
                  <div class="col-md-4">
                  <div class="checkbox">
                    <label for="departement-0">
                      <input name="departement" id="departement-0" value="1" type="checkbox">
                      TC
                    </label>
                        </div>
                  <div class="checkbox">
                    <label for="departement-1">
                      <input name="departement" id="departement-1" value="1" type="checkbox">
                      MMI
                    </label>
                        </div>
                  <div class="checkbox">
                    <label for="departement-2">
                      <input name="departement" id="departement-2" value="1" type="checkbox">
                      INFO
                    </label>
                        </div>
                  <div class="checkbox">
                    <label for="departement-3">
                      <input name="departement" id="departement-3" value="1" type="checkbox">
                      GEA
                    </label>
                        </div>
                  <div class="checkbox">
                    <label for="departement-4">
                      <input name="departement" id="departement-4" value="1" type="checkbox">
                      PROF
                    </label>
                        </div>
                  <div class="checkbox">
                    <label for="departement-5">
                      <input name="departement" id="departement-5" value="1" type="checkbox">
                      Entreprise
                    </label>
                        </div>
                  </div>
                </div>
                <div class="row text-center">
                    <button type="submit" class="btn btn-lg">
                        Ajouter
                    </button>
                </div>
                </fieldset>

            </form>
            <br>
        </div>
    </div>
</div>
