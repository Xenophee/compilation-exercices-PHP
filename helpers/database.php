<?php

require_once(__DIR__ . '/../config/init.php');



/**
 * Permet de récupérer la connexion à la base de données
 * @return object
 */
function dbConnect ():object {
    
    // Création d'une nouvelle instance de classe PDO pour la connexion à la base de données
    $pdo = new PDO(DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);

    // Pour mettre le mode de retour des données en tableau d'objets par défaut
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}