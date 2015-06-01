

<form class="form-horizontal col-md-8 col-md-offset-2" id="connexion_administrateur" onsubmit="return false;">
    <fieldset>

    <!-- Form Name -->
    <legend>Connexion administrateur</legend>
    <?php $this->renderFeedback('adminconnexion'); ?>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="identifiant">Identifiant</label>  
      <div class="col-md-4">
      <input id="identifiant" name="identifiant" placeholder="identifiant" class="form-control input-md" type="text">

      </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="motdepasse">Mot de passe</label>
      <div class="col-md-4">
        <input id="motdepasse" name="motdepasse" placeholder="mot de passe" class="form-control input-md" type="password">

      </div>
    </div>
    <div class="row text-center">
        <button type="submit" class="btn btn-lg">
            Connexion
        </button>
    </div>
    <br>
    </fieldset>
</form>
