<?php

require_once(__DIR__ . './../helpers/database.php');


// ---------------------------------------------------------------------------------------------------------------------------------------------

/**
 * Permets de récupérer tous les types de spectacles
 * @return array
 */
function getShowtypes ():array {

    // On instancie un nouvel objet avec la classe PDO pour lier avec la base de données
    $pdo = dbConnect();

    // On écrit et on stocke la requête SQL pour interroger la base de données
    $sql = 'SELECT `type` FROM `showtypes`;';

    // On utilise la méthode query de l'objet PDO avec la requête en paramètre et on stocke la réponse dans une variable sth
    $sth = $pdo->query($sql);

    // sth contient un objet PDO statement, donc on fait ensuite appel à la méthode fetchAll de cet objet pour obtenir un tableau de données
    $showtypes = $sth->fetchAll();

    // On retourne le tableau d'objet en réponse
    return $showtypes;
}

// ---------------------------------------------------------------------------------------------------------------------------------------------