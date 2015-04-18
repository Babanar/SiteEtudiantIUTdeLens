<div>
  <form class="form-horizontal col-md-8 col-md-offset-2">
  <div class="form-group">
    <legend>Inscription</legend>
  </div>
  
  <div class="row">
    <div class="form-group">
      <label for="Nom" class="col-md-5 control-label">Nom de famille<span id="req">*</span> : </label>
      <div class="col-md-7">
        <input type="text" class="form-control" id="Nom" required>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group">
      <label for="text" class="col-md-5 control-label">Prénom<span id="req">*</span> : </label>
      <div class="col-md-7">
        <input type="text" class="form-control" id="Prénom" required>
      </div>
    </div>
  </div>
  
  
  <div class="row">
    <div class="form-group">
    <label for="Pays" class="col-md-5 control-label">Pays<span id="req">*</span> : </label>
      <div class="col-md-7">
        <select id="Pays" class="form-control" required>
          <option>France</option>
        </select>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group">
      <label for="Ville" class="col-md-5 control-label">Ville<span id="req">*</span> : </label>
      <div class="col-md-7">
        <input type="text" class="form-control" id="Ville" required>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group">
      <label for="Email" class="col-md-5 control-label">E-mail<span id="req">*</span> : </label>
      <div class="col-md-7">
        <input type="email" class="form-control" id="Email" required>
      </div>
    </div>
  </div>
  
  
  <div class="row">
    <div class="form-group">
      <label for="naisssance" class="col-md-5 control-label">Date de naisssance<span id="req">*</span> : </label>
      <div class="col-md-7">
        <input type="date" class="form-control" id="naisssance" required>
      </div>
    </div>
  </div>
  
  
  
  <div class="row">
    <div class="form-group">
      <label for="profact" class="col-md-5 control-label">Profession ou études actuelles<span id="req">*</span> : </label>
      <div class="col-md-7">
        <input type="text" class="form-control" id="profact" required>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group">
      <label for="profant" class="col-md-5 control-label">Profession ou études antérieures<span id="req">*</span> : </label>
      <div class="col-md-7">
        <input type="text" class="form-control" id="profant" required>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group">
    <label for="Formation" class="col-md-5 control-label">Études à l'IUT<span id="req">*</span> : </label>
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
      <label for="photo" class="col-md-5 control-label">Photo de profil<span id="req">*</span> : </label>
      <div class="col-md-7">
        <input type="file" class="file" id="Photo" required>
      </div>
    </div>
  </div>
  
  <div class="row">
  <div class="form-group">
  <div class="col-md-12">
    <label class="control-label">
	<div class="col-md-offset-5 checkbox">
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

