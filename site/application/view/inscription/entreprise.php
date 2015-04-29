<div>
  <form class="form-horizontal col-md-8 col-md-offset-2">
  <div class="form-group">
    <legend>Inscription entreprise</legend>
  </div>
  
  <div class="col-md-offset-2">
	  <div class="form-group">
		<legend>Identification</legend>
	  </div>
  </div>
  
  <div class="row">
		<div class="form-group" id="emailGroup">
			<div class="col-md-5">
				<div class="col-md-offset-9">
					<label for="Email" class="control-label">E-mail<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="email" class="form-control" id="Email">
				<div class="alert alert-block alert-danger" id="emailalert" style="display:none">
					<h4> Erreur !</h4>
					Veuillez entrer une adresse email valide.
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group" id="pwdGroup">
			<div class="col-md-5">
				<div class="col-md-offset-6">
					<label for="Password" class="control-label">Mot de passe<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="password" class="form-control" id="Password">
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
			<div class="col-md-5">
				<div class="col-md-offset-5">
					<label for="Nomentr" class="control-label">Nom de l'entreprise<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Nomentre">
				<div class="alert alert-block alert-danger" id="NomentrAlert" style="display:none">
					<h4> Erreur !</h4>
					Le nom de l'entreprise est OBLIGATOIRE
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group" id="SiretGroup">
			<div class="col-md-5">
				<div class="col-md-offset-3">
					<label for="Siret" class="control-label">Numéro de SIRET/SIREN<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="number_format" class="form-control" id="Siret">
				<div class="alert alert-block alert-danger" id="siretalert" style="display:none">
					<h4> Erreur !</h4>
					Le numéro de SiRET/SIREN doit OBLIGATOIREMENT contenir 14 chiffres
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-5">
					<label for="secteurAct" class="control-label">Secteur d'activité : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="secteurAct">
			</div>
		</div>
	</div>
	
	
	
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-9">
					<label for="Pays" class="control-label">Pays : </label>
				</div>
			</div>
			<div class="col-md-7">
				<select id="Pays" class="form-control">
					<option>France</option>
				</select>
			</div>
		</div>
	</div>
  
	<div class="row"> 
		<div class="form-group " id="cityGroup">
			<div class="col-md-5">
				<div class="col-md-offset-9">
					<label for="Ville" class="control-label">Ville : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Ville">
				<div class="alert alert-block alert-danger" id="cityalert" style="display:none">
					<h4> Erreur !</h4>
					Le nom de ville ne peut pas contenir de chiffres
				</div>
			</div>
		</div>
	</div>
  
  <div class="row"> 
		<div class="form-group" id="CPGroup">
			<div class="col-md-5">
				<div class="col-md-offset-7">
					<label for="CP" class="control-label">Code Postal : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="CP">
				<div class="alert alert-block alert-danger" id="CPostalalert" style="display:none">
					<h4> Erreur !</h4>
					Le code postal peut contenir uniquement 5 chiffres
				</div>
			</div>
		</div>
	</div>
	
	<div class="row"> 
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-8">
					<label for="Adresse" class="control-label">Adresse : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Adresse">
				<input type="text" class="form-control" id="compAddr1">
				<input type="text" class="form-control" id="compAddr2">
			</div>
		</div>
	</div>
	
	<div class="row"> 
		<div class="form-group" id="TelGroup">
			<div class="col-md-5">
				<div class="col-md-offset-8">
					<label for="Tel" class="control-label">Téléphone : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="phone" class="form-control" id="Tel">
				<div class="alert alert-block alert-danger" id="Telalert" style="display:none">
					<h4> Erreur !</h4>
					Le numéro de téléphone peut contenir uniquement 10 chiffres
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-6">
					<label for="photo" class="control-label">Photo de profil : </label>
				</div>
			</div>
			<div class="col-md-7">
					<input type="file" class="file" id="Photo">
			</div>
		</div>
	</div>
	
	<div class="row">
  <div class="form-group">
  <div class="col-md-8 col-md-offset-2">
    <label class="control-label">
	<div class="checkbox">
        <input type="checkbox" id="accept" required>J’accepte les <a href="#">règles de protection de mes données</a><span id="req">*</span>
	</div>
	</label>
	</div>
	</div>
  </div>
  
  
<p><span id="req">*</span>Ces champs sont obligatoires</p>

  
  
  <div class="form-group">
    <button class="col-md-offset-5 col-md-7 btn btn-default" id="inscription_btn">Inscription</button>
  </div>
</form>
</div>