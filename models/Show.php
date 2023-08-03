<?php

require_once(__DIR__ . './../helpers/database.php');


// ---------------------------------------------------------------------------------------------------------------------------------------------

/**
 * Permets de récupérer toutes les informations d'un spectacle
 * @return array
 */
function getShows ():array {

    // On instancie un nouvel objet avec la classe PDO pour lier avec la base de données
    $pdo = dbConnect();

    // On écrit et on stocke la requête SQL pour interroger la base de données
    $sql = 'SELECT `title`, `performer`, DATE_FORMAT(`date`, \'%d/%m/%Y\') AS `date`, DATE_FORMAT(`startTime`, \'%H\') AS `hour` 
            FROM `shows` 
            ORDER BY `title`;';

    // On utilise la méthode query de l'objet PDO avec la requête en paramètre et on stocke la réponse dans une variable sth
    $sth = $pdo->query($sql);

    // sth contient un objet PDO statement, donc on fait ensuite appel à la méthode fetchAll de cet objet pour obtenir un tableau de données
    $shows = $sth->fetchAll();

    // On retourne le tableau d'objet en réponse
    return $shows;
}

// ---------------------------------------------------------------------------------------------------------------------------------------------