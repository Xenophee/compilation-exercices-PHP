<?php


// -----------------------------------------------------------------------------------------------------------------------
// CONSTANTES POUR LE GRAND EXERCICE DU FORMULAIRE

// Création de constantes pour le niveau d'étude, les languages et les pays
define('COUNTRIES', [
    'Afrique du Sud', 'Albanie', 'Algérie', 'Allemagne', 'Andorre',  'Arabie saoudite', 'Argentine',
    'Australie', 'Autriche', 'Bélarus', 'Belgique', 'Bosnie-Herzégovine', 'Brésil', 'Bulgarie', 'Canada', 'Chili', 'Chine', 'Chypre',
    'Corée du sud', ' Croatie', 'Danemark', 'Egypte', 'Espagne', 'Estonie', 'Etats-Unis d’Amérique', 'Russie', 'Finlande', 'France', 'Géorgie',  'Grèce',
    'Hongrie', 'Inde', 'Indonésie', 'Iran', 'Irlande', 'Islande', 'Italie', 'Japon', 'Lettonie', 'Liban', 'Liechtenstein', 'Lituanie', 'Luxembourg',  'Malte', 'Maroc',
    'Mexique',  'Moldavie', 'Monaco', 'Norvège', 'Nouvelle-Calédonie', 'Pays-Bas', 'Pologne', 'Portugal', 'République tchèque', 'Roumanie', 'Royaume-Uni',
    'Serbie-et-Monténégro', 'Slovaquie', 'Slovénie', 'Suède', 'Suisse', 'Tunisie', 'Turquie', 'Ukraine', 'Autre'
]);


define('LEVEL_OF_STUDIES', ['Sans', 'Bac', 'Bac+2', 'Bac+3 ou plus']);

define('LANGUAGES', ['HTML/CSS', 'PHP', 'Javascript', 'Python', 'Autres']);

define('EXTENSION', ['image/jpeg', 'application/pdf']);

// Permet de définir une constante qui va contenir la regex pour le lastname et firstname
define('REGEXP_NAME', '^[a-zA-ZÀ-ÿ\'\-]{2,}$');

// -----------------------------------------------------------------------------------------------------------------------