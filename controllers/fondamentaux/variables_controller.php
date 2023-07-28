<?php


// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------

try {

    

} catch (\Throwable $th) {
    include_once(__DIR__ . '/../views/templates/header.php');
    include_once(__DIR__ . '/../views/error.php');
    include_once(__DIR__ . '/../views/templates/footer.php');
    die;
}



// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------
// AFFICHAGE DES VUES

include_once(__DIR__ . './../../views/templates/header_fondamentaux.php');

include(__DIR__ . './../../views/fondamentaux/variables.php');

include_once(__DIR__ . './../../views/templates/footer.php');