<main>

    <!-- ==================================================================================================================================== -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
    <!-- PARTIE ÉNONCÉES -->
    <section>
        <div class="container-fluid main-container shadow-lg py-3 py-md-5 px-md-5 mb-5">
            <h1 class="text-center shadow py-3 mb-5">Les formulaires</h1>

            <div class="row justify-content-around pt-md-5">

                <!-- =============================================================================================================== -->
                <!-- Exercice 3 -->
                <div class="col-12 col-md-10 col-xl-5 col-xxl-3 exo mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="d-flex flex-column justify-content-between py-3 px-1 py-md-4 px-md-4">
                        <h2 class="text-center py-3 mb-4">Exercice 3</h2>

                        <div class="text">
                            <ul>
                                <li class="mb-2"><span class="fw-bold">Nom :</span> <?= $_GET['lastname'] ?? '' ?></li>
                                <li class="mb-2"><span class="fw-bold">Prénom :</span> <?= $_GET['firstname'] ?? '' ?></li>
                            </ul>
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
                                <li class="mb-2"><span class="fw-bold">Nom :</span> <?= $_POST['lastname'] ?? '' ?></li>
                                <li class="mb-2"><span class="fw-bold">Prénom :</span> <?= $_POST['firstname'] ?? '' ?></li>
                            </ul>
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
        <a href="../../controllers/fondamentaux_controller.php?id=7" class="btn py-3 px-5">Revenir aux Formulaires</a>
    </div>

</main>