<?php

function getClient(PDO $db): int {
    $sql = "SELECT MAX(id_client) as client FROM `client`";
    $query = $db->query($sql);
    $result = $query->fetchAll();
    
    return $result;
}