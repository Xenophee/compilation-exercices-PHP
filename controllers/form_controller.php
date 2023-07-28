<?php



require_once(__DIR__ . '/../config/constants.php');


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

include_once(__DIR__ . '/../views/templates/header.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($error)) {

    include(__DIR__ . '/../views/form/data.php');

} else {

    include(__DIR__ . '/../views/form/form.php');

}

include_once(__DIR__ . '/../views/templates/footer.php');