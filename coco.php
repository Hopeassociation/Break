<?php

require_once 'app/model/dataConnection.php';
require_once 'app/model/nosbieres.model.php';
require_once 'config.php';

//connexion db
$databaseConnection = getDatabaseConnection();

//toutes les bieres
$all_biere = getAllBiere($databaseConnection);

$nom_biere = $all_biere[1]['nom'];
$degre = $all_biere[1]['degre'];
$type = $all_biere[1]['type'];
$gout = $all_biere[1]['fruit'];


//Génération de la page
$page_title = $nom_biere;

ob_start();
require_once 'app/view/parts/biere/coco.view.php';
$content = ob_get_clean();
$css = "public/css/biere.css";
require_once 'app/view/common/layout.php';