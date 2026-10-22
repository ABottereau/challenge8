<?php

function formVerification(): array {
    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] !=='POST') {
        $errors[] = "Erreur de methode";
    }
    if (empty($_POST['lastName'])) {
    $errors[] = "Remplir le nom";
    }
    if (empty($_POST['firstName'])) {
    $errors[] = "Remplir le prénom";
    }
    if (empty($_POST['email'])) {
    $errors[] = "Remplir l'email";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Mail incorrect";
    }
    if (empty($_POST['phone'])) {
    $errors[] = "Remplir le téléphone";
    }
    if (empty($_POST['message'])) {
    $errors[] = "Remplir le message";
    }
    return $errors;
}

function Verif() {
    if (count(formVerification()) > 0) {
        echo 'Informations manaquantes :<br>';
        foreach (formVerification() as $error) {
            echo $error . '<br>';
        }
    } else { 
        return "Merci " . $_POST['lastName'] . " " . $_POST['firstName'] . " de nous avoir contacté à propos de “" . $_POST['subject'] . "”.<br>Un de nos conseiller vous contactera soit à l’adresse " . $_POST['email'] . " ou par téléphone au " . $_POST['phone'] . " dans les plus brefs délais pour traiter votre demande :<br>" . $_POST['user_message'];
    }
}
echo Verif();
?>