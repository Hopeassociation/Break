<?php

require_once 'database.php';
require_once 'app/model/dataConnection.php';

//Connection bd

$databaseConnection = getDatabaseConnection();

//Génération de la page
$page_title = 'Connexion';

ob_start();
require_once 'app/view/parts/connexion.view.php';
$content = ob_get_clean();
$css = "public/css/connexion.css";
require_once 'app/view/common/layout.php';