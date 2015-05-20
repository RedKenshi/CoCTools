<?php
// Importation des paramètres de connexion à la BDD
require_once("parametres.php");

if(isset($_POST['action'])){
  switch($_POST['action']){
    case "verif_pseudo_libre":
      echo verif_pseudo_libre($_POST['pseudo']);
      break;
  }
}

// Fonction de création d'un objet PDO
function create_pdo() {
    $pdo = new PDO("mysql:host=" . COC_DATABASE_HOST . ";dbname=" . COC_DATABASE_NAME . ";charset=utf8", COC_DATABASE_USER, COC_DATABASE_PASSWORD);
    return $pdo;
}

// Fonction de conversion d'un Array vers un String
function array_to_string($array) {
    echo "<pre>";
    	print_r($array);
    echo "</pre>";
}

// Fonction de vérification de connexion
// Empêche le saut d'URL et le retour navigateur
function verifco()
{	
	if(!isset($_SESSION['identification']) || empty($_SESSION['identification']))
	{
		header('Location: ../index.php');
	}
}

function verif_pseudo_libre($test){
  $pdo = create_pdo();
  $pseudos = $pdo->query("SELECT pseudo_user FROM t_users")->fetchAll(PDO::FETCH_ASSOC);
  $pseudo_libre = 'OUI';
  foreach ($pseudos as $pseudo){
    if($pseudo['pseudo_user'] == $test){
      $pseudo_libre = 'NON';
    }
  }
	echo $pseudo_libre;
}
?>