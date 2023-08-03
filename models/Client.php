<?php

require_once(__DIR__ . './../helpers/database.php');

// ---------------------------------------------------------------------------------------------------------------------------------------------

/**
 * Permets de récupérer tous les noms, prénoms et dates de naissance des clients
 * @return array
 */
function getClients(): array {

    // On instancie un nouvel objet avec la classe PDO pour lier avec la base de données
    $pdo = dbConnect();

    // On écrit et on stocke la requête SQL pour interroger la base de données
    $sql = 'SELECT `lastName`, `firstName`, `birthDate` FROM `clients`;';

    // On utilise la méthode query de l'objet PDO avec la requête en paramètre et on stocke la réponse dans une variable sth
    $sth = $pdo->query($sql);

    // sth contient un objet PDO statement, donc on fait ensuite appel à la méthode fetchAll de cet objet pour obtenir un tableau de données
    $clients = $sth->fetchAll();

    // On retourne le tableau d'objet en réponse
    return $clients;
}

// ---------------------------------------------------------------------------------------------------------------------------------------------

/**
 * Permet de récupérer les noms et prénoms des 20 premiers clients
 * @return array
 */
function getSomeClients(): array {
    // On instancie un nouvel objet avec la classe PDO pour lier avec la base de données
    $pdo = dbConnect();

    // On écrit et on stocke la requête SQL pour interroger la base de données
    $sql = 'SELECT `lastName`, `firstName`, `birthDate` FROM `clients` LIMIT 20;';

    // On utilise la méthode query de l'objet PDO avec la requête en paramètre et on stocke la réponse dans une variable sth
    $sth = $pdo->query($sql);

    // sth contient un objet PDO statement, donc on fait ensuite appel à la méthode fetchAll de cet objet pour obtenir un tableau de données
    $clients = $sth->fetchAll();

    // On retourne le tableau d'objet en réponse
    return $clients;
}

// ---------------------------------------------------------------------------------------------------------------------------------------------

/**
 * Permets de récupérer les clients ayant une carte
 * @return array
 */
function getClientswithCards(): array {

    // On instancie un nouvel objet avec la classe PDO pour lier avec la base de données
    $pdo = dbConnect();

    // On écrit et on stocke la requête SQL pour interroger la base de données
    $sql = 'SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate` FROM `clients`
            JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`
            WHERE `cards`.`cardTypesId` = 1;';

    // On utilise la méthode query de l'objet PDO avec la requête en paramètre et on stocke la réponse dans une variable sth
    $sth = $pdo->query($sql);

    // sth contient un objet PDO statement, donc on fait ensuite appel à la méthode fetchAll de cet objet pour obtenir un tableau de données
    $clients = $sth->fetchAll();

    // On retourne le tableau d'objet en réponse
    return $clients;
}

// ---------------------------------------------------------------------------------------------------------------------------------------------

/**
 * Permets de récupérer les clients dont le nom commence par M et de les trier par ordre alphabétique
 * @return array
 */
function getClientsStartwithM(): array {
    // On instancie un nouvel objet avec la classe PDO pour lier avec la base de données
    $pdo = dbConnect();

    // On écrit et on stocke la requête SQL pour interroger la base de données
    $sql = 'SELECT `lastName`, `firstName` FROM `clients` 
            WHERE `lastName` LIKE \'M%\'
            ORDER BY `lastName`;';

    // On utilise la méthode query de l'objet PDO avec la requête en paramètre et on stocke la réponse dans une variable sth
    $sth = $pdo->query($sql);

    // sth contient un objet PDO statement, donc on fait ensuite appel à la méthode fetchAll de cet objet pour obtenir un tableau de données
    $clients = $sth->fetchAll();

    // On retourne le tableau d'objet en réponse
    return $clients;
}

// ---------------------------------------------------------------------------------------------------------------------------------------------

/**
 * Permets de récupérer toutes les informations des clients
 * @return array
 */
function getAllInformations(): array {

    // On instancie un nouvel objet avec la classe PDO pour lier avec la base de données
    $pdo = dbConnect();

    // On écrit et on stocke la requête SQL pour interroger la base de données
    $sql = 'SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate`,
            IF( `cards`.`cardTypesId`= 1 ,\'oui\',\'non\') AS `fidelity`,
            IF(`cards`.`cardTypesId`= 1,`clients`.`cardNumber`,\'\') AS `cardFidelity`
            FROM `clients`
            LEFT JOIN `cards` ON `cards`.`cardNumber` = `clients`.`cardNumber`;';

    // On utilise la méthode query de l'objet PDO avec la requête en paramètre et on stocke la réponse dans une variable sth
    $sth = $pdo->query($sql);

    // sth contient un objet PDO statement, donc on fait ensuite appel à la méthode fetchAll de cet objet pour obtenir un tableau de données
    $clients = $sth->fetchAll();

    // On retourne le tableau d'objet en réponse
    return $clients;
}

// ---------------------------------------------------------------------------------------------------------------------------------------------