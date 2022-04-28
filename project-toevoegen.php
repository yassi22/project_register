<?php
require_once 'backend/autoloader.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project register - Project toevoegen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="JS/preview.image.min.js"></script>
    <link rel="stylesheet" href="style-test-2.css">

    <!-- Load Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <script>
        $(function() {
            $("input[name=file1]").previewimage({
                div: ".preview",
                imgwidth: 340,
                imgheight: 180
            });

        });
    </script>



</head>

<body>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-4" id="exampleModalLabel">Project verwijderen</h2>
                    <button type="button" class="btn-close  " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mb-0">Weet je zeker dat je het project wilt verwijderen?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary modal-knop-ja">Ja</button>
                    <button type="button" class="btn btn-secondary modal-knop-nee" data-bs-dismiss="modal">Nee</button>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm shadow  bg-white rounded ">
        <div class="container-fluid">
            <a href="overzicht-pagina.php" class="d-none d-md-block">
                <img alt="logo" class="logo" src="img/logo-activo.jpg">
            </a>

            <div class="d-flex justify-content-between d-none d-md-block ">
                <a href="overzicht-projecten.php" class="btn knop justify-content-end   " role="button">Terug naar
                    overzicht</a>
                <a href="aanpas-pagina.php" class="btn   justify-content-end    knop-aanpassen" role="button">Project
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
                <a href="overzicht-pagina.php" class="btn btn-lg knop d-flex justify-content-center" role="button">Terug
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
            <section class=" d-flex justify-content-center mx-auto mt-4">
                <h2>Project toevoegen</h2>
            </section>

            <div class="jumbotron shadow mb-5 bg-white rounded  mt-4  jumbo-grote">
                <div>
                    <div class="row g-0 details">
                        <div class="col col-12 py-4 px-4">
                            <?php require_once 'handler/projectVerwerk.php'; ?>
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="projectnaam" id="projectnaam" class="form-label"> Projectnaam </label>
                                    <input type="text" class="form-control" name="projectnaam" required>
                                </div>
                                <div class="mb-3">
                                    <label for="datum" id="datum" class="form-label"> Projectdatum</label>
                                    <input type="date" class="form-control" name="datum" required>
                                </div>
                                <div class="mb-3">
                                    <label for="websitelink" id="websitelink" class="form-label"> WebsiteLink </label>
                                    <input type="text" class="form-control" name="websitelink" required>
                                </div>
                                <div class="mb-3">
                                    <label for="omschrijving" id="omschrijving" class="form-label"> Omschrijving </label>
                                    <input type="text" class="form-control" name="omschrijving" required>
                                </div>
                                <div class="mb-3">
                                    <label for="klantnaam" id="klantnaam" class="form-label"> Klantnaam </label>
                                    <input type="text" class="form-control" name="klantnaam" required>
                                </div>
                                <button type="submit" name="addProject" value="Add project" class="btn btn-primary">Toevoegen</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
</body>

</html>