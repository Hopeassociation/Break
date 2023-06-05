<?php

//fonction qui récupère tous les éléments
function getElementBiere(PDO $db): array {
    $sql = "SELECT * FROM `biere`;";
    $query = $db->query($sql);
    $result = $query->fetchAll();

    return $result;
}

