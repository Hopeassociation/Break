<?php
//On ouvre une session pour pouvoir stocker
//des données venant de l'utilisateur
session_start();

if (!isset($_SESSION['panier']) || !is_array($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

require_once 'app/model/dataConnection.php';
require_once 'app/model/biere_indiv.model.php';

//Connection bd
$databaseConnection = getDatabaseConnection();
$i = 0;
//info biere
$bieres = getElementBiere($databaseConnection);

$id = $bieres[$i]['ref_biere'];

//Génération de la page
$page_title = 'biere';

ob_start();
require_once 'app/view/parts/biere_indiv.view.php';
$content = ob_get_clean();
$css = "public/css/biere_indiv.css";
require_once 'app/view/common/layout.php';