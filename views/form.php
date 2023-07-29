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
                                <li class="mb-2">Un champ pour le nom.</li>
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

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($error)) { ?>

        <section>
            <div class="container-fluid main-container shadow-lg py-3 py-md-5 px-md-5 mb-5">
                <div class="row">
                    <div class="col form">
                        <ul class="d-flex flex-column justify-content-center align-items-center py-5">
                            <?php if (isset($fileName)) { ?>
                                <li class="d-flex flex-column align-items-center"><strong>Photo de profil : </strong>
                                    <img src="/public/uploads/<?= $fileName ?>" class="imgProfile img-fluid my-4">
                                </li>
                            <?php } ?>

                            <li><strong>Nom : </strong><?= $validLastname ?></li>
                            <li><strong>Date de naissance : </strong><?= date('d/m/Y', strtotime($validDate)) ?></li>
                            <li><strong>Pays de naissance : </strong><?= COUNTRIES[$birthLand - 1] ?></li>
                            <li><strong>Code postal : </strong><?= $validZipCode ?></li>

                            <li><strong>Adresse mail : </strong><?= $validEmail ?></li>
                            <?php if ($linkedin) { ?>
                                <li><strong>Profil Linkedin : </strong><a href="<?= $validLinkedin ?>" target="_blank" rel="noopener noreferrer">ici</a></li>
                            <?php } ?>
                            <li><strong>Niveau d'étude : </strong><?= LEVEL_OF_STUDIES[$validLevelOfStudy - 1] ?></li>

                            <?php if ($languages) { ?>
                                <li><strong>Langages de programmation : </strong>
                                    <?php
                                    foreach ($languages as $key => $value) {
                                        echo (($key + 1) != count($languages)) ? LANGUAGES[$value - 1] . ' - ' : LANGUAGES[$value - 1];
                                    } ?>
                                </li>
                            <?php } ?>

                            <?php if ($experience) { ?>
                                <li><strong>Expérience en programmation : </strong><?= nl2br($experience) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    <?php } else { ?>

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

                                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                <!-- MAIL -->
                                <div class="bloc-input mx-auto mb-4">
                                    <label for="email" class="form-label">Adresse mail * :</label>
                                    <input type="email" class="form-control <?= isset($error['email']) ? 'error-field' : '' ?>" id="email" name="email" value="<?= htmlentities($email ?? '') ?>" autocomplete="email" required>
                                    <small class="text-danger"><?= $error['email'] ?? '' ?></small>
                                </div>
                                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->

                                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                <!-- MOT DE PASSE -->
                                <div class="bloc-input mx-auto mb-4">
                                    <label for="password" class="form-label">Mot de passe * :</label>
                                    <input type="password" class="form-control <?= isset($error['passwords']) ? 'error-field' : '' ?>" id="password" name="password" value="<?= htmlentities($password ?? '') ?>" required>
                                    <small class="text-danger"><?= $error['passwords'] ?? '' ?></small>
                                </div>

                                <div class="bloc-input mx-auto">
                                    <label for="confirmPassword" class="form-label">Confirmer le mot de passe * :</label>
                                    <input type="password" class="form-control <?= isset($error['passwords']) ? 'error-field' : '' ?>" id="confirmPassword" name="confirmPassword" value="<?= htmlentities($password ?? '') ?>" required>
                                    <small class="text-danger"><?= $error['passwords'] ?? '' ?></small>
                                </div>
                                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                            </fieldset>

                            <!-- ================================================================================================================================ -->
                            <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                            <!-- §§ DEUXIEME BLOC §§ -->
                            <fieldset class="form shadow-lg py-3 px-2 px-md-4 py-md-4 px-xl-5 py-xl-5 mb-5">
                                <legend class="text-center pb-3 mb-5">Informations générales</legend>

                                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                <!-- PHOTO DE PROFIL -->
                                <div class="bloc-input mx-auto mb-4">
                                    <label for="profilPicture" class="form-label">Photo de profil (format jpeg & png uniquement) :</label>
                                    <input type="file" class="form-control <?= isset($error['file']) ? 'error-field' : '' ?>" id="profilPicture" name="profilPicture" accept="image/png, image/jpeg">
                                    <small class="text-danger"><?= $error['file'] ?? '' ?></small>
                                </div>
                                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->

                                <div class="d-flex flex-column flex-md-row justify-content-around mt-lg-5">
                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                    <!-- NOM -->
                                    <div class="bloc-double-input mb-4">
                                        <label for="lastname" class="form-label">Nom * :</label>
                                        <input type="text" class="form-control <?= isset($error['lastname']) ? 'error-field' : '' ?>" id="lastname" name="lastname" value="<?= htmlentities($lastname ?? '') ?>" pattern="<?= REGEX_NAME ?>" minlength="2" maxlength="70" autocomplete="family-name" required>
                                        <small class="text-danger"><?= $error['lastname'] ?? '' ?></small>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->

                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                    <!-- DATE DE NAISSANCE -->
                                    <div class="bloc-double-input mb-4">
                                        <label for="birthdate" class="form-label">Date de naissance * :</label>
                                        <input type="date" class="form-control <?= isset($error['birthdate']) ? 'error-field' : '' ?>" id="birthdate" name="birthdate" value="<?= htmlentities($birthdate ?? '') ?>" min="<?= (date('Y') - 120) . date('-m-d') ?>" max="<?= (date('Y') - 12) . date('-m-d') ?>" autocomplete="bday" required>
                                        <small class="text-danger"><?= $error['birthdate'] ?? '' ?></small>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                </div>

                                <div class="d-flex flex-column flex-md-row justify-content-around">
                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                    <!-- PAYS DE NAISSANCE -->
                                    <div class="bloc-double-input mb-4">
                                        <label for="birthLand" class="form-label">Pays de naissance * :</label>
                                        <select class="form-select <?= isset($error['birthLand']) ? 'error-field' : '' ?>" name="birthLand" id="birthLand" required>
                                            <option value="">-</option>
                                            <?php
                                            foreach (COUNTRIES as $key => $country) {
                                                $isSelected = ($country == $birthLand) ? 'selected' : ''; ?>
                                                <option value="<?= $key + 1 ?>" <?= $isSelected ?>><?= $country ?></option>;
                                            <?php } ?>
                                        </select>
                                        <small class="text-danger"><?= $error['birthLand'] ?? '' ?></small>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->

                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                    <!-- CODE POSTAL -->
                                    <div class="bloc-double-input mb-4">
                                        <label for="zipCode" class="form-label">Code postal * :</label>
                                        <input type="text" class="form-control <?= isset($error['zipCode']) ? 'error-field' : '' ?>" id="zipCode" name="zipCode" value="<?= htmlentities($zipCode ?? '') ?>" pattern="<?= REGEX_ZIPCODE ?>" autocomplete="postal-code" required>
                                        <small class="text-danger"><?= $error['zipCode'] ?? '' ?></small>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                </div>
                            </fieldset>

                            <!-- ================================================================================================================================ -->
                            <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                            <!-- §§ TROISIEME BLOC §§ -->
                            <fieldset class="form shadow-lg py-3 px-2 px-md-4 py-md-4 px-xl-5 py-xl-5 mb-5">
                                <legend class="text-center pb-3 mb-5">Connaissances & expérience</legend>

                                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                <!-- LIEN DE COMPTE -->
                                <div class="mb-4">
                                    <label for="linkedin" class="form-label">Url du compte Linkedin :</label>
                                    <input type="linkedin" class="form-control <?= isset($error['linkedin']) ? 'error-field' : '' ?>" name="linkedin" value="<?= htmlentities($linkedin ?? '') ?>" id="linkedin" pattern="<?= REGEX_LINKEDIN ?>">
                                    <small class="text-danger"><?= $error['linkedin'] ?? '' ?></small>
                                </div>
                                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->

                                <div class="d-flex flex-column flex-md-row justify-content-around mt-lg-5">
                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                    <!-- NIVEAU D'ETUDE -->
                                    <div class="mb-4">
                                        <label class="mb-4">Niveau d'étude * :</label>

                                        <?php
                                        foreach (LEVEL_OF_STUDIES as $key => $level) { ?>
                                            <div class="mb-4">
                                                <input type="radio" name="levelOfStudy" value="<?= $key + 1 ?>" id="levelOfStudy<?= $key + 1 ?>" class="form-check-input <?= isset($error['levelOfStudy']) ? 'error-field' : '' ?>" <?= (isset($levelOfStudy) && $levelOfStudy == $key + 1) ? 'checked' : '' ?> required>
                                                <label class="form-check-label ps-3" for="levelOfStudy<?= $key + 1 ?>"><?= $level ?></label>
                                            </div>
                                        <?php } ?>
                                        <small class="text-danger"><?= $error['levelOfStudy'] ?? '' ?></small>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->

                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                    <!-- LANGAGES WEB -->
                                    <div class="mb-4">
                                        <label class="form-label mb-4">Quels langages web connaissez vous ? :</label>
                                        <?php
                                        foreach (LANGUAGES as $key => $language) {
                                            $isChecked = (isset($languages) && in_array($key + 1, $languages)) ? 'checked' : ''; ?>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" name="languages[]" value="<?= $key + 1 ?>" id="language<?= $key + 1 ?>" <?= $isChecked ?>>
                                                <label class="form-check-label ps-3" for="language<?= $key + 1 ?>"><?= $language ?></label>
                                            </div>
                                        <?php } ?>
                                        <small class="text-danger"><?= $error['languages'] ?? '' ?></small>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                </div>

                                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                <!-- EXPERIENCE AVEC LA PROGRAMMATION -->
                                <div class="mt-lg-5 mb-xl-4">
                                    <label for="experience" class="mb-3">Racontez une expérience avec la programmation et/ou l'informatique que vous auriez pu avoir :</label>
                                    <textarea class="form-control" id="experience" name="experience"><?= htmlentities($experience ?? '') ?></textarea>
                                </div>
                                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
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

    <?php } ?>
</main>