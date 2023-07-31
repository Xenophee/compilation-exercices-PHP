<main>

    <!-- ==================================================================================================================================== -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
    <!-- PARTIE ÉNONCÉ DE L'EXERCICE -->

    <section>
        <div class="container-fluid main-container shadow-lg py-3 py-md-5 px-md-5 mb-5">
            <h1 class="text-center shadow py-3 mb-5">Calendrier</h1>

            <div class="row justify-content-around pt-md-5">
                <!-- =============================================================================================================== -->
                <!-- Exercice 1 -->
                <div class="col-12 col-md-10 col-xl-8 col-xxl-6 exo mx-md-3 mx-xxl-5 my-2 my-md-5">
                    <article class="d-flex flex-column justify-content-between py-3 px-1 py-md-4 px-md-4">
                        <div class="text">
                            <p class="mb-5">Coder un calendrier en PHP. Pour réussir l'exercice, il faut récupérer :</p>
                            <ul>
                                <li class="mb-2">Tous les mois de l'année.</li>
                                <li class="mb-2">Le nombre de jour dans un mois.</li>
                                <li class="mb-2">Le premier jour du mois.</li>
                                <li class="mb-2">Le dernier jour du mois.</li>
                                <li class="mb-2">La date du jour.</li>
                            </ul>
                        </div>

                    </article>
                </div>
            </div>

            <div class="row pt-md-4">
                <h2 class="text-center">Voir le code</h2>
                <div class="col d-flex flex-wrap justify-content-around showCodeDiv py-4">

                    <dialog><img src="" class="img-fluid modal-img" alt="Code du formulaire"></dialog>

                    <button type="button" class="btn showCode shadow px-5 py-2 my-2 mx-2">A venir</button>
                    <button type="button" class="btn showCode shadow px-5 py-2 my-2 mx-2">A venir</button>
                    <button type="button" class="btn showCode shadow px-5 py-2 my-2 mx-2">A venir</button>
                </div>
            </div>
        </div>
    </section>



    <!-- ==================================================================================================================================== -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
    <!-- PARTIE AFFICHAGE DU CALENDRIER -->

    <section>
        <div class="container-fluid main-container d-flex align-items-center shadow-lg py-3 py-md-5 px-md-5 mb-5">
            <div class="row justify-content-center align-items-center w-100">
                <div class="col-12 col-xl-7">
                    <div class="shadow-lg" id="calendar">

                        <a href="../../controllers/calendar_controller.php?month=<?= $previousMonth ?>&year=<?= $previousYear ?>" class="previous d-flex justify-content-center align-items-center"> &lt; </a>
                        <div class="monthYear d-flex align-items-center">
                            <form method="get" class="d-flex justify-content-evenly w-100" id="formDate">

                                <select name="month" id="month" class="form-select">
                                    <?php
                                    // On boucle sur le tableau de mois
                                    foreach ($months as $key => $monthValue) {
                                        $keyMonth = $key + 1;
                                        // Ternaire permettant de savoir si il faut mettre l'attribut 'selected' ou non dans la balise 'option'
                                        $selected = ($keyMonth == $month) ? 'selected' : '';
                                        echo "<option value=\"$keyMonth\" $selected>$monthValue</option>";
                                    }
                                    ?>
                                </select>

                                <select name="year" id="year" class="form-select">
                                    <?php
                                    // On boucle sur les années comprise entre année-5 et année+5
                                    for ($yearInSelect = (date('Y') - 5); $yearInSelect <= date('Y') + 5; $yearInSelect++) {
                                        // Ternaire permettant de savoir si il faut mettre l'attribut 'selected' ou non dans la balise 'option'
                                        $selected = ($yearInSelect == $year) ? 'selected' : '';
                                        echo "<option $selected>$yearInSelect</option>";
                                    } ?>
                                </select>

                            </form>

                        </div>
                        <a href="../../controllers/calendar_controller.php?month=<?= $nextMonth ?>&year=<?= $nextYear ?>" class="next d-flex justify-content-center align-items-center"> &gt; </a>


                        <div class="dayOfWeek d-flex justify-content-center align-items-center">L</div>
                        <div class="dayOfWeek d-flex justify-content-center align-items-center">M</div>
                        <div class="dayOfWeek d-flex justify-content-center align-items-center">M</div>
                        <div class="dayOfWeek d-flex justify-content-center align-items-center">J</div>
                        <div class="dayOfWeek d-flex justify-content-center align-items-center">V</div>
                        <div class="dayOfWeek d-flex justify-content-center align-items-center">S</div>
                        <div class="dayOfWeek d-flex justify-content-center align-items-center">D</div>


                        <?php
                        // Création des premières div sans valeur
                        for ($i = 1; $i < $firstDayOfMonth; $i++) { ?>
                            <div class="day d-flex justify-content-center align-items-center"></div>
                        <?php } ?>

                        <?php
                        // Création des div contenant les jours du mois
                        for ($i = 1; $i <= $nbDaysOfMonth; $i++) {

                            $currentDate = date('Y-m-d', mktime(0, 0, 0, $month, $i, $year)); //'2023-01-01';

                            // Condition pour savoir si il faut mettre en surbrillance le jour ou pas
                            $currentDay = ($currentDate == $today) ? 'currentDay' : ''; ?>
                            <div class="day d-flex justify-content-center align-items-center <?= $currentDay ?>"><?= $i ?></div>
                        <?php } ?>

                        <?php
                        // Création des dernières div sans valeur
                        for ($i = 1; $i <= (7 - $lastDayOfMonth); $i++) { ?>
                            <div class="day d-flex justify-content-center align-items-center"></div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ==================================================================================================================================== -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
    <!-- PARTIE AFFICHAGE DU CALENDRIER -->

    <!-- <section>
        <div class="container-fluid main-container shadow-lg py-3 py-md-5 px-md-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">

                </div>
            </div>
        </div>
    </section> -->


</main>