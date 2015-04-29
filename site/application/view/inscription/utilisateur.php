<div>
  <form class="form-horizontal col-md-8 col-md-offset-2" id="form_inscription">
  <div class="form-group">
    <legend>Inscription Etudiant et Personnel</legend>
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
		<div class="form-group" id="surnameGroup">
			<div class="col-md-5">
				<div class="col-md-offset-6">
					<label for="Nom" class="control-label">Nom de famille<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Nom">
				<div class="alert alert-block alert-danger" id="surnamealert" style="display:none">
					<h4> Erreur !</h4>
					Le nom de famille est OBLIGATOIRE et ne peut contenir de chiffres
				</div>
			</div>
		</div>
	</div>
  
	<div class="row">
		<div class="form-group" id="nameGroup">
			<div class="col-md-5">
				<div class="col-md-offset-8">
					<label for="Prénom" class="control-label">Prénom<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Prenom">
				<div class="alert alert-block alert-danger" id="namealert" style="display:none">
					<h4> Erreur !</h4>
					Le prénom est OBLIGATOIRE et ne peut contenir de chiffres
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
				<div class="col-md-offset-4">
					<label for="naisssance" class="control-label">Date de naisssance<span id="req">*</span> : </label>
				</div>
			</div>
			<div class="col-md-7">
				<div class='input-group date'>
                    <input type='date' class="form-control" id='datepicker' />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
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
				<div class="col-md-offset-1">
					<label for="profact" class="control-label">Profession ou études actuelles : </label>
				</div>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="profact">
			</div>
		</div>
	</div>
  
	<div class="row">
		<div class="form-group">
			<div class="col-md-5">
					<label for="profant" class="control-label">Profession ou études antérieures : </label>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="profant">
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
	
	<div class="col-md-offset-2">
	  <div class="form-group">
		<legend>Etudes</legend>
	  </div>
	</div>

	
	<div class="row">
		<div class="form-group" id="FormationsGroup">
			<div class="col-md-5">
					<label for="etudes" class="control-label">Formations suivies à l'IUT<span id="req">*</span> : </label>
			</div>
				<div class="col-md-7">
					<div class="col-md-offset-1">
						<div class="checkbox">
								<input type="checkbox" id="TCcheck">TC
						</div>
						
						<div class="checkbox">
								<input type="checkbox" id="GEACheck">GEA
						
						</div>
						
						<div class="checkbox">
								<input type="checkbox" id="MMICheck">MMI
						</div>
						
						<div class="checkbox">
								<input type="checkbox" id="INFOCheck">INFO
						</div>
						
						<div class="checkbox">
								<input type="checkbox" id="SEPIACheck">SEPIA
						</div>
						
						<div class="checkbox">
								<input type="checkbox" id="ProfCheck">PROF
						</div>
					</div>				
				</div>
				<div class="alert alert-block alert-danger" id="formationsAlert" style="display:none">
					<h4> Erreur !</h4>
					Vous devez cocher au moins une formation
				</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group" id="entreeGroup">
			<div class="col-md-5">
					<label for="Entree" class="control-label">Année d'entrée à l'IUT<span id="req">*</span> : </label>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Entree">
				<div class="alert alert-block alert-danger" id="entreeAlert" style="display:none">
					<h4> Erreur !</h4>
					L'année d'entrée n'est pas valide, est supérieure à l'année de sortie ou est inférieure à 1945
				</div>

			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group" id="sortieGroup">
			<div class="col-md-5">
					<label for="Sortie" class="control-label">Année de sortie de l'IUT<span id="req">*</span> : </label>
			</div>
			<div class="col-md-7">
				<input type="text" class="form-control" id="Sortie">
				<div class="alert alert-block alert-danger" id="sortieAlert" style="display:none">
					<h4> Erreur !</h4>
					L'année de sortie n'est pas valide, est inférieure à l'année de sortie ou est inférieuree à 1945
				</div>
			</div>
		</div>
	</div>
  
	<div class="row">
		<div class="form-group" id="reglesGroup">
			<div class="col-md-8 col-md-offset-2">
				<label class="control-label">
					<div class="checkbox">
						<input type="checkbox" id="accept">J’accepte les <a href="#">règles de protection de mes données</a><span id="req">*</span>
						<div class="alert alert-block alert-danger" style="display:none">
					<h4> Erreur !</h4>
					Vous devez accepter les <a href="#">règles de protection de mes données</a> pour pouvoir continuer.
				</div>
					</div>
				</label>
			</div>
		</div>
	</div>
  
  
<p><span id="req">*</span>Ces champs sont obligatoires</p>

  
  
  <div class="form-group">
    <button type="submit" class="col-md-offset-5 col-md-7 btn btn-default" id="inscription_btn">Inscription</button>
  </div>
</form>
</div>


  
  
  