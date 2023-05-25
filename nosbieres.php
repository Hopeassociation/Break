<?php

require_once 'database.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/nosbieres.model.php';

//Connection bd

$databaseConnection = getDatabaseConnection();

//nombre biere =

$nb_biere = getNombreBiere($databaseConnection);

//Génération de la page
$page_title = 'Nos bières';

ob_start();
require_once 'app/view/parts/nosbieres.view.php';
$content = ob_get_clean();
$css = "public/css/nosbieres.css";
require_once 'app/view/common/layout.php';