<?php

// EXERCICE 2
// ========================================================================================================
// --------------------------------------------------------------------------------------------------------
// Démarrage de la session OBLIGATOIRE
session_start();

// Définition des variables
$_SESSION['lastname'] = 'du Village';
$_SESSION['firstname'] = 'Neuneux';
$_SESSION['age'] = 45;
// --------------------------------------------------------------------------------------------------------
// ========================================================================================================


// EXERCICE 3
// ========================================================================================================
// --------------------------------------------------------------------------------------------------------
// Vérification de l'existence des 2 paramètres. Dans ce cas, on écrit les cookies.
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    // Création des cookie login et password qui expirent dans un an
    // Le dernier paramètre correspond à la portabilité des cookies. 
    // Sans le / le cookie n'est valide que dans le dossier et les sous-dossiers ou il a été déclaré.
    setcookie('login', $_POST['login'], (time() + 365 * 24 * 3600), '/');
    setcookie('password', $_POST['password'], (time() + 365 * 24 * 3600), '/');
}
// --------------------------------------------------------------------------------------------------------
// ========================================================================================================
?>




<main>

    <!-- ==================================================================================================================================== -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
    <!-- PARTIE ÉNONCÉES -->
    <section>
        <div class="container-fluid main-container shadow-lg py-3 py-md-5 px-md-5 mb-5">
            <h1 class="text-center shadow py-3 mb-5">Les superglobales</h1>

            <div class="row justify-content-around pt-md-5">
                <!-- =============================================================================================================== -->
                <!-- Exercice 1 -->
                <div class="col-12 col-md-10 col-xl-5 col-xxl-3 exo mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="d-flex flex-column justify-content-between py-3 px-1 py-md-4 px-md-4">
                        <h2 class="text-center py-3 mb-4">Exercice 1</h2>
                        <div class="text">
                            <p>Faire une page permettant de donner à l'utilisateur :</p>
                            <ul>
                                <li class="mb-2">Son User Agent.</li>
                                <li class="mb-2">Son adresse ip.</li>
                                <li class="mb-2">Le nom du serveur.</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center">
                            <dialog><img src="../../public/assets/img/fondamentaux/superglobales/1.png" class="img-fluid" alt="Code de l'exercice 1"></dialog>
                            <button type="button" class="btn showCode d-block shadow px-5 py-2 mt-3">Voir le
                                code</button>
                        </div>
                    </article>
                </div>

                <!-- =============================================================================================================== -->
                <!-- Exercice 2 -->
                <div class="col-12 col-md-10 col-xl-5 col-xxl-3 exo mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="d-flex flex-column justify-content-between py-3 px-1 py-md-4 px-md-4">
                        <h2 class="text-center py-3 mb-4">Exercice 2</h2>

                        <div class="text">
                            <ul>
                                <li class="mb-2">Faire un lien vers une autre page.</li>
                                <li class="mb-2">Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.</li>
                                <li class="mb-2">Ces variables auront été définies directement dans le code.</li>
                                <li class="mb-2">Il faudra afficher le contenu de ces variables sur la deuxième page.</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center">
                            <dialog><img src="../../public/assets/img/fondamentaux/superglobales/2.png" class="img-fluid" alt="Code de l'exercice 2"></dialog>
                            <button type="button" class="btn showCode d-block shadow px-5 py-2 mt-3">Voir le
                                code</button>
                        </div>
                    </article>
                </div>

                <!-- =============================================================================================================== -->
                <!-- Exercice 3 -->
                <div class="col-12 col-md-10 col-xl-5 col-xxl-3 exo mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="d-flex flex-column justify-content-between py-3 px-1 py-md-4 px-md-4">
                        <h2 class="text-center py-3 mb-4">Exercice 3</h2>

                        <div class="text">
                            <ul>
                                <li class="mb-2">Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.</li>
                                <li class="mb-2">A la validation du formulaire, stocker les informations dans un cookie.</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center">
                            <dialog><img src="../../public/assets/img/fondamentaux/superglobales/3.png" class="img-fluid" alt="Code de l'exercice 3"></dialog>
                            <button type="button" class="btn showCode d-block shadow px-5 py-2 mt-3">Voir le
                                code</button>
                        </div>
                    </article>
                </div>

                <!-- =============================================================================================================== -->
                <!-- Exercice 4 -->
                <div class="col-12 col-md-10 col-xl-5 col-xxl-3 exo mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="d-flex flex-column justify-content-between py-3 px-1 py-md-4 px-md-4">
                        <h2 class="text-center py-3 mb-4">Exercice 4</h2>

                        <div class="text">
                            <ul>
                                <li class="mb-2">Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center">
                            <dialog><img src="../../public/assets/img/fondamentaux/superglobales/4.png" class="img-fluid" alt="Code de l'exercice 4"></dialog>
                            <button type="button" class="btn showCode d-block shadow px-5 py-2 mt-3">Voir le
                                code</button>
                        </div>
                    </article>
                </div>

                <!-- =============================================================================================================== -->
                <!-- Exercice 5 -->
                <div class="col-12 col-md-10 col-xl-5 col-xxl-3 exo mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="d-flex flex-column justify-content-between py-3 px-1 py-md-4 px-md-4">
                        <h2 class="text-center py-3 mb-4">Exercice 5</h2>

                        <div class="text">
                            <ul>
                                <li class="mb-2">Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center">
                            <dialog><img src="../../public/assets/img/fondamentaux/superglobales/5.png" class="img-fluid" alt="Code de l'exercice 5"></dialog>
                            <button type="button" class="btn showCode d-block shadow px-5 py-2 mt-3">Voir le
                                code</button>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================================================================================================================================== -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
    <!-- BOUTON D'AFFICHAGE -->
    <div class="d-flex justify-content-center mb-5">
        <button type="button" class="btn py-3 px-5" id="showResult">Voir le résultat des exercices</button>
    </div>

    <!-- ==================================================================================================================================== -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
    <!-- PARTIE RÉSULTAT -->

    <section>
        <div class="container-fluid result-container shadow-lg d-none py-3 py-md-5 px-md-5 mb-5">
            <h1 class="text-center title-result shadow py-3 mb-5">Résultat</h1>

            <div class="row justify-content-around pt-md-5">
                <!-- =============================================================================================================== -->
                <!-- Exercice 1 -->
                <div class="col-12 col-md-10 col-xl-5 col-xxl-3 result-exo shadow-lg mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="py-3 px-1 py-md-4 px-md-4">
                        <h2 class="text-center py-3 mb-4">Exercice 1</h2>
                        <div class="result d-flex flex-column align-items-center">
                            <!-- $_SERVER est une superglobale : un tableau qui permet de voir toutes les clés server accessible sur ce serveur web -->
                            <p class="result-text"><?= $_SERVER['HTTP_USER_AGENT'] ?></p> <br>
                            <p class="result-text"><?= $_SERVER['REMOTE_ADDR'] ?></p> <br>
                            <p class="result-text"><?= $_SERVER['SERVER_NAME'] ?></p> <br>
                        </div>
                    </article>
                </div>

                <!-- =============================================================================================================== -->
                <!-- Exercice 2 -->
                <div class="col-12 col-md-10 col-xl-5 col-xxl-3 result-exo shadow-lg mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="py-3 px-1 py-md-4 px-md-4">
                        <h2 class="text-center py-3 mb-4">Exercice 2, 4 & 5</h2>

                        <div class="result d-flex flex-column align-items-center">
                            <div class="d-flex justify-content-center">
                                <a href="../../controllers/superglobales_controller.php" class="btn shadow px-5 py-2 mt-3">Voir de l'autre côté</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- =============================================================================================================== -->
                <!-- Exercice 3 -->
                <div class="col-12 col-md-10 col-xl-5 col-xxl-3 result-exo shadow-lg mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="py-3 px-1 py-md-4 px-md-4">
                        <h2 class="text-center py-3 mb-4">Exercice 3</h2>

                        <div class="result d-flex flex-column justify-content-center">

                            <form method="POST">
                                <input type="text" name="login" placeholder="Login" class="mb-3 form-control">
                                <input type="text" name="password" placeholder="Password" class="mb-3 form-control">
                                <div class="d-flex justify-content-center">
                                    <input type="submit" name="submit" value="Valider" class="btn shadow mt-4">
                                </div>
                            </form>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

</main>