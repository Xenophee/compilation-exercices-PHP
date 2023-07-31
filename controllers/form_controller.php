<?php



require_once(__DIR__ . './../config/init.php');


// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------

try {

    $document = 'Formulaire';
    $currentPage = 1;

    $js = '../../public/assets/js/script.js';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // ================================================================================================================================
        // §§ PREMIER BLOC SUR LES INFORMATIONS DE CONNEXION §§

        // VÉRIFICATION SUR LE MAIL
        // --------------------------------------------------------------------------------------------------------------------------------
        // La fonction trim permet de nettoyer les espaces, et la fonction filter_input de nettoyer les valeurs avec les bons paramètres
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

        // On vérifie que ce n'est pas vide avec la fonction empty
        if (empty($email)) {
            // On stocke les messages d'erreur dans un tableau
            $error['email'] = 'Adresse mail non renseignée.';
        } else {
            // La fonction filter_var permet de valider une donnée avec le bon filtre une fois celle-ci stockée dans une variable
            $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
            if (!$validEmail) {
                $error['email'] = 'Adresse mail invalide.';
            }
        }
        // --------------------------------------------------------------------------------------------------------------------------------

        // VÉRIFICATION SUR LE MOT DE PASSE
        // --------------------------------------------------------------------------------------------------------------------------------
        // Pas de filtrage sur les mdp ; en revanche, on procède à son hachage avec password_hash pour le sécuriser
        $password = filter_input(INPUT_POST, 'password');
        $confirmPassword = filter_input(INPUT_POST, 'confirmPassword');

        if (empty($password || $confirmPassword)) {
            $error['passwords'] = 'Mot de passe non renseigné.';
        } else if ($password != $confirmPassword) {
            $error['passwords'] = 'Les mots de passe ne sont pas identiques.';
        } else {
            $validPassword = password_hash($password, PASSWORD_DEFAULT);
        }
        // --------------------------------------------------------------------------------------------------------------------------------
        // ================================================================================================================================

        // ================================================================================================================================
        // §§ DEUXIÈME BLOC SUR LES INFORMATIONS GÉNÉRALES §§

        // VÉRIFICATION SUR LE FICHIER
        // --------------------------------------------------------------------------------------------------------------------------------
        if (isset($_FILES['profilPicture'])) {
            $profilPicture = $_FILES['profilPicture'];

            if (!empty($profilPicture['tmp_name'])) {

                if ($profilPicture['error'] > 0) {
                    $error["profilPicture"] = 'Une erreur est survenue lors du transfert du fichier';
                } else {
                    if (!in_array($profilPicture['type'], AUTHORIZED_IMAGE_FORMAT)) {
                        $error["profilPicture"] = 'Le format du fichier envoyé n\'est pas valide.';
                    } else {
                        $extension = pathinfo($profilPicture['name'], PATHINFO_EXTENSION);
                        $from = $profilPicture['tmp_name'];
                        $fileName = uniqid('img_') . '.' . $extension;
                        $to = __DIR__ . '/../public/uploads/' . $fileName;
                        move_uploaded_file($from, $to);
                    }
                }
            }
        }
        // --------------------------------------------------------------------------------------------------------------------------------

        // VÉRIFICATION SUR LE NOM
        // --------------------------------------------------------------------------------------------------------------------------------
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));

        if (empty($lastname)) {
            $error['lastname'] = 'Nom non renseigné.';
        } else {
            // Avec une regex (constante REGEX_NAME déclarée dans le fichier constants.php), on vérifie si c'est le format attendu avec un filtre spécifique
            $validLastname = filter_var($lastname, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . REGEX_NAME . '/']]);

            if (!$validLastname) {
                $error['lastname'] = 'Nom invalide.';
            } else {
                // Dans ce cas précis, on vérifie aussi la longueur de chaine (on aurait pu le faire aussi direct dans la regex)
                if (strlen($validLastname) <= 2 || strlen($validLastname) >= 70) {
                    $error['lastname'] = 'La longueur du nom n\'est pas bonne.';
                }
            }
        }
        // --------------------------------------------------------------------------------------------------------------------------------

        // VÉRIFICATION SUR LA DATE DE NAISSANCE
        // --------------------------------------------------------------------------------------------------------------------------------
        $birthdate = filter_input(INPUT_POST, 'birthdate', FILTER_SANITIZE_NUMBER_INT);

        if (empty($birthdate)) {
            $error['birthdate'] = 'Date de naissance non renseignée.';
        } else {
            // On peut utiliser une regex pour vérifier le format ou utiliser la méthode statique de l'objet DateTime qui va créer un objet en cas de conformité
            $validDate = DateTime::createFromFormat('Y-m-d', $birthdate);

            if (!$validDate) {
                $error['birthdate'] = 'Date de naissance non valide.';
            } else {
                // Calcul de l'age de l'utilisateur (année courante - année de naissance)
                $age = date('Y') - $validDate->format('Y');

                if ($age > 120 || $age < 0) {
                    $error['birthdate'] = 'Votre age n\'est pas conforme.';
                }
            }
        }
        // --------------------------------------------------------------------------------------------------------------------------------

        // VÉRIFICATION SUR LE PAYS DE NAISSANCE
        // --------------------------------------------------------------------------------------------------------------------------------
        $birthLand = intval(filter_input(INPUT_POST, 'birthLand', FILTER_SANITIZE_NUMBER_INT));

        if (empty($birthLand)) {
            $error['birthLand'] = 'Pays de naissance non renseigné.';
        } else {
            if ($birthLand < 1 || $birthLand > count(COUNTRIES)) {
                $error['birthLand'] = 'Pays de naissance inconnu.';
            }
        }
        // --------------------------------------------------------------------------------------------------------------------------------

        // VÉRIFICATION SUR LE CODE POSTAL
        // --------------------------------------------------------------------------------------------------------------------------------
        $zipCode = trim(filter_input(INPUT_POST, 'zipCode', FILTER_SANITIZE_NUMBER_INT));

        if (empty($zipCode)) {
            $error['zipCode'] = 'Code postal non renseigné ou invalide.';
        } else {
            $validZipCode = filter_var($zipCode, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . REGEX_ZIPCODE . '/']]);
            if (!$validZipCode) {
                $error['zipCode'] = 'Code postal invalide.';
            }
        }
        // --------------------------------------------------------------------------------------------------------------------------------
        // ================================================================================================================================

        // ================================================================================================================================
        // §§ TROISIÈME BLOC SUR LES CONNAISSANCES & EXPÉRIENCE §§

        // VÉRIFICATION SUR LE LIEN LINKEDIN
        // --------------------------------------------------------------------------------------------------------------------------------
        $linkedin = trim(filter_input(INPUT_POST, 'linkedin', FILTER_SANITIZE_URL));

        // Ici ce champs n'est pas obligatoire, on va donc juste vérifier si la chaine n'est pas vide, pour la valider
        if (!empty($linkedin)) {
            // On pourrait aussi vérifier via un filtre de validation mais sans regexp : FILTER_VALIDATE_URL
            $validLinkedin = filter_var($linkedin, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . REGEX_LINKEDIN . '/']]);
            if (!$validLinkedin) {
                $error['linkedin'] = 'Lien Linkedin invalide.';
            }
        }
        // --------------------------------------------------------------------------------------------------------------------------------

        // VÉRIFICATION SUR LE NIVEAU D'ÉTUDE
        // --------------------------------------------------------------------------------------------------------------------------------
        // Utilisation de la fonction intval pour rendre un 0 dans le pire des cas.
        $levelOfStudy = intval(filter_input(INPUT_POST, 'levelOfStudy', FILTER_SANITIZE_NUMBER_INT));

        if (empty($levelOfStudy)) {
            $error['levelOfStudy'] = 'Niveau non renseigné.';
        } else {
            $validLevelOfStudy = filter_var($levelOfStudy, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => count(LEVEL_OF_STUDIES)]]);
            if (!$validLevelOfStudy) {
                $error['levelOfStudy'] = 'Choix non valide.';
            }
        }
        // --------------------------------------------------------------------------------------------------------------------------------

        // VÉRIFICATION SUR LES LANGAGES
        // --------------------------------------------------------------------------------------------------------------------------------
        // Comme il s'agit d'un tableau, on va utiliser FILTER_REQUIRE_ARRAY en complément.
        // Ici l'opérateur de coalescence null ?? [] est obligatoire afin d'éviter une erreur avec le foreach qui suit en cas d'absence de valeur retournée par l'utilisateur.
        $languages = filter_input(INPUT_POST, 'languages', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

        foreach ($languages as $language) {

            if ($language < 1 || $language > count(LANGUAGES)) {
                $error['languages'] = 'Certains langages choisis sont inconnus.';
            }
        }
        // --------------------------------------------------------------------------------------------------------------------------------

        // VÉRIFICATION SUR L'EXPÉRIENCE
        // --------------------------------------------------------------------------------------------------------------------------------
        // Pas de vérification supplémentaire à faire étant donné qu'il s'agit d'un textarea
        $experience = trim(filter_input(INPUT_POST, 'experience', FILTER_SANITIZE_SPECIAL_CHARS));
        // --------------------------------------------------------------------------------------------------------------------------------
    }

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

include(__DIR__ . './../views/form.php');

include_once(__DIR__ . './../views/templates/footer.php');
