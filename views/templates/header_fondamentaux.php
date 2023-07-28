<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/assets/css/main.css">
    <link rel="icon" type="image/png" href="../../public/assets/img/logo.png">
    <title><?= $document ?? '' ?></title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg shadow-lg">
            <div class="container-fluid">
                <a class="navbar-brand fs-4" href="../../controllers/home_controller.php">Fondamentaux-PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="row collapse navbar-collapse ps-3" id="navbarNav">
                    <ul class="navbar-nav mt-4 mt-md-0">
                        <li class="nav-item mx-xl-auto">
                            <a class="nav-link fs-5" aria-current="page" href="../../controllers/fondamentaux/variables_controller.php">Variables</a>
                        </li>
                        <li class="nav-item mx-xl-auto">
                            <a class="nav-link disabled fs-5" href="../../controllers/fondamentaux/conditions_controller.php">Conditions</a>
                        </li>
                        <li class="nav-item mx-xl-auto">
                            <a class="nav-link disabled fs-5" href="../../controllers/fondamentaux/boucles_controller.php">Boucles</a>
                        </li>
                        <li class="nav-item mx-xl-auto">
                            <a class="nav-link disabled fs-5" href="../../controllers/fondamentaux/fonctions_controller.php">Fonctions</a>
                        </li>
                        <li class="nav-item mx-xl-auto">
                            <a class="nav-link disabled fs-5" href="../../controllers/fondamentaux/tableaux_controller.php">Tableaux</a>
                        </li>
                        <li class="nav-item mx-xl-auto">
                            <a class="nav-link disabled fs-5" href="../../controllers/fondamentaux/dates_controller.php">Dates</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>