<?php
require_once 'backend/autoloader.php';


/* 
      Hieronder worden projecten op gehaald doormiddel van het project id
      */

$projects = $projectIns->getProject($_GET['id']);


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
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Fancy box usage link   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    <!-- Fancy box usage script   -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
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
                            <button type="button" class="btn-close  " data-bs-dismiss="modal"
                                aria-label="Close"></button>
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
                        <div class="col-6 d-flex justify-content-end  ">
                            <button type="button" class="btn btn-primary modal-knop-ja">Ja</button>
                        </div>
                        <div class="col-6 d-flex justify-content-start  ">
                            <button type="button" class="btn btn-secondary modal-knop-nee"
                                data-bs-dismiss="modal">Nee</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



    <nav class="navbar navbar-expand-sm shadow p-3 mb-5 bg-white rounded ">
        <div class="container-fluid">
            <a href="overzicht-pagina.php">
                <img alt="logo" class="logo" src="img/logo-activo.jpg">
            </a>

            <div class="d-flex justify-content-between">
                <a href="overzicht-pagina.php" class="btn btn-lg knop d-flex justify-content-end" role="button">Terug
                    naar
                    overzicht</a>
                <a href="aanpas-pagina.php" class="btn btn-lg d-flex justify-content-end knop-aanpassen"
                    role="button">Project
                    aanpassen</a>
                <button class="btn btn-lg d-flex justify-content-end knop-verwijder d-none d-md-block"
                    data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Project verwijderen</button>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="justify-content-center">
            <section class=" d-flex  justify-content-center mx-auto">
                <h2>Project details</h2>
            </section>

            <div class="jumbotron shadow mb-5 bg-white rounded  mt-4  jumbotron-detail">
                <div>
                    <div class="row g-0 details">
                        <div class="col col-6 py-4 px-5">
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
                                    <a href="https://embracebleckmann.com/" target="_blank">
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
                            <div class=" d-flex p-2">

                                <div class="col-sm-4 m-2 ml-2">
                                    <a data-fancybox="gallery" data-src="img/H-K-1.png"
                                        data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                                        <img src="img/H-K-1.png" class="rounded plaatje-grote" />
                                    </a>
                                </div>

                                <div class="col-sm-4 m-2">
                                    <a data-fancybox="gallery" data-src="img/H-K-2.png">
                                        <img src="img/H-K-2.png" class="rounded plaatje-grote" />
                                    </a>
                                </div>

                                <div class="col-sm-4 m-2">
                                    <a data-fancybox="gallery" data-src="img/H-K-3.png">
                                        <img src="img/H-K-3.png" class="rounded plaatje-grote" />
                                    </a>
                                </div>

                            </div>


                            <div class="mb-2">
                                <a class="btn mt-2  bnt-primary download-knop" role="button" href="#">Download
                                    schermafbeelding</a>
                            </div>


                            <h4>Diensten</h4>
                            <ul class="details-list mb-4">
                                <li> Online betaalmodule </li>
                                <li> Evenement platform </li>
                                <li>Online betaalmodule</li>
                                <li> Toegangscontrole </li>
                                <li> Badges </li>
                            </ul>

                            <h4>Categorie</h4>
                            <p> Congres Online Platform </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>