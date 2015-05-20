<?php
// Démarre une nouvelle session ou reprend une session existante
session_start();

// Destruction des variables de session
session_unset();

// Destruction de la session existante
session_destroy();

// Redirection vers la page index.php
header('Location: ../index.php');
?>