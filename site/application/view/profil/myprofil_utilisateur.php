<div id="index_profil" class="col-md-10 col-md-offset-2">
    <div class="row">
        <div class="row">
            <h3>
                Votre Profil
            </h3>
            <hr>
        </div>
        
        
        <div class="col-md-10 ">
            <div id="profil">
                <div class="row">
                    <div class="form-group" id="surnameGroup">
			<div class="col-md-4 text-right">
                		<label for="Nom" class="control-label">Nom de famille : </label>
			</div>
			<div class="col-md-4">
                            <p id="nom"><?php echo $this->usr->getUtilisateur()->nom ?></p>
			</div>
                        <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
                    </div>
                </div>
                
            
                <div class="row">
		<div class="form-group" id="nameGroup">
			<div class="col-md-4 text-right">
					<label for="Prénom" class="control-label">Prénom : </label>
			</div>
			<div class="col-md-4">
                            <p id="prenom"><?php echo $this->usr->getUtilisateur()->prenom ?></p>
			</div>
                    <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
		</div>
	</div>
                
                
                
                <div class="row">
                    <div class="form-group">
			<div class="col-md-4 text-right">
					<label for="naisssance" class="control-label">Date de naisssance : </label>
			</div>
			<div class="col-md-4">
                                    <p id='birthdate'><?php echo $this->usr->getUtilisateur()->getBirthdate() ?></p>
			</div>
                    <div class="col-md-4">
                        <a href="#">Modifier</a>
                    </div>
                </div>
            </div>
                
                
                
                <div class="row"> 
                    <div class="form-group">
			<div class="col-md-4 text-right">
					<label for="adresse" class="control-label">Adresse : </label>
			</div>
			<div class="col-md-4">
                            <p id="adresse"><?php echo $this->usr->getUtilisateur()->adresse?$this->usr->getUtilisateur()->adresse:"Non indiquée" ?></p>
                        <p id="compAddr1"><?php echo $this->usr->getUtilisateur()->compAddr1?$this->usr->getUtilisateur()->compAddr1:"" ?></p>
                        <p id="compAddr2"><?php echo $this->usr->getUtilisateur()->compAddr2?$this->usr->getUtilisateur()->compAddr2:"" ?></p>
			</div>
                        <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row"> 
                    <div class="form-group" id="CPGroup">
			<div class="col-md-4 text-right">
					<label for="CP" class="control-label">Code Postal : </label>
			</div>
			<div class="col-md-4">
                            <p id="CP"><?php echo $this->usr->getUtilisateur()->CP?$this->usr->getUtilisateur()->CP:"Non indiqué" ?></p>
			</div>
                        <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row"> 
                    <div class="form-group " id="cityGroup">
			<div class="col-md-4 text-right">
					<label for="Ville" class="control-label">Ville : </label>
			</div>
			<div class="col-md-4">
                            <div id='row'><p id="ville"><?php echo $this->usr->getUtilisateur()->ville?$this->usr->getUtilisateur()->ville:"Non indiquée" ?></p></div> 
			</div>
                        <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
                    </div>
                </div>   
                
                
                
                <div class="row">
                    <div class="form-group">
			<div class="col-md-4 text-right">
					<label for="Pays" class="control-label">Pays : </label>
			</div>
			<div class="col-md-4">
                            <p id="nomPays"><?php echo $this->usr->getUtilisateur()->pays?$this->usr->getUtilisateur()->pays:"Non indiqué" ?></p>
			</div>
                        <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
                    </div>
                </div>    
	      
                
                
            <div class="row"> 
		<div class="form-group" id="TelGroup">
			<div class="col-md-4 text-right">
					<label for="Tel" class="control-label">Téléphone : </label>
			</div>
			<div class="col-md-4">
                            <p id="tel"><?php echo $this->usr->getUtilisateur()->tel?$this->usr->getUtilisateur()->tel:"Non indiqué" ?></p>
			</div>
                        <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
		</div>
            </div>
                
                
                
                <div class="row">
                    <div class="form-group">
			<div class="col-md-4 text-right">
					<label for="profact" class="control-label">Profession ou études actuelles : </label>
			</div>
			<div class="col-md-4">
                            <p id="profact"><?php echo $this->usr->getUtilisateur()->profession_ou_etudes_actuelle ?></p>
			</div>
                        <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
                    </div>
                </div>
                
                
                
                
	<div class="row">
		<div class="form-group">
			<div class="col-md-4 text-right">
					<label for="profant" class="control-label">Profession ou études antérieures : </label>
			</div>
			<div class="col-md-4">
                            <p id="formations"><?php echo $this->usr->getUtilisateur()->getFormation() ?></p>
			</div>
                    <div class="col-md-4">
                                <a href="#">Modifier</a>
                    </div>
		</div>
	</div>
                
                
                
        <div class="row">
		<div class="form-group">
			<div class="col-md-4 text-right">
					<label for="etudes" class="control-label">Formations suivies à l'IUT : </label>
			</div>
			<div class="col-md-4">
                            <p id="formations"><?php echo $this->usr->getUtilisateur()->getFormation() ?></p>
			</div>
                    <div class="col-md-4">
                                <a href="#">Modifier</a>
                    </div>
		</div>
	</div>
                
                
                
                <div class="row">
                    <div class="form-group" id="entreeGroup">
			<div class="col-md-4 text-right">
					<label for="Entree" class="control-label">Année d'entrée à l'IUT : </label>
			</div>
			<div class="col-md-4">
                            <p id="entree"><?php echo $this->usr->getUtilisateur()->entree ?></p>
			</div>
                    <div class="col-md-4">
                                <a href="#">Modifier</a>
                    </div>
		</div>
	</div>
                
                
                
	<div class="row">
		<div class="form-group" id="sortieGroup">
			<div class="col-md-4 text-right">
					<label for="Sortie" class="control-label">Année de sortie de l'IUT : </label>
			</div>
			<div class="col-md-4">
                            <p id="sortie"><?php echo $this->usr->getUtilisateur()->sortie?$this->usr->getUtilisateur()->sortie:"Non indiquée" ?></p>
			</div>
                    <div class="col-md-4">
                                <a href="#">Modifier</a>
                    </div>
		</div>
	</div>
                
                <div class="row">
                    <div class="form-group">
			<div class="col-md-4 text-right">
					<label for="photo" class="control-label">Photo de profil : </label>
			</div>
			<div class="col-md-4">
				<img src="<?php echo URL ?>/img/iut.jpg" class="photoconv">
			</div>
                        <div class="col-md-4">
                            <a href="#">Modifier</a>
                        </div>
		</div>
            </div>
        
                
            </div>
            
            
        </div>
    </div>
</div>


