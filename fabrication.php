<?php
require_once 'database.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/nosbieres.model.php';
require_once 'config.php';

//Connection bd

$databaseConnection = getDatabaseConnection();

//nombre biere =
$nb_biere = getNombreBiere($databaseConnection);

//tableau 
$bieres = getNameBiere($databaseConnection);

//Génération de la page
$page_title = 'Fabrication';

ob_start();
require_once 'app/view/parts/fabrication.view.php';
$content = ob_get_clean();
$css = "public/css/fabrication.css";
require_once 'app/view/common/layout_fabrication.php';