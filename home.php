<?php
// Reprend une session existante
session_start();

// Importation du ficher des différentes fonctions
include("Php/fonctions.php");

// Vérification de l'existence de la session
verifco();
?>

<!DOCTYPE html>

<html>

    <!-- Importation du Head  -->
    <?php include('Php/include_head.php'); ?>

    <body>
	
		<!-- Importation du menu -->
		<?php include('Php/include_menu.php'); ?>
		
		<!-- Contenu de la page  -->
		<div class="container well">
			<div class="span12 select_menu">
			
			</div>
			
			<div class="span12 content_page">
				<p id="phrase-accueil">Selectionnez un patient</p>
			</div>
			
		</div>
		
		<div class="modal fade" id="modal_visite_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Voulez-vous réellement supprimer cette visite ?</h4>
					</div>
					<div class="modal-body">
						<span class='delete_important'>Toute suppression sera définitive !</span>
					</div>
					<div class="footer_center modal-footer">
						<button class="btn btn-danger btn-confirm-delete" data-dismiss="modal">Oui</button>
						<button type="button" class="btn btn-inverse" data-dismiss="modal">Non</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="modal_patient_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Voulez-vous réellement supprimer ce patient ?</h4>
					</div>
					<div class="modal-body">
						<span class='delete_important'>Toutes les informations de ce patient seront supprimées<br>ainsi que les visites liées à ce dernier</span>
					</div>
					<div class="footer_center modal-footer">
						<button class="btn btn-danger btn-confirm-patient-delete" data-dismiss="modal">Oui</button>
						<button type="button" class="btn btn-inverse" data-dismiss="modal">Non</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="modal_deco_mdp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Veuillez-vous reconnecter avec votre<br>nouveau mot de passe</h4>
					</div>
					<div class="footer_center modal-footer">
						<button class="btn btn-danger btn-confirm-deco" data-dismiss="modal">Se déconnecter</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="modal_compte_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Voulez-vous réellement supprimer ce compte ?</h4>
					</div>
					<div class="footer_center modal-footer">
						<button class="btn btn-danger btn-confirm-patient-delete" data-dismiss="modal">Oui</button>
						<button type="button" class="btn btn-inverse" data-dismiss="modal">Non</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Importation des fichiers JavaScript à la fin pour une meilleure performance -->
		<?php include('../Php/include_javascript.php'); ?>
		
		<!-- Appel de la fonction init_accueil lorsque la page est prête -->
        <script type='text/javascript'>
            $(document).ready(init_accueil);
        </script>
		
    </body>
</html>
