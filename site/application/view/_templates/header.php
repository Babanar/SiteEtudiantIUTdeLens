<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Stage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">

</head>
<body id="body">

<div class="container">
   <!-- Entête de présentation -->
  <div class="row" >
		<div class="col-md-offset-1 col-md-10 entete " id="ligne_entete">
			<div class="row">
				<div class="col-md-2 logo">
					<img src="img/logo_iut.png"/>
				</div>
				<div class="col-md-8 titre">
					<h1> J'ai étudié à l'IUT de Lens </h1>
				</div>
				<div class="col-md-2 logo">
					<img src="img/logo_projet.png"/>
				</div>
			</div>
		</div>
  </div>
   <!-- Entête de navigation -->
  <div class="row "> 
    <div class="col-md-offset-1 col-md-10" id="navbar">
		<div class="row" id="navbar_btn">
			<div class="col-md-offset-1 col-md-2">
				<button type="button" class="btn" id="TC_BUTTON">  
					TC
				</button>
			</div>
			<div class="col-md-2">
				<button type="button" class="btn" id="GEA_BUTTON">  
					GEA
				</button>
			</div>
			<div class="col-md-2">
				<button type="button" class="btn" id="MMI_BUTTON">  
					MMI
				</button>
			</div>
			<div class="col-md-2">
				<button type="button" class="btn" id="INFO_BUTTON">  
					INFO
				</button>
			</div>
			<div class="col-md-2">
				<button type="button" class="btn" id="PROF_BUTTON">  
					PROF
				</button>
			</div>
		</div>
		
		<div class="row">
                    <hr>
			<div class="col-md-4">
				<div class="row" id="entete_recherche">
						
						<div class="col-md-7">
							<input type="text" class="form-control input-small" placeholder="Mots clés">
						</div>
						<div class="col-md-5">
							<button type="submit" class="btn btn-default btn-sm">Rechercher</button>
						</div>
				</div>
			</div>
			<div class="col-md-offset-2 col-md-6">
                                <div class="row" id="entete_connexion">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-small" placeholder="Adresse mail">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control input-small" placeholder="Mot de passe">
                                    </div>
                                    <div class="checkbox col-md-6">
                                        <label>
                                            <input type="checkbox"/> Se souvenir de moi
                                        </label>
                                      </div>
                                </div>
                            
				<div class="row" id="entete_inscription">
						
						<div class="col-md-offset-2 col-md-5" id="connexion">
							<button type="submit" class="btn btn-info btn-sm" id="btn_connexion">
                                                            Connexion
                                                        </button>
						</div>
						<div class="col-md-5">
							<button type="submit" class="btn btn-info btn-sm" id="btn_inscription">
                                                            Inscription
                                                        </button>
						</div>
				</div>
                            
                                <div class="row" id="entete_profil">
                                    Louis Behague - 1 nouveau message - 2 notifications
                                </div>
                                 
			</div>
		</div>

    </div>

    
  </div>
    <!-- ouverture de la div principale -->
  <div class="row">
    <div class="col-md-offset-1 col-md-10" id="mainpage">
