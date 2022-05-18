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

    $targetDir = "../img/";
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    $fileNames = array_filter($_FILES['files']['name']);
    if (!empty($fileNames)) {
        foreach ($_FILES['files']['name'] as $key => $val) {
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server 
                if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                    // Image db insert sql 
                    $insertValuesSQL .= "('" . $fileName . "', NOW()),";
                } else {
                    $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                }
            } else {
                $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
            }
        } 
         

    echo "Het project is aangemaakt";

    //header("refresh:1.5;url=../overzicht-projecten.php");

    //exit; 

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
