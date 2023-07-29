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



// Création de constantes contenant les REGEX utiles et le format d'image autorisé
define('REGEX_NAME',"^[A-Za-z-éèêëàâäôöûüç' ]+$");
define('REGEX_DATE','^([0-9]{4})[\/\-]?([0-9]{2})[\/\-]?([0-9]{2})$');
define('REGEX_ZIPCODE','^[0-9]{5}$');
define('REGEX_LINKEDIN','^(http(s)?:\/\/)?([\w]+\.)?linkedin\.com\/(pub|in|profile)');

define('AUTHORIZED_IMAGE_FORMAT', ['image/jpeg', 'image/png']);

// -----------------------------------------------------------------------------------------------------------------------