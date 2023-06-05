<?php

require_once 'app/model/dataConnection.php';
require_once 'app/model/nosbieres.model.php';
require_once 'app/model/panier.model.php';
require_once 'config.php';

//connexion db
$databaseConnection = getDatabaseConnection();

//on recupere le dernier panier
$panier_on = getIdPanier($databaseConnection);
$panier_on = $panier_on+1;

//on cree un nouveau panier
addNewPanier($databaseConnection, $panier_on);


//toutes les bieres
$all_biere = getAllBiere($databaseConnection);

//nombre_biere
$len = count($all_biere);

$page_title = "Mon panier";

ob_start();
require_once 'app/view/parts/panier.view.php';
$content = ob_get_clean();
$css = "public/css/panier.css";
require_once 'app/view/common/layout.php';