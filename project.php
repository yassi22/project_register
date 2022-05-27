<?php
require_once 'backend/autoloader.php';


/* 
      Hieronder worden projecten op gehaald doormiddel van het project id
      */

$projects = $projectIns->getProject($_GET['id']);

$afbeeldingen = $schermafbeeldingenIns->getSchermafbeeldigen($_GET['id']);

$diensten = $dienstenIns->getDiensten_Project($_GET['id']);

$categorieen = $categorieIns->getCategorie_projecten($_GET['id']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project register - Project details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <!-- Load Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Fancy box usage link   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    <!-- Fancy box usage script   -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


</head>

<body>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centerd ">
            <div class="modal-content border-0 rounded shadow ">


                <div class="container-lg">
                    <div class="d-flex justify-content-center">
                        <div class="modal-header mb-3 ">
                            <h4 class="modal-title text-center" id="exampleModalLabel">Project verwijderen </h4>
                        </div>
                        <div class="d-flex justify-content-end ml-4 mt-1">
                            <button type="button" class="btn-close  " data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>


                <div class="container ">
                    <div class="row mb-3">
                        <div class="text-center">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Weet je zeker dat je het project wilt
                                    verwijderen? </h5>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <form method="POST" action="handler/projectVerwerk.php">
                                <button type="submit" name="deleteProject" value="Delete project" class="btn btn-primary modal-knop-ja">Ja</button>
                            </form>
                        </div>
                        <div class="col-6 d-flex justify-content-start  ">
                            <button type="button" class="btn btn-secondary modal-knop-nee" data-bs-dismiss="modal">Nee</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-sm shadow  bg-white rounded mb-4 ">
        <div class="container-fluid">
            <a href="overzicht-projecten.php" class="d-none d-md-block">
                <img alt="logo" class="logo" src="img/logo-activo.jpg">
            </a>

            <div class="d-flex justify-content-between d-none d-md-block ">
                <a href="overzicht-projecten.php" class="btn knop justify-content-end   " role="button">Terug naar
                    overzicht</a>
                <a href="project-aanpassen.php?id=<?php echo $projects->project_id ?>" class="btn   justify-content-end    knop-aanpassen" role="button">Project
                    aanpassen</a>
                <button class="btn  x justify-content-end knop-verwijder  " data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Project verwijderen</button>
            </div>

            <button class="btn btn-link  d-sm-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <svg width="51" height="42" viewBox="0 0 51 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="51" height="9.33333" rx="4.66667" fill="#4B96D0" />
                    <rect y="32.6667" width="51" height="9.33333" rx="4.66667" fill="#057494" />
                    <rect y="16.3333" width="51" height="9.33333" rx="4.66667" fill="#F48424" />
                </svg>
            </button>

        </div>
    </nav>



    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <img alt="logo" class="logo" src="img/logo-activo.jpg">
            </h5>

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">

            <div class="d-flex flex-column">
                <a href="overzicht-projecten.php" class="btn btn-lg knop d-flex justify-content-center" role="button">Terug
                    naar
                    overzicht</a>
                <a href="aanpas-pagina.php" class="btn btn-lg d-flex justify-content-center knop-aanpassen" role="button">Project
                    aanpassen</a>
                <button class="btn btn-lg d-flex justify-content-center knop-verwijder  " data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Project verwijderen</button>
            </div>


        </div>
    </div>



    <div class="container-fluid">
        <div class="justify-content-center">
            <section class=" d-flex  justify-content-center mx-auto">
                <h2>Project details</h2>
            </section>

            <div class="jumbotron shadow mb-5 bg-white rounded  mt-4  jumbotron-detail">
                <div>
                    <div class="row g-0 details">
                        <div class="col col-6   py-4 px-5">
                            <ul class="ps-0">
                                <li>
                                    <p class="text-secondary mb-0">Project naam</p>
                                    <p><?php echo $projects->projectnaam ?></p>
                                </li>
                                <li>
                                    <p class="text-secondary mb-0">Klantnaam</p>
                                    <p><?php echo $projects->klant_id ?></p>
                                </li>
                                <li>
                                    <p class="text-secondary mb-0">Project datum</p>
                                    <p><?php echo $projects->datum ?></p>
                                </li>
                                <li>
                                    <p class="text-secondary mb-0">Website link</p>
                                    <a href=<?php echo $projects->website_link ?> target="_blank">
                                        <p><?php echo $projects->website_link ?></p>
                                    </a>
                                </li>
                                <li>
                                    <p class="text-secondary mb-0">Omschrijving</p>
                                    <p> <?php echo $projects->omschrijving ?></p>
                                </li>
                                <li>
                                    <p class="text-secondary mb-0">Views</p>
                                    <p> <?php echo $projects->views ?></p>
                                </li>
                            </ul>
                        </div>

                        <div class="col col-6 py-4 px-5">
                            <?php foreach ($afbeeldingen as $afbeelding) { ?>

                                <div class=" d-flex p-2">

                                    <div class="col-sm-4 m-2 ml-2"> 
                                        <a data-fancybox="gallery" data-src='img/<?php echo $afbeelding->naam ?>' data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                                            <img src='img/<?php echo $afbeelding->naam ?>' class="rounded plaatje-grote" />
                                    </div>


                                    <div class="col-sm-4 m-2 ml-2">
                                        <a data-fancybox="gallery" data-src='img/<?php echo $afbeelding->naam ?>' data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                                            <img src='img/<?php echo $afbeelding->naam ?>' class="rounded plaatje-grote" />
                                    </div>


                                    <div class="col-sm-4 m-2 ml-2">
                                        <a data-fancybox="gallery" data-src='img/<?php echo $afbeelding->naam ?>' data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                                            <img src='img/<?php echo $afbeelding->naam ?>' class="rounded plaatje-grote" />
                                    </div>


                                </div>

                            <?php } ?>


                            <div class="mb-2">
                                <a class="btn mt-2  bnt-primary download-knop" role="button" href="#">Download
                                    schermafbeelding</a>
                            </div>


                            <h4>Diensten</h4>
                            <ul class="details-list mb-4">
                                <?php foreach ($diensten as $dienst) { ?>

                                    <li> <?php echo $dienst->diensten_naam; ?> </li>

                                <?php } ?>
                            </ul>

                            <h4>Categorie</h4>
                            <ul class="details-list mb-4">
                                <?php foreach ($categorieen  as $categorie) { ?>

                                    <li> <?php echo $categorie->categorie_naam; ?> </li>

                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>