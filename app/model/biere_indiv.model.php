<?php

//fonction qui récupère tous les éléments
function getElementBiere(PDO $db): array {
    $sql = "SELECT * FROM `biere`;";
    $query = $db->query($sql);
    $result = $query->fetchAll();

    return $result;
}

function chercherBiere(int $ref, PDO $db): array {
    $sql = "SELECT * FROM `biere` WHERE 'ref_biere'= $ref";
    $query = $db->query($sql);
    $result = $query->fetch();

    return $result;
}