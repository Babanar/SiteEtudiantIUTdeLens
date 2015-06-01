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
            <form class="form-horizontal" id="form_add_news">
                <fieldset>

                <!-- Form Name -->
                <legend>Ajout d'une news</legend>
                <?php $this->renderFeedback('ajoutnews'); ?>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="titre">Titre</label>  
                  <div class="col-md-4">
                  <input id="titre" name="titre" placeholder="titre" class="form-control input-md" type="text">

                  </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="text">Contenu</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id="text" name="text"></textarea>
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
        </div>
    </div>
</div>
