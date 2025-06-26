<?php
// index.php
include './src/template/head.php';  // Inclure l'en-tête commun
// Inclure l'en-tête commun
include './src/template/header.php';

// Vérifier si un paramètre "page" est passé dans l'URL
$page = isset($_GET['page']) ? $_GET['page'] : 'homepage'; // Par défaut, on affiche la page d'accueil

// Charger la page spécifique en fonction de la valeur de "page"
switch ($page) {
    // case 'homepage':
    //     include('./src/page/homepage.php');
    //     break;

    case 'homepage':    
    default:
        include('./src/page/homepage.php');
        break;
}

// Inclure le pied de page commun
include './src/template/footer.php';
