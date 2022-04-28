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
