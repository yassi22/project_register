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


 
        // File upload configuration  
        
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
                        $insertValuesSQL .= "('" . $fileName . "'";
                    } else {
                        $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                    }
                } else {
                    $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
                }
            }

            // Error message 
            $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
            $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
            $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;

        if (!empty($insertValuesSQL)) {
            $insertValuesSQL = trim($insertValuesSQL, ',');
            // Insert image file name into database  
            $insert = $db->query("INSERT INTO schermafbeeldingen (naam,project_id) VALUES $insertValuesSQL, $project_id");
            if ($insert) {
                $statusMsg = "Files are uploaded successfully." . $errorMsg;
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = "Upload failed! " . $errorMsg;
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }  
   

    echo "Het project is aangemaakt";
} 
 
    //header("refresh:1.5;url=../overzicht-projecten.php");

    //exit; 

    // id van project v
    // post heeft de dienst ids beschikbaar v
    // proj diensten class - functie toevoegen aan db
 

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
