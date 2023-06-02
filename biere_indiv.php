<?php

require_once 'app/model/dataConnection.php';
require_once 'app/model/nosbieres.model.php';
require_once 'nosbieres.php';

//connexion db
$databaseConnection = getDatabaseConnection();

//toutes les bieres
$all_biere = getAllBiere($databaseConnection);

$biere_active = 0;
$i = 0;
//pour l'instant 0 mais = $i.nos_bieres.view

//tant que l'id de la biere active est différent de celle de la db
while($biere[]['fruit'] != $all_biere[])  