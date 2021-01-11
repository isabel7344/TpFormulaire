<?php

require_once 'indexController.php';

?>

<!doctype html>
<html lang="fr">

<head>
    <title>TP - Formulaire</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div class="container justify-content-center bg-primary rounded person-shadow mt-2">

        <h1 class="text-center"> Formulaire d'inscription</h1>
        <h2 class="text-center text-uppercase"> Veuillez remplir le formulaire !</h2>
    </div>

    <div class="container d-flex justify-content-center bg-info rounded person-shadow mt-4 mb-2 ">
        <form action="index.php" method="post">
            <div class=" mb-5 mt-5">
                <label class="col-4" for="lastName">Nom</label>
                <input type="text" id="lastName" name="lastName"
                    value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>"
                    placeholder="Mounivongs">
            </div>
            <p class="displayMessage">
                <?= isset($messageError['lastName']) ? $messageError['lastName'] : '' ?><?= isset($messageSuccess['lastName']) ? $messageSuccess['lastName'] : '' ?>
            </p>

            <div class=" mb-5 mt-5">
                <label class="col-4" for="firstName">Prénom</label>
                <input type="text" id="firstName" name="firstName"
                    value="<?= (isset($_POST['firstName'])) ? $_POST['firstName'] : '' ?>"
                    placeholder="Anousone">
                <p class="displayMessage">
                    <?= (isset($messageError['firstName'])) ? $messageError['firstName'] : '' ?>
                </p>


                <div class=" mb-5 mt-5">
                    <label class="col-4" for="birthDate">Date de naissance</label>
                    <input type="text" id="birthDate" name="birthDate"
                        value="<?= (isset($_POST['birthDate'])) ? $_POST['birthDate'] : '' ?>">
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['birthDate'])) ? $messageError['birthDate'] : '' ?>
                </p>

                <div class=" mb-5 mt-5">
                    <label class="col-4" for="birthCountry">Pays de naissance</label>
                    <input type="text" id="birthCountry" name="birthCountry"
                        value="<?= (isset($_POST['birthCountry'])) ? $_POST['birthCountry'] : '' ?>"
                        placeholder="France">
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['birthCountry'])) ? $messageError['birthCountry'] : '' ?>
                </p>

                <div class=" mb-5 mt-5">
                    <label class="col-4" for="nationality">Nationalité</label>
                    <input type="text" id="nationality" name="nationality"
                        value="<?= (isset($_POST['nationality'])) ? $_POST['nationality'] : '' ?>"
                        placeholder="Française">
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['nationality'])) ? $messageError['nationality'] : '' ?>
                </p>

                <div class=" mb-5 mt-5">
                    <label class="col-4" for="adress">Adresse</label>
                    <input type="text" id="adress" name="adress"
                        value="<?= (isset($_POST['adress'])) ? $_POST['adress'] : '' ?>"
                        placeholder="01 rue blablabla">
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['adress'])) ? $messageError['adress'] : '' ?>
                </p>

                <div class="mb-5">
                    <label class="col-4" for="mail">Adresse mail</label>
                    <input type="email" id="mail" name="mail"
                        value="<?= (isset($_POST['mail'])) ? $_POST['mail'] : '' ?>"
                        placeholder="exemple@gmail.com">
                </div>

                <p class="displayMessage">
                    <?= (isset($messageError['mail'])) ? $messageError['mail'] : '' ?>
                </p>

                <div class="mb-5">
                    <label class="col-4" for="phoneNumber">Numéro de téléphone</label>
                    <input type="text" id="phoneNumber" name="phoneNumber"
                        value="<?= (isset($_POST[''])) ? $_POST['phoneNumber'] : '' ?>"
                        placeholder="06.01.23.45.67">
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['phoneNumber'])) ? $messageError['phoneNumber'] : '' ?>
                </p>


                <div class="mb-5">
                    <label class="col-4" for="diploma">DIPLOMES</label>
                    <select name="degree" id="degree">
                        <option value="">Choisir</option>
                        <option value="1" <?= isset($_POST['degree']) && $_POST['degree'] == 1 ? 'selected' : '' ?>>Sans
                            diplôme</option>
                        <option value="2" <?= isset($_POST['degree']) && $_POST['degree'] == 2 ? 'selected' : '' ?>>Bac
                        </option>
                        <option value="3" <?= isset($_POST['degree']) && $_POST['degree'] == 3 ? 'selected' : '' ?>>Bac+2
                        </option>
                        <option value="4" <?= isset($_POST['degree']) && $_POST['degree'] == 4 ? 'selected' : '' ?>>Bac+3
                            ou supérieur</option>
                    </select>
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['degree'])) ? $messageError['degree'] : '' ?>
                </p>

                <div class="mb-5">
                    <label class="col-4" for="poleEmploi">Numéro pôle emploi</label>
                    <input type="text" id="poleEmploi" name="poleEmploi"
                        value="<?= (isset($_POST['poleEmploi'])) ? $_POST['poleEmploi'] : '' ?>"
                        placeholder="1234567A">
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['poleEmploi'])) ? $messageError['poleEmploi'] : '' ?>
                </p>

                <div class="mb-5">
                    <label class="col-4" for="badgeNumber">Nombre de badge</label>
                    <input type="number" id="badgeNumber" name="badgeNumber"
                        value="<?= (isset($_POST['badgeNumber'])) ? $_POST['badgeNumber'] : '' ?>"
                        placeholder="00">
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['badgeNumber'])) ? $messageError['badgeNumber'] : '' ?>
                </p>

                <div class="mb-5">
                    <label class="col-4" for="codeAcademy">Liens codeacademy</label>
                    <input type="text" id="codeAcademy" name="codeAcademy"
                        value="<?= (isset($_POST['codeAcademy'])) ? $_POST['codeAcademy'] : '' ?>"
                        placeholder="https://votre-lien.fr">
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['codeAcademy'])) ? $messageError['codeAcademy'] : '' ?>
                </p>

                <div class="mb-5">
                    <label class="col-4" for="superHero">Si vous étiez un super héros/une super <br>héroïne, qui
                        seriez-vous
                        et
                        pourquoi ?</label>
                    <textarea class="col-12 p-4" type="text" id="superHero"
                        name="superHero"><?= (isset($_POST['superHero'])) ? $_POST['superHero'] : '' ?></textarea>
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['superHero'])) ? $messageError['superHero'] : '' ?>
                </p>

                <div class="mb-5">
                    <label for="hackStory">Racontez-nous un de vos "hacks" (pas <br>forcément technique ou
                        informatique)</label>
                    <textarea class="col-12 p-4" type="text" id="hackStory"
                        name="hackStory"><?= (isset($_POST['hackStory'])) ? $_POST['hackStory'] : '' ?></textarea>
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['hackStory'])) ? $messageError['hackStory'] : '' ?>
                </p>

                <div class="mb-5">
                    <label for="experience">Avez vous déjà eu une expérience avec la <br>programmation et/ou
                        l'informatique avant <br>de remplir ce formulaire ?</label>
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['superHero'])) ? $messageError['superHero'] : '' ?>
                </p>
                <div class="mb-5">
                    <input class="optionRadio" type="radio" id="experience" name="experience" value="Oui" <?= isset($_POST['experience']) && $_POST['experience'] == 'Oui' ? 'checked' : '' ?>></input>
                    <label class="alignRadio" for="experience">Oui</label>

                    <input class="optionRadio" type="radio" id="experience" name="experience" value="Non" <?= isset($_POST['experience']) && $_POST['experience'] == 'Non' ? 'checked' : '' ?>></input>
                    <label class="alignRadio" for="experience">Non</label>
                </div>
                <p class="displayMessage">
                    <?= (isset($messageError['experience'])) ? $messageError['experience'] : '' ?>
                </p>
                <input class="btnColor mb-5" name="submit" type="submit" value="Envoyer">
        </form>
    </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
</body>

</html>