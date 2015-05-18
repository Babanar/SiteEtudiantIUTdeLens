                                
    
                                <div class="row" id="entete_connexion">
                                    <?php $this->renderFeedback('connexion'); ?>
                                    <div class="col-md-6">
                                        <input type="mail" class="form-control input-small" placeholder="Adresse mail" id="mail_connexion">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control input-small" placeholder="Mot de passe" id="mdp_connexion">
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
							<button type="submit" class="btn btn-info btn-sm mainpage-link" id="btn_inscription" 
                                                                href="inscription/index">
                                                            Inscription
                                                        </button>
						</div>
				</div>