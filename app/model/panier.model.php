<?php

function getIdPanier(PDO $db)
{
    $sql = "SELECT MAX(Id_panier) AS max_id FROM `etre_contenir`";
    $query = $db->query($sql);
    $result = $query->fetch();

    return $result['max_id'];
}

function addNewPanier(PDO $db, $panier)
{
    $sql = "INSERT INTO etre_contenir (Id_panier) VALUES (:Id_panier)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':Id_panier', $panier);
    return $stmt->execute();
}

