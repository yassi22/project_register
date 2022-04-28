<?php
require_once 'backend/autoloader.php';

if (isset($_POST['addProject'])) {
    $feedback =  $projectIns->addProject($_POST['projectnaam'], $_POST['datum'], $_POST['websitelink'], $_POST['omschrijving'], $_POST['klantnaam']);
    if ($feedback === true) {

        echo "Het aanmaken van een project is gelukt";
    } else {
        echo $feedback;
    }
}



if (isset($_POST['deleteProject'])) {
    $feedback =  $projectIns->deleteProject($_GET['id']);

    if ($feedback === true) {
        echo "Het project is verwijderd";
        header("refresh:1.5;url=overzicht-projecten.php");
        exit;
    } else {
        echo $feedback;
    }
}
