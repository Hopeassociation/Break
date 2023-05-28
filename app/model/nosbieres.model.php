
<?php

//Fonction qui récupére le nombre de biere dans la base de donnée

function getNombreBiere(PDO $db): int {
    $sql = "SELECT COUNT(*) as nb_biere FROM `biere`";
    $query = $db->query($sql);
    $result = $query->fetch();

    return $result['nb_biere'];
}

//Fonction qui récupere le nom des biere et fruits 

function getNameBiere(PDO $db): array {
    $sql = "SELECT nom as nom_biere, fruit as fruit FROM `biere`;";
    $query = $db->query($sql);
    $result = $query->fetchAll();

    return $result;
}



// récuperer le nombre de bieres dans notre db

// function getNombreBiere(PDO $db): int {
//     $sql = "SELECT COUNT(*) as nb_biere FROM `biere`";
//     $query = $db->query($sql);
//     $result = $query->fetch();

//     return $result;
// }

// récupérer le nom de chaque bière 