<?php

require_once(__DIR__ . './../config/init.php');

require_once(__DIR__ . './../models/Client.php');
require_once(__DIR__ . './../models/Showtype.php');
require_once(__DIR__ . './../models/Show.php');

// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------

try {

    $document = 'BDD';
    $currentPage = 3;

    $js = '../../public/assets/js/bdd.js';


    $clients = getClients();
    $showtypes = getShowtypes();
    $someClients = getSomeClients();
    $cardsClients = getClientswithCards();
    $mClients = getClientsStartwithM();
    $shows = getShows();
    $allClients = getAllInformations();
    

} catch (\Throwable $th) {
    include_once(__DIR__ . './../views/templates/header.php');
    include_once(__DIR__ . './../views/error.php');
    include_once(__DIR__ . './../views/templates/footer.php');
    die;
}





// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------
// AFFICHAGE DES VUES

include_once(__DIR__ . './../views/templates/header.php');

include(__DIR__ . './../views/bdd.php');

include_once(__DIR__ . './../views/templates/footer.php');
