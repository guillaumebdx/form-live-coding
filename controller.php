<?php

$titleError     = '';
$typeError      = '';
$toolError      = '';
$nbError        = 0;
$successMessage = '';
$title          = '';
$type           = '';
$redirect       = 'index.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if (empty($_POST['title'])) {
        $nbError++;
        $titleError = 'Merci de remplir le titre';
    } else {
        $title = $_POST['title'];
    }
    if (!isset($_POST['type'])) {
        $nbError++;
        $typeError = 'Merci de choisir un type de plat';
    } else {
        $type = $_POST['type'];
    }
    if (empty($_POST['tool'])) {
        $nbError++;
        $toolError = 'Merci de choisir un ustensile';
    }
    if ($nbError === 0) {
        $redirect       = 'thanks.php';
        $successMessage = 'Formulaire soumis';
    }

    header('Location: ' . $redirect . '?title=' . $title);


}


