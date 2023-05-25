
<?php

// récuperer le nombre de bieres dans notre db

function getNombreBiere(PDO $db): int {
    $sql = "SELECT COUNT(*) as nb_biere FROM `biere`";
    $query = $db->query($sql);
    $result = $query->fetch();

    return $result;
}

// récupérer le nom de chaque bière 