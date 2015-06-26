<div>
    <form class="form-horizontal col-md-8 col-md-offset-2" id="form_inscription_entreprise">
  <div class="form-group">
    <legend>Inscription entreprise</legend>
  </div>
  <div class="row">
      <div class="col-md-offset-7">
        <?php $this->renderFeedback('inscription'); ?>
      </div>
  </div>
     
  <div class="col-md-offset-2">
	  <div class="form-group">
		<legend>Identification</legend>
	  </div>
  </div>
  
  <div class="row">
		<div class="form-group" id="emailGroup">
			<div class="col-md-5 text-right">
					<label for="Email" class="control-label">E-mail<span id="req">*</span> : </label>
			</div>
			<div class="col-md-7">
				<input type="email" class="form-control" id="email" value="<?php echo (!isset($_POST['email'])?"":$_POST['email']); ?>">
				<div class="alert alert-block alert-danger" id="emailalert" style="display:none">
					<h4> Erreur !</h4>
					Veuillez entrer une adresse email valide.
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group" id="pwdGroup">
			<div class="col-md-5 text-right">
					<label for="Password" class="control-label">Mot de passe<span id="req">*</span> : </label>
			</div>
			<div class="col-md-7">
				<input type="password" class="form-control" id="password" value="<?php echo (!isset($_POST['password'])?"":$_POST['password']); ?>">
				<div class="alert alert-block alert-danger" id="pwdalert" style="display:none">
					<h4> Erreur !</h4>
					Le mot de passe doit contenir au moins 8 caractères
				</div>
			
			</div>
		</div>
	</div>
  
  <div class="col-md-offset-2">
		<div class="form-group">
			<legend>Profil </legend>
		</div>
	</div>

  <div class="row">
		<div class="form-group" id="entrNomGroup">
			<div class="col-md-5 text-right">
					<label for="Nomentr" class="control-label">Nom de l'entreprise<span id="req">*</span> : </label>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="nomentre" value="<?php echo (!isset($_POST['nomentre'])?"":$_POST['nomentre']); ?>">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group" id="SiretGroup">
			<div class="col-md-5 text-right">
					<label for="numSiret" class="control-label">Numéro de SIRET/SIREN : </label>
			</div>
			<div class="col-md-7">
				<input type="number_format" class="form-control" id="numSiret" value="<?php echo (!isset($_POST['numSiret'])?"":$_POST['numSiret']); ?>">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group">
			<div class="col-md-5 text-right">
					<label for="secteurAct" class="control-label">Secteur d'activité : </label>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="secteurAct" value="<?php echo (!isset($_POST['secteurAct'])?"":$_POST['secteurAct']); ?>">
			</div>
		</div>
	</div>
	
	
	
	<div class="row">
		<div class="form-group">
			<div class="col-md-5 text-right">
					<label for="Pays" name="Pays" class="control-label">Pays : </label>
			</div>
			<div class="col-md-7">
				<select id="pays" class="form-control">
                                    <option value="France">France</option>
                                    
				</select>
			</div>
		</div>
	</div>
  
	<div class="row"> 
		<div class="form-group " id="cityGroup">
			<div class="col-md-5 text-right">
					<label for="Ville" class="control-label">Ville : </label>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="ville" value="<?php echo (!isset($_POST['ville'])?"":$_POST['ville']); ?>">
			</div>
		</div>
	</div>
  
  <div class="row"> 
		<div class="form-group" id="CPGroup">
			<div class="col-md-5 text-right">
					<label for="CP" class="control-label">Code Postal : </label>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="CP" value="<?php echo (!isset($_POST['CP'])?"":$_POST['CP']); ?>">
			</div>
		</div>
	</div>
	
	<div class="row"> 
		<div class="form-group">
			<div class="col-md-5 text-right">
					<label for="adresse" class="control-label">Adresse : </label>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="adresse" value="<?php echo (!isset($_POST['adresse'])?"":$_POST['adresse']); ?>">
				<input type="text" class="form-control" id="compAddr1" value="<?php echo (!isset($_POST['compAddr1'])?"":$_POST['compAddr1']); ?>">
				<input type="text" class="form-control" id="compAddr2" value="<?php echo (!isset($_POST['compAddr2'])?"":$_POST['compAddr2']); ?>">
			</div>
		</div>
	</div>
	
	<div class="row"> 
		<div class="form-group" id="TelGroup">
			<div class="col-md-5 text-right">
					<label for="Tel" class="control-label">Téléphone : </label>
			</div>
			<div class="col-md-7">
				<input type="phone" class="form-control" id="tel" value="<?php echo (!isset($_POST['tel'])?"":$_POST['tel']); ?>">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group" id="reglesGroup">
			<div class="col-md-7 col-md-offset-5">
				<label class="control-label">
					<div class="checkbox">
						<input type="checkbox" id="accept">J’accepte les <a href="#">règles de protection de mes données</a><span id="req">*</span>
					</div>
				</label>
			</div>
		</div>
	</div>
  
  
<p><span id="req">*</span>Ces champs sont obligatoires</p>

<div class="g-recaptcha" data-sitekey="<?php echo CAPTCHA_PUBLIC; ?>"></div>  
  
  <div class="form-group">
      <button type="submit" class="col-md-offset-5 col-md-7 btn btn-default" id="inscription_btn">Inscription</button>

  </div>
</form>

<script src="https://www.google.com/recaptcha/api.js"></script>
</div>