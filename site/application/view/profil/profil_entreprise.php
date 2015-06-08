<div id="index_profil" class="col-md-10 col-md-offset-1">
    <div class="row">
        <div class="row">
            <h3>
                Profil de <?php echo $this->usr->getCallNamePresentation() ?> <button type="submit" class="col-md-offset-5  btn btn-default" id="MP_btn">Contacter par MP</button>
            </h3>
            <hr>
        </div>

        <div class="col-md-12" id="profil">
            <div class="row">
                <h3>
                    Profil
                </h3>
                <hr>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-5 text-right">
                            <label for="photo" class="control-label">Photo de profil : </label>
                        </div>
                        <div class="col-md-7">
                            <img src="<?php echo URL ?>/img/iut.jpg" class="photoprofil">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group" id="entrNomGroup">
                        <div class="col-md-5 text-right">
                            <label for="Nomentr" class="control-label">Nom de l'entreprise : </label>
                        </div>
                        <div class="col-md-7">
                            <p id="nomentre"><?php echo $this->usr->nom ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group" id="SiretGroup">
                        <div class="col-md-5 text-right">
                            <label for="numSiret" class="control-label">Numéro de SIRET/SIREN : </label>
                        </div>
                        <div class="col-md-7">
                            <p id="numSiret"><?php echo $this->usr->numSiret ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-5 text-right">
                            <label for="secteurAct" class="control-label">Secteur d'activité : </label>
                        </div>
                        <div class="col-md-7">
                            <p id="secteurAct"><?php echo $this->usr->secteurAct ? $this->usr->getEntreprise()->adresse : "Non indiqué" ?></p>
                        </div>
                    </div>
                </div>



            </div>
            <br>
        </div>
        <br>
    </div>
</div>