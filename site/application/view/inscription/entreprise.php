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
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-9">
					<label for="Email" class="control-label">E-mail<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="email" class="form-control" id="Email" required>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-7">
					<label for="Password" class="control-label">Mot de passe<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="password" class="form-control" id="Password" required>
			</div>
		</div>
	</div>
  
  <div class="col-md-offset-2">
		<div class="form-group">
			<legend>Profil </legend>
		</div>
	</div>

  <div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-5">
					<label for="Nomentr" class="control-label">Nom de l'entreprise<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Nomentre" required>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-5">
					<label for="secteurAct" class="control-label">Secteur d'activité<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="secteurAct" required>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-3">
					<label for="Siret" class="control-label">Numéro de SIRET/SIREN<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="number_format" class="form-control" id="Siret" required>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-9">
					<label for="Pays" class="control-label">Pays<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<select id="Pays" class="form-control" required>
					<option>France</option>
				</select>
			</div>
		</div>
	</div>
  
	<div class="row"> 
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-9">
					<label for="Ville" class="control-label">Ville<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Ville" required>
			</div>
		</div>
	</div>
  
  <div class="row"> 
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-7">
					<label for="CP" class="control-label">Code Postal<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Ville" required>
			</div>
		</div>
	</div>
	
	<div class="row"> 
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-7">
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
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-7">
					<label for="Tel" class="control-label">Téléphone : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="phone" class="form-control" id="Tel">
			</div>
		</div>
	</div>
	
	<div class="row">
    <div class="form-group">
		<div class="col-md-5">
			<div class="col-md-offset-6">
				<label for="photo" class="control-label">Photo de profil<span id="req">*</span> : </label>
			</div>
		</div>
			<div class="col-md-7">
				<input type="file" class="file" id="Photo" required>
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