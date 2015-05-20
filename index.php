<?php
// Importation du ficher des différentes fonctions
include("Php/fonctions.php");

// Création du PDO grâce à une fonction
$pdo = create_pdo();

// Destruction des variables de session
session_unset();

// Vérification du contenu des champs du formulaire de connexion
if (isset($_POST['login_login']) && !empty($_POST['login_login']) && isset($_POST['password_login']) && !empty($_POST['password_login'])) {

    $mdp = md5($_POST['password_login']);
    $ident = $_POST['login_login'];

    $requete = $pdo->query("SELECT * FROM t_users WHERE pseudo_user LIKE " . $pdo->quote($ident) . " AND hash_user LIKE " . $pdo->quote($mdp) . " LIMIT 1")->fetch(PDO::FETCH_ASSOC);

    if (($requete['pseudo_user'] == $ident) && ($requete['hash_user'] == $mdp)) {
        session_start();
	  	  $_SESSION['identification'] = true;
	     	$_SESSION['privilege'] = $requete['type_user'];
	    	$_SESSION['id_compte'] = $requete['id_user'];
        header('Location: home.php');
		  exit();
    } else {
        $erreur_message = "Login or password wrong.";
    }
}
?>

<!DOCTYPE html>

<html class='index_full'>
    <!-- Importation du Head  -->
    <?php include('Php/include_head_index.php'); ?>

    <body class='index_full'>

        <!-- Bouton de connexion -->
        <div id="page">
            <div id="content_container">
                <div id="content">
                    <div id="block-btn-home">
                        <button type="button" class="login_button btn btn-large btn-inverse btn-home" data-toggle="modal" data-target="#modal_login">
                            Login
                        </button>
                        </br>
                        <button type="button" class="register_button btn btn-large btn-inverse btn-home" data-toggle="modal" data-target="#modal_register">
                            Register
                        </button>
                    </div>    
                </div>
            </div>
        </div>
        
        <button type="button" class="register_button btn btn-large btn-inverse btn-home" data-toggle="modal" data-target="#modal_register">
            Merde
         </button>
      
      <!-- Modal de connexion -->
        <form method='POST'>
            <div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="modal_login" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal_login">Login</h4>
                        </div>
                        <div class="modal-body">
                            <label for="login_login">Login</label>
                            <input class="form-control" id="login_login" type="text" name='login_login'>
                            <br />
                            <label for="mdp_login">Password</label>
                            <input class="form-control" id="password_login" type="password" name='password_login'>
                        </div>
                        <div class="footer_center modal-footer">
                            <button type='submit' class="btn btn-success" id="login">Login</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
        <!-- Modal de création de compte -->
        <form method='POST'>
            <div class="modal fade" id="modal_register" tabindex="-1" role="dialog" aria-labelledby="modal_register" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal_register">Register</h4>
                        </div>
                        <div class="modal-body">
                            <div id="register_login_group" class="form-group">
                                <label for="login">Login</label>
                                <input class="form-control" id="login_register" type="text" name='identifiant'>
                                <span id="message_login"></span>
                            </div>
                            <br />
                            <div id="register_mail_group" class="form-group">
                                <label for="email">Mail address</label>
                                <input class="form-control" id="email" type="text" name='email'>
                                <spanid="message_mail"></span>
                                <br />
                                <label for="email_co">Mail address confirmation</label>
                                <input class="form-control" id="email_co" type="text" name='email_co'>
                            </div>
                            <br />
                            <div id="register_password_group" class="form-group">
                                <label for="mdp">Password</label>
                                <input class="form-control" id="mdp" type="password" name='mdp'>
                                <span id="message_password"></span>
                                <br />
                                <label for="mdp_co">Password confirmation</label>
                                <input class="form-control" id="mdp_co" type="password" name='mdp_co'>
                            </div>
                        </div>
                        <div class="footer_center modal-footer">
                            <button type='button' class="btn btn-success" id="submit-register">Register</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      
		    <!-- Appel de la fonction init_index lorque la page est prête -->
        <script type='text/javascript'>
            $(document).ready(init_index);
        </script>

    </body>
</html>