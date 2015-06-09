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
		<div class="form-group" id="entrNomGroup">
			<div class="col-md-4 text-right">
					<label for="Nomentr" class="control-label">Nom de l'entreprise : </label>
			</div>
			<div class="col-md-4">
                            <p id="nomentre"><?php echo $this->usr->getEntreprise()->nom ?></p>
			</div>
                        <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
		</div>
	</div>
                
	<div class="row">
		<div class="form-group" id="SiretGroup">
			<div class="col-md-4 text-right">
					<label for="numSiret" class="control-label">Numéro de SIRET/SIREN : </label>
			</div>
			<div class="col-md-4">
                            <p id="numSiret"><?php echo $this->usr->getEntreprise()->numSiret ?></p>
			</div>
                        <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
		</div>
	</div>
                
                <div class="row">
		<div class="form-group">
			<div class="col-md-4 text-right">
					<label for="secteurAct" class="control-label">Secteur d'activité : </label>
			</div>
			<div class="col-md-4">
                            <p id="secteurAct"><?php echo $this->usr->getEntreprise()->secteurAct ? $this->usr->getEntreprise()->secteurAct : "Non indiqué" ?></p>
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
                            <p id="adresse"><?php echo $this->usr->getEntreprise()->adresse ? $this->usr->getEntreprise()->adresse : "Non indiquée" ?></p>
                            <p id="compAddr1"><?php echo $this->usr->getEntreprise()->compAddr1 ? $this->usr->getEntreprise()->compAddr1 : "" ?></p>
                            <p id="compAddr2"><?php echo $this->usr->getEntreprise()->compAddr2 ? $this->usr->getEntreprise()->compAddr2 : "" ?></p>
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
                             <p id="CP"><?php echo $this->usr->getEntreprise()->CP ? $this->usr->getEntreprise()->CP : "Non indiqué" ?></p>
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
                            <div id='row'><p id="ville"><?php echo $this->usr->getEntreprise()->ville ? $this->usr->getEntreprise()->ville : "Non indiquée" ?></p></div> 
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
                            <p id="nomPays"><?php echo $this->usr->getEntreprise()->pays ? $this->usr->getEntreprise()->pays : "Non indiqué" ?></p>
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
                            <p id="tel"><?php echo $this->usr->getEntreprise()->tel ? $this->usr->getEntreprise()->tel : "Non indiqué" ?></p>
			</div>
                        <div class="col-md-4">
                                <a href="#">Modifier</a>
                        </div>
		</div>
	</div>
                
                <div class="row"> 
                    <div class="form-group" id="emailGroup">
                        <div class="col-md-4 text-right">
                            <label for="email" class="control-label">Email : </label>
                        </div>
                        <div class="col-md-4">
                            <a href="mailto:<?php echo $this->usr->mail ?>" id="email"><?php echo $this->usr->mail ?></a>
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
				<img src="<?php echo URL ?>/img/iut.jpg" class="photoprofil">
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


