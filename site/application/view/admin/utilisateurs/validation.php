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
            <form class="form-horizontal" id="form_valid_usr" >
                <fieldset>

                <!-- Form Name -->
                <legend>Ajout d'une news</legend>
                <?php $this->renderFeedback('uservalidation'); ?>

                <?php
                    if(sizeof($this->users)>0){
                ?>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="description">Utilisateur : </label>
                  <div class="col-md-5"> 
                    <select id="id_usr" name="id_usr" class="form-control">
                        <?php
                            foreach($this->users as $u){
                        ?>
                          <option value="<?php echo $u->getId(); ?>">
                              <?php echo $u->getCallName()  ?>
                          </option>
                        <?php 
                            }
                        ?>
                    </select>                  
                  </div>
                </div>

                
                <div class="row text-center">
                    <button type="submit" class="btn btn-lg">
                        Valider
                    </button>
                </div>
                <?php
                    }
                    else{
                ?>
                <div class="row text-center">
                    Tous les utilisateurs ont déjà été examinés.
                </div>
                <?php
                    }
                ?>
                <br>
                </fieldset>

            </form>
        </div>
    </div>
</div>
