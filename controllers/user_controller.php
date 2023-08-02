<?php

require_once(__DIR__ . './../config/init.php');

// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------

try {

    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $document = 'PHP - Test Formulaires';

    $js = '../../public/assets/js/script_fondamentaux.js';

} catch (\Throwable $th) {
    include_once(__DIR__ . './../views/templates/header.php');
    include_once(__DIR__ . './../views/error.php');
    include_once(__DIR__ . './../views/templates/footer.php');
    die;
}



// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------
// AFFICHAGE DES VUES

include_once(__DIR__ . './../views/templates/header_fondamentaux.php');

include(__DIR__ . './../views/fondamentaux/user.php');

include_once(__DIR__ . './../views/templates/footer.php');