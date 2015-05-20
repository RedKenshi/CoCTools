<!-- Création du menu principal responsive -->
<div class="container accueil_container">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<button class="btn btn-navbar collapsed" data-target=".nav-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<a class='brand' href="accueil.php">
						Accueil
					</a>
				<nav class="nav-collapse collapse" role="navigation" style="height: 0px;">
					<ul class="nav">				
						<li>
							<a id='new_patient' href="javascript:void(0);">
								Nouveau patient
							</a>
						</li>	

						<!-- Affichage seulement si le compte est de type administrateur -->
						<?php
							if($_SESSION['privilege'] == 'Administrateur'){
						?>						
						<li class="divider-vertical"></li>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">Administration <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a id='new_compte' href="javascript:void(0);">
										Nouveau compte
									</a>
								</li>
								<li>
									<a id='gerer_compte' href="javascript:void(0);">
										Gérer les comptes
									</a>
								</li>
								<li>
									<a id='liste_patient' href="javascript:void(0);">
										Liste des patients
									</a>
								</li>
							</ul>
						</li>
						<?php
							}
						?>
						
						<li class="divider-vertical"></li>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">Compte <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a id='update_mdp' href="javascript:void(0);">
										Changer son mot de passe
									</a>
								</li>
								<li>
									<a href="deconnexion.php">
										Se déconnecter
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav-right nav">
						<li>
							<!-- Formulaire recherche patient -->
							<form class="form-search">
								<select class="search-patient">
									<option value=""></option>';
									<?php
										$pdo = create_pdo();

										$patientsSQL = $pdo->query("SELECT RefPatient, Prenom, NomFamille FROM t_patients ORDER BY RefPatient;")->fetchAll(PDO::FETCH_ASSOC);
												
										foreach ($patientsSQL as $patientSQL){
											echo '<option value="'.$patientSQL['RefPatient'].'">'.$patientSQL['Prenom'].' '.$patientSQL['NomFamille'].'</option>';
										}
									?>
								</select>
							</form>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>