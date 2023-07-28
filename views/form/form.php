<main>
    <section>
        <div class="container-fluid main-container shadow-lg py-3 py-md-5 px-md-5 mb-5">
            <h1 class="text-center shadow py-3 mb-5">Formulaire</h1>

            <div class="row justify-content-around pt-md-5">
                <!-- =============================================================================================================== -->
                <!-- Exercice 1 -->
                <div class="col-12 col-md-10 col-xl-8 col-xxl-6 exo mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="d-flex flex-column justify-content-between py-3 px-1 py-md-4 px-md-4">
                        <div class="text">
                            <p class="mb-5">Faire une page avec un formulaire pour enregistrer un futur apprenant, nettoyer les données reçues de l'utilisateur et afficher un récapitulatif.</p>
                            <ul>
                                <li class="mb-2">Un champ pour le nom & prénom.</li>
                                <li class="mb-2">Un champ pour l'adresse mail.</li>
                                <li class="mb-2">Un champ pour la date de naissance.</li>
                                <li class="mb-2">Un champ pour le mot de passe & la confirmation du mot de passe.</li>
                                <li class="mb-2">Un champ pour le pays de naissance.</li>
                                <li class="mb-2">Un champ pour le code postal.</li>
                                <li class="mb-2">Un champ pour l'url du compte Linkedin.</li>
                                <li class="mb-2">Un champ pour le niveau d'étude.</li>
                                <li class="mb-2">Un champ pour les langages connus.</li>
                                <li class="mb-2">Un champ pour raconter une expérience avec la programmation.</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center">
                            <dialog><img src="../public/assets/img/" class="img-fluid" alt="Code de "></dialog>
                            <button type="button" class="btn showCode d-block shadow px-5 py-2 mt-3">Voir le
                                code</button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid main-container shadow-lg py-3 py-md-5 px-md-5 mb-5">
            <h2 class="text-center title-form py-5 mb-5">S'enregistrer</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <form method="POST" enctype="multipart/form-data" id="signIn" novalidate>

                        <!-- ================================================================================================================================ -->
                        <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                        <!-- §§ PREMIER BLOC §§ -->
                        <fieldset class="form shadow-lg py-3 px-2 px-md-4 py-md-4 px-xl-5 py-xl-5 mb-5">
                            <legend class="text-center pb-3 mb-5">Informations de connexion</legend>

                            <!-- MAIL -->
                            <div class="bloc-input mx-auto mb-4">
                                <label for="email" class="form-label">Adresse mail * :</label>
                                <input type="email" class="form-control" id="email" name="email" autocomplete="email" required>
                                <small class="text-danger"><?= $error['email'] ?? '' ?></small>
                            </div>

                            <!-- MOT DE PASSE -->
                            <div class="bloc-input mx-auto mb-4">
                                <label for="password" class="form-label">Mot de passe * :</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <small class="text-danger"><?= $error['passwords'] ?? '' ?></small>
                            </div>

                            <div class="bloc-input mx-auto">
                                <label for="confirmPassword" class="form-label">Confirmer le mot de passe * :</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                                <small class="text-danger"><?= $error['passwords'] ?? '' ?></small>
                            </div>
                        </fieldset>

                        <!-- ================================================================================================================================ -->
                        <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                        <!-- §§ DEUXIEME BLOC §§ -->
                        <fieldset class="form shadow-lg py-3 px-2 px-md-4 py-md-4 px-xl-5 py-xl-5 mb-5">
                            <legend class="text-center pb-3 mb-5">Informations générales</legend>


                            <!-- PHOTO DE PROFIL -->
                            <div class="bloc-input mx-auto mb-4">
                                <label for="profilPicture" class="form-label">Photo de profil (format jpeg uniquement) * :</label>
                                <input type="file" class="form-control" id="profilPicture" title="format jpeg uniquement" name="profilPicture" accept="image/jpg" required>
                                <small class="text-danger"><?= $error['file'] ?? '' ?></small>
                            </div>


                            <div class="d-flex flex-column flex-md-row justify-content-around mt-lg-5">
                                <!-- NOM -->
                                <div class="bloc-double-input mb-4">
                                    <label for="lastname" class="form-label">Nom * :</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" pattern="<?= REGEXP_NAME ?>" autocomplete="family-name" required>
                                    <small class="text-danger"><?= $error['lastname'] ?? '' ?></small>
                                </div>

                                <!-- PRENOM -->
                                <div class="bloc-double-input mb-4">
                                    <label for="firstname" class="form-label">Prénom * :</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" pattern="<?= REGEXP_NAME ?>" autocomplete="given-name" required>
                                    <small class="text-danger"><?= $error['firstname'] ?? '' ?></small>
                                </div>
                            </div>

                            <div class="d-flex justify-content-around mt-lg-5">
                                <!-- DATE DE NAISSANCE -->
                                <div class="bloc-input mb-4">
                                    <label for="birthday" class="form-label">Date de naissance * :</label>
                                    <input type="date" class="form-control" id="birthday" name="birthday" value="" min="<?= date('Y') - 95 ?>-01-01" max="<?= date('Y') - 16 ?>-01-01" autocomplete="bday" required>
                                    <small class="text-danger"><?= $error['birthday'] ?? '' ?></small>
                                </div>
                            </div>

                            <div class="d-flex flex-column flex-md-row justify-content-around mt-lg-5">
                                <!-- PAYS DE NAISSANCE -->
                                <div class="bloc-double-input mb-4">
                                    <label for="birthLand" class="form-label">Pays de naissance * :</label>
                                    <select class="form-select" id="birthLand" required>
                                        <option value="" selected>-</option>
                                        <?php
                                        foreach (COUNTRIES as $value) {
                                            echo "<option>$value</option>";
                                        }
                                        ?>
                                    </select>
                                    <small class="text-danger"><?= $error['birthLand'] ?? '' ?></small>
                                </div>

                                <!-- CODE POSTAL -->
                                <div class="bloc-double-input mb-4">
                                    <label for="zipCode" class="form-label">Code postal * :</label>
                                    <input type="text" class="form-control" id="zipCode" name="zipCode" pattern="^[\d]{5}$" autocomplete="postal-code" required>
                                    <small class="text-danger"><?= $error['zipCode'] ?? '' ?></small>
                                </div>
                            </div>
                        </fieldset>

                        <!-- ================================================================================================================================ -->
                        <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                        <!-- §§ TROISIEME BLOC §§ -->
                        <fieldset class="form shadow-lg py-3 px-2 px-md-4 py-md-4 px-xl-5 py-xl-5 mb-5">
                            <legend class="text-center pb-3 mb-5">Connaissances & expérience</legend>

                            <!-- LIEN DE COMPTE -->
                            <div class="mb-4">
                                <label for="url" class="form-label">Url du compte Linkedin :</label>
                                <input type="url" class="form-control" name="url" id="url" placeholder="https://exemple.com" pattern="https://fr.linkedin.com/*" autocomplete="url">
                                <small class="text-danger"><?= $error['url'] ?? '' ?></small>
                            </div>

                            <div class="d-flex flex-column flex-md-row justify-content-around mt-lg-5">
                                <!-- NIVEAU D'ETUDE -->
                                <div class="mb-4">
                                    <label class="mb-4">Niveau d'étude :</label>

                                    <?php
                                    foreach (LEVEL_OF_STUDIES as $key => $value) { ?>
                                        <div class="mb-4"><input type="radio" name="levelOfStudy" value="<?= $key ?>" id="levelOfStudy<?= $key ?>" class="form-check-input">
                                            <label class="form-check-label ps-3" for="levelOfStudy<?= $key ?>"><?= $value ?></label>
                                        </div>
                                    <?php } ?>
                                    <small class="text-danger"><?= $error['levelOfStudy'] ?? '' ?></small>
                                </div>

                                <!-- LANGAGES WEB -->

                                <div class="mb-4">
                                    <label for="languagesWeb" class="form-label mb-4">Quels langages web connaissez vous ? :</label>
                                    <?php
                                    foreach (LANGUAGES as $key => $value) { ?>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" name="languages[]" value="<?= $key ?>" id="language<?= $key ?>">
                                            <label class="form-check-label ps-3" for="language<?= $key ?>"><?= $value ?></label>
                                        </div>
                                    <?php } ?>
                                    <small class="text-danger"><?= $error['languages'] ?? '' ?></small>
                                </div>
                            </div>

                            <!-- EXPERIENCE AVEC LA PROGRAMMATION -->
                            <div class="mt-lg-5 mb-xl-4">
                                <label for="programmingExperience" class="mb-3">Racontez une expérience avec la programmation et/ou l'informatique que vous auriez pu avoir :</label>
                                <textarea class="form-control" id="programmingExperience" rows="10" name="programmingExperience"></textarea>
                            </div>
                        </fieldset>

                        <!-- BOUTON ENVOYER -->
                        <div class="d-flex justify-content-center mt-4 mb-5">
                            <button type="submit" class="btn px-5 py-2" id="send">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</main>