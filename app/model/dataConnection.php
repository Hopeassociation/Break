<?php 

function getDatabaseConnection(): PDO
{
    $dsn = 'mysql:dbname=pokemon;host=localhost;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $databaseConnection = new PDO ($dsn, $username, $password);
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $databaseConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    catch(PDOException $e) {
        die('Erreur de connexion à la base de données' .$e->getMessage());
    }
    return $databaseConnection;
}
