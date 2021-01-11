<?php

$messageError = [];
$messageSuccess = [];

$regexName = '/^\D{2,19}$/';
$dateValid = '/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/';
$poleEmploi = '/^([0-9]{7}+[A-Z])$/';
$regexNumber = '/^[0-9]+$/';
$adressValid = '/([1-9][0-9]{0,2}(?:\s*[A-Z])?)\b/';
//prend 0 ou +33 ou 0033 puis un chiffre de 1à9 ensuite 8 chiffres
$phoneNumber = '/^(0|\\+33|0033)[1-9][0-9]{8}$/';
$mail = '/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/';

$degreesArray = [
    1 => 'Sans diplôme',
    2 => 'Bac',
    3 => 'Bac +2',
    4 => 'Bac +3 ou sup'
];

var_dump($_POST);

if (isset($_POST['submit'])) {
    if (isset($_POST['lastName'])) {
        if (empty($_POST['lastName'])) {
            $messageError['lastName'] = 'Le champs est vide';
        } elseif (!preg_match($regexName, $_POST['lastName'])) {
            $messageError['lastName'] = 'Le nom n\'est pas valide';
        } elseif (strlen($_POST['lastName']) < 2 || strlen($_POST['lastName']) > 20) {
            $messageError['lastName'] = 'Le nom doit contenir 2 à 20 caractères';
        } else {
            $secureLastName = htmlspecialchars($_POST['lastName']);
            $messageSuccess['lastName'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['firstName'])) {
        if (empty($_POST['firstName'])) {
            $messageError['firstName'] = 'Le champs est vide';
        } elseif (!preg_match($regexName, $_POST['firstName'])) {
            $messageError['firstName'] = 'Le nom n\'est pas valide';
        } elseif (strlen($_POST['firstName']) < 2 || strlen($_POST['firstName']) > 20) {
            $messageError['firstName'] = 'Le nom doit contenir de 2 à 20 caractères';
        } else {
            $secureFirstName = htmlspecialchars($_POST['firstName']);
            $messageError['firstName'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['birthDate'])) {
        // Le format renvoyé par défaut est yyyy-mm-dd
        // Je convertis le $_POST birthDate en timestamp pour ensuite pouvoir lui attribuer le bon format : dd/mm/yyyy
        $birthDate = strtotime($_POST['birthDate']);
        $dateCorrectFormat = date('d/m/Y', $birthDate);

        if (empty($_POST['birthDate'])) {
            $messageError['birthDate'] = 'Le champs est vide';
        } elseif (!preg_match($dateValid, $dateCorrectFormat)) {
            $messageError['birthDate'] = 'Le format de date n\'est pas valide';
        } else {
            $secureBirthDate = htmlspecialchars($dateCorrectFormat);
            $messageError['birthDate'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['birthCountry'])) {
        if (empty($_POST['birthCountry'])) {
            $messageError['birthCountry'] = 'Le champs est vide';
        } elseif (!preg_match($regexName, $_POST['birthCountry'])) {
            $messageError['birthCountry'] = 'Le pays de naissance n\'est pas valide';
        } elseif (strlen($_POST['birthCountry']) < 2 || strlen($_POST['birthCountry']) > 40) {
            $messageError['birthCountry'] = 'Le pays doit contenir de 2 à 40 caractères';
        } else {
            $secureBirthCountry = htmlspecialchars($_POST['birthCountry']);
            $messageError['birthCountry'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['nationality'])) {
        if (empty($_POST['nationality'])) {
            $messageError['nationality'] = 'Le champs est vide';
        } elseif (!preg_match($regexName, $_POST['nationality'])) {
            $messageError['nationality'] = 'Le pays de naissance n\'est pas valide';
        } elseif (strlen($_POST['nationality']) < 2 || strlen($_POST['nationality']) > 40) {
            $messageError['nationality'] = 'Le pays doit contenir de 2 à 40 caractères';
        } else {
            $secureNationality = htmlspecialchars($_POST['nationality']);
            $messageError['nationality'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['adress'])) {
        if (empty($_POST['adress'])) {
            $messageError['adress'] = 'Le champs est vide';
        } elseif (!preg_match($adressValid, $_POST['adress'])) {
            $messageError['adress'] = 'L\'adresse n\'est pas valide';
        } elseif (strlen($_POST['adress']) < 2 || strlen($_POST['adress']) > 50) {
            $messageError['adress'] = 'L\'adresse doit contenir de 2 à 50 caractères';
        } else {
            $secureAdress = htmlspecialchars($_POST['adress']);
            $messageError['adress'] = '<i class="fas fa-check formValid"></i>';
        }
    }
    if (isset($_POST['mail'])) {
        $email = $_POST['mail'];
        if (empty($_POST['mail'])) {
            $messageError['mail'] = 'Le champs est vide';
        } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $secureMail = $_POST['mail'];
            $messageError['mail'] = '<i class="fas fa-check formValid"></i>';
        } else {
            $messageError['mail'] = 'L\'email n\'est pas valide';
        }
    }

    if (isset($_POST['phoneNumber'])) {
        if (empty($_POST['phoneNumber'])) {
            $messageError['phoneNumber'] = 'Le champs est vide';
        } elseif (!preg_match($phoneNumber, $_POST['phoneNumber'])) {
            $messageError['phoneNumber'] = 'Le numéro de téléphone n\'est pas valide';
        } else {
            $securePhoneNumber = htmlspecialchars($_POST['phoneNumber']);
            $messageError['phoneNumber'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    // select
    if (!array_key_exists($_POST['degree'], $degreesArray)) {
        $messageError['degree'] = 'Veuillez sélectionner un choix';
    } else {
        $messageError['degree'] = '<i class="fas fa-check formValid"></i>';
        $secureDegree = $_POST['degree'];
    }
}

    if (isset($_POST['poleEmploi'])) {
        if (empty($_POST['poleEmploi'])) {
            $messageError['poleEmploi'] = 'Le champs est vide';
        } elseif (!preg_match($poleEmploi, $_POST['poleEmploi'])) {
            $messageError['poleEmploi'] = 'Le numéro de pôle emploi n\'est pas valide';
        } else {
            $securePoleEmploi = htmlspecialchars($_POST['poleEmploi']);
            $messageError['poleEmploi'] = '<i class="fas fa-check formValid"></i>';
        }
    }
    if (isset($_POST['badgeNumber'])) {
        if (empty($_POST['badgeNumber'])) {
            $messageError['badgeNumber'] = 'Le champs est vide';
        } elseif (!preg_match($regexNumber, $_POST['badgeNumber'])) {
            $messageError['badgeNumber'] = 'Le numéro n\'est pas valide';
        } else {
            $securebadgeNumber = htmlspecialchars($_POST['badgeNumber']);
            $messageError['badgeNumber'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['codeAcademy'])) {
        $url = $_POST['codeAcademy'];
        if (empty($_POST['codeAcademy'])) {
            $messageError['codeAcademy'] = 'Le champs est vide';
        } elseif (filter_var($url, FILTER_VALIDATE_URL)) {
            $secureCodeAcademy = $_POST['codeAcademy'];
            $messageError['codeAcademy'] = '<i class="fas fa-check formValid"></i>';
        } else {
            $messageError['codeAcademy'] = 'Le lien n\'est pas valide';
        }
    }

    if (isset($_POST['superHero'])) {
        if (empty($_POST['superHero'])) {
            $messageError['superHero'] = 'Le champs est vide';
        } else {
            $secureSuperHero = htmlspecialchars($_POST['superHero']);
            $messageError['superHero'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['hackStory'])) {
        if (empty($_POST['hackStory'])) {
            $messageError['hackStory'] = 'Le champs est vide';
        } else {
            $secureHackStory = htmlspecialchars($_POST['hackStory']);
            $messageError['hackStory'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    // Radio
    if (!array_key_exists('experience', $_POST)) {
        $messageError['experience'] = 'Veuillez faire un choix';
    }

    if (count($messageError) == 0) {
        $secureLastName = htmlspecialchars($_POST['lastName']);
        $secureFirstName = htmlspecialchars($_POST['firstName']);
        $secureBirthDate = htmlspecialchars($_POST['birthDate']);
        $secureBirthCountry = htmlspecialchars($_POST['birthCountry']);
        $secureNationality = htmlspecialchars($_POST['nationality']);
        $secureAdress = htmlspecialchars($_POST['adress']);
        $secureMail = htmlspecialchars($_POST['mail']);
        $securePhoneNumber = htmlspecialchars($_POST['phoneNumber']);
        $secureDegree = htmlspecialchars($_POST['degree']);
        $securePoleEmploi = htmlspecialchars($_POST['poleEmploi']);
        $securebadgeNumber = htmlspecialchars($_POST['badgeNumber']);
        $secureCodeAcademy = htmlspecialchars($_POST['codeAcademy']);
        $secureSuperHero = htmlspecialchars($_POST['superHero']);
        $secureHackStory = htmlspecialchars($_POST['hackStory']);
        $secureExperience = htmlspecialchars($_POST['experience']);
    }
