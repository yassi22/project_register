<?php
require_once '../backend/autoloader.php';

if (isset($_POST['addProject'])) {

    $project_id =  $projectIns->addProject($_POST['projectnaam'], $_POST['datum'], $_POST['websitelink'], $_POST['omschrijving'], $_POST['klantnaam']);

    $dienstIds = ($_POST['diensten']);

    foreach ($dienstIds as $dienstId) {
        $projecten_dienstenIns->ADDid($project_id, $dienstId);
    }


    $categorieIds = ($_POST['categorie']);

    foreach ($categorieIds as $categorieId) {
        $categorie_projcetenIns->ADDcategorie($project_id, $categorieId);
    }

    //header("refresh:1.5;url=../overzicht-projecten.php");
    //echo "Het project is aangemaakt";
    exit; 

    // id van project v
    // post heeft de dienst ids beschikbaar v
    // proj diensten class - functie toevoegen aan db

}
 

if (isset($_POST['deleteProject'])) {
    $feedback =  $projectIns->deleteProject($_GET['id']);
    if ($feedback === true) {
        header("refresh:1.5;url=overzicht-projecten.php");
        echo "Het project is verwijderd";
        exit;
    } else {
        echo $feedback;
    }
}
