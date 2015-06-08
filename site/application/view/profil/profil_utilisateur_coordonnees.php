<div id="index_profil" class="col-md-10 col-md-offset-1">
    <div class="row">
        <div class="row">
            <h3>
                Profil de <?php echo $this->usr->getCallName() ?> <button type="submit" class="col-md-offset-5  btn btn-default" id="MP_btn">Contacter par MP</button>
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
                    <div class="col-md-6 text-right">
                        <label for="photo" class="control-label">Photo de profil : </label>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo URL ?>/img/iut.jpg" class="photoprofil">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group" id="nom">
                    <div class="col-md-6 text-right">
                        <label for="nom" class="control-label">Nom  : </label>
                    </div>
                    <div class="col-md-6">
                        <p id="nom"><?php echo $this->usr->getUtilisateur()->nom ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group" id="prenom">
                    <div class="col-md-6 text-right">
                        <label for="prenom" class="control-label">Prénom : </label>
                    </div>
                    <div class="col-md-6">
                        <p id="prenom"><?php echo $this->usr->getUtilisateur()->prenom ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-6 text-right">
                        <label for="birthdate" class="control-label">Date de naissance : </label>
                    </div>
                    <div class="col-md-6">
                        <p id="birthdate"><?php echo $this->usr->getUtilisateur()->getBirthdate() ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-6 text-right">
                        <label for="profact" class="control-label">Profession ou études actuelles : </label>
                    </div>
                    <div class="col-md-6">
                        <p id="profact"><?php echo $this->usr->getUtilisateur()->profession_ou_etudes_actuelle ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-md-6 text-right">
                        <label for="profant" class="control-label">Profession ou études antérieures : </label>
                    </div>
                    <div class="col-md-6">
                        <p id="profant"><?php echo $this->usr->getUtilisateur()->profession_ou_etudes_anterieure ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-md-6 text-right">
                        <label for="formations" class="control-label">Formations suivies à l'IUT : </label>
                    </div>
                    <div class="col-md-6">
                        <p id="formations"><?php echo $this->usr->getUtilisateur()->getFormation() ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-md-6 text-right">
                        <label for="entree" class="control-label">Année d'entrée à l'IUT : </label>
                    </div>
                    <div class="col-md-6">
                        <p id="entree"><?php echo $this->usr->getUtilisateur()->entree ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-md-6 text-right">
                        <label for="sortie" class="control-label">Année de sortie de l'IUT  : </label>
                    </div>
                    <div class="col-md-6">
                        <p id="sortie"><?php echo $this->usr->getUtilisateur()->sortie?$this->usr->getUtilisateur()->sortie:"Non indiquée" ?></p>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-md-6" id="coordonnees">
            

            <div class="row"> 
                <div class="form-group">
                    <div class="col-md-4 text-right">
                        <label for="adresse" class="control-label">Adresse : </label>
                    </div>
                    <div class="col-md-8">
                        <p id="adresse"><?php echo $this->usr->getUtilisateur()->adresse?$this->usr->getUtilisateur()->adresse:"Non indiquée" ?></p>
                        <p id="compAddr1"><?php echo $this->usr->getUtilisateur()->compAddr1?$this->usr->getUtilisateur()->compAddr1:"" ?></p>
                        <p id="compAddr2"><?php echo $this->usr->getUtilisateur()->compAddr2?$this->usr->getUtilisateur()->compAddr2:"" ?></p>
                    </div>
                </div>
            </div>


          

                <div class="row"> 
                    <div class="form-group" id="CPGroup">
                        <div class="col-md-4 text-right">
                            <label for="CP" class="control-label">Code Postal : </label>
                        </div>
                        <div class="col-md-8">
                            <p id="CP"><?php echo $this->usr->getUtilisateur()->CP?$this->usr->getUtilisateur()->CP:"Non indiqué" ?></p>
                        </div>
                    </div>
                </div>

                <div class="row"> 
                    <div class="form-group " id="cityGroup">
                        <div class="col-md-4 text-right">
                            <label for="Ville" class="control-label">Ville : </label>
                        </div>
                        <div class="col-md-8">
                            <div id='row'><p id="ville"><?php echo $this->usr->getUtilisateur()->ville?$this->usr->getUtilisateur()->ville:"Non indiquée" ?></p></div> 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-4 text-right">
                            <label for="Pays" class="control-label">Pays : </label>
                        </div>
                        <div class="col-md-8">
                            <p id="nomPays"><?php echo $this->usr->getUtilisateur()->pays?$this->usr->getUtilisateur()->pays:"Non indiqué" ?></p>
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
                            <p id="tel"><?php echo $this->usr->getUtilisateur()->tel?$this->usr->getUtilisateur()->tel:"Non indiqué" ?></p>
                        </div>
                    </div>
                </div>

                <div class="row"> 
                    <div class="form-group" id="emailGroup">
                        <div class="col-md-4 text-right">
                            <label for="email" class="control-label">Email : </label>
                        </div>
                        <div class="col-md-8">
                            <a href="mailto:<?php echo $this->usr->mail?>" id="email"><?php echo $this->usr->mail?></a>
                        </div>
                    </div>
                </div>

            
        </div>
            
        </div>
        <br>
        <!--
        -->
    </div>
    <br>
</div>




















