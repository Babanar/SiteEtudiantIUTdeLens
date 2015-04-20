<div>
  <form class="form-horizontal col-md-8 col-md-offset-2">
  <div class="form-group">
    <legend>Inscription</legend>
  </div>
  
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-6">
					<label for="Nom" class="control-label">Nom de famille<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Nom" required>
			</div>
		</div>
	</div>
  
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-8">
					<label for="text" class="control-label">Prénom<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Prénom" required>
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
				<div class="col-md-offset-5">
					<label for="naisssance" class="control-label">Date de naisssance<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="date" class="form-control" id="naisssance" required>
			</div>
		</div>
	</div>
  
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-1">
					<label for="profact" class="control-label">Profession ou études actuelles<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="profact" required>
			</div>
		</div>
	</div>
  
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
					<label for="profant" class="control-label">Profession ou études antérieures<span id="req">*</span> : </label>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="profant" required>
			</div>
		</div>
	</div>
  
  
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-6">
					<label for="Formation" class="control-label">Études à l'IUT<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<select id="Formation" class="form-control" required>
				  <option>TC</option>
				  <option>GEA</option>
				  <option>MMI</option>
				  <option>INFO</option>
				</select>
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

