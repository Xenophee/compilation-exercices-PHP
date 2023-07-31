<?php



require_once(__DIR__ . './../config/init.php');


// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------

try {

    $document = 'Calendrier';
    $currentPage = 2;

    $js = '../../public/assets/js/calendar.js';


    // Vérification des données passées en get avec controle des données
    $year = (!empty($_GET['year']) && $_GET['year'] >= 500 && $_GET['year'] <= 5000) ? $_GET['year'] : date("Y");
    $month = (!empty($_GET['month']) && $_GET['month'] >= 1 && $_GET['month'] <= 12) ? $_GET['month'] : date("n");

    // Déclaration d'un tableau contenant tous les mois.
    $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

    // Initialisation des valeurs des différentes variables nécessaires dans le HTML
    $firstDayOfMonth = date('N', strtotime("$year-$month-01")); //Ex: 7 pour dimanche;
    $nbDaysOfMonth = cal_days_in_month(CAL_GREGORIAN, $month, -1); //autre solution : date('t', strtotime('2023-01-01')); //Ex: 31;
    $lastDayOfMonth = date('N', strtotime("$year-$month-$nbDaysOfMonth")); //Ex: 2 pour mardi;

    // Préparation des variables pour les liens vers les mois et années précédents/suivants
    $previousMonth = ($month == 1) ? 12 : $month - 1;
    $previousYear = ($month == 1) ? $year - 1 : $year;
    $nextMonth = ($month == 12) ? 1 : $month + 1;
    $nextYear = ($month == 12) ? $year + 1 : $year;

    // Initialisation d'une variable contenant la date du jour (pour mettre en surbrillance la date du jour dans le calendrier)
    $today = date('Y-m-d');

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

include(__DIR__ . './../views/calendar.php');

include_once(__DIR__ . './../views/templates/footer.php');
