<?php


require_once 'app/model/dataConnection.php';
require_once 'app/model/biere_indiv.model.php';

//Connection bd
$databaseConnection = getDatabaseConnection();

if(!isset($_SESSION)){
    session_start();
 }

  //creer la session
  if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
 }

//on récupère la ref de la biere
 if(isset($_GET['id'])){
    $id = $_GET['id'] ;
}

//ATTENTION $bieres != $biere
$biere = chercherBiere($id,$databaseConnection);

//Ajout biere panier
if(isset($_SESSION['panier'][$id])){// si le produit est déjà dans le panier
    $_SESSION['panier'][$id]++; //Représente la quantité 
}else {
    //si non on ajoute le produit
    $_SESSION['panier'][$id]= 1 ;

    //redirection vers la page index.php
   header("Location:index.php");
}