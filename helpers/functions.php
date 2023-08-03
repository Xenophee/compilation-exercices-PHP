<?php


function isActivePage($page, $currentPage) {
    return ($page == $currentPage) ? 'active' : '';
}


/**
 * Permet de formater une date en français numérique et retourne le résultat
 * @param string $date
 * 
 * @return string
 */
function dateFormat(string $date):string {
    $date = new DateTime($date);
    $date = $date->format('d/m/Y');
    return $date;
}