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

            <div class="row">
                <div class="form-group">
                    <div class="col-md-3 text-right">
                        <label for="photo" class="control-label">Photo de profil : </label>
                    </div>
                    <div class="col-md-9">
                        <img src="<?php echo URL ?>/img/iut.jpg" class="photoprofil">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group" id="nom">
                    <div class="col-md-3 text-right">
                        <label for="nom" class="control-label">Nom de famille  : </label>
                    </div>
                    <div class="col-md-9">
                        <p id="nom"><?php echo $this->usr->nom ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group" id="prenom">
                    <div class="col-md-3 text-right">
                        <label for="prenom" class="control-label">Prénom : </label>
                    </div>
                    <div class="col-md-9">
                        <p id="prenom"><?php echo $this->usr->prenom ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-3 text-right">
                        <label for="birthdate" class="control-label">Date de naissance : </label>
                    </div>
                    <div class="col-md-9">
                        <p id="birthdate"><?php echo $this->usr->getBirthdate() ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-3 text-right">
                        <label for="profact" class="control-label">Profession ou études actuelles : </label>
                    </div>
                    <div class="col-md-9">
                        <p id="profact"><?php echo $this->usr->profession_ou_etudes_actuelle ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-md-3 text-right">
                        <label for="profant" class="control-label">Profession ou études antérieures : </label>
                    </div>
                    <div class="col-md-9">
                        <p id="profant"><?php echo $this->usr->profession_ou_etudes_anterieure ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-md-3 text-right">
                        <label for="formations" class="control-label">Formations suivies à l'IUT : </label>
                    </div>
                    <div class="col-md-9">
                        <p id="formations"><?php echo $this->usr->getFormation() ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-md-3 text-right">
                        <label for="entree" class="control-label">Année d'entrée à l'IUT : </label>
                    </div>
                    <div class="col-md-9">
                        <p id="entree"><?php echo $this->usr->entree ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-md-3 text-right">
                        <label for="sortie" class="control-label">Année de sortie de l'IUT  : </label>
                    </div>
                    <div class="col-md-9">
                        <p id="sortie"><?php echo $this->usr->sortie?$this->usr->sortie:"Non indiquée" ?></p>
                    </div>
                </div>
            </div>
            
            
        </div>
        <br>
        <!--
        <div class="col-md-5 col-md-offset-1" id="coordonnees">
            <div class="row">
                <h3>
                    Coordonnées
                </h3>
                <hr>
            </div>

            <div class="row"> 
                <div class="form-group">
                    <div class="col-md-4 text-right">
                        <label for="adresse" class="control-label">Adresse : </label>
                    </div>
                    <div class="col-md-8">
                        <p id="adresse">61 rue Jean Jaurés</p>
                        <p id="compAddr1"></p>
                        <p id="compAddr2"></p>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="row"> 
                    <div class="form-group" id="CPGroup">
                        <div class="col-md-4 text-right">
                            <label for="CP" class="control-label">Code Postal : </label>
                        </div>
                        <div class="col-md-8">
                            <p id="CP">62260</p>
                        </div>
                    </div>
                </div>

                <div class="row"> 
                    <div class="form-group " id="cityGroup">
                        <div class="col-md-4 text-right">
                            <label for="Ville" class="control-label">Ville : </label>
                        </div>
                        <div class="col-md-8">
                            <div id='row'><p id="ville">Auchel</p></div> 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-4 text-right">
                            <label for="Pays" class="control-label">Pays : </label>
                        </div>
                        <div class="col-md-8">
                            <p id="nomPays">France</p>
                            <a id='visualiserAdresse' href="https://www.google.fr/maps/place/61+Rue+Jean+Jaur%C3%A8s,+62260+Auchel/@50.5056316,2.4731509,573m/
                               data=!3m1!1e3!4m2!3m1!1s0x47dd1a67d5bf88d1:0x8cd69992ed9e6b9f!6m1!1e1" target="_blank">Visualiser sur Google Maps</a>
                        </div>

                    </div>
                </div>

                <div class="row"> 
                    <div class="form-group" id="TelGroup">
                        <div class="col-md-4 text-right">
                            <label for="Tel" class="control-label">Téléphone : </label>
                        </div>
                        <div class="col-md-8">
                            <p id="tel">06 26 27 68 54</p>
                        </div>
                    </div>
                </div>

                <div class="row"> 
                    <div class="form-group" id="emailGroup">
                        <div class="col-md-4 text-right">
                            <label for="email" class="control-label">Email : </label>
                        </div>
                        <div class="col-md-8">
                            <a href="mailto:mathieu.blanquin@live.fr" id="email">mathieu.blanquin@live.fr</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>-->
    </div>
    <br>
</div>




















