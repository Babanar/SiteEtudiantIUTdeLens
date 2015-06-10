<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Alumni IUT de Lens</title>
  <meta charset="utf-8">
  <meta name="keywords" lang="fr" content="alumni, Lens, IUT,anciens, élèves">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  

  
  
</head>
<body id="body">

<div class="container">
   <!-- Entête de présentation -->
  <div class="row" >
		<div class=" col-md-12 col-sm-12 entete " id="ligne_entete">
			<div class="row">
				<div class="col-md-2 col-sm-1 col-md-offset-0 col-sm-offset-1 logo">
					<img src="<?php echo URL; ?>img/logo_iut.png"/>
				</div>
				<div class="col-md-8 col-sm-8 titre">
					<h1> J'ai étudié à l'IUT de Lens </h1>
				</div>
				<div class="col-md-2 col-sm-1 logo">
					<img src="<?php echo URL; ?>img/logo_projet.png"/>
				</div>
			</div>
		</div>
  </div>
   <!-- Entête de navigation -->
  <div class="row "> 
    <div class=" col-md-12 col-sm-12 departement_color" id="navbar">
		<div class="row" id="navbar_btn">
			<div class="col-md-2 col-sm-2">
				<button type="button" class="btn" id="TC_COLOR">TC</button>
			</div>
			<div class="col-md-2 col-sm-2">
				<button type="button" class="btn" id="GEA_COLOR">GEA</button>
			</div>
			<div class="col-md-2 col-sm-2">
				<button type="button" class="btn" id="MMI_COLOR">MMI
				</button>
			</div>
			<div class="col-md-2 col-sm-2">
				<button type="button" class="btn" id="INFO_COLOR">INFO</button>
			</div>
			<div class="col-md-2 col-sm-2">
				<button type="button" class="btn" id="PROF_COLOR">PROF</button>
			</div>
                    
			<div class="col-md-2 col-sm-2">
				<button type="button" class="btn" id="ENTREPRISE_COLOR">Entreprise
				</button>
			</div>
		</div>
		
		<div class="row">
                    <hr>
			<div class="col-md-5 col-sm-12">
				<div class="row" id="entete_recherche">
                                    <div class="col-md-3 col-sm-3">
                                        <button type="button" class="btn departement_color mainpage-link btn-sm" href="">Accueil</button>
                                    </div>
                                                    <!--
                                                    <div class="col-md-7">
                                                            <input type="text" class="form-control input-small" placeholder="Mots clés">
                                                    </div>
                                                    <div class="col-md-5">
                                                            <button type="submit" class="btn btn-default btn-sm">Rechercher</button>
                                                    </div>
                                                -->
                                    <div class="col-md-5 col-sm-5">

                                        Nombre inscrits : 
                                        <?php 
                                            $superUtilSQL = new Super_UtilSQL();
                                            echo $superUtilSQL->count();
                                        ?>
                                    </div>
                                                
                                    <div class="col-md-4 col-sm-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                        <?php $this->renderWithoutHeaderAndFooter('recherche/input_recherche.php'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
			</div>
			<div class="col-md-offset-1 col-md-6 col-sm-12" id="header_user">

                                <?php
                                
                                if(!User::isLoggedIn()){
                                    $this->renderWithoutHeaderAndFooter(
                                    '_templates/user/connexion_inscription.php');
                                }else{
                                    $this->renderWithoutHeaderAndFooter(
                                    '_templates/user/connected.php');
                                }
                              
                                 ?>
			</div>
		</div>

    </div>

    
  </div>
    <!-- ouverture de la div principale -->
  <div class="row">
    <div class="col-md-12 departement_color_border" id="mainblock" >
         <div class="row" id="mainpage">
